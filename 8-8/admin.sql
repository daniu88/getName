CREATE TABLE `admin` (
  `aid` int(7) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `nickname` char(16) NOT NULL COMMENT '昵称',
  `email` char(30) NOT NULL COMMENT '邮箱',
  `phome` enum(11) NOT NULL COMMENT '手机',
  `password` char(32) NOT NULL COMMENT '密码',
  `create_time` int(10) unsigned NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`aid`),
  UNIQUE KEY `nickname` (`nickname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='管理员';

