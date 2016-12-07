<?php

use Illuminate\Database\Seeder;

/**
 * php artisan make:seeder ChuChaiTableSeeder
 * php artisan db:seed --class=ChuChaiTableSeeder
 */
class ChuChaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('model')->insert([
            'name'        => '美食',
            'create_time' => 1464862675,
        ]);

        $arr = array_map(function($v)
        {
            $row = array_combine(explode("\t",'id	sort	type	key	name	model_id	model_ids	attrs	remark	create_time	delete_time'),explode("\t",$v));
            //unset($row['id']);
            return $row;
        },explode("\n",trim('
1	10	number	score-flavour	口味	1	,1,2,5,7,	{"step":"0.1","min":"0","max":"10"}		1464873277	0
2	20	number	score-environment	环境	1	,1,2,3,4,5,6,7,	{"step":"0.1","min":"0","max":"10"}		1464938265	0
3	30	number	score-service	服务	1	,1,2,3,4,5,6,7,	{"step":"0.1","min":"0","max":"10"}		1464938374	0
4	40	bshours	bshours	营业时间	0	,1,2,3,4,5,6,7,			1464938471	0
7	70	text	feast-rate	宴请比例	0	,1,2,7,			1464938662	0
8	80	radio	cuisine	菜系	1	,1,7,	{"choices":"100 = 中餐\r\n115 = 本帮菜\r\n101 = 江浙菜\r\n102 = 川菜\r\n103 = 湘菜\r\n104 = 粤菜\r\n105 = 徽菜\r\n106 = 东北菜\r\n107 = 西北菜\r\n108 = 江西菜\r\n109 = 贵州菜\r\n110 = 新疆菜\r\n111 = 北京菜\r\n112 = 清真菜\r\n113 = 台湾菜\r\n114 = 云南菜\r\n200 = 西餐\r\n210 = 日本菜\r\n220 = 韩国料理\r\n230 = 东南亚菜\r\n300 = 小吃快餐\r\n301 = 面包甜点\r\n302 = 火锅\r\n303 = 烧烤\r\n304 = 自助餐\r\n305 = 咖啡厅\r\n306 = 海鲜\r\n990 = 其他"}		1464938761	0
9	90	radio	receipt	发票	1	,1,2,3,4,5,6,7,	{"choices":"1 = 立刻\r\n2 = 补开\r\n0 = 没有"}		1464939941	0
10	100	radio	preorder	包厢预订	1	,1,2,3,4,6,7,	{"choices":"1 = 当天\r\n2 = 隔天\r\n0 = 不能"}		1464941500	0
11	110	radio	rooms-has	包间	1	,1,2,3,4,6,7,	{"choices":"1 = 有\r\n0 = 无"}		1464941687	0
12	120	radio	hall	大厅	0	,1,2,7,	{"choices":"1 = 独立区域\r\n2 = 比较安静\r\n3 = 人多热闹"}		1464942120	0
13	122	radio	hall-flow	大厅客流	0	,1,2,7,	{"choices":"1 = 要排队\r\n0 = 不排队"}		1464942243	0
14	140	radio	external	外部环境	0	,1,2,7,	{"choices":"2 = 高档&amp;特色\r\n1 = 外环境普通\r\n0 = 外环境差"}		1464942360	0
15	150	radio	smoking	抽烟	1	,1,2,3,4,5,6,7,	{"choices":"1 = 全场不禁烟\r\n2 = 包厢可抽\r\n3 = 单独抽烟区\r\n0 = 全场禁烟"}		1464942445	0
16	160	radio	park	停车	1	,1,2,3,4,5,6,7,	{"choices":"1 = 免费停车\r\n2 = 有对应停车场\r\n3 = 无停车场,停附近"}		1464942560	0
17	170	radio	wifi-has	Wifi	1	,1,2,3,4,5,6,7,	{"choices":"1 = 有\r\n0 = 没有"}		1464942636	0
18	125	illust	hall-illust	大厅-图文	0	,1,2,7,			1465009145	0
20	141	illust	external-illust	外部环境-图文	0	,1,2,7,			1465009427	0
21	85	goods	recm-dishes	推荐菜	1	,1,7,			1465041003	0
22	115	illust	rooms-illust	包间图片	1	,1,2,3,4,5,7,			1465042143	0
24	112	number	rooms-galleryful-min	包间最少人数	1	,1,2,3,4,5,7,	{"step":"","min":"0","max":""}		1465269604	0
25	113	number	rooms-galleryful-max	包间最多人数	1	,1,2,3,4,5,7,	{"step":"","min":"","max":""}		1465269726	0
26	145	radio	service	服务	1	,1,2,3,4,5,6,7,	{"choices":"3 = 包间指定服务员\r\n2 = 服务热情\r\n1 = 一般"}		1465269940	0
27	114	number	rooms-pay-min	包间最低消费	1	,1,2,3,4,5,7,	{"step":"0.01","min":"0","max":""}		1465374026	0
28	9990	text	link-dianping	点评链接	1	,1,2,3,4,5,6,7,			1465789999	0
29	36	number	per-capita	人均	1	,1,2,3,4,5,6,7,	{"step":"0.01","min":"0","max":""}		1465813477	0
')) ?: []);
        foreach($arr as $v)
        {
            DB::table('field')->insert($v);
        }

        $arr = array_map(function($v)
        {
            $row = array_combine(explode("\t",'sid	name	model_id	admin_id	description	cover	create_time	delete_time'),explode("\t",$v));
            //unset($row['id']);
            return $row;
        },explode("\n",trim('
1001	测试	1	0	测试测试...3	http://static.chujianapp.com/images/201603/fa55cc53ca77bb6ef7121dc43f7ca831.jpg	1464078330	0
1002	九鼎轩 脆毛肚火锅(打浦路店)	1	84	毛肚大到不行，叶片大而厚。	http://static.chujianapp.com/chuchai/images/201606/b533c41e98fa4e5eb5cb416557022dd3.png	1465281873	0
')) ?: []);
        foreach($arr as $v)
        {
            DB::table('shop')->insert($v);
        }

        $arr = array_map(function($v)
        {
            $fds = explode("\t",'id	sid	field_id	value	attrs');
            $dat = explode("\t",$v);
            isset($dat[4]) || $dat[4] = '';
            $row = array_combine($fds,$dat);
            //unset($row['id']);
            return $row;
        },explode("\n",trim('
226	1001	1	8.8
227	1001	2	8.6
228	1001	3	9.8
229	1001	4	1
230	1001	4	3
231	1001	4	4
232	1001	4	5
233	1001	4	6
234	1001	4	0
235	1001	5	8:00
236	1001	6	22:00
237	1001	7	50%
238	1001	8	100
239	1001	8	200
240	1001	21		{"list":[{"image":"http:\/\/static.chujianapp.com\/images\/201606\/876666ee4f847eed06a8b0702c1dcef5.png","name":"\u63a8\u8350\u83dc1","peice":"98.88"},{"image":"http:\/\/static.chujianapp.com\/images\/201606\/054b891f7146e2cfc8273b2e8e3c96f0.jpg","name":"\u63a8\u8350\u83dc2","peice":"88.8"}]}
241	1001	9	1
242	1001	10	2
243	1001	11	1
244	1001	11	2
245	1001	12	3
246	1001	18		{"list":[{"image":"http:\/\/static.chujianapp.com\/images\/201606\/5f468c78f0f6f9163f7cc79766120bad.jpg","text":"\u6d4b\u8bd5"},{"image":"http:\/\/static.chujianapp.com\/images\/201606\/ccd4211e4c395431faa24529ce0855c9.png","text":"\u6d4b\u8bd52"}]}
247	1001	13	1
248	1001	14	2
249	1001	15	2
250	1001	16	1
251	1001	17	1
111217	1002	1	9.1
111218	1002	2	8.9
111219	1002	3	8.9
111220	1002	29	107
111221	1002	4	d0h0g0
111222	1002	4	d0h1g0
111223	1002	4	d0h2g0
111224	1002	4	d0h3g0
111225	1002	4	d0h12g0
111226	1002	4	d0h13g0
111227	1002	4	d0h14g0
111228	1002	4	d0h15g0
111229	1002	4	d0h16g0
111230	1002	4	d0h17g0
111231	1002	4	d0h18g0
111232	1002	4	d0h19g0
111233	1002	4	d0h20g0
111234	1002	4	d0h21g0
111235	1002	4	d0h22g0
111236	1002	4	d0h23g0
111237	1002	4	d1h0g0
111238	1002	4	d1h1g0
111239	1002	4	d1h2g0
111240	1002	4	d1h3g0
111241	1002	4	d1h12g0
111242	1002	4	d1h13g0
111243	1002	4	d1h14g0
111244	1002	4	d1h15g0
111245	1002	4	d1h16g0
111246	1002	4	d1h17g0
111247	1002	4	d1h18g0
111248	1002	4	d1h19g0
111249	1002	4	d1h20g0
111250	1002	4	d1h21g0
111251	1002	4	d1h22g0
111252	1002	4	d1h23g0
111253	1002	4	d2h0g0
111254	1002	4	d2h1g0
111255	1002	4	d2h2g0
111256	1002	4	d2h3g0
111257	1002	4	d2h12g0
111258	1002	4	d2h13g0
111259	1002	4	d2h14g0
111260	1002	4	d2h15g0
111261	1002	4	d2h16g0
111262	1002	4	d2h17g0
111263	1002	4	d2h18g0
111264	1002	4	d2h19g0
111265	1002	4	d2h20g0
111266	1002	4	d2h21g0
111267	1002	4	d2h22g0
111268	1002	4	d2h23g0
111269	1002	4	d3h0g0
111270	1002	4	d3h1g0
111271	1002	4	d3h2g0
111272	1002	4	d3h3g0
111273	1002	4	d3h12g0
111274	1002	4	d3h13g0
111275	1002	4	d3h14g0
111276	1002	4	d3h15g0
111277	1002	4	d3h16g0
111278	1002	4	d3h17g0
111279	1002	4	d3h18g0
111280	1002	4	d3h19g0
111281	1002	4	d3h20g0
111282	1002	4	d3h21g0
111283	1002	4	d3h22g0
111284	1002	4	d3h23g0
111285	1002	4	d4h0g0
111286	1002	4	d4h1g0
111287	1002	4	d4h2g0
111288	1002	4	d4h3g0
111289	1002	4	d4h12g0
111290	1002	4	d4h13g0
111291	1002	4	d4h14g0
111292	1002	4	d4h15g0
111293	1002	4	d4h16g0
111294	1002	4	d4h17g0
111295	1002	4	d4h18g0
111296	1002	4	d4h19g0
111297	1002	4	d4h20g0
111298	1002	4	d4h21g0
111299	1002	4	d4h22g0
111300	1002	4	d4h23g0
111301	1002	4	d5h0g0
111302	1002	4	d5h1g0
111303	1002	4	d5h2g0
111304	1002	4	d5h3g0
111305	1002	4	d5h12g0
111306	1002	4	d5h13g0
111307	1002	4	d5h14g0
111308	1002	4	d5h15g0
111309	1002	4	d5h16g0
111310	1002	4	d5h17g0
111311	1002	4	d5h18g0
111312	1002	4	d5h19g0
111313	1002	4	d5h20g0
111314	1002	4	d5h21g0
111315	1002	4	d5h22g0
111316	1002	4	d5h23g0
111317	1002	4	d6h0g0
111318	1002	4	d6h1g0
111319	1002	4	d6h2g0
111320	1002	4	d6h3g0
111321	1002	4	d6h12g0
111322	1002	4	d6h13g0
111323	1002	4	d6h14g0
111324	1002	4	d6h15g0
111325	1002	4	d6h16g0
111326	1002	4	d6h17g0
111327	1002	4	d6h18g0
111328	1002	4	d6h19g0
111329	1002	4	d6h20g0
111330	1002	4	d6h21g0
111331	1002	4	d6h22g0
111332	1002	4	d6h23g0
111333	1002	7	4.88
111334	1002	8	302
111335	1002	21		{"list":[{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/bc762496b09ff6fce6bddaed6c800824.png","name":"锅底","peice":"59"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/4ef456d31ca5d38ffafb91fb12873961.png","name":"牛羊肉拼盘","peice":"58"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/511c9d2dadb4f5eed1303472d277279f.png","name":"芝士丸","peice":"28"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/1e6e473348e3dbb0a8365f9a1b663f67.png","name":"毛肚","peice":"69"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/490dd3bf5ac6200ae9dde43ecf53b9cb.png","name":"牛蛙","peice":"16"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/e3846d6cc302f28876ae576e924c380c.png","name":"紫薯山药","peice":"18"}]}
111336	1002	9	1
111337	1002	10	1
111338	1002	11	0
111339	1002	12	2
111340	1002	13	1
111341	1002	18		{"list":[{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/6657bc1bf02fc5e38c83a4a85bdc34c2.png","text":"装修华丽，有点炫目的感觉"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/992d4c0412f343d8f5715459ba38f2ac.png","text":""},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/7de28019f9c812f81965f5fc430074bf.png","text":""},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/6dbba7a507cbdad34d4020dbbfc9e73d.png","text":""}]}
111342	1002	14	1
111343	1002	20		{"list":[{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/b7177635d896ad84bcee52ddce5e4311.png","text":"繁华地带，交通方便"},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/fff25e91796b4e66786c39aec4b146d2.png","text":""},{"image":"http:\/\/static.chujianapp.com\/chuchai\/images\/201606\/c0c79a2f7ee6d1d07619e78cf9a47a91.png","text":""}]}
111344	1002	26	2
111345	1002	15	1
111346	1002	16	2
111347	1002	17	1
111348	1002	28	http://www.dianping.com/shop/32666090
')) ?: []);
        foreach($arr as $v)
        {
            DB::table('shop_field')->insert($v);
        }

    }
}
