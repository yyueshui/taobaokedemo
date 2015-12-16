<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>php简易demo</title>
    <link rel="stylesheet" href="res/css/css.css">
    <link rel="stylesheet" href="res/js/jquery.snippet.min.css">
</head>
<body>
    <header class="header clr-bg">
        <div class="center">
            <h2>PHP 简易 Demo</h2>
            <p>
                百川导购应用
            </p>
        </div>
    </header>
    <div class="heading">
        <div class="wrap">
            <div class="center mb" id="msg">
                输入以下信息
            </div>
            <div class="form-box mb">
                <input type="text" value=""
                       name="itemUrl" id="itemUrl" class="ipt-text large"
                       placeholder="输入商品链接, 例如: http://item.taobao.com/item.htm?id=1234567890">
            </div>

            <div class="form-box">
                <div class="form-row mb">
                    <label>AppKey:</label>
                    <div class="form-right">
                        <input type="number" value=""
                               name="appKey" id="appKey" class="ipt-text"
                               placeholder="1234567890">
                        <span>TOP接口调用的appKey,<a href="http://open.taobao.com/portal/doc?articleId=246#ss4" target="_blank">如何获取</a></span>
                    </div>
                </div>

                <div class="form-row mb">
                    <label>AppSecret:</label>
                    <div class="form-right">
                        <input type="password" value=""
                               name="appSecret" id="appSecret" class="ipt-text"
                               placeholder="********************">
                        <span>TOP接口调用的appSecret,<a href="http://open.taobao.com/portal/doc?articleId=246#ss4" target="_blank">如何获取</a></span>
                    </div>
                </div>

                <div class="form-row center">
                    <input type="button" class="submit clr-bg" id="submit" value="提交入库">
                </div>
            </div>

        </div>
    </div>

    <!-- phone -->
    <div class="phone">
        <h4 class="center">预览效果</h4>
        <div class="phone-box">
            <div class="phone-head">

            </div>
            <div class="phone-body">
                <div class="phone-screen">
                    <ul class="phone-list-view">
                        <!--<li>
                            <div class="img">
                                <img src="http://gd1.alicdn.com/bao/uploaded/i1/TB165IkGVXXXXX3XVXXXXXXXXXX_!!0-item_pic.jpg_150x150.jpg">
                            </div>
                            <div class="meta">
                                <p class="name">苹果5s手机壳 水钻 最新iphone5手机壳 彩绘 潮女 5s手机套 外壳</p>
                                <p class="price">价格 : 19.5</p>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
            <div class="phone-foot">
                <div class="phone-btn-home"></div>
            </div>
        </div>
    </div>

    <!-- doc -->
    <div class="bb">
        <div class="wrap-large">
            <div class="center h3 top-title bb">
                说明文档:
            </div>
            <div class="wrap mt ">
                <p>
                    制作此DEMO的目的是为了向开发者展示如何使用百川的接口和服务进行开发:
                </p>
                <div class="section top">
                    <div class="col pd-none">
                        <p>
                            服务端方面，我们想通过此DEMO向开发者展示：
                        </p>
                        <p>
                            1）如何通过淘宝或天猫商品详情页URL获取商品混淆Id；
                            <br>
                            2）如何通过Top接口获取商品价格、标题、主图等；
                            <br>
                            3）如何使用TAE的数据库服务；
                        </p>
                    </div>
                    <div class="col pd-none">
                        <p>
                            客户端方面，我们想通过此DEMO向开发者展示：
                        </p>
                        <p>
                            1）如何从服务端获取商品列表数据；
                            <br>
                            2）如何显示商品详情；
                        </p>
                    </div>
                </div>
            </div>
            <div class="bb"></div>
            <div class="section top">
                <div class="col">
                    <h4>服务端 PHP</h4>
                    <ul>
                        <li>
                            <a href="#doc-php-top">TOP 调用</a>
                        </li>
                        <li>
                            <a href="#doc-php-api">无线端API接口</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>客户端 Android</h4>
                    <ul>
                        <li>
                            <a href="#doc-android-api">通过无线端API接口获取商品</a>
                        </li>
                        <li>
                            <a href="#doc-android-detail">ShowDetail组件</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="bb" id="doc-php-top">
        <div class="wrap-large">
            <div class="section">
                <div class="col">
                    <h5>TOP 调用</h5>
                    <ul>
                        <li>第一步 到开放平台中下载对应的TOP SDK包. <a target="_blank" href="http://my.open.taobao.com/app/app_list.htm">传送门</a></li>
                        <li>第二步 在你的代码里调用所需的TOP API方法.</li>
                        <li>第三步 传入该接口所需参数,执行后,打印出结果.</li>
                    </ul>
                </div>
                <div class="col">
                    <pre class="phpCode">
