<?php

/**
 * 宝贝主图视频数据结构
 * @author auto create
 */
class MpicVideo
{
	
	/** 
	 * 主图视频记录所关联的商品的数字id
	 **/
	public $numIid;
	
	/** 
	 * 主图视频的时长，单位：秒
	 **/
	public $videoDuaration;
	
	/** 
	 * 主图视频的在淘视频中的ID
	 **/
	public $videoId;
	
	/** 
	 * 主图视频的缩略图URL
	 **/
	public $videoPic;
	
	/** 
	 * 主图视频的状态
	 **/
	public $videoStatus;	
}
?>