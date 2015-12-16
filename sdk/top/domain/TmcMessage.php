<?php

/**
 * 消息通道的通用消息结构
 * @author auto create
 */
class TmcMessage
{
	
	/** 
	 * 消息详细内容，格式为JSON/XML
	 **/
	public $content;
	
	/** 
	 * 消息ID
	 **/
	public $id;
	
	/** 
	 * 消息发布者的AppKey
	 **/
	public $pubAppKey;
	
	/** 
	 * 消息发布时间
	 **/
	public $pubTime;
	
	/** 
	 * 消息所属主题
	 **/
	public $topic;
	
	/** 
	 * 消息所属的用户编号
	 **/
	public $userId;
	
	/** 
	 * 用户的昵称
	 **/
	public $userNick;	
}
?>