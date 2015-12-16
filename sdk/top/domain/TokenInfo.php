<?php

/**
 * token信息
 * @author auto create
 */
class TokenInfo
{
	
	/** 
	 * token info扩展信息
	 **/
	public $ext;
	
	/** 
	 * isv自己账号的唯一id
	 **/
	public $isvAccountId;
	
	/** 
	 * ISV APP的登录态时长
	 **/
	public $loginStateExpireIn;
	
	/** 
	 * open account id
	 **/
	public $openAccountId;
	
	/** 
	 * 时间戳
	 **/
	public $timestamp;
	
	/** 
	 * 用于防重放的唯一id
	 **/
	public $uuid;	
}
?>