<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$link=mysql_connect("localhost","root","");
	echo"<hr/><pre>";
	if(mysql_errno()){
		exit("数据库链接失败，错误代码：".mysql_errno()."错误描述".mysql_error());
	}
	if(!mysql_query("CREATE DATABASE IF NOT EXISTS XUEBIANCHENG;")){
		exit("数据库不存在同时创建失败");
	};
	if(!mysql_select_db('XUEBIANCHENG')){
		exit("数据库选择失败");
	}
	if(!mysql_query("CREATE TABLE IF NOT EXISTS XUEBIANCHENG(
ID INT UNSIGNED NOT NULL  AUTO_INCREMENT PRIMARY KEY,
USERNAME VARCHAR(32) NOT NULL UNIQUE,
PASSWORD CHAR(32) NOT NULL,
LOGINID VARCHAR(32) NOT NULL UNIQUE,
INDEX USERNAME_INDEX(USERNAME),
INDEX LOGINID_INDEX(LOGINID)
)ENGINE=MyISAM DEFAULT CHARSET=UTF8;
")){
		exit("数据表不存在同时创建失败");
	};

	mysql_set_charset('utf8');
?>