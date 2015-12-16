<?php

/**
 * 类目属性度量衡相关数据
 * @author auto create
 */
class ItemTaosirDO
{
	
	/** 
	 * 表达式元素list
	 **/
	public $exprElList;
	
	/** 
	 * 数值小数点精度
	 **/
	public $precision;
	
	/** 
	 * 卖家可选单位List<单位id，单位名>
	 **/
	public $stdUnitList;
	
	/** 
	 * 时间类型：0表示非时间，1表示时间点，2表示时间范围
	 **/
	public $type;	
}
?>