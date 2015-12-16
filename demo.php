<?php
include_once('cfg.php');
include_once('sdk/TopSdk.php');

spl_autoload_register('autoLoad');
function autoLoad($class_name){
    $directories = array(
        'libs/'
    );

    foreach($directories as $directory){
        if(file_exists($directory.$class_name . '.php')){
            require_once($directory.$class_name . '.php');
            break;
        }
    }
}

/**
 * !!!注意!!!
 * demo代码为了让开发者能更容易看懂代码逻辑,精简了很多必要的安全校验,请不要在正式环境下直接使用demo代码.
 */
justDemo();
function justDemo(){
    /*
     * 第一步: 接收页面提交上来的参数,简单校验一下
     */
//    $itemUrl = $_REQUEST['itemUrl'];
//    $appKey = $_REQUEST['appKey'];
//    $appSecret = $_REQUEST['appSecret'];
    $itemUrl = 'https://detail.tmall.com/item.htm?id=520360573194&skuId=3101727199054';
    $appKey = '23285002';
    $appSecret = '0559365a08a6c5c71c321df373591512';
    if(empty($itemUrl) && empty($appKey)  && empty($appSecret) ){
        Ajax::error('请求参数错误!');
    }
    $itemId = getIdInUrl($itemUrl);
    if(empty($itemId)) {
        Ajax::error('url错误,未能获取到商品id!');
    }

    /*
     * 第二步: 调用top接口拿到商品数据
     * 接口说明文档地址:
     * http://api.taobao.com/apidoc/api.htm?path=scopeId:11471-apiId:23731
     */
    $c  = new TopClient();
    $c->appkey = $appKey;
    $c->secretKey = $appSecret;
    $req = new TaeItemsListRequest();
    $req->setFields('num,title,nick,pic_url,location,cid,price,post_fee,promoted_service');
    $req->setNumIids($itemId);
    $resp = $c->execute($req);
    if(!isset($resp['items'])){


        //缺少权限包,则跳转到权限申请页面
        if(isset($resp['msg']) && isset($resp['sub_code'])
            && $resp['msg']=='Insufficient isv permissions'
            && $resp['sub_code']=='isv.permission-api-package-limit'){
            Ajax::error('isv.permission-api-package-limit');
        }
        Ajax::error('top接口获取商品失败');
    }

    /*
     * 第三步: 整理数据入库
     */
    $DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
    $table = DB_TABLE;
    if(isset($resp['items']) && isset($resp['items']['x_item']) && isset($resp['items']['x_item'][0]))
    $tmp = $resp['items']['x_item'][0];
    //检查一下是否存在表
    $sql = "SHOW TABLES LIKE '%$table%';";
    $rc = $DB->query($sql)->rowCount();
    if(!$rc){
        $sqlFile = file_get_contents('items.sql');
        $DB->exec($sqlFile);
    }
    //检查是否存在该商品
    $openId = $tmp['open_auction_iid'];
    $sql = "SELECT * FROM `$table` WHERE `tb_item_id` LIKE '$openId'";
    $query = $DB->query($sql);
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $rs = $query->fetchAll();
    if($rs){
        Ajax::error('已经存在该商品.');
    }else{
        $sql = "INSERT INTO `$table`
        (`id`, `pic`, `reserve_price`, `price`, `tb_item_id`,`tb_iid`, `name`, `is_mall`)
        VALUES
        (NULL,
        '".$tmp['pic_url']."',
        '".($tmp['reserve_price']*100)."',
        '".($tmp['price']*100)."',
        '".$tmp['open_auction_iid']."',
        '".$itemId."',
        '".$tmp['title']."',
        '".($tmp['mall']?1:0)."');";
        $rs = $DB->exec($sql);
        if(!$rs){
            Ajax::error('数据入库失败.');
        }
    }

    /*
     * 最后: 返回数据,前端可以通过控制台查看数据结果.
     */
    Ajax::go($resp);

}



function getIdInUrl($url){
    $tempArr = explode('?', $url);
    $strParm = $tempArr[1];
    $parm = explode('&', $strParm);

    $parmArr = array();
    foreach($parm as $val){
        $temp = explode('=', $val);
        $key = trim($temp[0]);
        $value = trim($temp[1]);
        $parmArr[$key] = $value;
    }
    if(isset($parmArr['id'])){
        return $parmArr['id']*1;
    }
    return NULL;
}