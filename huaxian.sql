-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 24 日 09:06
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `tr_admin`
--

INSERT INTO `tr_admin` (`id`, `adminid`, `adminname`, `role`, `adminpassword`, `adminphone`, `adminmail`, `time`) VALUES
(3, '1601', '邓', 5, 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '1234@qq.com', 1500951621),
(4, 'admin', 'admin', 1, '21232f297a57a5a743894a0e4a801fc3', '15611111111', '123@qq.com', 1500953409),
(27, '1606', '张', 5, 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '12223@qq.com', 1501056518),
(25, '1604', '张', 5, 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '123@qq.com', 1501056487),
(26, '1605', '邓', 5, 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '123@qq.com', 1501056503),
(34, '1709', '周雪迎', 12, '5ad074481c3675ecc2ba19b491e79218', '15538191283', '2311478620@qq.com', 1509669688),
(35, '1710', 'ALL', 13, '5ad074481c3675ecc2ba19b491e79218', '13071021121', '2311478620@qq.com', 1509670164),
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
(4, '21是大事图发个', 'admin', '2018-05-18 09:24:40');

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
(1, '15538191283', '2311478620@qq.com', '滑县县城东南部某某大街某某大路', 'admin', '2018-05-21 16:03:45');

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
(8, '555', '/upimages/20180522\\aa057932c802e85e46a5c6cca705a576.jpg', '55555555555', NULL, 'admin', '2018-05-22 15:44:35');

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
(6, '1', '/upimages/20180518\\f100c83656a9f70e7421bfd69c61b271.jpg', '222', 'admin', '2018-05-18 09:34:02');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='大事记表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tr_events`
--

INSERT INTO `tr_events` (`id`, `image`, `title`, `description`, `content`, `user`, `time`) VALUES
(1, '/upimages/20180514/ebced616324613b5d46f87d939f84d19.jpg', '大事记1', '各乡（镇）人民政府，产业聚集区管理委员会，县人民政府各部门及有关单位:现将《滑县支持招商引资项目建设暂行办法》印发给你们，请认真参照执行。', NULL, 'admin', '2018-05-14 18:39:20'),
(4, '/upimages/20180515\\0de282ae2b0f04daaf55a45c1ede9dc9.jpg', '123123123', '大事记描述', NULL, 'admins', '2018-05-21 14:15:00'),
(6, '/upimages/20180518\\cf269b3b05160c9f798bee69d0a5fedc.jpg', '112', '大事迹描述', NULL, 'admins', '2018-05-21 14:15:17'),
(7, '/upimages/20180523\\b8214de2c9da48a3f086797126964506.jpg', '测试测试', '深的还是然后也为爱个人个人和我让他火热发挂号费个好人导航跟问题问题玩儿玩儿玩儿外国人', NULL, 'admin', '2018-05-23 14:34:29'),
(8, '/upimages/20180523\\54e772b49186e18a53208f573f8af355.jpg', '1111', '213123123', NULL, 'admin', '2018-05-23 16:07:46'),
(9, '/upimages/20180523/6a5444ecbba7bec5cc1c86bb7a6c7fa7.jpg', '2213231', '2222', NULL, 'admin', '2018-05-23 16:09:50');

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
(5, '综合业务部3502郑浩20180515日报', '20180515\\c0267a75338317d90ea708757ae47c1e.doc', '哈哈', 'admins', '2018-05-22 08:26:39'),
(4, '综合业务部3502郑浩20180515日报', '20180515\\135687397841dbda972314a8b2d0275d.doc', '1111111', 'admins', '2018-05-22 08:26:45'),
(3, '综合业务部3502郑浩20180515日报', '20180515\\87e27359241ec87a9d4773ee6a79dfc9.doc', '11111111', 'admins', '2018-05-22 08:26:52'),
(6, '测试', '20180517\\e2226875a0374d45977eeb100f1d7add.jpg', '&nbsp;333333', 'admins', '2018-05-22 08:26:31'),
(7, 'CI框架111note', '20180518\\36ebfb0a1861a80b17c4fe38ef28eea2.docx', '<p class="MsoNormal" align="justify" style="margin-left:0pt;text-indent:28pt;text-align:justify;">\r\n	1、从“招商引资”到“招商选资”转变。1111111\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0pt;text-indent:28pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且在“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28pt;text-align:justify;">\r\n	积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admins', '2018-05-22 08:26:15'),
(9, '1111', '', 'ssafsf', 'admins', '2018-05-21 18:39:17');

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
(2, '<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	1、公司营业执照原件复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	2、法人身份证原件复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	3、环境影响评价审批手续\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	4、非法人办理需带委托人申请书，委托人身份证原件和复印件\r\n</p>\r\n<p style="font-size:22px;font-family:Arial, Verdana, 宋体;background-color:#FFFFFF;">\r\n	5、公司公章\r\n</p>', '长江路与文明路交叉口向西100米路南电力服务大厅', 'admin', '2018-05-21 15:45:59');

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
(6, '44444', '阿日发售发送多个', 'admin', '2018-05-22 10:00:50');

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
(2, '222', '2222222', 'admin', '2018-05-22 10:10:32');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播图表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tr_imgs`
--

INSERT INTO `tr_imgs` (`id`, `name`, `image`, `user`, `time`) VALUES
(3, 'Alipay', '/upimages/20180511\\b0f259296e761a68546cccc7172c574c.jpg', 'admin', '2018-05-15 16:19:02'),
(6, '123', '/upimages/20180515\\db83a218c65b7057b14fab45235bf76c.jpg', 'admin', '2018-05-15 16:19:21'),
(7, '满天星', '/upimages/20180511\\35f395f34e3bee41796ea39bdeb5d279.jpg', 'admins', '2018-05-21 09:29:14'),
(8, '小灯泡', '/upimages/20180512\\1b5f1d245fc89068cd15ac42eaf484db.jpg', 'admins', '2018-05-21 09:29:27'),
(9, '这是谁', '/upimages/20180515\\3e1fa3d0fb295901e27db37020a5d469.jpg', 'admins', '2018-05-21 09:29:43');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='党政领导表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tr_leader`
--

