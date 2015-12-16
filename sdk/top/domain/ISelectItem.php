<?php

/**
 * 选品平台返回的商品基本信息
 * @author auto create
 */
class ISelectItem
{
	
	/** 
	 * 折后价,单位为元,精确到分,没有折扣就和原价相等
	 **/
	public $discountPrice;
	
	/** 
	 * 商品混淆id
	 **/
	public $openIid;
	
	/** 
	 * 商品主图url
	 **/
	public $picUrl;
	
	/** 
	 * 商品多图地址，第一张是主图
	 **/
	public $pics;
	
	/** 
	 * 商品原价,单位为元,精确到分
	 **/
	public $price;
	
	/** 
	 * 商品属性、属性值串，可能为空，格式p:v;p:v
	 **/
	public $propertiesAndValues;
	
	/** 
	 * 商品的店铺类型，0为淘宝店铺，1为天猫店铺
	 **/
	public $shopType;
	
	/** 
	 * 选品商品上的标签id
	 **/
	public $tagId;
	
	/** 
	 * 商品名称
	 **/
	public $title;	
}
?>