<?php

function oss_img_srv($src = '',$ext = '')
{
  if($src)
  {
    $src = preg_replace('/@[\w.]*\s*$/i','',$src);
  }
  $src .= ($ext ? '@' : '').$ext;
  return $src;
}