INSERT INTO `tr_leader` (`id`, `name`, `image`, `position`, `work`, `statue`, `user`, `time`) VALUES
(1, '领导1', '/upimages/20180512\\1eaeab243847b3fc43a55913e1dd6461.jpg', '财务局和啥啥局和啥啥局', '各乡（镇）人民政府，产业聚集区管理委员会，县人民政府各部门及有关单位\r\n1、群威群胆\r\n\r\n\r\n2、我问问', '是', 'admin', '2018-05-16 18:09:53'),
(9, '郑浩', '/upimages/20180515\\707ab5863907f36e4dd8e68d7d3daa62.jpg', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊哈哈哈哈哈哈哈哈', '打游戏打游戏', '否', 'admins', '2018-05-21 14:55:02'),
(7, '周小超', '/upimages/20180515\\a2e6fa3447afe4f41736f4970bd44ea2.jpg', '部长', '领导桂纶镁开发班列够官网。', '否', 'admin', '2018-05-15 14:54:18'),
(8, '郑浩', '/upimages/20180515\\6e6b965fd355273a4c22da5c56a409da.jpg', '职工', '带领大家打游戏', '否', 'admin', '2018-05-15 15:20:38'),
(17, '11111', '/upimages/20180515\\ed820f1a6e4bd8f1a48147c54c3e49b0.jpg', '1', '1', '否', 'admin', '2018-05-16 17:59:21'),
(18, '111333', '/upimages/20180518\\437e4c6550e1b6ee9523948e89a9f2a6.jpg', '', '3333', '是', 'admin', '2018-05-18 09:13:49');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `tr_link`
--

INSERT INTO `tr_link` (`id`, `linkname`, `linkurl`, `image`, `user`, `time`) VALUES
(12, '', 'www.baidu.com', '/upimages/20180510\\9191322321aaa731e0311a7e6cbd14c3.jpg', 'admin', '2018-05-10 11:13:46'),
(10, '', '123213', '/upimages/20180510\\eb52d078064cdb1a9adc1ddd0a2b462c.jpg', 'admin', '2018-05-10 11:06:05'),
(11, '', '123123123', '/upimages/20180510\\9fc4e2d74e7938adf3c7641f0e029d4e.jpg', 'admin', '2018-05-10 11:08:06'),
(13, '', '12132', '/upimages/20180512\\80fe30807e006f6a5f74d27000a5b346.jpg', 'admin', '2018-05-12 14:28:22'),
(14, '', '', '/upimages/20180512\\a82278f593ba575b1636ab3bf6e7d7d6.jpg', 'admin', '2018-05-12 14:29:08'),
(16, '', '', '/upimages/20180518\\fe31e495471c1876ef73e5f1aaeb6f4e.jpg', 'admin', '2018-05-18 10:06:03');

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
(1, '/upimages/20180517\\e68e1017084b65e1c191a4e84eb337c0.jpg', 'admin', '2018-05-17 09:46:35');

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
(1, '<p class="MsoNormal" align="justify" style="text-align:center;margin-left:0pt;text-indent:28pt;">\r\n	<span>六通一平</span>\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	1、<span>从</span>“招商引资”到“招商选资”转变。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admin', '2018-05-15 15:09:56');

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
(3, '33333333', 'admin', '2018-05-18 09:45:24');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='进言献策表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `tr_message`
--

INSERT INTO `tr_message` (`id`, `title`, `content`, `good`, `hot`, `user`, `time`, `yonghu`, `time1`) VALUES
(1, '我想买口红', '买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！买买买！！！', 1, 0, 'admin', '2018-05-17 17:25:38', '15538191283', '2018-05-24 12:10:20'),
(6, 'szdggfgh', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-24 15:20:11'),
(4, '4444444', '前我22222222222', 0, 1, 'admin', '2018-05-24 14:52:24', '13403991030', '2018-05-23 14:37:18'),
(7, 'szdggfgh', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-24 15:20:28'),
(8, 'sdfasfsf', 'sdgsdgs', 1, 0, 'admin', '2018-05-24 16:14:38', '15538191281', '2018-05-24 15:48:11'),
(9, '111111', '', 0, 0, '', '0000-00-00 00:00:00', '15538191281', '2018-05-24 15:48:20'),
(10, '222222', 'sdfgdgsg', 0, 1, 'admin', '2018-05-24 16:15:34', '15538191281', '2018-05-24 15:48:26'),
(11, '3333', '222222', 1, 0, 'admin', '2018-05-24 15:49:20', '15538191281', '2018-05-24 15:48:30'),
(12, '4444', 'wewtdsg', 1, 0, 'admin', '2018-05-24 16:14:30', '15538191281', '2018-05-24 15:48:35'),
(13, '55', 'sdgdgdfgdfg', 1, 0, 'admin', '2018-05-24 16:14:23', '15538191281', '2018-05-24 16:13:57');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='内部文件表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tr_neibufile`
--

INSERT INTO `tr_neibufile` (`id`, `file`, `fileurl`, `user`, `time`) VALUES
(1, '5-6月三分部培训.xlsx', '20180521\\32a8465be447bac0fd6c76a25004af86.xlsx', 'admin', '2018-05-21 17:57:09'),
(2, 'tp5培训.docx', '20180521\\66bc9f536ffe8d750c14ea7f7eaba824.docx', 'admin', '2018-05-21 18:10:40'),
(8, '微擎实例notes.docx', '20180522\\abdb96efe32b3abc479aff11e0ff10dd.docx', 'admin', '2018-05-22 17:39:01'),
(6, '爱尚易购相关密码.txt', '20180521\\2945e2e57cb74d0b47e048e81867890a.txt', 'admin', '2018-05-21 18:12:51'),
(7, '科技公司5月份第3周工作总结.docx', '20180521\\c60c628712fa619d269924051a5e68a9.docx', 'admins', '2018-05-21 18:17:47');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tr_news`
--

INSERT INTO `tr_news` (`id`, `title`, `content`, `newstime`, `user`, `time`) VALUES
(1, '222222223333', '111233333', '2018-05-19', 'admin', '2018-05-17 14:29:32'),
(5, '新闻一', '234234', '2018-05-25', 'admin', '2018-05-17 14:36:34');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公告表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tr_notice`
--

INSERT INTO `tr_notice` (`id`, `title`, `content`, `user`, `time`) VALUES
(1, '1111', '1111111', 'admin', '2018-05-17 15:03:27'),
(5, '222', '2222222222', 'admins', '2018-05-21 09:28:28');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='远期规划表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_plan`
--

INSERT INTO `tr_plan` (`id`, `content`, `user`, `time`) VALUES
(1, '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	1、<span>从</span>“招商引资”到“招商选资”转变。1111111\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admin', '2018-05-15 14:54:40');

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
(2, '/upimages/20180516\\5d3f8e6e135a1c8fd3e46fd96d7b3b28.jpg', '河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美河南省华康最求完美。11111', '<p style="font-size:17px;font-family:" color:#666666;background-color:#1884e1;"=""><br />\r\n	</p>', 'admin', '2018-05-16 10:56:57', '重点项目二');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `tr_role`
--

INSERT INTO `tr_role` (`id`, `rolename`, `content`, `pri_id`) VALUES
(1, '超级管理员', '有平台所有权限,最大的管理员，此角色类型不能删除。', '38,39,40,41,42,43,44,45,46,47,48,49,69,72,73,75,76,77,212,213,214,215,216,217,251,218,221,222,243,244,245,246,247,223,224,226,227,229,230,248,249,250,232,233,234,235,236,237,238,239,240,241,242,252,253,254,257,258,255,259,260,261'),
(5, '普通管理员', '拥有除了权限管理的所有权限', '38,39,40,41,42,43,44,45,46,47,48,49,69,72,73,75,76,77,212,213,214,215,216,217,251,218,221,222,243,244,245,246,247,223,224,226,227,229,230,248,249,250,232,233,234,235,236,237,238,239,240,241,242,252,253,254,257,258,255,259,260,261');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `tr_user`
--

INSERT INTO `tr_user` (`id`, `username`, `password`, `time`) VALUES
(41, '15538191283', '5ad074481c3675ecc2ba19b491e79218', '2017-10-09 00:00:00'),
(54, '15538191281', '3f67fd97162d20e6fe27748b5b372509', '2018-05-24 09:57:44');

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
(1, '<p class="MsoNormal" align="justify" style="text-align:center;margin-left:0pt;text-indent:28pt;">\r\n	污水处理厂\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	1、<span>从</span>“招商引资”到“招商选资”转变。111111111111\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。\r\n</p>', 'admin', '2018-05-15 15:30:46');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='园区规划表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tr_yuanqu`
--

INSERT INTO `tr_yuanqu` (`id`, `content`, `user`, `time`) VALUES
(1, '<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	园区规划6666661、<span>从</span>“招商引资”到“招商选资”转变。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;text-indent:28.0000pt;text-align:justify;">\r\n	随着市场经济的发展和世界经济的全球化、一体化发展，投资者投资的交换需求已不仅仅局限于土地资源、优惠政策、廉价的劳动力上，<span>而产业集聚区的环境容量在逐渐减少。今后产业集聚区的建设上将减少高耗能、高污染、低回报的项目落户，由</span>“招商引资”向“招商选资”转变，把重点放在引进有利于产业优化、用地少、附加值高、污染小的项目上，并且<span>在</span>“引进来”中选优、选强。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	2、抓住产业短板，加强产业集群建设。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	<span>积极探索，在推动传统产业升级的基础上，加大培育新兴产业和引进现有产业上下游企业，促进企业技术研发和科研平台建设，鼓励企业与国内外行业领先地位的高等院校、科研院所及其他组织建立产学研战略联盟，推进新技术向经济利益转变，强化</span>“抱团发展”的产业集群建设理念。\r\n</p>\r\n<p class="MsoNormal" align="justify" style="text-indent:28.0000pt;text-align:justify;">\r\n	3、提升服务水平，激发企业创新创业活力。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>加大人才引进培养力度，大力推进柔性引才，扩展人才引进渠道，着力引进培养高层次创业人才，优化人才在产业集聚区就业后的子女入学、购房、医疗等扶持政策。大力推进大众创业，转变政府职能、建设服务型政府，营造公平竞争的创业环境，使有梦想、有意愿、有能力的科技人员、高校毕业生等各类市场创业主体</span>“如鱼得水”，实现创新支持创业、创业带动就业的良性互动发展。1111111\r\n</p>', 'admin', '2018-05-18 09:49:52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
