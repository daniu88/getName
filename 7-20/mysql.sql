





	create table stu(
		id int(7) primary key AUTO_INCREMENT not null comment "id",
		name char(20) not null comment "姓名",
		age int(3) unsigned not null comment "年龄",
		phone char(11) not null,
		sex enum('男','女','保密') default "保密",
		create_time int(10),
		qq char(12) not null

	);


create table stu(
	id int(7) primary key AUTO_INCREMENT not null comment 'id',
	name char(20)not null comment "姓名",
	age int(3)unsigned not null comment "年龄",
	sex enum("男","女","保密") default "保密",
	phone char(11)not null,
	cerate_time int(10),
	qq char(12)not null

);




create table card (
	id int(7) primary key AUTO_INCREMENT not null comment 'id',
	title char(30)not null comment '表题',
	scrap varchar(65535)not null comment"文章内容",
	cerate_time  int(10) unsigned comment"创建时间",
	sorting set("灌水","专业文章","闲聊")default"闲聊" comment"分类",
	name char(20)not null comment "姓名",
	browse int(10)not null comment"浏览量",
	reply char(255)not null comment"回复",
	top enum("置顶","精华","高亮","普通")default"普通"
);



create table question(
	id int(7)not null primary key AUTO_INCREMENT comment 'id',
	title char(50)not null comment '标题',
	content text not null comment '内容',
	cid int(3) unsigned not null comment"分类id",
	uid int(7) unsigned not null  comment'用户id',
	view_num int(7) unsigned not null default 0 comment"浏览量",
	answer_num int(7) unsigned  not null default 0 comment'回答量',
	status enum("普通","置顶","精华","高亮") default"普通" not null comment "状态",
	create_time int(7) not null comment"创建时间"


);

create table user(
	id int(7)not null primary key AUTO_INCREMENT comment 'id',
	username char(30) not null unique comment"昵称",
	emlie char(30) not null unique comment"邮箱", 
	password char(20) not null unique comment"密码",
	sex enum("男","女","保密")not null default "保密" unique comment"性别",
	site char(80) unique comment"地址",
	jifen int(5) unsigned not null default"0" unique comment"积分",
	sign char(30) not null default"这个人很懒什么都没有留下" unique comment"签名",
	ava text unique comment"头像",
	create_time int(7) not null unique comment"创建时间",
	form enum("在线","离线","隐身")not null unique comment"状态"








);











insert into question();



用户表

昵称

邮箱

密码

性别

地址


积分

签名

头像

创建时间

状态

等级




回答表


























	insert into stu(name,age,sex,cerate_time,qq)values("小妹",20,"女",555544872,4566512265),("小白",24,"男",44489755,875452123);



insert into (name,age,sex,phone,qq) values ("小花",20,"女",4542547544,887455);



	insert into stu(name,age,sex,phone,cerate_time,qq)values("小南牛",20,"女",189988556,54542364,5478921);



 insert into stu(name,age,sex,cerate_time,qq) values ("小花",18,"女",4854546464,4489875454);	

	



insert into stu(name,age,sex,phone,cerate_time,qq)values("白白菜",19,"男",45421546515,788545542);


id

title 

text

cerate_time

分类

name id


浏览


回复

置顶









insert into stu (name,sex) values('小明','男'),('小花','女');


insert into stu (name,sex,age,phone,qq) values ('小白','女','28',18989844552,'551987658'),('小c','女','23',18989844552,'551987658');



insert into stu (name,sex,age,phone,qq) values ('小顺','女','18',13996988992,'455228542'),('小菜','男','28',1488555452,'455224544'),('小男','女','38',13996988992,'455228542');

 insert into stu (name,qq) values ('小花化',123456789);




-- 增加
insert into stu (name,sex,age,phone,qq) values ('顺子','太监',18,166887123,45578546);


-- 修改
update stu set name='hello 数据库'  where id=11;

-- 删除
delete stu where id=9;


-- 看
select * from stu;



insert into 表名 （属性） values （值）；



update 表名 set  属性=值   where id=num;


delete 表名 where id=num;













 





