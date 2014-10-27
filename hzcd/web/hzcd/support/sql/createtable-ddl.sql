--创建数据库
CREATE database hzcd;

--创建后台用户表
CREATE TABLE su_operator(
  id CHAR(32) NOT NULL,
  name VARCHAR(30),
  username VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  creation_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



--系统参数
CREATE TABLE sys_option(
  id CHAR(32) NOT NULL,
  name VARCHAR(30) NOT NULL,
  nvalue VARCHAR(500) NOT NULL,
  description VARCHAR(500) NULL,
  modify_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--公司的产品表
CREATE TABLE eb_production(
  id CHAR(32) NOT NULL,
  title VARCHAR(300) NOT NULL,
  content VARCHAR(5000) NOT NULL,
  url VARCHAR(300) NULL,
  creation_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--新闻资讯
CREATE TABLE eb_info(
  id CHAR(32) NOT NULL,
  title VARCHAR(300) NOT NULL,
  content VARCHAR(5000) NOT NULL,
  editor VARCHAR(30) NULL,
  url VARCHAR(300) NULL,
  creation_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--合作伙伴
CREATE TABLE eb_partner(
  id CHAR(32) NOT NULL,
  title VARCHAR(300) NOT NULL,
  content VARCHAR(5000) NOT NULL,
  icon VARCHAR(300) NOT NULL,
  url VARCHAR(300) NULL,
  creation_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--招聘信息
CREATE TABLE eb_recruitment(
  id CHAR(32) NOT NULL,
  name VARCHAR(300) NOT NULL,
  description VARCHAR(1000) NOT NULL,
  requirement VARCHAR(1000) NOT NULL,
  apply VARCHAR(1000) NULL,
  creation_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--用户留言
CREATE TABLE eb_message(
  id CHAR(32) NOT NULL,
  name VARCHAR(100) NOT NULL,
  mail VARCHAR(100) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  title VARCHAR(500) NOT NULL,
  content VARCHAR(5000) NOT NULL,
  creation_time TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;