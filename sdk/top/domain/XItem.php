<?php

/**
 * 返回结果
 * @author auto create
 */
class XItem
{
	
	/** 
	 * 商品叶子类目
	 **/
	public $cid;
	
	/** 
	 * 是否淘客商品
	 **/
	public $istk;
	
	/** 
	 * 聚划算活动结束时间，1970年到现在的毫秒数。如果不是聚划算商品，该值为空
	 **/
	public $juEnd;
	
	/** 
	 * 是否是聚划算商品,如果查询参数的fields里没有设置ju条件，该值为空
	 **/
	public $juItem;
	
	/** 
	 * 聚划算参团价格，如果不是聚划算商品，该值为空
	 **/
	public $juPrice;
	
	/** 
	 * 聚划算活动开始时间，1970年到现在的毫秒数。如果不是聚划算商品，该值为空
	 **/
	public $juStart;
	
	/** 
	 * 位置信息
	 **/
	public $location;
	
	/** 
	 * 是否天猫宝贝. true 是, false 不是
	 **/
	public $mall;
	
	/** 
	 * 卖家nick
	 **/
	public $nick;
	
	/** 
	 * 库存数量
	 **/
	public $num;
	
	/** 
	 * 混淆的商品ID(准备废弃，由open_iid代替)
	 **/
	public $openAuctionIid;
	
	/** 
	 * 商品ID 注意这个不是混淆商品ID
	 **/
	public $openId;
	
	/** 
	 * 商品混淆ID
	 **/
	public $openIid;
	
	/** 
	 * 主图链接
	 **/
	public $picUrl;
	
	/** 
	 * 平邮邮费. 单位:元,精确到分
	 **/
	public $postFee;
	
	/** 
	 * 商品优惠价格(PC端),可能为空. 单位:元,精确到分。当PC端访问,且当前时间落在price_start_time到price_end_time区间内时使用该价格
	 **/
	public $price;
	
	/** 
	 * PC端商品优惠价格开始时间。如果当前没有PC端优惠，该字段为空
	 **/
	public $priceEndTime;
	
	/** 
	 * PC端商品优惠价格结束时间。如果当前没有PC端优惠，该字段为空
	 **/
	public $priceStartTime;
	
	/** 
	 * 手机端商品优惠价格. 可能为空。单位:元,精确到分。当手机端访问且当前时间落在price_wap_start_time到price_wap_end_time之间的话，使用该价格。如果改价格为空，请使用reserve_price.
	 **/
	public $priceWap;
	
	/** 
	 * 手机端商品优惠价格结束时间。如果当前没有手机端优惠，该字段为空
	 **/
	public $priceWapEndTime;
	
	/** 
	 * 手机端商品优惠价格开始时间。如果当前没有手机端优惠，该字段为空
	 **/
	public $priceWapStartTime;
	
	/** 
	 * 消保类型，多个类型以,分割。可取以下值： 2：假一赔三；4：7天无理由退换货；
	 **/
	public $promotedService;
	
	/** 
	 * 商品的一口价
	 **/
	public $reservePrice;
	
	/** 
	 * 店铺名称
	 **/
	public $shopName;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 淘客佣金比例
	 **/
	public $tkRate;	
}
?>