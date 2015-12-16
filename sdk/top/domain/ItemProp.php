<?php

/**
 * 商品属性
 * @author auto create
 */
class ItemProp
{
	
	/** 
	 * 子属性的模板（卖家自行输入属性时需要用到）
	 **/
	public $childTemplate;
	
	/** 
	 * 类目ID
	 **/
	public $cid;
	
	/** 
	 * 属性的feature列表
	 **/
	public $features;
	
	/** 
	 * 是否允许别名。可选值：true（是），false（否）
	 **/
	public $isAllowAlias;
	
	/** 
	 * 是否颜色属性。可选值:true(是),false(否)
	 **/
	public $isColorProp;
	
	/** 
	 * 是否是可枚举属性。可选值:true(是),false(否)
	 **/
	public $isEnumProp;
	
	/** 
	 * 在is_enum_prop是true的前提下，是否是卖家可以自行输入的属性（注：如果is_enum_prop返回false，该参数统一返回false）。可选值:true(是),false(否)。<b>对于品牌和型号属性（包括子属性）：如果用户是C卖家，则可自定义属性；如果是B卖家，则不可自定义属性，而必须要授权的属性。</b>
	 **/
	public $isInputProp;
	
	/** 
	 * 是否商品属性。可选值:true(是),false(否)
	 **/
	public $isItemProp;
	
	/** 
	 * 是否关键属性。可选值:true(是),false(否)
	 **/
	public $isKeyProp;
	
	/** 
	 * 是否销售属性。可选值:true(是),false(否)
	 **/
	public $isSaleProp;
	
	/** 
	 * 是否度量衡属性项
	 **/
	public $isTaosir;
	
	/** 
	 * 属性修改时间（增量类目专用）
	 **/
	public $modifiedTime;
	
	/** 
	 * 三种枚举类型：modify，add，delete（增量类目专用）
	 **/
	public $modifiedType;
	
	/** 
	 * 发布产品或商品时是否可以多选。可选值:true(是),false(否)
	 **/
	public $multi;
	
	/** 
	 * 发布产品或商品时是否为必选属性。可选值:true(是),false(否)
	 **/
	public $must;
	
	/** 
	 * 属性名
	 **/
	public $name;
	
	/** 
	 * 上级属性ID
	 **/
	public $parentPid;
	
	/** 
	 * 上级属性值ID
	 **/
	public $parentVid;
	
	/** 
	 * 属性 ID 例：品牌的PID=20000
	 **/
	public $pid;
	
	/** 
	 * null
	 **/
	public $propValues;
	
	/** 
	 * 发布产品或商品时是否为必选属性(与must相同)。可选值:true(是),false(否)
	 **/
	public $required;
	
	/** 
	 * 排列序号。取值范围:大于零的整排列序号。取值范围:大于零的整数
	 **/
	public $sortOrder;
	
	/** 
	 * 状态。可选值:normal(正常),deleted(删除)
	 **/
	public $status;
	
	/** 
	 * 度量衡相关信息
	 **/
	public $taosirDo;
	
	/** 
	 * 属性值类型。可选值：
multiCheck(枚举多选)
optional(枚举单选)
multiCheckText(枚举可输入多选)
optionalText(枚举可输入单选)
text(非枚举可输入)
	 **/
	public $type;	
}
?>