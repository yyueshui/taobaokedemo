<?php

/**
 * 收货地址数据结构
 * @author auto create
 */
class ShippingAddress
{
	
	/** 
	 * 收货地址编号
	 **/
	public $addressId;
	
	/** 
	 * 是否作为默认收货地址
	 **/
	public $isDefault;
	
	/** 
	 * 收货人地址信息
	 **/
	public $location;
	
	/** 
	 * 收货人移动电话号码
	 **/
	public $mobile;
	
	/** 
	 * 收货人固定电话号码
	 **/
	public $phone;
	
	/** 
	 * 收货人姓名
	 **/
	public $receiverName;	
}
?>