<?php
/**
 * Created by PhpStorm.
 * User: HX-ZJ-012
 * Date: 2015/12/16
 * Time: 11:55
 */
//header('content-type:text/html;charset=utf-8');
include_once('cfg.php');
include_once('sdk/TopSdk.php');
$c  = new TopClient();
$c->appkey = APP_KEY;
$c->secretKey = APP_SECRET;
//TaobaokeItemsConvertRequest();
//$a = 'm%3D2%26s%3Di%2BJScSNhBFEcQipKwQzePOeEDrYVVa64LKpWJ%2Bin0XJRAdhuF14FMYFO1yaad8nwlovu%2FCElQOuVTM05tswzD9e%2BtqyBWtfFPdwim8GvptgzBt%2Ba%2BTVpoKUuZxIcp9pfXqNqDlFUsTwJ9RkBTuDlKU5U%2BEi82A4gu9qKWmMyQg7rSShdoxArGQQDePo2j30Vxg5p7bh%2BFbQ%3D';
//
//echo base64_decode($a);
//
//exit;
//$req = new TaeItemsListRequest();
//$req->setFields('num,title,nick,pic_url,location,cid,price');
//$req->setNumIids(520360573194);
//$resp = $c->execute($req);
//echo '<pre>';
//print_r($resp);


//$c = new TopClient;
//$c->appkey = $appkey;
//$c->secretKey = $secret;

//$req = new AtbItemsCouponGetRequest;
//$req->setArea("杭州");
//$req->setCid("123");
//$req->setCouponType("1");
//$req->setEndCommissionNum("101");
//$req->setEndCommissionRate("2345");
//$req->setEndCommissionVolume("200");
//$req->setEndCouponRate("8000");
//$req->setEndCredit("4diamond");
//$req->setEndVolume("101");
//$req->setFields("open_iid,title,nick,pic_url,price,commission,commission_rate,commission_num,commission_volume,seller_credit_score,item_location,volume,coupon_price,coupon_rate,coupon_start_time,coupon_end_time,shop_type,click_url");
//$req->setKeyword("女装");
//$req->setPageNo("1");
//$req->setPageSize("40");
//$req->setShopType("all");
//$req->setSort("default");
//$req->setStartCommissionNum("100");
//$req->setStartCommissionRate("1234");
//$req->setStartCommissionVolume("100");
//$req->setStartCouponRate("7000");
//$req->setStartCredit("3diamond");
//$req->setStartVolume("100");
//$resp = $c->execute($req);
//echo '<pre>';
//print_r($resp);

$req = new TbkItemGetRequest;
$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
$req->setQ("女装");
//$req->setCat("16,18");
$req->setItemloc("杭州");
$req->setSort("tk_rate_des");
//$req->setIsTmall("false");
$req->setIsOverseas("false");
//$req->setStartPrice("10");
//$req->setEndPrice("10");
//$req->setStartTkRate("123");
//$req->setEndTkRate("123");
$req->setPlatform("1");
$req->setPageNo("1");
$req->setPageSize("20");
$resp = $c->execute($req);
//$req = new TbkItemInfoGetRequest;
//$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
//$req->setPlatform("1");
//$req->setNumIids("123,456");
//$resp = $c->execute($req);
////$req->setId("AAF123A");
//$resp = $c->execute($req);
echo '<pre>';
print_r($resp);