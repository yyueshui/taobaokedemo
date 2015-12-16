CREATE TABLE IF NOT EXISTS `tae_raw_demo_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `pic` varchar(2048) NOT NULL COMMENT '商品图片',
  `reserve_price` bigint(20) unsigned NOT NULL COMMENT '商品一口价',
  `price` bigint(20) unsigned DEFAULT NULL COMMENT '商品销售价,可能为空',
  `tb_item_id` varchar(128) NOT NULL COMMENT '淘宝商品open_id',
  `tb_iid` bigint(20) NOT NULL COMMENT '淘宝商品id',
  `name` varchar(256) NOT NULL COMMENT 'name',
  `is_mall` smallint(5) unsigned NOT NULL COMMENT '是否天猫商品',
  PRIMARY KEY (`id`),
  KEY `index_title` (`name`(255))
) DEFAULT CHARSET=utf8 COMMENT='商品表' AUTO_INCREMENT=1 ;