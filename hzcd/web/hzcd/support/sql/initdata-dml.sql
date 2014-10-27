--默认一个管理账号
INSERT INTO su_operator(id,name,username,password) 
VALUES('00000000000000000000000000000000','徐安','xuan','123456');
INSERT INTO su_operator(id,name,username,password) 
VALUES('00000000000000000000000000000001','创鼎科技','hzcd','hzcd2014');

--一些默认的系统参数
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000000','tips.recruitment','花一分钟看看下面的招聘信息，也许从此让你走上了人生的巅峰时刻，你需要我们，我们更需要你！','提示信息：招聘页中的');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000001','tips.contact','一个人在等，是一种守望，一种守候。 一个人在等，是一种境界，是另一种优雅。 而我们在等，是你的联系，你的关注。','提示信息：联系我们页中的');

INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000010','company.address','地址：杭州市拱墅区康桥工业园康政路22号行政楼4楼','公司信息：地址');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000011','company.tel','0571-88472291、88472261、88493371-8016','公司信息：座机电话');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000012','company.phone','13305717509','公司信息：手机');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000013','company.fax','0571-88472292','公司信息：传真');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000014','company.mail','13305717509@189.cn、13305717509@163.com','公司信息：邮箱');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000015','company.zipcode','310015','公司信息：邮编');

--公司简介
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000020','about.info','杭州创鼎科技有限公司是一家专业从事智能化系统工程、软件系统工程、电气成套设备的设计、研发、安装、调试、 技术服务及相关产品生产销售的综合性高科技企业联合体，并已通过iso9001:2000质量管理体系认证。 目前约有员工100名，6个分支机构和代表处（杭州 上海 南京 宁波 绍兴 义乌），2个实验室及1个培训机构， 3个成套加工基地，2个长期合作高校基地。我们的愿景是：汇聚全球英才，矢志突破创新，赋予客户独特竞争优势， 助力社会迎接重大挑战，创造可持续价值。我们的价值观:引领我们取得最佳绩效的同时秉承最高道德标准。 勇担责任：致力于符合道德规范的、负责任的行为。 追求卓越：取得卓越的业绩和运营成果。 矢志创新：敢于创新，创造可持续的价值。','公司介绍页面中关于我们的介绍');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000021','about.developer.pic','http://www.hzcd.com/hzcd/file/about_fa_zhan_lc.jpg','公司介绍页中，公司发展历程的图片');
INSERT INTO sys_option(id,name,nvalue,description) 
VALUES('00000000000000000000000000000022','about.tip','世界面临种种挑战，我们总有答案，那就是不断创新—这是创鼎永远不变的主题。','公司介绍页中，提示语');

--产品初始化
INSERT INTO eb_production(id,title,content,url) 
VALUES('00000000000000000000000000000001','冰蓄冷中央空调系统','电网低谷低电价时以冰的形式将能量储存起来，供用电高峰时空调使用，从而节约电能。','http://www.hzcd.net/hzcd/file/product1.jpg');
INSERT INTO eb_production(id,title,content,url) 
VALUES('00000000000000000000000000000002','智能建筑中央空调系统','中央空调系统的能耗一般占整座建筑能耗的60%以上，我们一直致力于变频控制技术、智慧流量调节、能耗控制软件的研究。','http://www.hzcd.net/hzcd/file/product2.jpg');
INSERT INTO eb_production(id,title,content,url) 
VALUES('00000000000000000000000000000003','氨制冷系统','安全可靠，高效节能是氨制冷技术的发展趋势，我们拥有国内领先的高效节能专利控制软件。','http://www.hzcd.net/hzcd/file/product3.jpg');
INSERT INTO eb_production(id,title,content,url) 
VALUES('00000000000000000000000000000004','脱硫脱硝工程','中国能源消费长期以煤炭为主，二氧化硫及碳氧化合物排放总量位居世界第一，脱硫和脱硝成为大气污染治理最主要的关注点。','http://www.hzcd.net/hzcd/file/product4.jpg');






