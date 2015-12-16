<?php

/**
 * 爱淘宝商品
 * @author auto create
 */
class AitaobaoItem
{
	
	/** 
	 * 推广点击url
	 **/
	public $clickUrl;
	
	/** 
	 * 淘宝客佣金
	 **/
	public $commission;
	
	/** 
	 * 累计成交量.注：返回的数据是30天内累计推广量
	 **/
	public $commissionNum;
	
	/** 
	 * 淘宝客佣金比率，比如：1234.00代表12.34%
	 **/
	public $commissionRate;
	
	/** 
	 * 累计总支出佣金量
	 **/
	public $commissionVolume;
	
	/** 
	 * 折扣活动结束时间
	 **/
	public $couponEndTime;
	
	/** 
	 * 折扣价格
	 **/
	public $couponPrice;
	
	/** 
	 * 折扣比率
	 **/
	public $couponRate;
	
	/** 
	 * 折扣活动开始时间
	 **/
	public $couponStartTime;
	
	/** 
	 * 商品所在地
	 **/
	public $itemLocation;
	
	/** 
	 * 卖家昵称
	 **/
	public $nick;
	
	/** 
	 * 淘宝客商品数字id
	 **/
	public $numIid;
	
	/** 
	 * 开放商品id
	 **/
	public $openIid;
	
	/** 
	 * 图片url
	 **/
	public $picUrl;
	
	/** 
	 * 商品价格
	 **/
	public $price;
	
	/** 
	 * 促销价格
	 **/
	public $promotionPrice;
	
	/** 
	 * 卖家信用等级
	 **/
	public $sellerCreditScore;
	
	/** 
	 * 卖家id
	 **/
	public $sellerId;
	
	/** 
	 * 店铺类型:B(商城),C(集市)
	 **/
	public $shopType;
	
	/** 
	 * 商品title 宝贝名称
	 **/
	public $title;
	
	/** 
	 * 30天内交易量
	 **/
	public $volume;	
}
?>