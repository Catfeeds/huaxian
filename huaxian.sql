-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 29 日 00:41
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `huaxian`
--

-- --------------------------------------------------------

--
-- 表的结构 `tr_admin`
--

CREATE TABLE IF NOT EXISTS `tr_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `adminid` varchar(20) NOT NULL COMMENT '工号',
  `adminname` varchar(100) DEFAULT NULL COMMENT '管理员姓名',
  `role` int(10) NOT NULL COMMENT '角色',
  `adminpassword` varchar(255) NOT NULL COMMENT '管理员密码',
  `adminphone` varchar(100) NOT NULL COMMENT '手机号码',
  `adminmail` varchar(100) NOT NULL COMMENT '邮箱',
  `time` int(20) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `tr_admin`
--

INSERT INTO `tr_admin` (`id`, `adminid`, `adminname`, `role`, `adminpassword`, `adminphone`, `adminmail`, `time`) VALUES
(4, 'admin', 'admin', 1, '21232f297a57a5a743894a0e4a801fc3', '15611111111', '123@qq.com', 1500953409),
(38, '21234', NULL, 5, '202cb962ac59075b964b07152d234b70', '15538191283', '2311478620@qq.com', 1527324093),
(37, 'manage', NULL, 14, 'e10adc3949ba59abbe56e057f20f883e', '18749813741', '7518809343@qq.com', 1527299299),
(36, 'admins', NULL, 5, '2aefc34200a294a3cc7db81b43a81873', '15538191283', '2311478620@qq.com', 1526610998);

-- --------------------------------------------------------

--
-- 表的结构 `tr_basics`
--

CREATE TABLE IF NOT EXISTS `tr_basics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `health` text NOT NULL COMMENT '卫生',
  `culture` text NOT NULL COMMENT '文化',
  `edu` text NOT NULL COMMENT '教育',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tr_basics`
--

INSERT INTO `tr_basics` (`id`, `health`, `culture`, `edu`, `user`, `time`) VALUES
(1, '滑县卫生系统共有27加公立医疗机构，其中包括滑县人民医院、滑县中医院、滑县中心医院等3家县级医疗单位，22个乡镇卫生院和县卫生防疫站、县妇幼保健院两家防疫保健机构。拥有1230张床位。全系统1670名卫生人员中有卫生专业技术人员735名，具有副高以上职称者23人，中级职称者234人，初级职称者455人。房屋总建筑面积90864平方米。产业集聚区辖区内有滑县人民医院、新滑医院、产业集聚区社区医疗服务中心、秦剑皮肤病医院、永安妇科医院、妇幼保健院、正骨医院、五官医院七家医院，年接诊量70万人次。', '滑县历史悠久，文化灿烂，是华夏文化的主要发祥地之一。境内名胜古迹众多，著名的瓦岗寨遗址、国家级重点文物明福寺塔、欧阳书院正在开发建设。滑县木版年画、大弦戏、大平调等被列入国家级非物质文化遗产名录，道口锡器、秦氏绢艺、安绣、故道家纺老粗布等民间工艺驰名中外。已有近400年历史的地方特产道口烧鸡被誉为“中华第一鸡”，荣获国家级传统知名品牌原产地域保护。全县共组织实施科技项目10项，其中国家级项目1项，省级项目9项，全年完成重大科技成果2项。专利申请量达到221件，授权量133件。产业集聚区高新技术企业5家，发明专利和自有知识产权拥有量日渐提升。', '截止2012年，滑县共有各级各类学校488所，特殊教育学校1所，教师进修学校1所，普通高中6所，职业高中2所，初级中学55所，小学319所，幼儿园104所。产业集聚区共有英民中学、英民小学、第六高级中学、裳华职业中专等学校12个，2017年底在校学生23191人，教职工1139人。', 'admin', '2018-05-21 15:38:33');

-- --------------------------------------------------------

--
-- 表的结构 `tr_business`
--

CREATE TABLE IF NOT EXISTS `tr_business` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL COMMENT '招商引资内容',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='招商引资表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tr_business`
--

INSERT INTO `tr_business` (`id`, `content`, `user`, `time`) VALUES
(1, '11111111111111111111111111', 'admin', '2018-05-14 11:46:27'),
(2, '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;vertical-align:bottom;">\r\n	产业集聚区以农副食品加工、装备制造业为主导产业，服装加工业主新兴产业，煤化工为辅助产业，商贸物流等多产业协调发展。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;vertical-align:bottom;">\r\n	1、<span>装备制造和食品加工两大主导产业增加值</span>30.54亿元，比重63.63%。装备制造企业45<span>家，</span>2017年实现产值123.6亿元，增加值24.1亿元；主要有盼盼木门、艾迪嘉家具、亨泽家居为代表的家居制造企业，2017年实现产值16.9亿元；华泰粮机、中旗农机、中鼎农机为代表的机械加工企业，2017年实现产值19.2亿元。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;vertical-align:bottom;">\r\n	2、<span>食品加工企业</span>23家，2017年实现产值37.3亿元，增加值7.3亿元，主要有烧鸡加工企业16家，2017年实现产值15亿元，增加值3亿元；画宝刚烧鸡年加工烧鸡380<span>万只，产值</span>1.5亿元。永达食品实现产值12.3亿元，增加值2.4亿元，利生面业实现产值4.5亿元，增加值0.9亿元。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;vertical-align:bottom;">\r\n	3、<span>服装加工企业</span>12家，2017年实现产值9亿元，增加值1.8亿元。\r\n</p>\r\n<p class="MsoNormal">\r\n	4、68家规模以上工业企业中，三大主导产业62家，比重91.2%，2017年三大主导产业产值占区内规模以上工业总产值的79.8%。\r\n</p>', 'admin', '2018-05-15 14:40:20'),
(3, '', 'admin', '2018-05-18 09:23:32'),
(4, '<h1 align="center">\r\n	21是大<span style="background-color:#FFFFFF;"></span>事图发个\r\n</h1>\r\n<p align="center">\r\n	111\r\n</p>', 'admin', '2018-05-28 09:48:51');

-- --------------------------------------------------------

--
-- 表的结构 `tr_call`
--

CREATE TABLE IF NOT EXISTS `tr_call` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `call` varchar(225) NOT NULL COMMENT '联系电话',
  `email` varchar(225) NOT NULL COMMENT '邮箱',
  `address` varchar(225) NOT NULL COMMENT '地址',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` varchar(225) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='联系电话表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tr_call`
--

INSERT INTO `tr_call` (`id`, `call`, `email`, `address`, `user`, `time`) VALUES
(1, '15538191283', '2311478620@qq.com', '滑县县城东南部某某大街某某大路123', 'admin', '2018-05-26 09:51:25');

-- --------------------------------------------------------

--
-- 表的结构 `tr_company`
--

CREATE TABLE IF NOT EXISTS `tr_company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '标题',
  `image` varchar(225) NOT NULL COMMENT '图片',
  `description` text NOT NULL COMMENT '描述',
  `content` mediumtext COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='企业之窗表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tr_company`
--