&#60;?php
include('TopClient.php');
include('TaeItemsListRequest.php');
$c  = new TopClient();
$c->appkey = $appKey;
$c->secretKey = $appSecret;
$req = new TaeItemsListRequest();
$req->setFields('num,title,nick,pic_url,location,cid,price');
$req->setNumIids($itemId);
$resp = $c->execute($req);
print_r($resp);
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <div class="bb" id="doc-php-api">
        <div class="wrap-large">
            <div class="section">
                <div class="col">
                    <h5>无线端API接口</h5>
                    <ul>
                        <li>Demo代码里提供了一个简单的api接口方法,您可以这样测试:</li>
                        <li>第一步 复制一个淘宝商品链接到index页面的输入框里.</li>
                        <li>第二步 填写您申请的AppKey和AppSecret,提交入库.入库成功后可以在页面上看到预览数据.</li>
                        <li>第三步 在无线端代码的配置文件里填上 http://你的内网IP:8080/api.php .</li>
                    </ul>
                </div>
                <div class="col">
                    <pre class="javaCode">
//在 com.taobao.tae.demo.buy.base/Config.java 文件里
public  final class Config {
	public static final String HOST = "http://192.168.0.1:8080/api.php";
}
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <div class="bb" id="doc-android-api">
        <div class="wrap-large">
            <div class="section">
                <div class="col">
                    <h5>通过无线端API接口获取商品</h5>
                    <ul>
                        <li>启动TAE服务端SDK后,您可以查看 http://你的内网IP:8080/api.php 返回的数据.</li>
                    </ul>
                </div>
                <div class="col">
                    <pre class="javaCode">
//在 com.taobao.tae.demo.buy.base/ListItemActivity.java 文件里
private ArrayList&#60;ItemInfo&#62; getItemInfos() throws Exception {
ResponseMessage rMessage = HttpUtils.httpPost(com.taobao.tae.demo.buy.base.Config.HOST);
ArrayList&#60;ItemInfo&#62; items = null;
    if (rMessage.isSuccess()) {
        JSONObject jsonObject = new JSONObject(rMessage.getResponse());
        if (jsonObject != null) {
            JSONArray jsonArray = jsonObject.getJSONArray("data");
            items = new ArrayList&#60;ItemInfo&#62;(jsonArray.length());
                for (int i = 0; i < jsonArray.length(); i++) {
                    JSONObject object = jsonArray.getJSONObject(i);
                    if (object != null) {
                    ItemInfo item = new ItemInfo();
                    item.setId(object.getString("id"));
                    item.setPrice(object.getDouble("price"));
                    item.setName(object.getString("name"));
                    item.setPic(object.getString("pic"));
                    if(object.has("itemType")) {
                        item.setType(object.getInt("itemType"));
                    }
                    items.add(item);
                }
            }
        }
    }
    return items;
}
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <div class="bb" id="doc-android-detail">
        <div class="wrap-large">
            <div class="section">
                <div class="col">
                    <h5>ShowDetail组件</h5>
                    <ul>
                        <li>唤起官方商品组件:</li>
                        <li>其中商品的混淆ID,和商品的Type,需要通过百川接口查询得到.</li>
                        <li><a target="_blank" href="http://baichuan.taobao.com/portal/doc?articleId=265">其他组件</a></li>
                    </ul>
                </div>
                <div class="col">
                    <pre class="javaCode">
//在 com.taobao.tae.demo.buy.base/ListItemActivity.java 文件里
public void showItemDetail(ItemInfo info) {
    TaeSDK.showItemDetail(this, null, null,
                        info.getId(), //商品混淆ID
                        info.getType(),//商品类型: 淘宝商品=1,天猫商品=2
                        null);
}
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <div class="footer center">
        如有疑问,可加入旺旺群咨询: 1488705339
    </div>

    <script type="text/javascript" src="res/js/jquery.min.js"></script>
    <script type="text/javascript" src="res/js/jquery.snippet.min.js"></script>
    <script>
        var AJAX_URL = {
            init : 'demo.php',
            api : 'api.php'
        };

        $("pre.phpCode").snippet("php",{style:"acid",transparent:true,showNum:false});
        $("pre.javaCode").snippet("java",{style:"acid",transparent:true,showNum:false});
    </script>
    <script type="text/javascript" src="res/js/js.js"></script>
</body>
</html>