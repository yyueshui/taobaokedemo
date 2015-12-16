<?php

/**
 * 系统自动生成
 * @author auto create
 */
class UploadTokenRequestV
{
	
	/** 
	 * 多媒体中心分配的业务码, mtopupload或其他
	 **/
	public $bizCode;
	
	/** 
	 * 客户端IP
	 **/
	public $clientIp;
	
	/** 
	 * 客户端网络类型 wifi 或 2g 或 3g 或 cdma 或 gprs
	 **/
	public $clientNetType;
	
	/** 
	 * 文件内容的CRC32校验和
	 **/
	public $crc;
	
	/** 
	 * 文件名
	 **/
	public $fileName;
	
	/** 
	 * 文件大小，单位byte
	 **/
	public $fileSize;
	
	/** 
	 * 自定义数据
	 **/
	public $privateData;
	
	/** 
	 * 上传类型：resumable 或 normal
	 **/
	public $uploadType;
	
	/** 
	 * session
	 **/
	public $userId;	
}
?>