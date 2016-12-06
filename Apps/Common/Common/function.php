<?php

function cli_echo($str = '')
{
  if(PHP_SAPI == 'cli') echo $str;
}

function cli_die($str = '')
{
  if(PHP_SAPI == 'cli') die($str);
}

function to_unixtime($tim = '')
{
  return is_numeric($tim) ? (int)$tim : strtotime($tim);
}

function to_datetime($tim = 0,$fmt = null)
{
  isset($fmt) || $fmt = 'Y-m-d H:i:s';
  return date($fmt,to_unixtime($tim));
}

// URL组装 不编码参数{}
function url_query($url = '',$vars = '',$suffix = '',$domain = false)
{
  $nec = false;
  if($url && preg_match('/^[^\?]*\?.*?\{[^}]+\}.*$/is',$url)) $nec = true;
  elseif(is_array($vars) || (is_string($vars) && preg_match('/^.*?\{[^}]+\}.*$/is',$url))) $nec = true;
  $tmp = U($url,$vars,$suffix,$domain);
  if($nec)
  {
    $tmp = preg_replace('/%7B/i','{',$tmp);
    $tmp = preg_replace('/%7D/i','}',$tmp);
  }
  return $tmp;
}

// 获取输入参数 默认$_REQUEST
function req($name,$default = '',$filter = null,$datas = null)
{
  if(!strpos($name,'.')) $name = 'request.'.$name;
  return I($name,$default,$filter,$datas);
}

// 字符串加密
function aes_encode_str($str,$key = false)
{
  if($key === false) $key = C('MCRYPT_AES_KEY');
  return aes_encode_cbc($str,$key);
}

// 字符串解密
function aes_decode_str($str,$key = false)
{
  if(strlen($str) < 24) return $str;
  if(!preg_match('/^[a-zA-Z0-9+\/=\s]+$/is',$str)) return $str;//验证base64
  if($key === false) $key = C('MCRYPT_AES_KEY');
  return aes_decode_cbc($str,$key);
}

// 批量解密 - 一维数组
function aes_decode_arr($fields,$arr = array(),$key = false)
{
  if(!$fields) return $arr;
  if(!is_array($arr)) return array();
  if($key === false) $key = C('MCRYPT_AES_KEY');
  $fields = is_array($fields) ? $fields : preg_split('/\s*,\s*/',$fields);
  foreach($fields as $f)
  {
    $arr[$f] = aes_decode_str($arr[$f],$key);
  }
  return $arr;
}

// 批量解密 - 二维数组
function aes_decode_all($fields,$arr = array(),$key = false)
{
  if(!$fields) return $arr;
  if(!is_array($arr)) return array();
  if($key === false) $key = C('MCRYPT_AES_KEY');
  $nar = array();
  foreach($arr as $k => $v)
  {
    $nar[$k] = aes_decode_arr($fields,$v,$key);
  }
  return $nar;
}

// AES-CBC 加密
function aes_encode_cbc($str,$key)
{
  $iv = substr(C('MCRYPT_AES_IV').'0000000000000000',0,16);//16
  return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128,$key,$str,MCRYPT_MODE_CBC,$iv));
}

// AES-CBC 解密
function aes_decode_cbc($str,$key)
{
  $iv = substr(C('MCRYPT_AES_IV').'0000000000000000',0,16);//16
  $tmp = mcrypt_decrypt(MCRYPT_RIJNDAEL_128,$key,base64_decode($str),MCRYPT_MODE_CBC,$iv);
  $tmp = rtrim($tmp,"\0");
  return $tmp;
}

if(!function_exists('boolval'))
{
  function boolval($var)
  {
    return !!$var;
  }
}

if(!function_exists('array_column'))
{
  function array_column($array,$column_name)
  {
    return array_map(function($element) use($column_name)
    {
      return $element[$column_name];
    },$array);
  }
}

function array_get($arr = [],$key = null)
{
  is_array($arr) || $arr = [];
  return $arr[$key];
}

function round_fee($fee = 0)
{
  return (int)((float)$fee * 100) / 100;
}

function alog($log = [],$typ = 'log')
{
  is_array($log) || $log = [$log];
  array_unshift($log,date('Y-m-d H:i:s'),time());
  $log = array_map(function($v,$k)
  {
    if(is_array($v) || is_object($v))
    {
      ob_start();
      print_r($v);
      $v = ob_get_contents();
      ob_end_clean();
    }
    return (is_numeric($k) ? '' : ($k.':')).$v;
  },$log ?: [],array_keys($log) ?: []);
  $fnm = C('LOG_PATH').DIRECTORY_SEPARATOR.$typ.'-'.date('Ymd').'.log';
  return @file_put_contents($fnm,implode('|',$log)."\n",FILE_APPEND);
}