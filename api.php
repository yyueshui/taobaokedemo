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
getItems4Client();
function getItems4Client(){
    $DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);

    $table = DB_TABLE;
    //检查一下是否存在表
    $sql = "SHOW TABLES LIKE '%$table%';";
    $rc = $DB->query($sql)->rowCount();
    if(!$rc){
        $sqlFile = file_get_contents('items.sql');
        $DB->exec($sqlFile);
    }

    $sql = "SELECT * FROM `$table` LIMIT 0,10";
    $query = $DB->query($sql);
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $rt = $query->fetchAll();
    if($rt){
        $items = array();
        foreach($rt as $item){
            $tmp = array();
            $tmp['openid'] = $item['tb_item_id'];
            $tmp['iid'] = $item['tb_iid'];
            $tmp['price'] = $item['price']?($item['price']/100):($item['reserve_price']/100);
            $tmp['name'] = $item['name'];
            $tmp['pic'] = $item['pic'];
            $tmp['itemType'] = $item['is_mall']+1; // 客户端判断是 1:集市店,2:天猫店
            $items[] = $tmp;
        }
        Ajax::go($items);
    }else{
        Ajax::error('数据查询失败.');
    }
}

