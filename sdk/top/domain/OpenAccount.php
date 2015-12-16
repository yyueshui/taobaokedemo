<?php

/**
 * Open Account模型
 * @author auto create
 */
class OpenAccount
{
	
	/** 
	 * 支付宝的帐号标识
	 **/
	public $alipayId;
	
	/** 
	 * 头像url
	 **/
	public $avatarUrl;
	
	/** 
	 * 银行卡号
	 **/
	public $bankCardNo;
	
	/** 
	 * 银行卡的拥有者姓名
	 **/
	public $bankCardOwnerName;
	
	/** 
	 * 出生日期
	 **/
	public $birthday;
	
	/** 
	 * 创建帐号的App Key
	 **/
	public $createAppKey;
	
	/** 
	 * 帐号创建的设备的ID
	 **/
	public $createDeviceId;
	
	/** 
	 * 账号创建时的位置
	 **/
	public $createLocation;
	
	/** 
	 * 展示名
	 **/
	public $displayName;
	
	/** 
	 * 数据域
	 **/
	public $domainId;
	
	/** 
	 * 邮箱
	 **/
	public $email;
	
	/** 
	 * 自定义扩展信息Map的Json格式
	 **/
	public $extInfos;
	
	/** 
	 * 1男 2女
	 **/
	public $gender;
	
	/** 
	 * 记录创建时间
	 **/
	public $gmtCreate;
	
	/** 
	 * 记录上次更新时间
	 **/
	public $gmtModified;
	
	/** 
	 * Open Account Id
	 **/
	public $id;
	
	/** 
	 * 开发者自定义账号id
	 **/
	public $isvAccountId;
	
	/** 
	 * 地区
	 **/
	public $locale;
	
	/** 
	 * 登录名
	 **/
	public $loginId;
	
	/** 
	 * 密码
	 **/
	public $loginPwd;
	
	/** 
	 * 加密算法类型：1、代表单纯MD5，2：代表单一Salt的MD5，3、代表根据记录不同后的MD5
	 **/
	public $loginPwdEncryption;
	
	/** 
	 * 密码加密强度
	 **/
	public $loginPwdIntensity;
	
	/** 
	 * 密码salt
	 **/
	public $loginPwdSalt;
	
	/** 
	 * 手机
	 **/
	public $mobile;
	
	/** 
	 * 姓名
	 **/
	public $name;
	
	/** 
	 * 第三方oauth openid
	 **/
	public $openId;
	
	/** 
	 * 账号状态：1、启用，2、删除，3、禁用
	 **/
	public $status;
	
	/** 
	 * 账号创建类型：1、通过短信创建，2、ISV批量导入，3、ISV OAuth创建
	 **/
	public $type;
	
	/** 
	 * 记录的版本号
	 **/
	public $version;
	
	/** 
	 * 旺旺
	 **/
	public $wangwang;
	
	/** 
	 * 微信
	 **/
	public $weixin;	
}
?>