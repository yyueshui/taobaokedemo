<?php

/**
 * 属性值
 * @author auto create
 */
class PropValue
{
	
	/** 
	 * 类目ID
	 **/
	public $cid;
	
	/** 
	 * 属性值feature
	 **/
	public $features;
	
	/** 
	 * 是否为父类目属性
	 **/
	public $isParent;
	
	/** 
	 * 修改时间（类目增量专用）
	 **/
	public $modifiedTime;
	
	/** 
	 * 三种枚举类型：modify，add，delete (增量类目专用)
	 **/
	public $modifiedType;
	
	/** 
	 * 属性值
	 **/
	public $name;
	
	/** 
	 * 属性值别名
	 **/
	public $nameAlias;
	
	/** 
	 * 属性 ID
	 **/
	public $pid;
	
	/** 
	 * 属性名
	 **/
	public $propName;
	
	/** 
	 * 排列序号。取值范围:大于零的整数
	 **/
	public $sortOrder;
	
	/** 
	 * 状态。可选值:normal(正常),deleted(删除)
	 **/
	public $status;
	
	/** 
	 * 属性值ID
	 **/
	public $vid;	
}
?>