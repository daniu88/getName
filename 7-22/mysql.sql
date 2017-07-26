


create table user(
	uid int(7) not null primary key AUTO_INCREMENT COMMENT "用户id",
	nickname char(16) unique not null COMMENT "昵称",
	email char(30) unique not null COMMENT "邮箱",
	password char(32) not null COMMENT "密码",
	sex enum ("男","女","保密") default "保密" COMMENT "性别",
	addr char(80) not null COMMENT "个签",
	face char(80) default "/Upload/face.png" COMMENT "头像",
	level int(1) unsigned default 0 COMMENT "等级",
	exp int(7) unsigned default 0 COMMENT "积分",
	sign char(200) not null COMMENT "家庭地址",
	status enum('0','1') default '0' COMMENT "有没有被封的状态",
	create_time int(10) unsigned not null COMMENT "创建时间"
)COMMENT "用户表"; 


create table wenti(
	aid int(7) not null primary key AUTO_INCREMENT COMMENT "用户id",
	title char(50) not null COMMENT "标题",
	centent text not null COMMENT "内容",
	cid int(3) unsigned not null COMMENT "分类id",
	uid int(7) unsigned not null COMMENT"用户id",
	view_num int(7) unsigned not null default 0  COMMENT"浏览量",
	answer_num int(6) unsigned not null default 0 COMMENT"回答量",
	status enum("普通","精华","置顶") not null default"普通" COMMENT "状态",
	create_time int(7) unsigned not null  COMMENT "创建时间"
)COMMENT "问题表";



create table huida(
	aid int(7) not null primary key AUTO_INCREMENT COMMENT "主键id",
	qid int(7) not null COMMENT "问题id",
	uid int(7) not null COMMENT "用户id",
	content text not null COMMENT "回答内容",
	zan_num int(5)not null default 0 COMMENT "点赞数",
	status enum("0","1") default'0' COMMENT "采纳",
	create_time int(10) not null COMMENT "回答时间"

) COMMENT "问题回答表";