INSERT INTO `tr_company` (`id`, `title`, `image`, `description`, `content`, `user`, `time`) VALUES
(1, 'sfggergg', '/upimages/20180516\\15432cf2281da0696669e253f392f74a.jpg', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。', 'admin', '2018-05-22 15:40:50'),
(3, '13123123', '/upimages/20180516\\23133ef8a6a2b80f1cf136ca20225678.jpg', '1231232', '12313', 'admin', '2018-05-16 11:44:55'),
(4, '123123', '/upimages/20180521\\80be0d00329a91b6ef7409f8d5984e53.jpg', '12222222', '1211111111111111', 'admins', '2018-05-21 09:46:21'),
(5, '1231232', '/upimages/20180521\\ed85077c5a2cde61312e94f4b45d073e.jpg', '12222222222', '122222222222', 'admins', '2018-05-21 09:46:34'),
(6, '222222', '/upimages/20180521\\0a4ccb0be2dd0ebbb90a610784abcec7.jpg', '222222', '222222222', 'admins', '2018-05-21 09:46:50'),
(7, '3312', '/upimages/20180521\\b811944caf0cab3705355e69fe8d2790.jpg', '12312312', '1323123', 'admins', '2018-05-21 09:47:07'),
(8, '555', '/upimages/20180522\\aa057932c802e85e46a5c6cca705a576.jpg', '55555555555河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111', NULL, 'admins', '2018-05-26 14:49:24');

-- --------------------------------------------------------

--
-- 表的结构 `tr_detail`
--

CREATE TABLE IF NOT EXISTS `tr_detail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL COMMENT '园区详情标题',
  `image` varchar(225) NOT NULL COMMENT '园区详情图片',
  `content` mediumtext NOT NULL COMMENT '园区详情详细内容',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` varchar(225) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='园区详情表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tr_detail`
--

INSERT INTO `tr_detail` (`id`, `title`, `image`, `content`, `user`, `time`) VALUES
(4, '大花花', '/upimages/20180515\\a68da368c7fa9651a3c2c68e00807ad4.jpg', '测试使用', 'admin', '2018-05-15 16:09:47'),
(3, '小花花话', '/upimages/20180515\\2e9331617f49440d1eb058911ac5eb42.jpg', 'test', 'admin', '2018-05-15 16:12:28'),
(5, '', '/upimages/20180518\\c846bb249af3f1e9c014709275db9165.jpg', '', 'admin', '2018-05-18 09:32:09'),
(6, '园区详情', '/upimages/20180518\\f100c83656a9f70e7421bfd69c61b271.jpg', '222https://www.baidu.com/https://www.baidu.com/https://www.baidu.com/https://www.baidu.com/', 'admins', '2018-05-26 14:09:16');

-- --------------------------------------------------------

--
-- 表的结构 `tr_dianli`
--

CREATE TABLE IF NOT EXISTS `tr_dianli` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL COMMENT '电力接入申请材料',
  `address` varchar(225) NOT NULL COMMENT '地址',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='电力接入表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_dianli`
--

INSERT INTO `tr_dianli` (`id`, `content`, `address`, `user`, `time`) VALUES
(1, '<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	1、公司营业执照原件复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	2、法人身份证原件复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	3、环境影响评价审批手续\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	4、非法人办理需带委托人申请书，委托人身份证原件和复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	5、公司公章\r\n</p>', '长江路与文明路交叉口向西100米路南电力服务大厅', 'admin', '2018-05-21 15:45:26');

-- --------------------------------------------------------

--
-- 表的结构 `tr_downloadfile`
--

CREATE TABLE IF NOT EXISTS `tr_downloadfile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(225) NOT NULL COMMENT '办事处地址',
  `fileurl` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `content` mediumtext,
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='办事指南页面的文件下载表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tr_downloadfile`
--

INSERT INTO `tr_downloadfile` (`id`, `address`, `fileurl`, `file`, `content`, `user`, `time`) VALUES
(1, '如意湖办事处', '20180517\\34c99a723c1e8b443ccf07c171fbf5da.docx', 'CI框架notes.docx', '3333333', 'admins', '2018-05-18 15:43:25'),
(2, '凉凉', '20180517\\075951b16c6a010ac8aaa81125585cce.txt', '测试用微信商城账号密码.txt', '222222222222', 'admin', '2018-05-21 16:05:51'),
(3, '金水路111', '20180522\\649b60b6641c90a36b1b2531ce932658.txt', 'B2B相关密码.txt', '1111', 'admin', '2018-05-22 10:32:28'),
(4, '金水东路', '20180522\\1a0910f1951c2827718cda75f802d81d.xlsx', '点检表（川莫酒业、易冷链）.xlsx', NULL, 'admin', '2018-05-22 10:33:54');

-- --------------------------------------------------------

--
-- 表的结构 `tr_events`
--

CREATE TABLE IF NOT EXISTS `tr_events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL COMMENT '大事记图片',
  `title` varchar(225) DEFAULT NULL COMMENT '标题',
  `description` varchar(225) DEFAULT NULL COMMENT '描述',
  `content` mediumtext COMMENT '内容',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='大事记表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tr_events`
--

INSERT INTO `tr_events` (`id`, `image`, `title`, `description`, `content`, `user`, `time`) VALUES
(1, '/upimages/20180514/ebced616324613b5d46f87d939f84d19.jpg', '大事记1', '各乡（镇）人民政府，产业聚集区管理委员会，县人民政府各部门及有关单位:现将《滑县支持招商引资项目建设暂行办法》印发给你们，请认真参照执行。', NULL, 'admin', '2018-05-14 18:39:20'),
(4, '/upimages/20180515\\0de282ae2b0f04daaf55a45c1ede9dc9.jpg', '123123123', '大事记描述', NULL, 'admins', '2018-05-21 14:15:00'),
(6, '/upimages/20180518\\cf269b3b05160c9f798bee69d0a5fedc.jpg', '112', '大事迹描述', NULL, 'admins', '2018-05-21 14:15:17'),
(7, '/upimages/20180523\\b8214de2c9da48a3f086797126964506.jpg', '测试测试', '深的还是然后也为爱个人个人和我让他火热发挂号费个好人导航跟问题问题玩儿玩儿玩儿外国人', NULL, 'admin', '2018-05-23 14:34:29'),
(8, '/upimages/20180523\\54e772b49186e18a53208f573f8af355.jpg', '1111', '213123123', NULL, 'admin', '2018-05-23 16:07:46'),
(9, '/upimages/20180523/6a5444ecbba7bec5cc1c86bb7a6c7fa7.jpg', '2213231', '2222', NULL, 'admin', '2018-05-23 16:09:50'),
(10, '/upimages/20180526\\48bcca83c0c46dff228a06f7125d2fa9.jpg', '成交1个亿', '与某大型企业签订合同，成交了一个亿', NULL, 'admins', '2018-05-26 10:26:49');

-- --------------------------------------------------------

--
-- 表的结构 `tr_file`
--

CREATE TABLE IF NOT EXISTS `tr_file` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(225) NOT NULL COMMENT '文件名',
  `fileurl` varchar(225) NOT NULL COMMENT '文件路径',
  `content` mediumtext NOT NULL COMMENT '文件内容',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='政府文件表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tr_file`
--

INSERT INTO `tr_file` (`id`, `file`, `fileurl`, `content`, `user`, `time`) VALUES
(5, '综合业务部3502郑浩20180515日报111', '20180515\\c0267a75338317d90ea708757ae47c1e.doc', '<ol>\r\n	<li>\r\n		<span style="font-family:Arial Black;">哈哈</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:Arial Black;">梵蒂冈</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:Arial Black;">的感觉</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:Arial Black;">嗯u</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:Arial Black;">回家</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:Arial Black;">地方</span> <span style="font-family:SimSun;"><span style="font-family:NSimSun;"></span></span>\r\n	</li>\r\n</ol>', 'admin', '2018-05-28 09:39:36'),
(4, '综合业务部3502郑浩20180515日报', '20180515\\135687397841dbda972314a8b2d0275d.doc', '1111111', 'admins', '2018-05-22 08:26:45'),
(3, '综合业务部3502郑浩20180515日报', '20180515\\87e27359241ec87a9d4773ee6a79dfc9.doc', '11111111', 'admins', '2018-05-22 08:26:52'),
(6, '测试', '20180517\\e2226875a0374d45977eeb100f1d7add.jpg', '&nbsp;333333', 'admins', '2018-05-22 08:26:31'),
(7, 'CI框架111note', '20180518\\36ebfb0a1861a80b17c4fe38ef28eea2.docx', '<p class="MsoNormal" align="justify" style="margin-left:0pt;text-indent:28pt;text-align:justify;">\r\n	1、从“招商引资”到“招商选资”转变。1111111\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0pt;text-indent:28pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且在“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28pt;text-align:justify;">\r\n	积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admins', '2018-05-22 08:26:15'),
(9, '进言献策', '', '<h1 align="center">\r\n	<span style="font-family:KaiTi_GB2312;">进言献策</span>\r\n</h1>\r\n<p>\r\n	<span style="font-family:KaiTi_GB2312;font-size:18px;">-</span><span style="font-family:KaiTi_GB2312;font-size:18px;"><a href="https://www.baidu.com" target="_blank">进言献策</a></span> \r\n</p>\r\n<p>\r\n	-进言献策-进言献策-进言献策-进言献策-进言献策-进言献策-进言献策\r\n</p>\r\n<p>\r\n	<img alt="" src="/huaxian/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20180526/20180526021843_39792.png" /> \r\n</p>\r\n<p>\r\n	<img alt="" src="/huaxian/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20180526/20180526022103_41409.jpg" /><img alt="" src="/huaxian/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20180526/20180526022137_30711.jpg" /> \r\n</p>\r\n<p>\r\n	<img alt="" src="/huaxian/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20180526/20180526021212_66271.png" /> \r\n</p>', 'admins', '2018-05-27 10:02:56');

-- --------------------------------------------------------

--
-- 表的结构 `tr_gongshui`
--

CREATE TABLE IF NOT EXISTS `tr_gongshui` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `address` varchar(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='供水接入表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tr_gongshui`
--

INSERT INTO `tr_gongshui` (`id`, `content`, `address`, `user`, `time`) VALUES
(1, '11111111111111222', '111212', 'admin', '2018-05-17 08:48:18'),
(2, '<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n		1、公司营业执照原件复印件\r\n	</p>\r\n	<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n		2、法人身份证原件复印件\r\n	</p>\r\n	<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n		3、环境影响评价审批手续\r\n	</p>\r\n	<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n		4、非法人办理需带委托人申请书，委托人身份证原件和复印件\r\n	</p>\r\n	<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n		5、公司公章\r\n	</p>\r\n</p>', '长江路与文明路交叉口向西100米路南电力服务大厅', 'admin', '2018-05-28 15:19:58');

-- --------------------------------------------------------

--
-- 表的结构 `tr_help`
--

CREATE TABLE IF NOT EXISTS `tr_help` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '标题',
  `content` mediumtext NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='扶贫攻坚表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tr_help`
--

INSERT INTO `tr_help` (`id`, `title`, `content`, `user`, `time`) VALUES
(2, '222222342', '345354535大概是给对方&nbsp;', 'admin', '2018-05-18 08:54:53'),
(6, '44444阿日发售发送多个阿日发售发送多个阿日发售发送多个', '阿日发售发送多个', 'admin', '2018-05-22 10:00:50');

-- --------------------------------------------------------

--
-- 表的结构 `tr_helpdongtai`
--

CREATE TABLE IF NOT EXISTS `tr_helpdongtai` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '标题',
  `content` mediumtext NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='扶贫动态表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tr_helpdongtai`
--

INSERT INTO `tr_helpdongtai` (`id`, `title`, `content`, `user`, `time`) VALUES
(1, '111', '111', 'admin', '2018-05-22 10:10:24'),
(2, '222阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个阿日发售发送多个', '2222222', 'admin', '2018-05-22 10:10:32');

-- --------------------------------------------------------

--
-- 表的结构 `tr_imgs`
--

CREATE TABLE IF NOT EXISTS `tr_imgs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL COMMENT '轮播图标题',
  `image` varchar(225) NOT NULL COMMENT '图片路径',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播图表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tr_imgs`
--

INSERT INTO `tr_imgs` (`id`, `name`, `image`, `user`, `time`) VALUES
(3, 'Alipay233456', '/upimages/20180511\\b0f259296e761a68546cccc7172c574c.jpg', 'admins', '2018-05-26 16:13:36'),
(10, '滑县集聚区夜景', '/upimages/20180526\\55e03c34c57ac016090f8674f94a0a07.png', 'admins', '2018-05-26 10:51:22'),
(6, '123', '/upimages/20180515\\db83a218c65b7057b14fab45235bf76c.jpg', 'admin', '2018-05-15 16:19:21'),
(7, '满天星', '/upimages/20180511\\35f395f34e3bee41796ea39bdeb5d279.jpg', 'admins', '2018-05-21 09:29:14'),
(8, '小灯泡', '/upimages/20180512\\1b5f1d245fc89068cd15ac42eaf484db.jpg', 'admins', '2018-05-21 09:29:27'),
(9, '这是谁', '/upimages/20180525\\e2101464e607dadcc5bfd73caefde51f.png', 'admins', '2018-05-25 14:30:38');

-- --------------------------------------------------------

--
-- 表的结构 `tr_jinhe`
--

CREATE TABLE IF NOT EXISTS `tr_jinhe` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL COMMENT '图片',
  `title` varchar(225) DEFAULT NULL COMMENT '标题名称',
  `content` mediumtext COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='锦和新城表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tr_jinhe`
--

INSERT INTO `tr_jinhe` (`id`, `image`, `title`, `content`, `user`, `time`) VALUES
(1, '/upimages/20180515\\a21b0fca9d590ac2268e4f0a083aab80.jpg', '12112', '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。11111111111\r\n</p>', 'admin', '2018-05-15 15:53:25'),
(2, '/upimages/20180515\\7d665fdd98fffeefcd200ee861344b52.jpg', '12222222', '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。2222222222222222\r\n</p>', 'admin', '2018-05-15 15:53:50'),
(3, '/upimages/20180515\\46f5d55488209c2715e904e901a7a7b0.jpg', '333333333', '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。33333333333\r\n</p>', 'admin', '2018-05-15 15:54:01'),
(6, '/upimages/20180518\\30ea0e72303f792ada472557495db8f1.jpg', '3333555', '333333333333', 'admin', '2018-05-21 16:25:40'),
(7, '/upimages/20180521\\be5a8a2e00b088009b990d302db4cc76.jpg', '锦和新城前', NULL, 'admin', '2018-05-21 16:25:33');

-- --------------------------------------------------------

--
-- 表的结构 `tr_leader`
--

CREATE TABLE IF NOT EXISTS `tr_leader` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '姓名',
  `image` varchar(225) NOT NULL COMMENT '照片',
  `position` varchar(225) NOT NULL COMMENT '职位',
  `work` varchar(225) NOT NULL COMMENT '工作',
  `statue` varchar(225) NOT NULL COMMENT '是否展示在页面上',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='党政领导表' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tr_leader`
--

INSERT INTO `tr_leader` (`id`, `name`, `image`, `position`, `work`, `statue`, `user`, `time`) VALUES
(1, '领导1', '/upimages/20180512\\1eaeab243847b3fc43a55913e1dd6461.jpg', '财务局和啥啥局和啥啥局', '各乡（镇）人民政府，产业聚集区管理委员会，县人民政府各部门及有关单位\r\n1、群威群胆\r\n\r\n\r\n2、我问问', '是', 'admin', '2018-05-16 18:09:53'),
(9, '郑浩', '/upimages/20180515\\707ab5863907f36e4dd8e68d7d3daa62.jpg', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊哈哈哈哈哈哈哈哈', '打', '否', 'admins', '2018-05-25 14:04:45'),
(7, '超', '/upimages/20180515\\a2e6fa3447afe4f41736f4970bd44ea2.jpg', '部长', '桂纶镁开发班列够官网。', '否', 'admins', '2018-05-25 14:04:07'),
(8, '郑浩', '/upimages/20180515\\6e6b965fd355273a4c22da5c56a409da.jpg', '职工', '带领大家打', '否', 'admins', '2018-05-25 16:30:19'),
(17, '11111', '/upimages/20180515\\ed820f1a6e4bd8f1a48147c54c3e49b0.jpg', '1', '1', '否', 'admin', '2018-05-16 17:59:21'),
(18, '111333', '/upimages/20180518\\437e4c6550e1b6ee9523948e89a9f2a6.jpg', '', '3333', '是', 'admin', '2018-05-18 09:13:49'),
(19, '秦风', '/upimages/20180526\\f0da89f535b03aabd13b2c4b240faf56.png', '', '进言献策-进言献策-进言献策-进言献策-进言献策-进言献策-进言献策-进言献策-进言献策-进言献策-', '是', 'admins', '2018-05-26 09:56:23');

-- --------------------------------------------------------

--
-- 表的结构 `tr_link`
--

CREATE TABLE IF NOT EXISTS `tr_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(200) NOT NULL COMMENT '链接名称',
  `linkurl` varchar(200) NOT NULL COMMENT '链接地址',
  `image` varchar(225) NOT NULL COMMENT '链接图片',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` varchar(225) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tr_link`
--

INSERT INTO `tr_link` (`id`, `linkname`, `linkurl`, `image`, `user`, `time`) VALUES
(12, '', 'www.baidu.com', '/upimages/20180510\\9191322321aaa731e0311a7e6cbd14c3.jpg', 'admin', '2018-05-10 11:13:46'),
(10, '', '123213', '/upimages/20180510\\eb52d078064cdb1a9adc1ddd0a2b462c.jpg', 'admin', '2018-05-10 11:06:05'),
(11, '', '123123123', '/upimages/20180510\\9fc4e2d74e7938adf3c7641f0e029d4e.jpg', 'admin', '2018-05-10 11:08:06'),
(13, '', '12132', '/upimages/20180512\\80fe30807e006f6a5f74d27000a5b346.jpg', 'admin', '2018-05-12 14:28:22'),
(14, '', '', '/upimages/20180512\\a82278f593ba575b1636ab3bf6e7d7d6.jpg', 'admin', '2018-05-12 14:29:08'),
(16, '', '', '/upimages/20180518\\fe31e495471c1876ef73e5f1aaeb6f4e.jpg', 'admin', '2018-05-18 10:06:03'),
(18, '', 'https://www.baidu.com/', '/upimages/20180526\\8b814d94b4dd240435af76bc04bb586a.png', 'admins', '2018-05-26 10:54:35'),
(19, '', 'https://www.baidu.com/', '/upimages/20180526\\5015e8d84ee3158af38bacf103bab43d.png', 'admins', '2018-05-26 14:17:10');

-- --------------------------------------------------------

--
-- 表的结构 `tr_liucheng`
--

CREATE TABLE IF NOT EXISTS `tr_liucheng` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='企业入驻流程图表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_liucheng`
--

INSERT INTO `tr_liucheng` (`id`, `image`, `user`, `time`) VALUES
(1, '/upimages/20180525\\23ed360720f3409519cf227e4636689e.png', 'admin', '2018-05-25 15:12:34');

-- --------------------------------------------------------

--
-- 表的结构 `tr_liutong`
--

CREATE TABLE IF NOT EXISTS `tr_liutong` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL,
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='六通一平情况表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_liutong`
--

INSERT INTO `tr_liutong` (`id`, `content`, `user`, `time`) VALUES
(1, '<h1 align="left" class="MsoNormal" style="text-align:center;text-indent:28pt;margin-left:0pt;">\r\n	<span style="font-family:KaiTi_GB2312;background-color:#FFE500;">六通一平</span> \r\n</h1>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;margin-left:0pt;">\r\n	1、<span>从</span>“招商引资”到“招商选资”转变。111111\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;margin-left:0pt;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admins', '2018-05-27 09:19:59');

-- --------------------------------------------------------

--
-- 表的结构 `tr_main`
--

CREATE TABLE IF NOT EXISTS `tr_main` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='主导产业定位表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tr_main`
--

INSERT INTO `tr_main` (`id`, `content`, `user`, `time`) VALUES
(1, '', 'admin', '2018-05-18 09:43:54'),
(2, '1111111111111111', 'admin', '2018-05-18 09:44:49'),
(3, '<h1 align="center" style="text-align:center;color:#000000;text-indent:0px;font-style:normal;font-weight:700;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	33333333<span style="font-family:KaiTi_GB2312;"><span style="color:#E53333;font-family:KaiTi_GB2312;">哈哈哈\r\n	<hr />\r\n	</span></span> \r\n	<p>\r\n		<span style="font-family:KaiTi_GB2312;"><span style="color:#E53333;font-family:KaiTi_GB2312;"><span style="color:#000000;font-family:SimSun;font-size:18px;"><u>欢迎用户查</u></span><span style="color:#000000;font-family:SimSun;font-size:18px;"><u>看</u></span></span></span> \r\n	</p>\r\n<span style="font-family:KaiTi_GB2312;"><span style="color:#E53333;font-family:KaiTi_GB2312;"> \r\n	<table bordercolor="#000000" style="width:539.27px;border-collapse:collapse;" border="1" cellspacing="0" cellpadding="2">\r\n		<tbody>\r\n			<tr>\r\n				<td style="font-style:normal;font-weight:400;">\r\n					<p>\r\n						<span style="color:#E53333;">1</span> \r\n					</p>\r\n				</td>\r\n				<td style="font-style:normal;font-weight:400;">\r\n					哈哈哈<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="font-style:normal;font-weight:400;">\r\n					2<br />\r\n				</td>\r\n				<td style="font-style:normal;font-weight:400;">\r\n					啦啦<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="font-style:normal;font-weight:400;">\r\n					3<br />\r\n				</td>\r\n				<td style="font-style:normal;font-weight:400;">\r\n					呵呵呵<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					4<br />\r\n				</td>\r\n				<td>\r\n					dfasf<br />\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</span></span> \r\n	<hr />\r\n</h1>\r\n<span style="color:#000000;font-family:KaiTi_GB2312;font-size:12px;font-style:normal;font-weight:400;text-decoration:none;background-color:transparent;"><span style="color:#E53333;font-family:KaiTi_GB2312;"></span></span> \r\n<p style="text-align:center;color:#000000;text-indent:0px;font-style:normal;font-weight:700;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	<span style="font-family:KaiTi_GB2312;"><span style="color:#E53333;font-family:KaiTi_GB2312;"><span style="font-family:;">欢迎用户查看111</span></span></span> \r\n</p>', 'admins', '2018-05-27 10:20:30');

-- --------------------------------------------------------

--
-- 表的结构 `tr_message`
--

CREATE TABLE IF NOT EXISTS `tr_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '问题',
  `content` text NOT NULL COMMENT '回复内容',
  `good` int(11) NOT NULL DEFAULT '0' COMMENT '是否为精选留言1是0否',
  `hot` int(11) NOT NULL DEFAULT '0' COMMENT '是否为热门问题1是0否',
  `user` varchar(225) NOT NULL COMMENT '回复人',
  `time` datetime NOT NULL COMMENT '回复时间',
  `yonghu` varchar(225) NOT NULL COMMENT '用户',
  `time1` datetime NOT NULL COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='进言献策表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tr_message`
--

INSERT INTO `tr_message` (`id`, `title`, `content`, `good`, `hot`, `user`, `time`, `yonghu`, `time1`) VALUES
(1, '我想买口红', '买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！', 1, 1, 'admins', '2018-05-25 14:12:53', '15538191283', '2018-05-24 12:10:20'),
(6, 'szdggfgh', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-24 15:20:11'),
(4, '4444444', '前我22222222222', 0, 1, 'admin', '2018-05-24 14:52:24', '13403991030', '2018-05-23 14:37:18'),
(7, 'szdggfgh', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-24 15:20:28'),
(8, 'sdfasfsf', 'sdgsdgs', 1, 0, 'admin', '2018-05-24 16:14:38', '15538191281', '2018-05-24 15:48:11'),
(10, '222222', 'sdfgdgsg', 0, 1, 'admin', '2018-05-24 16:15:34', '15538191281', '2018-05-24 15:48:26'),
(11, '3333', '222222', 0, 0, 'admin', '2018-05-24 15:49:20', '15538191281', '2018-05-24 15:48:30'),
(12, '4444', 'wewtdsg', 1, 0, 'admin', '2018-05-24 16:14:30', '15538191281', '2018-05-24 15:48:35'),
(13, '55', 'sdgdgdfgdfg', 1, 0, 'admin', '2018-05-24 16:14:23', '15538191281', '2018-05-24 16:13:57'),
(14, '22222', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-25 14:40:11'),
(15, '33333', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-25 14:51:56'),
(16, '2018年5月26日留言，进言献策，blablablablablabla。。。', '', 0, 0, '', '0000-00-00 00:00:00', '18749813741', '2018-05-26 09:30:40'),
(17, '在这里输入留言。win10有一款老牌的IE，现在又有了edge，IE被放到了windows附件里。通常我们可以这样理解，浏览器是上网用的，有一个浏览器，就可以上网，不喜欢的话，可以用这个浏览器去下载另一个，保留两个的话，可以理解为，一个是pc用，一个是平板模式用，但实际上，微软把ie放到了附件里，是一个与以往win使用习惯不同的地方。不知道这里有个什么逻辑？\r\n    win10有一款老牌的IE，现在又有了edge，IE被放到了windows附件', '好的。。。。。。。。', 1, 1, 'admins', '2018-05-26 14:59:31', '18749813741', '2018-05-26 09:32:34'),
(18, 'win10有一款老牌的IE，现在又有了edge，IE被放到了windows附件里。通常我们可以这样理解，浏览器是上网用的，有一个浏览器，就可以上网，不喜欢的话，可以用这个浏览器去下载另一个，保留两个的话，可以理解为，一个是pc用，一个是平板模式用', '', 0, 0, '', '0000-00-00 00:00:00', '18749813741', '2018-05-27 09:25:10');

-- --------------------------------------------------------

--
-- 表的结构 `tr_messages_code`
--

CREATE TABLE IF NOT EXISTS `tr_messages_code` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `mobile` varchar(20) NOT NULL COMMENT '电话号码',
  `code` varchar(10) NOT NULL COMMENT '验证码',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `statue` int(11) NOT NULL COMMENT '验证码状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `tr_messages_code`
--

INSERT INTO `tr_messages_code` (`id`, `mobile`, `code`, `create_at`, `update_at`, `statue`) VALUES
(10, '13271505230', '959249', '2017-10-13 11:11:19', '2017-10-13 11:11:19', 1),
(9, '18595920787', '345051', '2017-10-11 14:55:02', '2017-10-11 14:55:02', 1),
(11, '13027731857', '706121', '2017-10-13 11:14:11', '2017-10-13 11:14:11', 1),
(5, '13403991032', '602431', '2017-10-10 09:25:10', '2017-10-10 09:25:10', 2),
(12, '13403991030', '804912', '2017-10-23 14:04:57', '2017-10-23 14:04:57', 1),
(13, '18239153728', '914017', '2018-04-18 09:26:09', '2018-04-18 09:26:09', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tr_neibufile`
--

CREATE TABLE IF NOT EXISTS `tr_neibufile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(225) NOT NULL COMMENT '文件名',
  `fileurl` varchar(225) NOT NULL COMMENT '路径',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='内部文件表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tr_neibufile`
--

INSERT INTO `tr_neibufile` (`id`, `file`, `fileurl`, `user`, `time`) VALUES
(1, '5-6月三分部培训.xlsx', '20180521\\32a8465be447bac0fd6c76a25004af86.xlsx', 'admin', '2018-05-21 17:57:09'),
(2, 'tp5培训.docx', '20180521\\66bc9f536ffe8d750c14ea7f7eaba824.docx', 'admin', '2018-05-21 18:10:40'),
(8, '微擎实例notes.docx', '20180522\\abdb96efe32b3abc479aff11e0ff10dd.docx', 'admin', '2018-05-22 17:39:01'),
(6, '爱尚易购相关密码.txt', '20180521\\2945e2e57cb74d0b47e048e81867890a.txt', 'admin', '2018-05-21 18:12:51'),
(7, '科技公司5月份第3周工作总结.docx', '20180521\\c60c628712fa619d269924051a5e68a9.docx', 'admins', '2018-05-21 18:17:47'),
(9, '测试记录文档.xlsx', '20180527\\08a365fcc4c0534c6fea4fa7590fe253.xlsx', 'admins', '2018-05-27 08:19:16');

-- --------------------------------------------------------

--
-- 表的结构 `tr_news`
--

CREATE TABLE IF NOT EXISTS `tr_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '新闻标题',
  `content` mediumtext NOT NULL COMMENT '内容',
  `newstime` date NOT NULL COMMENT '新闻时间',
  `user` varchar(225) NOT NULL COMMENT '上传人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tr_news`
--

INSERT INTO `tr_news` (`id`, `title`, `content`, `newstime`, `user`, `time`) VALUES
(1, '222222223333', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111', '2018-05-19', 'admin', '2018-05-17 14:29:32'),
(5, '新闻一', '234234', '2018-05-25', 'admin', '2018-05-17 14:36:34'),
(6, '园区详情', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111', '2018-05-26', 'admins', '2018-05-26 15:36:44');

-- --------------------------------------------------------

--
-- 表的结构 `tr_notice`
--

CREATE TABLE IF NOT EXISTS `tr_notice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` mediumtext NOT NULL,
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公告表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tr_notice`
--

INSERT INTO `tr_notice` (`id`, `title`, `content`, `user`, `time`) VALUES
(1, '1111', '1111111', 'admin', '2018-05-17 15:03:27'),
(5, '河南省华康最求完美河南省华康最求完美河南省华康最求', '2222222222', 'admins', '2018-05-21 09:28:28'),
(6, '成交1个亿', '<p>\r\n	园区大事记，成交一个亿。\r\n</p>\r\n<p>\r\n	发生了什么事那\r\n</p>\r\n<p>\r\n	为何会有如此大的变化\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'admins', '2018-05-26 15:34:22');

-- --------------------------------------------------------

--
-- 表的结构 `tr_plan`
--

CREATE TABLE IF NOT EXISTS `tr_plan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='远期规划表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tr_plan`
--

INSERT INTO `tr_plan` (`id`, `content`, `user`, `time`) VALUES
(1, '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	1、<span>从</span>“招商引资”到“招商选资”转变。1111111\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admin', '2018-05-15 14:54:40'),
(2, '<img src="/huaxian/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20180526/20180526082103_87670.jpg" alt="" />', 'admin', '2018-05-26 16:21:19');

-- --------------------------------------------------------

--
-- 表的结构 `tr_privilege`
--

CREATE TABLE IF NOT EXISTS `tr_privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `pri_name` varchar(30) NOT NULL COMMENT '权限名',
  `module_name` varchar(30) DEFAULT NULL COMMENT '模块名',
  `controller_name` varchar(30) DEFAULT NULL COMMENT '控制器名',
  `action_name` varchar(30) DEFAULT NULL COMMENT '方法名',
  `parent_id` int(11) DEFAULT NULL COMMENT '父级ID',
  `pri_level` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=262 ;

--
-- 转存表中的数据 `tr_privilege`
--

INSERT INTO `tr_privilege` (`id`, `pri_name`, `module_name`, `controller_name`, `action_name`, `parent_id`, `pri_level`) VALUES
(38, '管理员管理', '', '', '', 0, NULL),
(39, '添加管理员', 'admin', 'Admin', 'add', 38, NULL),
(49, '删除', 'admin', 'Role', 'del', 46, NULL),
(48, '修改', 'admin', 'Role', 'edit', 46, NULL),
(47, '查看', 'admin', 'Role', 'lst', 46, NULL),
(46, '角色列表', 'admin', 'Role', 'lst', 38, NULL),
(45, '添加角色', 'admin', 'Role', 'add', 38, NULL),
(44, '批量删除', 'admin', 'Admin', 'p_del', 40, NULL),
(40, '管理员列表', 'admin', 'Admin', 'lst', 38, NULL),
(41, '查看', 'admin', 'Admin', 'lst', 40, NULL),
(42, '修改', 'admin', 'Admin', 'edit', 40, NULL),
(43, '删除', 'admin', 'Admin', 'del', 40, NULL),
(123, '审核', 'admin', 'Goods', 'checkcar', 120, NULL),
(59, '查看', 'admin', 'Article', 'lst', 58, NULL),
(60, '修改', 'admin', 'Article', 'edit', 58, NULL),
(61, '删除', 'admin', 'Article', 'del', 58, NULL),
(62, '批量删除', 'admin', 'Article', 'p_del', 58, NULL),
(65, '查看', 'admin', 'Articletype', 'lst', 64, NULL),
(66, '修改', 'admin', 'Articletype', 'edit', 64, NULL),
(67, '删除', 'admin', 'Articletype', 'del', 64, NULL),
(68, '批量删除', 'admin', 'Articletype', 'p_del', 64, NULL),
(69, '用户管理', '', '', '', 0, NULL),
(72, '添加用户', 'admin', 'User', 'add', 69, NULL),
(73, '用户列表', 'admin', 'User', 'lst', 69, NULL),
(75, '修改', 'admin', 'User', 'edit', 73, NULL),
(76, '删除', 'admin', 'User', 'del', 73, NULL),
(77, '批量删除', 'admin', 'User', 'p_del', 73, NULL),
(261, '扶贫动态', 'admin', 'Help', 'lst_dongtai', 259, NULL),
(259, '扶贫攻坚', '', '', '', 0, NULL),
(260, '扶贫政策', 'admin', 'Help', 'lst_zhengce', 259, NULL),
(252, '内部资料管理', '', '', '', 0, NULL),
(253, '资料上传', 'admin', 'File', 'add_file', 252, NULL),
(254, '资料下载', 'admin', 'File', 'lst_file', 252, NULL),
(255, '我的资料', 'admin', 'File', 'my_file', 252, NULL),
(257, '删除', 'admin', 'File', 'del', 254, NULL),
(258, '批量删除', 'admin', 'File', 'p_del', 254, NULL),
(91, '查看', 'admin', 'Goods', 'detail', 90, NULL),
(93, '删除', 'admin', 'Goods', 'del', 90, NULL),
(94, '批量删除', 'admin', 'Goods', 'p_del', 90, NULL),
(97, '查看', 'admin', 'Goodsconfig', 'lst', 96, NULL),
(99, '删除', 'admin', 'Goodsconfig', 'del', 96, NULL),
(245, '园区规划', 'admin', 'City', 'lst_yuanqu', 218, NULL),
(104, '查看', 'admin', 'Path', 'detail', 103, NULL),
(105, '删除', 'admin', 'Path', 'del', 103, NULL),
(106, '批量删除', 'admin', 'Path', 'p_del', 103, NULL),
(246, '六通一平情况', 'admin', 'City', 'lst_liutong', 218, NULL),
(111, '查看', 'admin', 'Warehouse', 'detail', 110, NULL),
(112, '删除', 'admin', 'Warehouse', 'del', 110, NULL),
(113, '批量删除', 'admin', 'Warehouse', 'p_del', 110, NULL),
(247, '污水处理厂', 'admin', 'City', 'lst_water', 218, NULL),
(124, '审核', 'admin', 'Path', 'check', 121, NULL),
(125, '审核', 'admin', 'Warehouse', 'check', 122, NULL),
(128, '查看', 'admin', 'Ordergoodscar', 'detail', 127, NULL),
(129, '删除', 'admin', 'Ordergoodscar', 'del', 127, NULL),
(130, '批量删除', 'admin', 'Ordergoodscar', 'p_del', 127, NULL),
(132, '退款', 'admin', 'Ordergoodscar', 'back', 127, NULL),
(148, '还原', 'admin', 'Ordergoodscar', 'recycle_back', 146, NULL),
(147, '查看', 'admin', 'Ordergoodscar', 'recyclelst', 146, NULL),
(137, '确认支付', 'admin', 'Ordergoodscar', 'finish', 127, NULL),
(139, '查看', 'admin', 'Ordergoodsku', 'detail', 138, NULL),
(140, '删除', 'admin', 'Ordergoodsku', 'del', 138, NULL),
(141, '批量删除', 'admin', 'Ordergoodsku', 'p_del', 138, NULL),
(142, '退款', 'admin', 'Ordergoodsku', 'back', 138, NULL),
(143, '确认支付', 'admin', 'Ordergoodsku', 'finish', 138, NULL),
(149, '删除', 'admin', 'Ordergoodscar', 'recycle_del', 146, NULL),
(150, '批量删除', 'admin', 'Ordergoodscar', 'recycle_p_del', 146, NULL),
(151, '查看', 'admin', 'Orderwarehouse', 'detail', 145, NULL),
(152, '删除', 'admin', 'Orderwarehouse', 'del', 145, NULL),
(153, '批量删除', 'admin', 'Orderwarehouse', 'p_del', 145, NULL),
(154, '退款', 'admin', 'Orderwarehouse', 'back', 145, NULL),
(155, '确认支付', 'admin', 'Orderwarehouse', 'finish', 145, NULL),
(156, '查看', 'admin', 'Orderpath', 'detail', 144, NULL),
(157, '删除', 'admin', 'Orderpath', 'del', 144, NULL),
(158, '批量删除', 'admin', 'Orderpath', 'p_del', 144, NULL),
(159, '退款', 'admin', 'Orderpath', 'back', 144, NULL),
(160, '确认支付', 'admin', 'Orderpath', 'finish', 144, NULL),
(171, '查看', 'admin', 'Entrustcarorder', 'detail', 170, NULL),
(172, '删除', 'admin', 'Entrustcarorder', 'del', 170, NULL),
(173, '批量删除', 'admin', 'Entrustcarorder', 'p_del', 170, NULL),
(174, '退款', 'admin', 'Entrustcarorder', 'back', 170, NULL),
(176, '查看', 'admin', 'Entrustcarorder', 'recyclelst', 175, NULL),
(177, '还原', 'admin', 'Entrustcarorder', 'recycle_back', 175, NULL),
(178, '删除', 'admin', 'Entrustcarorder', 'recycle_del', 175, NULL),
(179, '批量删除', 'admin', 'Entrustcarorder', 'recycle_p_del', 175, NULL),
(181, '接受委托', 'admin', 'Entrustcarorder', 'receive', 170, NULL),
(183, '发车', 'admin', 'Entrustcarorder', 'sendcar', 170, NULL),
(184, '托运完成', 'admin', 'Entrustcarorder', 'finish', 170, NULL),
(185, '取消', 'admin', 'Entrustcarorder', 'cancel', 170, NULL),
(244, '远期规划', 'admin', 'City', 'lst_plan', 218, NULL),
(243, '主导产业定位', 'admin', 'City', 'lst_main', 218, NULL),
(191, '添加', 'admin', 'Publicmeg', 'add', 190, NULL),
(192, '修改', 'admin', 'Publicmeg', 'edit', 190, NULL),
(193, '删除', 'admin', 'Publicmeg', 'del', 190, NULL),
(194, '批量删除', 'admin', 'Publicmeg', 'pdel', 190, NULL),
(218, '城市建设', '', '', '', 0, NULL),
(217, '园区详情', 'admin', 'Gov', 'lst_detail', 212, NULL),
(216, '大事记', 'admin', 'Gov', 'lst_events', 212, NULL),
(215, '招商引资', 'admin', 'Gov', 'lst_business', 212, NULL),
(214, '政府文件', 'admin', 'Gov', 'lst_file', 212, NULL),
(212, '政府风貌', '', '', '', 0, NULL),
(213, '党政领导', 'admin', 'Gov', 'lst_leader', 212, NULL),
(221, '基础设施', 'admin', 'City', 'lst_basics', 218, NULL),
(222, '锦和新城', 'admin', 'City', 'lst_jinhe', 218, NULL),
(223, '企业风采', '', '', '', 0, NULL),
(224, '企业之窗', 'admin', 'Company', 'lst_company', 223, NULL),
(250, '弱点接入', 'admin', 'Work', 'lst_ruodian', 227, NULL),
(226, '重点项目', 'admin', 'Company', 'lst_project', 223, NULL),
(227, '办事指南', '', '', '', 0, NULL),
(249, '供水接入', 'admin', 'Work', 'lst_gongshui', 227, NULL),
(229, '企业入驻流程', 'admin', 'Work', 'lst_liucheng', 227, NULL),
(230, '文件列表', 'admin', 'Work', 'lst_file', 227, NULL),
(248, '电力接入', 'admin', 'Work', 'lst_dianli', 227, NULL),
(232, '进言献策', '', '', '', 0, NULL),
(233, '留言列表', 'admin', 'Message', 'lst_all', 232, NULL),
(234, '精选留言', 'admin', 'Message', 'lst_good', 232, NULL),
(235, '热门留言', 'admin', 'Message', 'lst_hot', 232, NULL),
(236, '新闻公告', '', '', '', 0, NULL),
(237, '新闻列表', 'admin', 'News', 'lst_news', 236, NULL),
(238, '公告列表', 'admin', 'News', 'lst_notice', 236, NULL),
(239, '网站管理', '', '', '', 0, NULL),
(240, '轮播图管理', 'admin', 'Website', 'lst_img', 239, NULL),
(241, '友情链接', 'admin', 'Website', 'lst_link', 239, NULL),
(242, '联系我们', 'admin', 'Website', 'lst_call', 239, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tr_project`
--

CREATE TABLE IF NOT EXISTS `tr_project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL COMMENT '图片',
  `description` text NOT NULL COMMENT '描述',
  `content` mediumtext COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  `title` varchar(225) NOT NULL COMMENT '标题',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='重点项目表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tr_project`
--

INSERT INTO `tr_project` (`id`, `image`, `description`, `content`, `user`, `time`, `title`) VALUES
(1, '/upimages/20180516\\cf0204df46240a4b4e005b1cada8973b.jpg', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。', '<p style="font-size:17px;font-family:&quot;color:#666666;background-color:#1884E1;">\r\n	河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。\r\n</p>\r\n<p style="font-size:17px;font-family:&quot;color:#666666;background-color:#1884E1;">\r\n	河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。\r\n</p>', 'admin', '2018-05-16 10:52:39', '重点项目一'),
(2, '/upimages/20180516\\5d3f8e6e135a1c8fd3e46fd96d7b3b28.jpg', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111\r\n河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111\r\n河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111', '<p style="font-size:17px;font-family:" color:#666666;background-color:#1884e1;"=""><br />\r\n	</p>', 'admins', '2018-05-26 14:42:19', '重点项目二');

-- --------------------------------------------------------

--
-- 表的结构 `tr_role`
--

CREATE TABLE IF NOT EXISTS `tr_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `rolename` varchar(100) NOT NULL COMMENT '角色名',
  `content` mediumtext COMMENT '备注',
  `pri_id` varchar(655) DEFAULT NULL COMMENT '权限节点',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `tr_role`
--

INSERT INTO `tr_role` (`id`, `rolename`, `content`, `pri_id`) VALUES
(1, '超级管理员', '有平台所有权限,最大的管理员，此角色类型不能删除。', '38,39,40,41,42,43,44,45,46,47,48,49,69,72,73,75,76,77,212,213,214,215,216,217,251,218,221,222,243,244,245,246,247,223,224,226,227,229,230,248,249,250,232,233,234,235,236,237,238,239,240,241,242,252,253,254,257,258,255,259,260,261'),
(5, '普通管理员', '拥有除了权限管理的所有权限', '38,39,40,41,42,43,44,45,46,47,48,49,69,72,73,75,76,77,212,213,214,215,216,217,251,218,221,222,243,244,245,246,247,223,224,226,227,229,230,248,249,250,232,233,234,235,236,237,238,239,240,241,242,252,253,254,257,258,255,259,260,261'),
(14, 'Mananger', '不能添加角色、办事指南、进言献策', '38,39,40,41,42,43,44,69,72,73,75,76,77,212,213,214,215,216,217,218,221,222,243,244,245,246,247,223,224,226,236,237,238,239,240,241,242,252,253,254,257,258,255,259,260,261');

-- --------------------------------------------------------

--
-- 表的结构 `tr_ruodian`
--

CREATE TABLE IF NOT EXISTS `tr_ruodian` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `address` varchar(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='弱点接入表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_ruodian`
--

INSERT INTO `tr_ruodian` (`id`, `content`, `address`, `user`, `time`) VALUES
(1, '<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	1、公司营业执照原件复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	2、法人身份证原件复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	3、环境影响评价审批手续\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	4、非法人办理需带委托人申请书，委托人身份证原件和复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	5、公司公章\r\n</p>', '长江路与文明路交叉口向西100米路南电力服务大厅', 'admin', '2018-05-21 15:46:19');

-- --------------------------------------------------------

--
-- 表的结构 `tr_smscode`
--

CREATE TABLE IF NOT EXISTS `tr_smscode` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `mobile` varchar(20) NOT NULL COMMENT '电话号码',
  `code` varchar(10) NOT NULL COMMENT '验证码',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `statue` int(11) NOT NULL COMMENT '验证码状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tr_smscode`
--

INSERT INTO `tr_smscode` (`id`, `mobile`, `code`, `create_at`, `update_at`, `statue`) VALUES
(5, '15638151827', '320619', '2017-10-13 08:25:55', '2017-10-13 08:25:55', 1),
(3, '13262750648', '290372', '2017-09-13 18:03:37', '2017-09-13 18:03:37', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tr_user`
--

CREATE TABLE IF NOT EXISTS `tr_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(100) NOT NULL COMMENT '账号',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `time` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- 转存表中的数据 `tr_user`
--

INSERT INTO `tr_user` (`id`, `username`, `password`, `time`) VALUES
(59, '18712341234', 'c4ca4238a0b923820dcc509a6f75849b', '2018-05-26 09:52:11'),
(56, '15324715795', 'e10adc3949ba59abbe56e057f20f883e', '2018-05-25 10:18:16'),
(65, '15538191283', '3f67fd97162d20e6fe27748b5b372509', '2018-05-28 09:21:19'),
(54, '15538191281', '3f67fd97162d20e6fe27748b5b372509', '2018-05-24 09:57:44'),
(57, '18749813741', 'e10adc3949ba59abbe56e057f20f883e', '2018-05-26 08:22:53');

-- --------------------------------------------------------

--
-- 表的结构 `tr_usertype`
--

CREATE TABLE IF NOT EXISTS `tr_usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `typename` varchar(30) NOT NULL COMMENT '类型名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tr_usertype`
--

INSERT INTO `tr_usertype` (`id`, `typename`) VALUES
(1, '货主'),
(2, '车主'),
(3, '库主'),
(4, '物流公司');

-- --------------------------------------------------------

--
-- 表的结构 `tr_water`
--

CREATE TABLE IF NOT EXISTS `tr_water` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='污水处理厂表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_water`
--

INSERT INTO `tr_water` (`id`, `content`, `user`, `time`) VALUES
(1, '<h1 align="justify" class="MsoNormal" style="text-align:center;text-indent:28pt;margin-left:0pt;">\r\n	<span style="color:#E53333;font-family:FangSong_GB2312;">污水处理厂</span> \r\n</h1>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;margin-left:0pt;">\r\n	1、<span>从</span>“招商引资”到“招商选资”转变。111111111111\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;margin-left:0pt;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;text-indent:28pt;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admins', '2018-05-27 09:20:57');

-- --------------------------------------------------------

--
-- 表的结构 `tr_yuanqu`
--

CREATE TABLE IF NOT EXISTS `tr_yuanqu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` mediumtext NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='园区规划表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tr_yuanqu`
--

INSERT INTO `tr_yuanqu` (`id`, `content`, `user`, `time`) VALUES
(1, '<p align="justify" class="MsoNormal" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	园区规划、<span>从</span>“招商引资”到“招商选资”转变。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	1、着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-indent:28.0000pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-indent:28.0000pt;text-align:justify;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-indent:28.0000pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。1111111\r\n</p>', 'admins', '2018-05-26 10:40:21');
INSERT INTO `tr_yuanqu` (`id`, `content`, `user`, `time`) VALUES
(2, '<h1 align="center" class="MsoNormal" style="text-align:justify;color:#000000;text-indent:37.33px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	<span style="color:#003399;">园区规划</span> \r\n</h1>\r\n<h3 align="right" class="MsoNormal" style="text-align:justify;color:#000000;text-indent:37.33px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	<span style="color:#003399;"> --</span><span style="color:#003399;">从</span><span style="color:#003399;">“招商引资”到“招商选资”转变。</span> \r\n	<hr />\r\n</h3>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;color:#000000;text-indent:37.33px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	1、<strong><u><em>着市场经济的发展和世界经济的全球化、一体化发展</em></u></strong>，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n	<table bordercolor="#000000" style="width:100%;" border="1" cellspacing="0" cellpadding="2">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，\r\n				</td>\r\n				<td>\r\n					并且<span>在</span>“引进来”中选优、选强。<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					并且<span>在</span>“引进来”中选优、选强。<br />\r\n				</td>\r\n				<td>\r\n					并且<span>在</span>“引进来”中选优、选强。<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					并且<span>在</span>“引进来”中选优、选强。<br />\r\n				</td>\r\n				<td>\r\n					并且<span>在</span>“引进来”中选优、选强。<br />\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;color:#000000;text-indent:37.33px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;color:#000000;text-indent:37.33px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p align="justify" class="MsoNormal" style="text-align:justify;color:#000000;text-indent:37.33px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal" style="text-align:left;color:#000000;text-indent:0px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>\r\n<p class="MsoNormal" style="text-align:left;color:#000000;text-indent:0px;font-style:normal;font-weight:400;text-decoration:none;margin-left:0px;background-color:transparent;">\r\n	<span style="font-family:SimSun;font-size:18px;font-weight:700;"><u>欢迎用户查</u></span><span style="font-family:SimSun;font-size:18px;font-weight:700;"><u>看</u></span> \r\n</p>\r\n<p>\r\n	<hr />\r\n	<table bordercolor="#000000" style="width:100%;" border="1" cellspacing="0" cellpadding="2">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<br />\r\n				</td>\r\n				<td>\r\n					<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<br />\r\n				</td>\r\n				<td>\r\n					<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<br />\r\n				</td>\r\n				<td>\r\n					<br />\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n<br />\r\n	<hr />\r\n	<p>\r\n		<br />\r\n	</p>\r\n<span> </span>\r\n	<ol>\r\n		<li style="color:#000000;font-style:normal;font-weight:normal;">\r\n			<p style="color:#000000;font-style:normal;font-weight:normal;">\r\n				<span style="font-size:16pt;">pdo_fetchall</span><span style="font-family:宋体;font-size:16pt;">用法：</span>\r\n			</p>\r\n			<p style="color:#000000;font-family:&quot;Calibri&quot;,sans-serif;font-size:10.5pt;font-style:normal;font-weight:normal;">\r\n				<span><img width="644" height="91" src="data:image/png;base64,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" /></span>\r\n			</p>\r\n		</li>\r\n		<li style="color:#000000;font-family:&quot;Calibri&quot;,sans-serif;font-size:16pt;font-style:normal;font-weight:normal;">\r\n			<p style="color:#000000;font-family:&quot;Calibri&quot;,sans-serif;font-size:10.5pt;font-style:normal;font-weight:normal;">\r\n				<span style="font-size:16pt;">Foreach</span><span style="font-family:宋体;font-size:16pt;">循环遍历输出用户</span><span style="font-size:16pt;">id</span><span style="font-family:宋体;font-size:16pt;">用法：</span>\r\n			</p>\r\n			<p style="color:#000000;font-family:&quot;Calibri&quot;,sans-serif;font-size:10.5pt;font-style:normal;font-weight:normal;">\r\n				<span><img width="643" height="286" src="data:image/png;base64,/9j/4AAQSkZJRgABAQEAkACQAAD/2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4+JS5ESUM8SDc9Pjv/2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv/wAARCAGtA8QDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDziiiipAKKKKACilVGfdtUttGTjsKCjKiuVIVvun1pAJRShWb7qk/QUpjcJvKMFzjJHFADaKKkFvMyhhE5VhkEDrQBHRUn2af/AJ4v/wB801o5EkMbIwcdVxzQA2ilKOMZRhk4GRQ6NGxR1KsDgg9qAEoop4hkZQyxsVYkAgdTQAyiinrBK6hljYqehAoAZRT3hljUM8bKCcAkUygAooopgFFFFABRSqrOwVQSxOAB3oKsCQVIIOCMUAJRQQR1BH4UUAFFPMMijJjYAruzjt60ykAUVJ9nmIB8p8EZHy014pIiBIhUkZGR1FADaKciO+7YpbaNxx2HrSbG2b9p25xn3pgJRRTljd921Sdo3H2FADaKMH0ooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKltYDc3KRdAx5PoO5qKrUDCCymmyPMl/dIM8gfxH+lICK6mE9y8irtUnCgdgOlTXg8iOG1AG5Bvfj+I9vwGKZYojXIaQgRxje2T1x2qGWVppXlflnbcaALqK628kitudxsKKo+U9efyp4ina3t/m8tgG2naMA54GaiRt1jJGZIlV8bIwehB5Jppkhl22xfbEq7VkI6NnOSPQ5pDFs94u5VbO7y33AHqcU858u1jIxvVwA2G5zxVeGVbV5BsWViCoO47cHr9amMsZgt2YooTcSkYwevAoAZcnbawRsqiRsuxCgHB6D9KJ9pgtAwYkxHAX/eNF1LFd5ud5SYn5o8ZB9wf6U5nAhtikkYdYyDk8r8x/KmA+7jjhtbZGyxw2QCPlOehp3TXJPX5v8A0GoJzC8UMcThRGDnc2ckn6VKZYxrEkm9dnzfNnj7tICMtLKLSPLGMkYJOcsTzTNQ5vpXH3XO4fQ1It1HFAnlxhGXLKA2fmIxuPp7Co90c1ptd9ksX3cj76+n1FMBY44zYtKyBnEoUEtjjFWCrxWqoIcSxTjAVycFhx/KqoeIQRwyFtpYu+zqOwq3HfRQ3MszZYTHGFwdg7H60CKl6Nt06/IWU4YpnBPfrU5iDCC1KLI+3cvJGd3NQXEMSbBDMsxbJLDj6ZBqYXAibzmZWmEYjRUOQvGMk/Sl0H1GuFksW2bVEL5IGTndx3+lVlikdWZEZlQZYgdPrU6mE2cqxy7GOCUcZ3Y9DSW8iJb3CtPLGzKAqIOH9jTEV6AMkDp9aKKYD/L/ANtP++qVYgzAGWNQepJ6VHRSAs2YUSNiQCUcIduQPVs+1TR7DFcrATsSMDeT945GTioLWYRRy/vdm7AwEDE/ielSrKiAYlwN4Z2PJbHQAf5FAxt7h4onWXdEMpGpHOB1b8TR9nVoLbZErSSg5y+MnOBSXjQzBZYXCoBtEJ6p/j9adHPCk8G8swgX5SuMFuvftmgRYXe72gjUKxRo2bccKATnPtis5sSTEKFUM2BtzirkNzClu9q8hHmkkyqMhCeoHcg96ryRrHcqsLpIFCncDwTQhk8yLJLIpjVmgTa5yei8ZqK5Ae3hmXAUZjCjPbnPP1p0k6Is3IkkuGzJsPCjOcA/WmzGI2aCKXIVyTGwwwJ757jikA9FEGnO4P7x3UMMZwvJxTgXCFAGCtjcAseD+tQKw/s+RcjcZVIH4GpZ5IvtDeW8QTjGIs9vWn1EQXJzO3TA4HA6fhxVyYN5dv8Au2P7leRu/pVabyZNQfLhYS/3lHGPYVNHJGFR4njDJIwKyk8p2H0o6DC6yNNiBUr++bg59B61Rq1tgQASyBwwbiNidh7VVoQgooopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAVPY2NxqV9DZWkZknmcIi+5OOT2HvUFd98O9UtEi/s9bp9Pu45ZLqSZV+S4jWM/I7DlQp59DQBwckTxTPC6kSIxUrjuDimkEEgggjqDXZaUlzY/EGyTxFbnULyeaEw3K3OFIJ+WQED5xj1rN1ptO1PXXsdP0trO5lvmjed7ppQ5LkfdIGOeaF0B21Oforvr3wdpEIvbPbFbPaxv5d8+qxO0sijo0OflBIxgcjvWf4c8P2t7p1rPe6K8iXMhX7TNqaWwIzj92h+9j+dC1B6HI0V3Fl4W0W3uLyDUEuLpodZXT4ikvl5Vh94/Tr79Ko6zZaXo0NhqmlWzPsu57d0vD5izNHgByvQZz06cCl/X9feByxVlALKyhhlSRjI9qSuq8Z3U99pnhu6uZPMll09mZsAZPmN2HSuVoAKKtW1rHNFub7TnOP3UO4fnmoriJYZdi+ZjH/AC0TafypmrozjBTexFRU1nGs17bxOMrJKqtg44JANb02maNLfajpdpBcpPapI8dw8uQxTkqV9McZ61Si2rnNOoouzOdjjaWRY413O7BVA7k9KWaGS3neCZCkkbFXU9iOores7fTdMm0oXNrLdXV35c24TbFiBb5QAByeMmnXtnZpdavql9HJOiXzQxwI+zcxJJJbsAPSq9noZ+2961tPzOcorT1aztI7Wyv7FZI4LtW/dSNuMbKcEZ7iswY3DdnbnnHXFQ1Z2NoyUldFyx0jUNSVms7V5VQ4ZsgAH0ySBmqjqyOyMMMpII9CK6e5fRP+EWsg0Oo/Z2uZSqiVN27AyTxg+1QaZolvJpSX80C3JnlZY4nvFtwqr3yep57cVo6etkYKvo3Lvb+tTngCTgAknsKK6rTLXT9M8Z29sifa1d0aGQTg+SSMkHbwxHSsa6Nnf30dtY2JtZJJ9jM05kDEnHccVLhp5lxq3ltpa9zOqWa1nt0ieaMos6eZGT/EvrWjqq6RZyXFhb2k7zQNs+1NN95gefkxjHWtSUaW8GgwX1tPO89skYKS7BGpYjPuc9ulNQv1FKtZJ2OVqS3t5bu4SCBN8rnCrkDP51sWWjr/AGhfwvZPeR2khj3tcCCNcEj5mPc9hUHiLTIdNuIPIG1LiAS+X5gkCHJBAYcMOOtTytLmZSqxcuRblK9sLrTpxBeQmGQqGCkg5B6HipLnSNQs7RLu4tmSCQgK+5SCSMjofSrniP8A1unf9g+H+tIgx4Lm/wCwgn/oBqnFJyXYlVJOMZdzOs7O41C8is7SJpZ5m2oi9zUkOm3dzfvY28PnXCFsqjA/d6kHOCOK2NAP2Lwxr2qRcXKrFaRuOsayE7yPqBj8axdPv7jS7tbq0ZVlVWUFlyMMCDx9DWMr203N0JcWVzaRwSXELRpcJ5kRJHzrnGRUO1gM7SB64q1LqM1z9iW62yRWaCONQMfIDnB9etWLpprqOaS3vDND95oTwUH0/wAKavbU6KdFTi2nqunX8/yuZoRyMhGI9QDSYPPB468dK1fMKafZ4v2tvkbgBjn5j6VWtjm0v/m3ZUc+vzdadjWWGSaV91fp/Lfvf77FMAk4AyfalKsvLKwHuKtaX/yE4P8Ae/oaW6cyAIdRa4Bf7hDDHvzRYzjRTo+0v1a6eXd+fS5UCsQSFJA6kCgI5GQjEeoBq/f3U9tdvbwSNFFF8qovAPHU+tGmXM4aVBM4RYXKqG4BxQWqFP23snJ3vbbr95nkEHBBB9xRTpJZJm3yyM7Y6scmkU7WB54OeOtByO19NgKMqqxUgMMg+tJV+6v0ntRGqlSRyQeev8XHPrVCg1rQhCVoSurChWb7qk/QZo2tnG1s+mK0NOYrY3ZFwbflPnAPHX0pbJ2fV0P2oznY2JDkdj60WN4YVSVPX4vTTVrvfp2M0gqcMCD7jFGDjdtOPXHFasys1rbRXEwuGlmBWUHIC9CM0JdTNrH2Un9wXMfk/wAO3p0p2LeEipJOW9lt1ffUysEAHBwenFBBHUEH3rXYQ/Z4IZWAWFTKuT1wxyPx4qpqjtJdJK3WSJGP5UiK2FVOHNzX2/Fa/wBdSoqlmCqMljgD3q5daNqNlHNJc2jxJbyiKUkj5HIyAefSqakqwYdQcir97ruoahHcx3EiMt1OLiUBAMuBgY9BjtUPmurHGrGfRRRViCiinRNGkqNLGZIwcsgbbuHpntQA0gjGQRnpkdaK6bXrnTBaacDpbFnsQYj9qb92MnAxj5uag0bSobiyjmuNNaVZJCvnSXqwKRn+AH7xFaez97lTMFWXJzSVvu/zMWO1nmgmnjjLRwAGRh/Dk4FMiieeZIYl3O7bVGcZNdNbWdppq+I7S4MstvbmNfkwGcB+Bnt9ay9UtLP+zrLUrKJ4I7kujwvJv2sp6g9wc0nCyv8A1uEavNK33fdcqX2m3mmyJHeQGFpF3KCQcjpng1WrX1vjTND/AOvI/wDobVrReGrGI29tdKhMsatLdG/SMxFhniM9QMjr1p+zbbSF7dRinLz/AAOSorchstLtdFlvr2GW6lju2gRYpdiuAM5J7DqeKWfR4B4git7W1nuLea3W4WESBWUMucFz0A9aXIyvbRu/n+BhUV1E2gWZbTZRAIFuLwW8sUd2JwQechh0PtUkWjaHOYY0huQ07zwoxl6GMZ3njv8A3afspf18v8yPrMLX1/q/+RydH05PoK6Ww0G1Gm2dxcwLcvdrvOb5IPKXOBgH7x4z6VL4c062tPGs6h0u4tNhmuoiCCJCi5XpwecflSlBxV2aRqxnLlRz2oafdaXdG1vI/KmCqzJuBK5GQDjofam3VjdWSwNcwtEtxGJYiSPnQ9CKilnluppLidzJLKxd3Y5LE8k1Pe6jc38dslwysLWEQxYXGFBzz69ay1ujbQrUV2sfhPToXgs7tUzJGrS3p1GOMxMwzxEeoGR15NZsHhddQt7BbOZElkNws0rNlGaNgFx6ZyAPrWSrwHys5yiupsvDVrcy2SSbkK6ebu7UyhN53kKoZuF7c1X13R7G10yK9gSK2m87y5LVL5LncuMhgRyPQ5p+2jzcocrMJradLdLh4JFhkJCSFSFYjrg96jroNY+yy+GNNurSGe2ja4mj8h7lpUXAXkA9Cc1z9XCXMriaCpbW0uL65S2tYjLNIcIi9TxmtLw7YWN/cXC3hDyJFut7dpxCJ2zyN56cc+9amkWgs/Hunxf2dPpwOSYZn8w/dblW7ipnUSuuqQJHKEYJB6iit+ez0i90W/utPtriCaxmjXfLNu85XYjJGPlOfSrf9k6FBrkXh2aC5e5crG98s2AsjAHiPGCoyB1zS9qu39f0x2OVoroU0/SdP0H7dqNtPdXC3stsI45vLR9oHJPUd+nWqPiDT7fTtQRbQv8AZriCO4iWQ5ZQwztJ74qlUTdhWMyir+hWcOoa9Y2dwCYZ5gj7Tg4NdFHonh+5hhENvdrJcx3AjLTZCmIH5zx3wPl6ClOqoOzBK5x1FdbYeG7JNOsJruBLh72MSu51FLfyVJwNqtyx788U6x8PaMrtFdNJdltT+xRSQy7VZSuQ3Hp7dal14q4+V2OWtLS4vrlba1iMsz52ovU4GT+gqGu30nT9Nt9e0a6sFmjjle5hfzG3FvLUjf7Zz0rGks9I1DRr+5022uLeWwZCWlm3+cjHbkjHynPPFCrJvbT/AILQcpg0V2//AAiWmwTLp9yI1byxvvm1GNSjlc/6kn7ueOeaxrSx0m38NnU7+Ce4mW8aBY4pdiyAKDyew75HWhVovYOVmEis7qijLMQAPUmpbyzuNPu5LW7iMM8Rw6HGVP4VY1M6fHqCyaS8hgKpIFkyTG/Urk9cHvUOoX9xqd/NfXTBp5m3OVXAJ+laJt2fQQt/pt3pc6Q3kXls8ayoQQQ6sMggjgiq1dGzfbvh2HmGZNMvxFC56+XIpJT6AjP41zlX1F0CiiigAq9/YmpiLzfsb7Ps/wBpzkf6rON3XpmqNaP9v6iYfJ8xNn2T7HjYP9VnOPrnvUS5vsjVupnUu1tpbado6nHApK6DQ7d7/wAO6nYx53Pc2xHtliuf1onLlVxIwFR2+6jNzjhSeaArHOFJxycDpXe6Lp/9jXkNms3nRtrMJjlAx5ieUSGx+NUNKsrC3k1qS21iO7lNjODEtu6EDPPJ4rH261sv6/QvlOTWCd1DLBKynoVjJBpFhlkzsikfHXahOK7KS6kg0DQlXxNLpINmT5SJKQ/zt83yce1QeHjdt4b1QWmrJYTPfQgXMkzRhsg9xzzT9q7N262697dhW2/rocmEZm2KjFs42gHP5U54ZYxmSGRB6shH867lZc/E2xjO5bi3hEVxMU2GWQRnL4/r3rnNZupJ7VFbxPLqw358l0lAX/a+binGq5NK3QOUxqKK6HQtIhubAXNxpLTo0pQTS362yfRc/eIrSUlFXZJz1FdTF4atY/EOr2ZS4vU0+LzYreJsST9OMj0zzin32g2E82iWVrYTabd6i2ZknnLtEucfdI79Rms/bxuv66XK5WcnRXWaj4f01NOvXijjtJLVN0Mh1KOYz4PIKD7pI54pY9L8PxXej2M1pdyzalBEzyLPtEJfjIGOeecHij28WrpA4tHJAE5wCccnAorrPDzWFnHrlrNYNPLb2swklFwV8xAwG3GPl+tYD3Wmm/SZNLdbVV+a2+1MSx9d+Mjt2qlUu2rCasVp7ae1k8u5gkhcgNtkUqcHocGnWtncXsrRW0RldUZyo7KBkn8BWv4ntg+v28MLzET28BXz5jIV3KONx5wM1s6ZFpOna7faXbWkz3NtaXEbXbzn5mCHdhMYA9Oal1bQ5ra2uO2v3HE0Ui/dH0rT0fTYNRMom/tD5AMfY7Tz+v8Ae5GK1k1FXZJm0Vp6xpkGneV5P9ofPnP2y08jp/d5OazKIyUldDasFFFFUIKKKKACuh8OeINP0i1vEvNJt7mVreRIZPnDMXwCjFSPlxnnrXPUUAad34hv7vWLfVMxwy2mwWyRJhIVT7qgegp+q65FqU63UOkWun3fnec89s75duv3SSBzzxWTRQBuah4kh1MTTXGgaab+dcSXihwxJ6tszt3e+Kfa+LGgsrGC40iwvZdOBFpcThi0YJzjaDhufUVgUUAb7+L7t7mWc2sG6XUl1EjLcOBjb/u/rVaXxA1zDbwXVjBPBBdy3JjZmAkMmMqSDkAY7c1k0Uv6/r7gN7V/E0GradBZnQbO2+yx+VbyxyylolzkgAtg9+uawaQEHoQaCwHUimA9ZZUGEkdR6KxFIzs5y7Mx9WOabkDuKMigfM7WuWLF1j1C2d2CqsyFmPQDcOa19Y12P7dqKafaW0P2h2R7qMszSoT2ycDPtWBuGCcjAqxeWU9g0K3AVTPEsyAMDlW6Gnz2XKZOmpS5maFt4ilt4rUNZWs09mNsFxIpLIuc4xnB74JHFRprsgmvDPaQXEF7J5slvJnaGzwQQcg81VtbNbmC5lN3bQm3QOI5Xw0vPRR3NVScdeKftJX3D2MN7GpJNLrsyR+ZZWMNtHiKJ5PLRRnkAnOTnnmmy6M0MLyf2lpj7Bnal0Cx9gMcmnNopVtIH2hSNUUMDt/1eX2+vPrUmq+HzplnJcm6WXy76S02hMZKDO7r+lZ+1g3ruxqnJfC9ClJfyS6XBp5RQkEjyK3clsZB/KprTVvJsvsNzZW97bq5dEm3AxseuGUg8+lZ9FXzMHCLVi0moPBqaX9rDFbPG4aOOMfKuPr1qS91GK5lSa30+CylV95eFmO49ehJA59Ko9KTIPejmdrD5I3uad9rK6gsjzabaC6l+/cruDMfXbnaD74qOTVZZH09zEgNgiomM/Nhs81QyPUUZA7inzO9xKnFK1jWTXnzercWUFzBezee8MhYBXycEEHPemXetfbrq2mubC2aO2i8oQLuRCOcdDkde1ZmQO9GR60c7tYXsoXvY1NU1mPU4o1Om29u8SLGkkbuSEXouCcVL/b1uNPaxGiWghZxIR5sn3wMbuv/ANasetK30hW0O41e6n8iFX8m2ULlp5epA9FA5J+lHO9WHsoWS/Vlnw1qNrA15pepNssNTiEUsuM+S4OUkx7Hr7VjSoIpnjEiyBGKh0+62D1HtV7RdJOsXU8AuBB5NvJPkruztGcVnA5Gazum7GnQcjbHDbQ2D0YcGrBvQEdYbaKEuNrMpJJHpyeKrUgIPQiqNIVZQVoltb1PIiiktI5RECFLMwPXPY0yC6EHmr5KOkowUYnA5zVckDqQKMjGcjFBXt6l077eS7W7a6dyyt2sd1HPFbpGU/hBJB/OmzTxSrhLWOI5zuVmJ/U1BkYznijIPcUCdabi49H5L/LT5Fxr/wAwAzW0UsijAkbIP4461DBO1uzsqg70KHPvTrizmtbe1uJgqx3aF4TuB3KDgn25p1jZreySobu2tvLiMmZ32h8fwj3NLmVrjdao5KTev9ff8ytRSZ4z0q9Ppxg0ez1Lzgy3byIEA+7sx375zQ2kYlKitDUNJ+wabpt754k+3xNIEC48vBxjPes+kmmtAJUuGjt5YAoKykEnuMUW1w1tMJVUMQCMH3GKipVVnYKoLE9AB1qjRVJpxaeq2++/5kiXLraNbYBUsHU91PtU7ak5JkEESzkYMwBz9cdM+9U6KLlRr1Yqyf8AX9PfckmmMyxKygeUmwY70TztOULKBsQIMd8VueHfCF3rm24lkjs7FhJieWVULlVJO0HqAcZPQVh3NvJaXMltPtEsbbWCsGGfYjg0EOpJp3e/6EdFJmgMD0INBAtS20/2acSiNJMA/K4yKh3AHGRmgkDqcUFRk4yUluhScsTgDJzgUUmRjORj1q5qViunXf2db21vBsVvNtX3pyM4z6jvQTuTnWVlsIrW60+3uWgjMcU7Myui9hwcHBPen2+utFZ21vNp9rdNaE/Z5Jg2Uyc9AcHn1qLRNKOtXc1utwsJitpJ8ld2di5x+NO03SBqml3k9tOTe2i+abXb/rIf4mU9yO49KrnluZ+yg9LEi+IJDeX881nBOmoEGaFywXg5GCDmoLnVjdTW/mWcC2ttkR2iZCYPXJzkk+uaZpFnbajqUVnc3gtEmyqTFcqHP3d3oCcAntUN5aXFheTWd1GY54HKSIexFHMwVKCd0i9qGtQ6hZxW39lW0PkpsidJHJRc5xycHv1pTrizRRC90u0u5okEaTybg20dMgHDY96ycg0tHOw9lC1v8y0b+Q6V/Z3loI/PM24dc4xj6VcTxDcJfJdfZ4WAtRavE2dsiAY575+lZNFLmY3Ti90bH/CRMiWsVvp9rbxWlyLiNI93JA6Ek5P1qODX54JIHWCImCSWQZJ5MnUH6Vl0U+eXf+v6RPsodv6/pmlDrCiyhtLzTra+jt8iFpdysgJyRlSMjPY0ui60dI1+LU1t0MYYiWBBhWjYYZR+BrMopOTe5aglsXNXtrK11OWPTrpbq0OHhkAIIU8hWH94dD9Kp9aKKko2X8QrcRxfb9Hsb24ijEaXEoYMVAwNwBAbHvUNvr91a6K2mQoiqZxMJRnevIO0e2VH5VmUVHs49h3ZtzeKbuXW21QW1uvmQ+RJb7SYnTHIIPr1qleX9rceULfSLSzVG3MImcl/YliTj6VRopqnFbBdm3deIra40tdPGg2cUUZZoisspMbMBlhlueg61Evh5mUN/bOjjIzg3gyP0rJopclvh0C5pK0Oj3UkFxbafqqOoOVlZlH0ZSDn1qf/AISa5GrWV+ltAiWCeXb2652IvPGc5PWsaijkT3C5cg1KSDTr6xWNCl6ULsScrtORitFfFcwdLptOs31GNAiXzBt4wMBtudpYDvisKim6cXuguzo7bVrG28JQQ3FpbahOb6SQxTSMCgKj5vlI6n1qky3PiS7mvbi/0+2cbVCTzCIBQOAgx0A4rJoqVTSba3C5tQ2kmg3MOqx6hpd09tIHWGK63sx+gFMt/EdxbfZ9tvE32dZwuSefNznP0zxWRRT5E/i1C/Y1oddX7Db2l/pVpqC2q7YHm3KyL125UjIz2NJaa/NZpEkdtAFivftiqMgBsY24/u1lUUeziFzXtvEl1ayWTxwQk2Ussi7skP5n3gaZea359i9jaafbafbyuHmWEsxkI6ZZiTgelZdFHs43vYLs2ZvEK3irJfaPY3V2qBPtThgxAGAWUHBIHciqJ1GQ6Mml+WnlpcGcPzuyV24+lVKKahFBdhRRRViNzVry0tdDtNCsJ1uFV/tV5On3XlIwFX2UcZ9c1h0UUASW832edZQivt/hYZBpjtvdmwBuOcDoKSigrmfLy9AooooJCtPR9duNFjvEgijk+1xeWS+fk9GGO9ZlFTKKkrMNjdg8WXcFvpcX2aFzpkgdHOcyYBADfQGs+y1SWxlu5EjRzdwvCwbPyhupHvVKip9nHXTcd2bK+IIHsbS1vNEtLv7HH5UckksinbknnaQOpqkupOulXWmrCgiuZ1mJycrtzgD25qnRTUIoLs2k8T3K6np+ovbQyXFjD5O5if3y4IG73AOOKp31/Z3UIS30e2smDZMkUsjEj0+YkVRooUIp3QXYVr2viAw6dBZXGm2l6tq7PbvOGzEW5PAOGGexrIopyipbiOv0fXIr6+1m8vJLSC6vY0EcUztHExBGfnHK9PWqutXNjaNZX1jLAmrxzF5DaXDzxhR90lnzls/pXNUVkqKUrorm0NO/1e2vo5caJY29xMcvPFvznqSFJwufYUNrs7ahp175Me/TkjSNcnDhDkZ+tZlFaKEUJu5o2WtzWWpXN4IIZVug6zwSAlHVjkr60xr+zN+twNGthAE2m182TYT65zuz+NUaKOSN7hdmtq+vLqxikGmW9rPEEVZopHJ2qMKuCcenvxVv/hMZxNPcJplklzdRNHczqrbpcrjPX5fXjqa56ip9lC1rBdiAYGKlhubi2z9nuJYd3Xy5Cufrio6K0ESzXVxc4+0XE023p5khbH0zUVFFABRRRTAKKKKACiiigAooooAKKKKALmjyXUWsWsllbLc3KyAxQsm4OfTFXLK1vdU8XpA0cNrdy3JLI8XyRsMkjZ3xjpWVDNLbTJPBI0UsZ3I6HBU+oNKbmc3JujNJ55ff5u47t3rn1qHFt3XYfQ7HVmjv/COpXDz3V21rNGsU1zZJBsO7DBCvUex9q0FvF0Ga2Y3dtbWMVkpfTxb7pmkKZznaQTkg7s8Vw91rOqXyOl3qNzcI4AZZJCQwByMiumXxvbLPDdKNVjMSKv2FLhfsx2jGMYztPcVySoyUbWv/AMN/XQvmVxukSw23hk6sZ7mG6uLx1nuLa0SdlGAQp3EBQck8dafa3VjJr+pXlpZfKulNI8d1bhA8gxltmcAHrXLwavf2d1NcWN1LZtMxZhA5UcnOMelRtqN60807XczSzqUlcuSXU9QT3Faui22+4uY3rzU7u68MWWsSOn2+C/eOOdYlBC7AQCAMHBqx4q1nWPJsoxO5trrTo2kIiXa5IO7nH8q5X7RMbYWvmv5AfeI8/KGxjOPXFWI9Y1OGyaxj1C4S1YENCJDsIPUYp+xV07ISkbGhXd3P4e1mykJe2hsS8SGMcNvXkHGe571HonmWXh7UdTs4g9/FNFEGMYcwo2csAR1JAGaz7bxBrVnbpb2uq3cMMYwkaSkBfoKhg1XUbW7ku7e+niuJc+ZKkhDPnrk96bpvXbX+vxC5ueMWvWg0N78Mt2bImTKhSDvOOB0PSuaLswwzMRnOCc8+tST3dzdbPtE8k3lghN7E7QTk4/HmoqunHljYTdyyNNvjpp1IWspslk8sz7flDemarVuya/bw+EzoOnw3Ci4lWa7lnkBBYdkUdBnueawq06iNbw5byy3k9xHOsC2sDSu/kiVgOnyqe9amsrHNY6NekzSyy3JXzp7dYndcjGQOCPQ1zVtdXFnMJrWeSCUdHjbBp8+o310VNxdzTFX3qXcnDeo9+K1jNKNv63OedKUqnNf+rG7reuSQavqlg1rbtZl5IxCqBcNnh84zuzzST6pPpWjaI1okKyPCzSSGMFmAc/Lk9q52WWSeV5pnaSRzuZ2OSx9TSyTzSxxxySM6RArGpOQgznA/Gl7R6gqEbJW9fusdBpjlxqOsRSf2fb+aq7Le3E0iluQFz0FW9Smg07xFplzLEfLurULdeZCI2cMSpZlHAOMH8K5i0v7ywZms7qW3ZhhjG5XIqWK7iubhW1iS7uY0XCiNxu65xlu3WqU1ZIiVF8zfT8f6+Zo6laHQdKl09wPtF3cElsc+Shwv/fR5/CpvEWR4Y8MeX/x7/ZJTx083zDv/AB6VkarqUmq3zXLrsUKEjQHOxFGAM1Yt9YUeH7jR7yAzxF/OtHDYNvL0J91I6j6VlJp7G9KLS97d7/1+BmKzKcqxU4xwcVJaGRbyBoYxLKJFKIV3BjngY71FSo7RuroxVlOVYHBB9ak0Na+j1DUvFZiu7WKzvridVaEptRGOAMj0/nXT3irc6PrtvcXFxemxi4MlgkMUUgYD5GHPrx6Vw091cXVy1zcTySzsdzSuxLE+uas3GuavdxtHcandSoybCrykgr6foKwlSk1G3QtSV7nY6bMNItNEmF5a2Vr5AmvLZ7ffJcZJ5B2nOR05GKo6RcQy6fq+uNJcJdG7VfOgtUmkijIJHynAGeATUdv4wtoreyUNq1qbSJYzBaXCrDJjucjIz3rCm1q8/ti51Kykawkncttt2KhQe3FZKlJt3X9X/ruF1ZHTWVzYXvi2wmhtpHY2cv2hrm2EQuGCthtgOORwcelZ76nc6n4Tub25EXn2V7D9nZIlXygwbKjA6cDg1hvqmoSXn2x76drnaV84yEtgjBGfTFQrcTJbvbLK4hkYM8YPysR0JHtmtVR6+n53Fzf18jrNa17WxoWjTR3Dlbm2kEzrCpDNvIx93jj0xVTwjd3Z+2WGS1mbK4fyzGCN2w4OcZz+NY1rrGp2Nu9vaahcQQvndHHIQpz14p1prmrafbi3s9SubeEEkRxyFQCevFL2VoOKS1/r8A5tUy/4bQw2OrX8UAkvbO3RoFePdsywDPtPUgflVvxLLqE/hjRJtT3faHeZvnQKSvy4OABWEuq6il+dQW+nW7brOJDvPbk1HcX15eAC6upZwGLjzHLYY9T+OBVOm3NSf9abAmkiEsxABYkDoCen0pKKK2JLdmIvLbeLTOf+W5YH8MU244uE+z+SG7fZix5/HvValVmRgysVYdCD0p3Oj2y5FC3z6ly/2bEM20Xn/LQJ0x7/AO19KpUUUEVqntJ81v68/Pud14U1HzdDubTVdMlmt7SykFtcQKRNslcKyJkYbJJP4VCmhjR08YaVG4umt7OJkYJ82N4PTsQDzWHp3ivWdL0m402zvpoopiu0rKwMWCSdvpnPNULTUb6wuzeWd5PBcnOZo5CGOeuT3oepktjpL+0ksfDPhT7VpzO7XE8ht2TDTJuQgevI/nVrxHNNrehX19Y3zGwtZEZ7G5sFhe1ycKqOBggdMZziuTuNV1G7dHub+4maNzIjPISVY4yQex4H5U+/13V9UiWLUNUurqNDlUmlLAH1xQwWh332nTNBTSLVWvjZT2sUj20GmRzx3hYZfMhOSc5HtWJp19HpnhXXL3T7aPK6nEtsbmIM0AIfBwf4gOOc1z1pr+s6fam1s9VvLeA5zFHMVXnrxVQXVwttJaieQQSOHePd8rMOhI9eTQ+v9dQXQ1LzxNfXeo2up28SW+owQeXJPFGpMzc/OVxgHBx0rR8YxLceMLX7SDHHPBaea4XaPmRdx9M8mucsr+8025FzY3UttOAQJIm2sAeozVi/17WNVhWDUdUuruJW3BJpCwB9aAPQba41hfEXiDS0tfs2j2NncRpEkCqiAIdh3YySevXmuO8Alx4y03b90lhL6eXsO7PtjNUH8Qa1JHHG+rXjJEhjRWmJCqRgj6Y4p+m6uul6bexW0BF9dr5P2kt/qoT94KP7x6E+lIPIzZdod/L+7uO3Hpniui8eHPiQF/8AXGztzP8A9dPLGfx6VkaRd2thqUV3d2n2tIcskO7Cs4+7u/2c9RUdzeSahqMl7fyPI88u+Zlxk5POP6U/IPM0den1Sez0r+0NNjs4o7YLbSJDs89P7xPc/wCPvWNW14g1+PVbbT9PtIZYrHTYykAncPI2TksxHH4DpWLR1AKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACnRRNNMkSfedgBTat2f7iGa7PVR5cf+8f8BmkBDdeULl1gGI1OBz1x3p9xEkEEC4/fOu9znoD0H9abZwC4uUjbhOrn0UcmkuZzc3Mkx43Hgeg7D8qAIqe8MkYQupAkG5T6imVo2UkMlunnuoNo5dQT95fQfiBQBVWyuGmaERHzE+8Mjj6mka0nSdYGiIkb7o9fpViz8u4NxJN5bznlElfarZPOasvJEL3TcPCBH97yz8q/N70rgZ8llcxRebJCyp3J7fUVBUsk8vmz4kJEpIfnO4ZqKmBLDaz3IbyYywXqcgAfianvbMx3bRQxnCRK7jPTjk05EW50yOFZo42jkZnDtjIPQ+9WXkhbUZUWZNslsI1cnAJwOvpSGZiW80ioyISHfYp9T6VKdOvApY27YC7j06VdgEdtFaRtPEzrdbn2sCF49aIJ1zBulGMzFst3I4ouBRjsLqZVeOFmVhlTkYNNtrZp7oQtlAMlyf4QOtXmgea009vOjjjRMnfIBj5uoHemwzR3OrXGw4FwrqhPqRx+dFwK0cS31+IoFESN074AH6mpLyG1jht1hMnmMufnUDcCT19KrQo/nhVcRSKeCzbcEe9amqFfJZblo2mUIIypBfOPmzjtQBVk0i4SCNwuWYHcN6/Lj8earQWs9znyYywXqcgD8zVkxC60+3WOSINDuDK7hTyc96ktnjl05IVS2eRJCSk7bcg9wcigCkttO05gETeYOqnjFOeyuY5UiaIhpPujIO76GratHc38hufILLFhFDkRsR0BNWFkijNiu63jKTkssTfKvH1ouBmnT7xVLG3YALuJ46U+GziktZZTPmRI9+xR05xyatQTrtgDSjhJict3OcVHp8DC1uCZIV86HagaUA5yOo7UXAqWhh88LOuY3+Unuue4pk8LW87wv8AeRsH3pVgd7gQLhnLbRtOR+dS6lIsl/MyHKg4B9cDFMRFNBLblVmjKFl3DPcVbsdNlllR5oT5JUnk4zxwfWoryCSAwNJMJlkjDKcngelX1ETaqbw3UQiZTsG7n7vTHak3oMoWdoZ1eRoneNVP3GAIOPftVeKKSdxHEhdj2FXdLh/eGZpIlUxuvzSAHJGOlLYFbaW4glMJd49qlmyhOc4JFMCnPbTWxAmjK7hkHqD+NDwSxRxyPGVSQZRj3qzeyOII4ClsihiwWBt2P1NRz28iWNvOZvMjckKuT8hHagCtRRRTEFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAU9fNl2QJvfLfLGozkn0HrTK774dWNjMIrq3gtbrVIrotJHcN88USrlWiXPzMW4zzigDgw0kRZQWQkbWHT6g0wHPTmta48i58QSnVYv7FBYmaOK2Z9j/7hOeT71Y8ZQPD4omike2YlIiGggECEFAR8mTjg80h21sYVFWGsmVS32m1OBnAmGa2baySCG0QafbziSITXM9xkKik8AHtx+Na06bmXKnKPxI56itWXSrYeJv7Ne8S0tnlAFxLyI1IyCaoXsEdrfT28VwlzHFIVWaP7sgB6j2qGmnZkNWZEp2sGwDg5wRkVZ+3t/z7Wn/fkVVoqRCu3mOXKquTnCjAH0FJRRQAUUUUwHyTPKkaNjES7VwO2c0wEggg4I6GiigB80z3EpkkILt1OMZprOzsWdizHqT1NJRSAKKKKYBRRRQAUUUUAPimkgLNG20spXOOQPamo2xw2FODnDDINJRQBJPcSXMm+VsnGAAMAD0AqOiikAUUUUwAcVLPcy3G0OVCoMKqjAX6CoqKQBRRRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArp/CMuhW8d7dX1zd213FaTKCgRg4cBfkyQd4yeK5inxQyTyCONSznoBQNJtpLc3dW1fTPEGtxzXxvbazhtkgSSNVlnk2jAZ8kAk96XxZqejavqA1HTZL3z2EaPHcQoqBUQKCCGOScdKwpoHt2CybckZ+Vw38qjoG4yg7NWZZa/lZSpjgwRjiFR/Sry6nZ3VhaW+oG6H2TgJEQVlHbOeh7Z5rIoq41HHYqVSc/idzc0i3k8SeK4jJYy3MMswaeOE42R5xkt2AHeqWvW9laa9fW+myGSzimZYW3Zyo9+/wBapLI6btjsm4YbaxGR6Gm1DbbuZhRRT5YXhYLIMEqGHPY9KB2bVxlFFFAgoq3f6ZdaYLf7WqxvcRCVY93zqp6bh2yOfpUj6HqMeijV5LWRLQyiIMyMM8Z3dPu9s+tAFCineVIYjL5beWG2l9p2g+mfWm0AFFFFABRRT4YJrmQx28MkzgbisaFjj1wKAGUUUUAFFFFABRRQASQA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AFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUdsc/SirNhGrXHmyf6uFfMb3x0H54pAQzQvbymOTG4YyAc4oaF1hSY4CuSF55OOtH7y5n/vSSt+pNTX7qbgQxnMcC+WvvjqfzzQBWooq8lql1FaNEoQl/LlI9eufyoAo0VfiSOa4uJo4YBboeDKSFUdunUmpXtbc31jtWMpP98Rk7DzjjPNFwMuirc01oUmiW1EZU/unBJbOf4qqUAFSTQPbybJMbtobg54IyKsIIrawS4aFJnlcqA+cKB7DvVu5jSW+uN8Y+W0DKP7pwKLgZFFaFnbwyQWrPGCXudjH1XHSp0is5RGotVUyCRc5PAXofrQ2BkUqqzsFUEsTgAd6v5tre3sybRJXmTLlieeccD1p0MK22q3Kpz5CO0efXHH5ZouBRmhaGYwkhmHB288+lPnsp7aKOSWNlEmeoIx9aSzufst0k5Xft6jPPP8AWr2owboFeGZmSKNd8bn5hnkE9j1oGZwglMBnCHyg20t70yrp8uXSnk8iNHSRV3LnJ4PXmkURW1jHO0CTPMzAb84UD2HegRXnge3l8uTG7APBz1GajrUuvs51k/aQFTy1wDnaDtGM98VWvYihjcwwpG3R4Gyrf/XouMqVILdzbG4XBVW2sAeV9M+1XbqKF4JGtIYHhUA70Y+Yo/2gai0v5rl4jykkTBh7YzRcCnRUls8aTo0sXnIDymcbqmtIYrm9IZSsYDPsB5wBnGaBECwu0DzjGxGCnnnJo8iXyPtGw+Vu27verxmWbSJylvHCBKn3M89euajcxy6UZBBHG6Squ5M8jB680XGUqK0baCCOyjnkNuXlYj9+WwAPTFVroW0d5+4Ilh4OATj3GaBFeipLh45Lh2ii8lCeEznbUdABRRRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAqZZwlm0CqQ0jgu3qB0H51DSqrO6ooyzHAFICW1nW2mMpUswU7PZuxqGpbqJIbh4o2LhDgse570ssAit4WJJkly230Xt+dAENTQ3U1vHJHGwCyjDZH8vSlMSEp+7dCV+YEgZPtmpnghdYFjXLFcHbIvLZPX9KAILe6ktg6psZXHzK67gfwp76hcPNDKzLuh+5hQAPwot4FaeSKUAlFY5DcZA9acYYvs8Xy4dwzblO7p260AVfvyZZgu48nHSrP2a1/wCghH/36ao5IES2jmV2JkYgKVxwO9RhVIyXA9sGgCdLuS1DQxOkkYbKlkzg+oz0pPt9x9q+0lgZNu05XIYYxyKjVIywDTBR3O0miGFp5di5x1YgZwPWgCZtSuW8vlAIn3ooQAKfpTEvZk2bSvybsfL/AHutTC2jlnBMflJJuKJnDAAdSPfFRSQqloj+W4kf5uvCr2z9aNBk7ah5VtapAIy8aEFmjyVOexNVre5eC6Fx99sncD/ED1p1rGkiXG7b8sWVLdAcipEtttrKdiykFCCMjjnIoEQtJHDdF7Y7k/hDrng9iKlvNQkuiyqBHESPlVQM4HGfWmGGP7bHGhJjdl6sCRnqDilnSCOF8RkSGQhPnzhR3NAxw1KYReUIrfYeo8ocn1+tRw3s0EXlpsK53DcoO0+o9KW+iSKdVRQoMakgepHNFnEHd5XTfHCpdh6+g/OgQhvZmuDcPsdyNp3KCCPpSTXcs2zdsVUOVVFCqD9Klihj2sWSRw6/KQoGD2PWoZ4lh2jLbiMncAP5GgB8l/NJGybYkD8OY4wpb6miGaO3tpCuTPINnThF7/iafDDGLeK4IDMXYFXJwcYx296Ps0f2WeXOWTbtwT3P0oGN0+SOC7SeSUxiI7gAuS3sKa104vWuov3bFywA7Z7VBRQIsS3880JhbYsZIO1ECgEelP8A7Sm8oxeVb7DyR5Q6+v1qpRRYCeG8mgjMQCPGTnZIgYA+tIjiW6Eksoi5zuCcDHoBUNFAFnULlby9knVdqtjGep9zVaiigAooopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAVbsMRebdt0gX5fdzwP8aqU8zP5Hk5AjDbunU+9IBbeE3NwkWeXbk+g7mn3k4nundOEHyoPRRwKjimeEsYyAWUqTjsfSmUAXZF+S1ll/wBWIhy2eeTwCO9PmDNZqzSEb5TISFPAxgE8VSEzjbzu2jC7udv0pVnlSbzlkbzP72aAJ7IRpLK5mQIEZQW/iyOOKlIBWzMZDEbui7VxnnNZ/WnmaQxCLcdg6CgCzfxkMjQgtaqu2JxyMd8+hzVf7PMf+WT/AJUwO4QoHYIxyVB4NJQBJ9mnP/LF/wAqlghMd2Y5llGBysXJPtx2qtSqzLnaxXIwcHGaALyu0c0l0+4sFKqGIJJPAGB7UXaPa2ojBZlmbJJ/hA6KfeqazSLjaxGBgY7fShZpUR0WRgr/AHhng0WGWSHjtIjDED5sZEh25z83/wBYVYS3WS8urfb5cTKoyB0IwcD3PNZhZmChiSFGAD2pXlkkxuYnHT2oEWizSajDIU8tWcBFxjABxUjQJIsivIhJlJXB5Rcndn0FVJLqeV0kkkLPH91j1phkdgQWOCcn3NAy1OftsbzRgkxMcr32Hofwptq7GC5ToohJx6nIqukjxNujco2MZBxQkjIHCnG9dre4osIs+WiRRFkDF03cQg9z3qO7QI0eMfNGDgIF/SojLIQq+Y2FGAAegoeR3ILMSVGAT2FAFzDQ2pjmjAELAsMkN83/AOqk3eZ5tvBsaORlUSEke469KrJcTRszLIwLfeOetD3M0ibHlYrnOPegBjKyOUYYZTgj0NJRRQAUUUUwCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK7bwN4esrmO31i6t5r4x3mwwxsAkAVd++Tg5BxgDpXE12HgOFIHvdTh1yKymt7ObfG4cb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KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArpfCvhaLVpLW71G6S3sZbryFTazPOwG5lGPujb3Nc1XdfDz+3o0uHtbYXmm+VM/kkKw84JhR1yhOcZGMihCOVm0trjVpbTRt+ppy8ZtonJK/7uM8dDT9Y0gaTDZB1vI7maItPFdWxh8ts9FJ+8PerXii2tNJ1wJpMhtyYEaaKGcsLeQj5ow4PIFWPEMryeHPC0ksju32aXLsdx/wBafXrS6FdTmcj1rSg0qNoIJLq+jtTc/wCpRkLFhnGTjoM0sl8jRsv22U5BGDbIM1qp5tzY2FxpttHJOsQhkndgfs2D6Hp65rpowjJu+ptUpxg/dd/u/Rs5+SxuY79rHyWe5D7BGg3Fj7Y61FJG8UjRyIyOhwysMEH0IrbE91eeNY30i6WK5edUgnZto3Yxkk9jWfrcF9ba3ew6m++9SZvPbOdzdzmsJJJ2Ri92UqKKKQgooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAop0cbyyLHGpd2OFUDJJrXtfCmr3LBfIWPPZ25/IZNRKcY/EzSnSqVPgi2Y1FdVL8P9TWFFiLSXUjBUiaMxh/YM3em/wDCtPF//QIP/f5P8aITjNXiOrSnSaU1Y5eiuo/4Vp4v/wCgQf8Av8n+NH/CtPF//QIP/f5P8auzMjl6K6j/AIVp4v8A+gQf+/yf40f8K08X/wDQIP8A3+T/ABoswOXorqP+FaeL/wDoEH/v8n+NFFmBy9T217cWaXCW8nlrcxGGXAHzISDj25AqCr+mWnmOZm8lgqMVR3HUdMj0oNaNKVaahEi028gsp2e40+C/iZdpimZlA9wVIINTavrEuryQA28Vrb2sflW9vDnbGucnk8kknJJqOWG4ublYz9nLBckxFQqj1JFRTWjRRCZZY5oydpaM9D6HNBUqE1dpOy/rYgoq62lTI7RmWIyAbhGG5Ye1RRWZkjWR5ooVc4TzGxu+lFhvDVYuzj/X9foTaRqS6Tei8NjBdyJzEJy22NwchsAjOPQ8VXvLue/vZry6kMk87l5HPcmgWzCd4pZI4TH94ueP/r0stpJG8aqVlEv+rZDkNQR7Gdm7f1sQUVPcWnkKc3ELOpwyK2SKuXVgZpo/LeGNniXahOC5xzQaRwtSV9NVbT1MyijpVzSNOk1fWLTTY22tcyrHuP8ACD1P4DNC1OZ6FOitvV7iz1PxDDYweXZ6ZbyC1hbaPljDYLse5JyxzXReLLHT9A8Mrpy6LNEJryQwXBuCzPtVQshOMEMCflFLpcdtbHBUV1kHhXTJfCX9oNrunx3DXSp5zvLsjBQkxkBfvZ/DjrWNZ6HJey3ZW+tIrOzOJb6VysPJwuOMknsMZp9bC6GZRWpeaBcWV5aQNdWkkN6u63vEl/cuucE7j0weueRUl14ceGx+3Wmp2Go26zLDK9q7Hymb7u4MAcH1FAGPRXWH4daos5hbUNNVkm8iTMx+SQ/cU8dWyMAfjiszTH0izk+y6lo8+oXhuPKZRcGNUGcfLt5LZz14oWoGNRWn4l0yHRvEd9p1vIZIreXajMecYzg+4zisyktQCirJsj5btHcQymMbnRGJIFJHZl4UleaKFZCdm8n5sUzb2FS9rFeigjBI9K1fDGmWur+ILaxvJjFDJuJwwUuQCQgJ4BJ4z70GOxlUV1vjgWlnb6Xp39iyadcQWqvgzM20MzFkORyQcHPvUI8B6h50Nu9/pyXN1EslrA0x3zgruwoxx6c4yelIDmKK2LHw3PdWIvru+s9MtmlMUcl45XzHHUKACeO56UXfhfUrGK+acRhrF4ldFbcXEmdjKRwVOP1pgY9FaUeiTJZy3t8xtYLe7S1nVkPmqWBJIX2APGa0df0/R4fDmk6hpUE8f2mWaN3nk3NIEIAJA4H0FAHOUV0WgRx61pF9ocqIJ4InvLKUKAwZRl0J7hl/IioPB1hDqHiO2F1b+daRh5ZQwOzCoWG49hkCjqHQw85pasX9/Lqd413NHBEzgfJBEI0A7YUcVXpAFFFFMAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAnsbg2l9BcD/lm4P8AjXuumapocWgxw2+ppYXLqDLJsy+e/Uc14HXeeH/GdtYabHDLFp8kg6tdQ7mU9OvpxXJXvGSkl5bN/kelgnGcZU5O2zWqX56Hf3Gny3OlNqdr4gmvI7c+aolGFJXnj0ra1LUkPhl9RjuzagwiRZF2k5xkKM5GSeK4FvFun6wixat4otrW1HW3toW59un+Nb//AAm/gpNMTT4Nea3jRQqtGrbgB7lTWuFTVTmastN/8tSMdKMqfKpJy126L1SV2U9F13UZtYtILzWwIi3lnbJG247QwB+XkHpnrniu51E3v2Cb+zhEbvb+6837ufeuHg8S+AbWWKa112S3kT77IH/e85+fKnPNa/8Awsrwf/0Go/8Av2/+FejWqQlJOCPHownGLUmb1rfrNcyWMn/H3BEjzBVO3LDse/Q1m65Ncz3rWUTsscVt9oZFl8vziW2hS/YDBJx7Vnp8Q/BUUkkiatErykF28t8tjpniquo+NvBl+UkXXhBcRghJUiY8HqpBXDA+hqISip3NJqTjY17bRZZvNNvqd5ZxJKyokVx5oIHRstkgn0zRXNr4m8HlAJfF1yCowBbqYUA9lVcUVo5q/wAX4GSh/d/E8YqxZSpC8pkON0LKOO5HFV6CMY+lcZ205uElJdCxZTRxNIkuRHNGULKMlfenySQQ2bW8MpmaRwzNtKgAdBzVSii5pGvKMOW3fXrZ7li/mWa+kmiY7WIwenarUN8ptIYhdfZ2iBU5i3BhnrWbRRcuOKqRqSqL7W+/e/R3/E0ILuPzrh5JsSvjy53jzj8O1Om1CMT2cqyNMYM7yV255rNHJAHJJwBU15aT2F5LZ3UflzwttkTIO0+nFFyljaqjyr9e9+9t+u464jtgGeG5LljkIUII+pqc3UP9qW0+793GqBjjpgc1SeKSLb5kbpvG5dykbh6jPUU+2tbi9uEtrWF55pDhI0GWb6ChGaxDi7xSWqfXp8yNzl2I6EmtDw7qSaR4isNRlBMdvOrSY67eh/Qms4jBIPUUULQ53qa2t6QuleIZLW5kYWkknmRXCLuDwsch19eDXXXep6boHhm205tVbUoZ9NcR2awMFkaRyUlYt93b2A54rz+S4mmjijlmd0hXbGrNkIM5wPQZqOl0sO+tzodJutLufC9xomoagdPk+1rcxTmBpUbClSpC8g85q14b1220i01PSRqrWgnlSS31BLXzVJXIwyMCQCD6ZFYVhoerarFJLp+nXF1HGcO0Sbgp681SClnCAZZjgD1NPqLoda2vWb+J9Ml1jVDrlha7tzfYxGiE5xhMAsAcE5q5qniWyl8O3VhLrx1O5kuoJYylj5EaIrZIHAJOPX8K4q7tZrG8mtLlPLngcpImQdpHUcUwxSLEspjcRscK5U7SfQHpQgO3l8TaS+ry3AuGMba/Heg+W3+pC4LdP061X0S80C1l1DVW1WO31aW4k+yNPaySJAhJ/eAKOXIPGelc4dD1ZdMGpnTbkWJG77Rs+TGcZz9ao0tv69P8g/r8/wDMtalHDFfOINRGoq3zG48tk3MeuQ3OarxlVkQuu5Aw3D1FNoprQd9bmvJfQbLhRc7kkjIjjWHaF9ATVeznijiVZboGPOXgeHd+RqhU1rZ3F60q28e8wxNNJyBtRepoudssdUlNSaWnr1+f4beRHIVMjmNdqFjtB7CprGC1ubpYby7a0iYEecIjJtbtkDnH0qvRQjibu7nfeN9XsorG90I3zajOrQpCpjISz8tAGIY8kt3A4rm/FGp2+o6zFdWMzFUtII94BUhlQA+/WsWikI6OO50jWvD2n6fqOpvptxpzSKHNu0qTRud38PIYH14rWtvFejyatfm5MqWC2cEVqGTLyvAQU3Y6ZOfpmuGqS2tp7y4jtraF5ppTtSNBlmPoBTA6fX9esda0awj+0GO8ubgTakTGcI4QIG/2sgE8UurNoUnhKw0238QRzXGntNJgWcqibeQQASOOneud1DTL/Splg1GzmtJWXcElXaSPWo5bS5gt4biWB0huATE7DAkA649aTsM3fCgOm2+oeIJxtgt7Z7eHP/LWaRdoUeuAST6U7wBczjxDDpZmY2d6kkc9uT8k37tsZHc56Vgb7qW1EW6Z7eAlgvJSMt1PoM1HHI8MiyxO0ciHcrKcFT6g0+ougjxtE7RujIykgqwwRSVb1ObUrmdLvVZJ5Zp4wyyznJdOgOe44qK6s7mykWO6gkgdkDqrjBKnofoaV0Mhoq9JoerQ6cupS6bcpZMAVuCnyEHpzVGmIKKKKACiiigAooooAKKXY/l+ZtOzO3d2z6UqI8hIRSxAycdhSAbRTljdsEKSCcZxUxspQ8y8fuRknnnnHFAFeintE6bd67dwyCakFnL5jRkorIMtlulAEFFP8mXn90/H+yaZQAUUUEEdQRTAKKk8lvJSTKgOxCgnk47/AEpy2k7PsCDdjdjcOmM5pAQ0UqjcwX1OKkFsxvPsu5d2/ZntmgCKintC6RrIRlGJAYdM0+Ozml8vaF/eDK5cDNAENFSeS32dpsjar7Dz3qOgAop8ETXEyQoQGc4GTxQ0LLEsvBRiVyD0I7UAMop8UTTSBFIBIJ56cDNPit/NkWNJ4izHA5P+FAENFFStbSLFHJjd5gJAAJIHvQBFRU0lpNG4Xy2bK7gVBORUccbyuI413MegoAbRUhgYIpDKS3VQelNljeGRo5BtZeozQA2in+URAJcjBbaF7n3pXhZIY5SRiTO0d+O9AEdFABJAAJJ6ACggg4IwaYBRThG7IzhSVXG444GabQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFK3b6UlK3b6UAJRRRQAUUUUAdd8P7qzS9ls2nFnqN1LEtrdGLzMAN86D+6WHGag8Yfbv+EnF1rqfabWV2aF7eRP3sO44CuAQSOnOcVX8Iatpek6tHcanZCURsZI51dg8bBTgYHBBOOvTrUN94gi1CWxil0xE02xDCOyjmYZ3HLEydck96H0BdS14xCFdFlgmvJIZ9PV4o7uYSNENzAKCAOOK3vDum6LoXjXTtMlS8uNVUBnmWVVhjdk3bQuMsAD1yK5zW/EGnavYW9tHof2WS0iEMEovGfYgJOCCOTyeavW3jpbfUbfVW0K1l1OONY5LppW/eKF25C9FYjALc0AQ+HdAs9Vs726khutQuYZgq2FpMkUhU5JfLA5GeMAVW0zR7C/8Vtpsz3NlbZbbHcFUmJAyIyTwGJ4yaq6dqOm2yOL7RheyeZvSVbp4XT2yvUVLea+mqa/LqmqabDdpKoQ2/mMgUAALhhzkAdTmgGO8RaZb6dcwRJpmo6YzZ3peusgIzwysoGRWl4h8N6fpNhI9tY6lPGAph1RZUe3mzjqqj5O/U5rM1XxAt/Y2en21gtrY2cjSJE0zTMzN1yzc446DFTnxNaW2nXtrpWipYNfReVO/2p5V25ydqHgHjrzS6D6hCzL8OrnaxX/ibR9Dj/lk1aPw8urNL17I3As9RuZ4vs9yYt+UBy8YP8JYd6q6XaNqXge6soLi0S4XUUm2T3KREoIyCRuIzyag8I6vpej6mJ9SsRKYt0kU6yMHRwpAXA4IJ/LrVbN/10RPRf11ZN4pN4vigXPiKNrq3lLNE9tKg86LJ27ZACDjgc88Yp2tfY5fBenXGntfxWv2yWJbW5uFlVCFBLDCjGc1Rur+TxLcWWnwR2mnW1tGyW0LzYRcncdzt1JPc4FWdaEeneFdP0WS5t5rxLqW4lW3lEixqwAUFhxk4J4qbWVv63Kv739dhnh9mPhzxMCxIFnHgZ4H70Vz9dPpNm1l4S1u6nuLRVvbWNYYxcoZGIkBIKZ3Dj2rmKb3F0JII0lciSRkAHVYy/6CnzwRRKDHM7kno0RT+dRxTSwsWikaMkYJU4pZbmeYBZZpJAOQGYmg3Uqfs7Ne98/8/wBCOvTPDd4914Vki8N3kVpeQ2iwyWsiqnmXDSD95vbhtyggA/SvM66vTfEmi6f4deL+xYpL43ETFDNII5PLBKyMPZj93PNHQw6lfStGsZ7TW73XjdWz6dJHvjgUBizMQUweBzxnoKfb6HomsalaDTLye3tmtpJ72KUiSW2EfJAIADZHSqD+I7me11iO5jWWXV5EkllzjYVbdwP0qro+qz6LqKXsCpIVVkeOQZWRGGGU+xFCA2Y9L0DVdOnvtMW+thYzRfaIrmVX8yJ3C7lYAbSPTmrB8DSjWym/OnDVhYn5v3uzP3umMY4z61l3uv27aXNpuk6THpkFy6vcETNK8m3lVy3RQecVqf8ACwrn+1/t/wDZ0Oz7N5Jg8w435z5ucfezzR/X9f11AseCr2OHX7jS7W1gEOy7JnZA0sihG2gsegGO2M1i+B/+R00j/r4H8jS+HPENloD/AGhtG+2XmHTzmu2QbWGCNoBHQnmpPDd3YDx1ptzDAun2izr8kk5cJxyS7YoW6B7MwZ2ZriTcxb526nPerF1qdxd2FlZS7PKslZYsDnDHJzTtW06fTb1o55Ldy+XBgnWVcEnupIB9qpVNk7De50Omm2k8K6stu17BNFCjT4nHlT5cAArtzxn1qpp2n2I0mbVtT894EmEEUMDBWkcjJyxBwAPapdP13TrHTprNtE877TGqXDm8Zd+DkYGPl5HaobLWYLa1ubG401LqymlEyQtKymNhwMMOTxwfWsbT96y6j0si34uMDjSDbI6QHTk2LIwZgNzdSOtZWp6ncatcRz3OzfHCkK7Bj5VGB+NTa1rLa1LbSNbRW/2eAQhIvu4BJGB264rOq6cbRV99RNnQaOzHwd4jBYkAW2AT0/eGs/SF0Znuf7Zluo1EDG3+zqDmXsG9q17Kzax8EaxLPcWg+2rbmCNLlGkOHJOUByOvek8HLptsb3UdZWxlsRbvF5UzAytIRlfLTrn/AGug9a16sRzA96WkHSloAKKKKACiiprRoo7lJJvuJ82MZyR0H50AS337kRWg/wCWK5f/AHzyf6ChP9H0136PctsX/dHX9arO7SyM7n5nOSamvJkllVYj+6iUInGM+p/E0hj7CJJpQjAseoAOMH3PpUkCeabpjKpZkyR82Aciq9rLGjr5rSBEIYKgHzEetK1yFVhFkM773Y9+cgD2oEMuRAH3QPlT/Cc/L+J61enBaW92kE+WOAvI6d6pSSxeYs0KFW6sjAFQfb2qRb13877RLI3mJtGO3IoGSkmG3kucn98gjXnv/F/L9aoqzKcqcGrK3ilfJlhDW4HyoDgqfUH19agV0GcxBueMsePyoEJ5sn980NI8hBkZnxwMnt6U7zI/+eC/99N/jQ8qMiqIUTBzuBOTQBcud0UZYW7Ru6bVDHIjX/E1K6ILpoyp2ugV5AcbVUfMP5VT+0xeZvEfI6FyWP1J/pT47yNEeFkd4pTmRi2GJ9R6UhkMMe9nkBCpEQxz1xmrnnn7Qs+9Xie544xj/OaqRzRxLOgQusgAXccd884pRPD5Co0X3XLBQTg8dz+FMRJcx+TAysFQvKdqbecDjOT0p4BZLWNTh5ISqn3LH+fSmT3cV1HJJKGFyVCjH3SAf0pEvfLSJUJXZGVJ2gnOSePT60hjlT/iWGPozMZAPZcD+p/Kq9qM3cI/6aL/ADpftTi4SZQBs4Ve2PSl82FLrzoUZVHKqxzg/X0piLMb7Lh7kSjZFMMrsHIJpLlHtoZfMkYM8hVFAABUdSfbpUC3CeR5TxjG7c23gv6ZNTG+iuMNdRHzEUrG6dMY4BHtSGQ2fyCaYEhokyuPc4/rUpleBYJQ3MgyBgcc49KrxMiKwd3wwwyIPvfjT2u98oZ4UZAAqp/dA9DTEJcRRx3skeSsasR6nFWLk7r35F2r5SkL8xxwPSqlw8ck7PFv2tz85yc/WpzdR/aHf5iDAI+ODnAFAxxBEcmB/D1CScfn0qKwZUvomZgoB5JOB0ojuEWOVcSZdNoy+e4qOOVEidfLy7EYYnoBz0oEWf3gUOXQLnGcjr/3zUOoOsl9MyMGUtwR0NSy3EEssjF5wkrh2TAxmoJplkTYsYAViVY9dp7GgZfZmF9KPNO0Qn5QenyVFCztdWcgceW7BVQfwYPSo2vIzcySiNvmjKDn/ZxTLOWCCUSyhyycqFxgntn0pCH2bR/2iPM8zc0mEaNgpU569KRbY3GpvCZDje25zycDOT9aZazxwS+bJB5rBgy/OVwf6083qrerdQwCNskspYsGz1pjJw1sdLuvs6SLhkyXYHPP6VnVbe9Q2slvDbLEjkHhiTke9VKEIKKKKYBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABSt2+lJSt2+lACUUUUAFFFFAF3StG1DWrhobC3MpQAuxYKqDOMsxwBU3iLQ5/DurS2MzB0U5jlBGJF6Z4JxzkYrV8DagE1JNHubIXVlqFzFv8AmKGN0O5WB9ucg9ab4it10zUbTxFp1wZodSeWeJbqBdyMGIYMhyCMng9DQ+gLqYb6fImlRal51u0UshjEaygyAjuV6ge9Va6nV7x9U8C2l/cw2q3P9pPEZILZIiUCAgHaBnkmsdILP+zZT9pOPMXL+Scjg8daO5tRours1s3q0tr9/QzqK0NMhtmufmmLNtfCGLgjB5qqBHFcRGBvtIDA7WjIDHPTHfNFhzoSjTVS61v1Xl5+fyIM5pa0/EdxcXOuTzXWlJpUzBd1pHGUCceh9etZlIwEIB6jNLRRTAKQDHSlooATAznAzS0UUAFFFFABRRRQAUUUUAFFFFABRRRQAgAHQYpaKKACiiigAooooATAznHNFLRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUp7fSkrc8K2GmavfnSr6Cfz7kN5FzFLgREKTymPmBx60AYdFIKWgAooooA1/D3iXUPDd201pITG4O+En5WO0gE8HkZz+FQNqLarqaXGv3d3cIRteSPBdR22g8Yz24rPooA29W1TTjotroulfaZLeGd7iSe5VVd3YAYCgkAAD1rF3sEKbjtJyRngmkopDvYVXZG3IxU+oOKnsPsn22I30txFbg5Z7dQ0gx0xkgdar0Uxbqxr+KNebxJrkmomJok2LHGrNubaowCx7k9ayKKKQBRRRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAra8GJ5njDTF8x0xNuyhweFJx+OMfQ1i1paRrs2iCZrS2tjcyqVS5kjLSQgjB2c4GfoaAK+p341K/kuxZ21pvP+qtk2IPw9aq0UUhsKKKKYgooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA//2Q==" /></span>\r\n			</p>\r\n		</li>\r\n		<li style="color:#000000;font-family:&quot;Calibri&quot;,sans-serif;font-size:16pt;font-style:normal;font-weight:normal;">\r\n			<p style="color:#000000;font-family:&quot;Calibri&quot;,sans-serif;font-size:10.5pt;font-style:normal;font-weight:normal;">\r\n				<span style="font-family:宋体;font-size:16pt;">一维数组转化为字符串并加上双引号</span>\r\n			</p>\r\n		</li>\r\n	</ol>\r\n<span> </span>', 'admins', '2018-05-27 10:19:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
