-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 06 月 22 日 14:31
-- 服务器版本: 5.1.36
-- PHP 版本: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `cover` text NOT NULL,
  `show` tinyint(4) NOT NULL,
  `question` text,
  `answer` text,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=196 ;

--
-- 转存表中的数据 `albums`
--

INSERT INTO `albums` (`album_id`, `classid`, `upid`, `cover`, `show`, `question`, `answer`, `user`) VALUES
(185, 177, 175, 'upload/photos/1303800349993.jpg', 5, '故乡', '随州', 0),
(186, 178, 175, 'upload/photos/1303836132964.jpg', 3, '地方', '西递', 0),
(188, 181, 175, 'upload/photos/1304569090827.jpg', 1, '名字', '张某', 0),
(195, 188, 175, 'upload/photos/default_cover.jpg', 1, '888', '888', 0);

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `aid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `title` text NOT NULL,
  `comment_on` tinyint(4) NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `c_num` int(11) NOT NULL,
  `viewnum` int(11) NOT NULL,
  `show` tinyint(4) NOT NULL,
  `dateline` tinytext NOT NULL,
  `updatetime` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=121 ;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`aid`, `classid`, `upid`, `title`, `comment_on`, `origin`, `c_num`, `viewnum`, `show`, `dateline`, `updatetime`, `user`) VALUES
(20, 103, 91, '建议“网站前端开发”人员掌握的技术有以下几点 ', 1, 1, 0, 0, 3, '1305505497', '1302641513', 0),
(21, 104, 91, '>>友情提示：标题不能为空！222222222', 1, 1, 0, 0, 3, '1308049306', '0', 0),
(51, 103, 91, '测试FLASH插入', 1, 1, 0, 0, 2, '1305229973', '0', 0),
(35, 103, 91, 'ffffssssssssss', 0, 1, 0, 0, 4, '1302568919', '0', 0),
(24, 123, 91, '>>友情提示：标题不能为空！66666', 1, 1, 0, 0, 3, '1307987540', '1302575031', 0),
(28, 107, 91, '学2', 1, 1, 0, 0, 3, '1308049317', '0', 0),
(36, 103, 91, '>>友情提示：标题不能为空！66666', 1, 1, 0, 0, 4, '1302574741', '0', 0),
(37, 103, 91, '>>友情提示：标题不能为空！66666', 1, 1, 0, 0, 4, '1302574943', '0', 0),
(43, 123, 91, '广西一民警因消费时发生争执开枪打伤2人', 1, 1, 0, 0, 3, '1304589800', '0', 0),
(41, 103, 91, 'cccccccccccc', 1, 1, 0, 0, 4, '1302645716', '0', 0),
(58, 103, 91, '>>友情提示：标题不能为空！', 1, 1, 0, 0, 3, '1306199610', '0', 0),
(46, 109, 108, '知识', 1, 1, 0, 0, 3, '1305397877', '0', 0),
(47, 103, 91, 'ccccccccccccccc', 1, 1, 0, 0, 4, '1302655324', '0', 0),
(52, 103, 91, '关于设计 ', 1, 1, 0, 0, 3, '1308761205', '0', 0),
(55, 103, 91, '第26届世界大学生夏季运动会火炬今日广州传递', 1, 1, 0, 0, 3, '1305508296', '0', 0),
(59, 103, 91, '解放军总参谋长时隔7年再次访美', 1, 1, 0, 0, 3, '1305513389', '0', 0),
(63, 103, 91, '广东部分干部上班时玩游戏睡觉被拍(组图)', 1, 1, 0, 0, 3, '1306777107', '0', 0),
(68, 123, 91, '测试发布', 1, 1, 0, 0, 3, '1307987510', '0', 0),
(70, 123, 91, '动态测试', 1, 1, 0, 0, 2, '1307987523', '0', 0),
(78, 103, 91, '『几番秋心，几番悠』--天之骄子“闲”情记“趣”', 1, 1, 0, 0, 3, '1307961336', '0', 0),
(79, 103, 91, '又一夜雨落风寒 ', 1, 1, 0, 0, 3, '1308761582', '0', 0),
(82, 103, 91, '生活，需要动力', 1, 1, 0, 0, 3, '1308781423', '0', 0),
(83, 103, 91, '学习才是动力', 1, 1, 0, 0, 3, '1308760901', '0', 0),
(84, 103, 91, '同性恋运动会不逊世界杯 德副总理也参加', 1, 1, 0, 0, 3, '1308761005', '0', 0),
(85, 103, 91, '中国离婚率持续走高 80后离婚多因父母插手', 1, 1, 0, 0, 3, '1308760854', '0', 0),
(86, 103, 91, '熊丙奇：南科大的路不能越走越窄', 1, 1, 0, 0, 3, '1308533048', '0', 0),
(87, 103, 91, '素色女装实用搭配 简洁利落气场足', 1, 1, 0, 0, 3, '1308760658', '0', 0),
(88, 103, 91, '南海开战，越南军队是中国对手吗 ', 1, 1, 0, 0, 3, '1308760607', '0', 0),
(89, 103, 91, '新手站长必须知道的50个问题', 1, 1, 0, 0, 3, '1308760464', '0', 0),
(90, 103, 91, '移动OPhone手机5月将面市对抗iPhone', 1, 1, 0, 0, 3, '1308535559', '0', 0),
(91, 109, 108, '透过树叶看天', 1, 1, 0, 0, 3, '1308564797', '0', 0),
(92, 109, 108, '秧田记忆', 1, 1, 0, 0, 3, '1308564846', '0', 0),
(93, 109, 108, '一个人的历史', 1, 1, 0, 0, 3, '1308564878', '0', 0),
(94, 109, 108, '被放逐的思维', 1, 1, 0, 0, 3, '1308564921', '0', 0),
(96, 109, 108, '李彦宏：百度也是媒体 希望用户更多时间停留', 1, 1, 0, 0, 3, '1308738199', '0', 0),
(97, 109, 108, '李彦宏：百度也是媒体 希望用户更多时间停留', 1, 1, 0, 0, 2, '1308738364', '0', 0),
(98, 109, 108, '雅虎正物色新CEO 投资人希望马云孙正义担纲', 1, 1, 0, 0, 3, '1308744501', '0', 0),
(99, 197, 108, '杨韵禾 - 放晴', 1, 1, 0, 0, 3, '1308744659', '0', 0),
(100, 197, 108, '一瞬之光', 1, 1, 0, 0, 3, '1308744767', '0', 0),
(101, 197, 108, '只因为你', 1, 1, 0, 0, 3, '1308744922', '0', 0),
(102, 197, 108, '老男孩', 1, 1, 0, 0, 3, '1308745022', '0', 0),
(103, 197, 108, '疯狂世界', 1, 1, 0, 0, 3, '1308745074', '0', 0),
(104, 110, 108, 'php抓取https的内容', 1, 1, 0, 0, 3, '1308745169', '0', 0),
(105, 110, 108, 'PHP算法之翻牌游戏', 1, 1, 0, 0, 3, '1308745221', '0', 0),
(106, 110, 108, 'PHP的可变变量名', 1, 1, 0, 0, 3, '1308745261', '0', 0),
(107, 110, 108, 'PHP工程师面临的成长瓶颈', 1, 1, 0, 0, 3, '1308745296', '0', 0),
(108, 110, 108, 'PHP程序员面试，切忌急功近利', 1, 1, 0, 0, 3, '1308745350', '0', 0),
(109, 116, 108, 'PHP Socket工具包 nanoserv 2.1.0 发布', 1, 1, 0, 0, 3, '1308745389', '0', 0),
(110, 116, 108, 'PHP开发框架——Yii 1.1.4 发布', 1, 1, 0, 0, 3, '1308745418', '0', 0),
(111, 116, 108, 'Zend公司首次推出PHP服务器管理系统', 1, 1, 0, 0, 3, '1308745453', '0', 0),
(112, 116, 108, '百万级PHP网站架构工具箱', 1, 1, 0, 0, 3, '1308745491', '0', 0),
(113, 117, 108, 'Simon Garfunkel The Sound of Silence ', 1, 1, 0, 0, 3, '1308745879', '0', 0),
(114, 117, 108, '中国达人秀 第二季 王芳 110605 中国达人秀', 1, 1, 0, 0, 3, '1308746007', '0', 0),
(115, 117, 108, '快乐大本营 2011 欢乐嘉年华 刘青云 梁朝伟 张震岳', 1, 1, 0, 0, 3, '1308746135', '0', 0),
(116, 116, 108, '裸婚时代 第1集 ', 1, 1, 0, 0, 3, '1308746231', '0', 0),
(117, 117, 108, '《建党伟业》之《践行者》', 1, 1, 0, 0, 3, '1308746350', '0', 0),
(118, 117, 108, '电影: 单身男女 (2011)', 1, 1, 0, 0, 3, '1308746484', '0', 0),
(119, 109, 108, '传雅虎寻找新CEO 投资人称希望孙正义马云接班', 1, 1, 0, 0, 3, '1308746836', '0', 0),
(120, 103, 91, '倩女幽魂 刘亦菲版', 1, 1, 0, 0, 3, '1308781868', '0', 0);

-- --------------------------------------------------------

--
-- 表的结构 `articles_comment`
--

CREATE TABLE IF NOT EXISTS `articles_comment` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `message` text NOT NULL,
  `ip` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `dateline` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `articles_comment`
--


-- --------------------------------------------------------

--
-- 表的结构 `articles_content`
--

CREATE TABLE IF NOT EXISTS `articles_content` (
  `mid` int(11) NOT NULL,
  `message` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `articles_content`
--

INSERT INTO `articles_content` (`mid`, `message`, `user`) VALUES
(20, '<p><span style="font-size:14px;">在当今纷繁复杂的世界，设计形式也是百花齐放，什么设计才是最容易被用户接受，并且能很好的给用户带来他们需要的信息，这是值得我们探讨的。</span></p>\r\n<p><span style="font-size:14px;">信息设计的定义</span></p>\r\n<p><span style="font-size:14px;">信息设计顾名思义就是用于信息交流的设计，如果我们把“信息”这个词语拿出来单独来解释的话，首先“信息”这个词语由来已久，它是人类文明赖以发展的基础，可以说人类所有的知识和故事都是信息，通过信息的传递，人类的文明才得以进步和向前发展。现在人们接收的信息越来越多，所以我们可以根据规律来认识和利用信息，从广义上说信息具有：可量度、可识别、可转换、可储存、可处理、可传递、可再生、可压缩、可利用和可分享等基本作用。但是如果说他最重要的作用就是他的可分享性，也就是信息的传播功能，如果信息不能传播，那么他就失去了意义。自人类进去文明时代以来信息的传播方式就有三种途径，通过语言、文字和图像（绘画）等为手段进行一代有一代的传播。语言用声音来传递信息，文字用书写符号来传递信息，绘画用图像来传递信息。</span></p>\r\n<p><span style="font-size:14px;">声音、符号、图像就成为人类传播信息的主要形式。人类只有通过这种表达才能够互相沟通和理解。因此我们可以说，声音、符号和图像是人类所特有的三种信息形式。在现在我们知道的信息设计更多是从一些设计师的作品和观点中总结出来的一些观点，这其中最普及的一个观点就是通过对信息的处理和归纳帮助受众更好的理解和应用信息。在进行信息设计的时候是以解决问题为前提的。</span></p>\r\n<p><span style="font-size:14px;">信息设计的历史和发展以及影响</span></p>\r\n<p><span style="font-size:14px;">世界上最早的已经拥有超过30000年历史的肖维岩洞有着世界上最古老的洞穴壁画群，而在中国古遗址上发现的距今已有8000多年的历史刻划符号都是最早的视觉传达案例。</span></p>\r\n<p><span style="font-size:14px;">当然在今天这样一个视觉文化为主导的文化环境中，我们很难充分的理解这些人类最初的符号的重要性，是实际用途还是精神目的，我们不好断定，但是这些符号和绘画都影响了我们人类以后的生活。</span></p>\r\n<p><span style="font-size:14px;">然而公元前1300年由苏美尔人刻写在粘土上刻着城镇布局以及指出排水沟位置和建筑的城镇布局，并且还做了楔形文字的注解。这张图就具有很好的实用性。也就是被称为地图的图示，一直被业界的信息设计师称为最早的信息设计之一。因为地图有很好的使用目的性，很直接地向受众传递了信息。说到信息设计的使用性，我们不得不说他的一种最常见的表现方式——图表和曲线。</span></p>\r\n<p><span style="font-size:14px;">现代图表和曲线之父——威廉.普莱威尔（William Playfair）本是一名工程师和政治经济学家，但是为了让受众更加容易理解纷繁复杂的数字，从而创造了线形图、条状图和饼状图来来代替以前的数据。这使得受众更加清晰明了的知道数据之间的对比关系。可以说图表和曲线的出现大大的增进了信息设计的发展。</span></p>\r\n<p><span style="font-size:14px;">在1925年奥图•纽拉特发表经过系统化设计的图画文字. “ISOTYPE”（International System of Typographic Picture Education） 希望透过系统化的图像来取代文字，形成一种世界共通的语言， 但是最后由于印刷工艺的局限性而失败了，然而他的影响却没有停止。现在用于公共场所的标识符号都是由“ISOTYPE”演变而来。他对信息设计在图形符号上的发展起到了颠覆性的革新和推动作用。</span></p>\r\n<p><span style="font-size:14px;">信息设计三原则的图形设计分析</span></p>\r\n<p><span style="font-size:14px;">信息设计之所以被称为信息设计，是有他本身的属性原则的，下面我们就从信息设计的三个基本原则来思考信息设计中的图形设计。</span></p>\r\n<p><span style="font-size:14px;">信息设计的认知原则</span></p>\r\n<p><span style="font-size:14px;">首先信息设计具有认知原则，经过设计师对信息的设计和整理，信息设计都应该以清晰易懂、易于理解的方式传达给受众特定的信息。为了达到这一目的，信息设计师必须“删繁就简”，对设计主题进行详细的研究和了解，探索最简便最轻松的方式来传达主题信息。</span></p>\r\n<p><span style="font-size:14px;">在“信息大爆炸时代”人们对信息的接纳都是有选择性，怎么样才能够让受众在众多纷繁的信息中接收你所传达的信息，这也是每个设计师所思考的问题。那么作为信息设计中最容易传达信息的图形，又该怎么设计呢？建筑大师密斯.凡.德.罗提出的设计观点：“少即是多（Less is more）。”很适合运用在信息设计中，因为信息设计的图形就是要让受众一眼就看出他所传达给受众的信息是什么。</span></p>\r\n<p><span style="font-size:14px;">如图手机界面的图形设计，作为典型的信息设计，他要给用户传达的是最直接的信息价值。用户在使用手机的时候，需要很直观的图形信息的传达。所以作为设计师在设计的时候会考虑用最简单的设计方式，让用户知道这个信息，所以我们在设计的时候首先考虑的就是图形的简洁。</span></p>\r\n<p><span style="font-size:14px;">比如说电话薄这个图形，我们在设计上借鉴了电话薄的样式，用线描的手法来实现，同时电话薄上的电话符号也很好地传递了这个图形的寓意。为什么说这样的图形设计能够很容易的被受众接受，我觉得很重要的一点就是信息设计师抓住了受众的“记忆”这个特点。这对信息设计师来说是进行图形设计的最好办法，以上的手机界面图形都是抓取了受众的这个点来进行设计的。</span></p>\r\n<p><span style="font-size:14px;">信息设计的交流原则</span></p>\r\n<p><span style="font-size:14px;">其次信息设计具有交流原则，交流顾名思义就是彼此间的相互沟通，这个就不是信息设计师的一厢情愿了，而是要和受众形成互动。在信息设计中交流的研究就是研究用户如何更有效的接收和分享他们的信息，现在我们知道平面设计专业更多的是被称为“视觉传达设计”。</span></p>\r\n<p><span style="font-size:14px;">设计师是信息的发送者，传达对象是信息的接受者。所以对信息设计中的图形设计来说了解信息传达的对象也是很重要的，设计师在设计图形的时候也应该考虑到受众的文化素养和生活环境，因为这些直接影响了受众对图形的接受程度。如下图为龙记管家设计的图标设计，由于受众是网吧管理人员，所以在进行图形设计的时候尽量会考虑用写实的手法来表现，方便用户的识别。</span></p>', 0),
(21, '2222222222222', 0),
(24, '666665', 0),
(28, '学1', 0),
(35, 'ssssssssssss', 0),
(36, '666665', 0),
(37, '666665', 0),
(43, '<script language="javascript" type="text/javascript" charset="utf-8">\r\n    (function() {\r\n        var options = {\r\n            sourceUrl: "http://news.163.com/",\r\n            source: encodeURIComponent("网易新闻"),\r\n            title: encodeURIComponent("广西一民警因消费时发生争执开枪打伤2人"),\r\n            link: encodeURIComponent(document.location.href)\r\n        };\r\n        NTES.ready(\r\n        function() {\r\n            WbApp.initShareTipsSm(options,"wb-article-sharewraper-sm");\r\n        });\r\n    })();\r\n</script>\r\n &nbsp;<span style="font-size:14px;">&nbsp;00</span> <span style="font-size:14px;">核心提示：4月18日晚，广西来宾民警陆某在桂林一酒店消费结账时，因收费问题与店员发生争执。情绪激动的陆某拔出手枪击中2名酒店员工。目前，伤者伤情稳定，无生命危险。涉嫌枪击事件的陆某已被警方控制。</span> <div id="endText">\r\n<p><span style="font-size:14px;">中广网南宁4月19日消息 记者从广西桂林市公安局获悉，4月18日晚，桂林某酒店发生民警枪击店员事件。目前，嫌疑人现已被控制，伤者无生命危险。<br />\r\n</span></p>\r\n<p><span style="font-size:14px;">当晚，桂林警方接群众报警：市区航空大酒店发生一起枪击伤人事件。</span></p>\r\n<p><span style="font-size:14px;">接警后，桂林市公安局马上派出警力救助伤者，当场控制嫌疑人，并随即开展现场勘查和调查工作。</span></p>\r\n<p></p>\r\n<div class="gg200x300"><iframe height="300" marginheight="0" border="0" src="http://g.163.com/r?site=netease&amp;affiliate=news&amp;cat=article&amp;type=tvscreen200x300&amp;location=1" frameborder="no" width="200" marginwidth="0" scrolling="no"></iframe></div>\r\n<p><span style="font-size:14px;">现已查实，开枪伤人者系来宾市公安局兴宾分局城北派出所民警陆某。当晚，陆某和同事黄某在酒店消费结账时，因收费问题与店员发生争执。情绪激动的陆某拔出随身携带的手枪击中员工秦某和李某，两伤者随即被送往医院救治。目前，伤情稳定，无生命危险。而涉嫌枪击事件的陆某和黄某均已被警方控制。</span></p>\r\n<p><span style="font-size:14px;">事发后，广西公安厅指派督察总队和来宾市公安局派员连夜赶赴桂林，与桂林市公安局组成联合调查小组对事件开展调查处理工作，并已请检察机关介入。</span></p>\r\n<p><span style="font-size:14px;">警方明确表示，将积极配合检察机关，对事件进行全面调查，对涉嫌违法犯罪的当事人将依法严肃处理，绝不姑息迁就，欢迎新闻媒体、社会各界人士进行监督。案件进展情况，警方将会及时通报。</span></p>\r\n<div><span style="font-size:14px;" class="cDGray right">责任编辑：NN013</span><span style="font-size:14px;">(本文来源：中国广播网 作者：张江元 李楠)</span><a href="http://news.163.com/"><img class="icon" border="0" alt="netease" src="http://img1.cache.netease.com/cnews/img07/end_i.gif" width="12" height="11" /></a><span style="font-size:14px;"> </span></div>\r\n</div>\r\n<!-- 分页 --><!-- 亚运火炬传递广告代码 --><div style="padding-bottom:12px;" id="qianwu4419allchannel560120">\r\n<object id="qianwu4419allchannel560120ad" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="560" height="120"><param name="_cx" value="14816" /><param name="_cy" value="3175" /><param name="FlashVars" value="" /><param name="Movie" value="http://img1.126.net/channel4/008995/qwqy560120_0419.swf" /><param name="Src" value="http://img1.126.net/channel4/008995/qwqy560120_0419.swf" /><param name="WMode" value="Opaque" /><param name="Play" value="0" /><param name="Loop" value="-1" /><param name="Quality" value="High" /><param name="SAlign" value="" /><param name="Menu" value="-1" /><param name="Base" value="" /><param name="AllowScriptAccess" value="always" /><param name="Scale" value="ShowAll" /><param name="DeviceFont" value="0" /><param name="EmbedMovie" value="0" /><param name="BGColor" value="" /><param name="SWRemote" value="" /><param name="MovieData" value="" /><param name="SeamlessTabbing" value="1" /><param name="Profile" value="0" /><param name="ProfileAddress" value="" /><param name="ProfilePort" value="0" /><param name="AllowNetworking" value="all" /><param name="AllowFullScreen" value="false" />      <embed wmode="opaque" src="http://img1.126.net/channel4/008995/qwqy560120_0419.swf" quality="high" width="560" height="120" type="application/x-shockwave-flash" allowscriptaccess="always" name="qianwu4419allchannel560120ad" /></embed /></object></div>\r\n<div class="endMore"><span class="left f14px cBlue"><a id="endpageUrl2" href="http://comment.news.163.com/news3_bbs/7217NNJM00014JB5.html"><span style="font-size:14px;">【有</span><strong id="replycount001" class="cDRed"><span style="color:#ba2636;"><span style="font-size:14px;">35652</span></span></strong><span style="font-size:14px;">人参与】</span></a></span><span style="font-size:14px;"> </span><span class="c-weiBo-display"> <style>.endMore {\r\n	OVERFLOW: visible\r\n}\r\n</style>\r\n<div style="margin-top:10px;" id="wb-article-sharewraper" class="wb-article-sharewraper"><a id="wb-article-sharelink" class="wb-article-sharelink" href="javascript:void(0);" target="_self"><span style="font-size:14px;">转发到微博</span></a><span style="font-size:14px;">(</span><span style="font-size:14px;" id="page_tweet_count" class="wb-article-sharenum">70</span><span style="font-size:14px;">) </span> <div class="wb-article-sharetipswraper"><span id="tweet_page_name" class="wb-article-sharetips"> <div class="wb-article-sharetipswraper-lightrow"><a style="text-decoration:none;" title="虢州渔夫" href="http://t.163.com/gzyf?method=click&amp;modulefrom=share163.gang.click" target="_blank"><span style="font-size:14px;">虢州渔</span></a><span style="font-size:14px;"> 刚刚转发</span></div>\r\n<div class="wb-article-sharetipswraper-darkrow"><a style="text-decoration:none;" title="绯红国度" href="http://t.163.com/adminer?method=click&amp;modulefrom=share163.find.click" target="_blank"><span style="font-size:14px;">绯红国</span></a><span style="font-size:14px;"> 率先转发</span></div>\r\n</span></div>\r\n</div>\r\n<script language="javascript" type="text/javascript" charset="utf-8">\r\n    (function() {\r\n        var options = {\r\n            sourceUrl: "http://news.163.com/",\r\n            source: encodeURIComponent("网易新闻"),\r\n            title: encodeURIComponent("广西一民警因消费时发生争执开枪打伤2人"),\r\n            link: encodeURIComponent(document.location.href)\r\n        };\r\n        NTES.ready(\r\n         function() {\r\n            WbApp.initShareTips(options,"wb-article-sharewraper");\r\n        });\r\n    })();\r\n</script>\r\n</span><span id="IEHtml"><span style="font-size:14px;" class="right cDGray"><span style="padding-bottom:2px;padding-left:23px;padding-right:0pt;background:url(http://img1.cache.netease.com/cnews/css09/bg_n1.gif) no-repeat left -362px;padding-top:2px;" id="IECopyUrl" class="copyLink" title="点击复制标题和链接"><a style="cursor:pointer;text-decoration:none;"><span style="font-size:14px;">复制网址</span></a></span> </span></span></div>', 0),
(41, 'cccccccc', 0),
(46, '<img border="0" alt="" src="/sunsonworld/upload/photos/1303811500440.jpg" />', 0),
(47, 'ccccccccccc', 0),
(51, '<p align="center"><embed src="/sunsonworld/upload/resource/1305176405.swf" type="application/x-shockwave-flash" width="550" height="400" quality="high" /></p>', 0),
(52, '<span style="font-size:14px;"> <p><br />\r\n</p>\r\n<p align="center"><img style="width:300px;height:300px;" src="http://www.wenan8.com/blog/wp-content/uploads/2010/06/1-300x300.jpg" width="300" height="300" srcwidth="300" srcheight="300" zoomrate="1" /></p>\r\n<p><br />\r\n<br />\r\nCSS3 target伪类是众多实用的CSS3特性中的一个。它用来匹配文档(页面)的URI中某个标志符的目标元素。具体来说，URI中的标志符通常会包含一个”#”字符，然后后面带有一个标志符名称，比如#respond，target就是用来匹配ID为respond的元素的。</span></p>\r\n<p><span style="font-size:14px;">现在在页面中，点击一个ID链接后，页面只会跳转到相应的位置，但是并不会有比较明显的UI标识，使用:target伪类可以像:hover等伪类一样对目标元素定义样式。</span></p>\r\n<p><span style="font-size:14px;">浏览器支持</span></p>\r\n<p><span style="font-size:14px;">因为我们在讨论CSS3，所以它现在被除了IE6-8以外的所有浏览器支持，但是IE9会支持这个伪类。这是相当遗憾的，但是这个现实并不影响你使用它。</span></p>\r\n<p><span style="font-size:14px;">如何使用:target</span></p>\r\n<p><span style="font-size:14px;">:target伪类和:hover、:link、:visited、:focus等伪类的用法是一样的：</span></p>\r\n<p><span style="font-size:14px;">selector:target{color:red;/</span><em><span style="font-size:14px;">other styles</span></em><span style="font-size:14px;">/}</span></p>\r\n<p><span style="font-size:14px;">实例</span></p>\r\n<p><span style="font-size:14px;">让我们通过一个简单的例子来演示。比如我们在页面中常常会用到tab，之前我们要用脚本来实现，YUI、jQuery也都有这样的插件或者模块，但是现在我们用:target伪类就可以实现。</span></p>', 0),
(55, '<div class="artInfo"><span id="art_source"><a href="http://www.sina.com.cn"><span style="font-size:14px;">http://www.sina.com.cn</span></a></span><span style="font-size:14px;">&nbsp;&nbsp;</span><span style="font-size:14px;" id="pub_date">2011年05月15日08:31</span><span style="font-size:14px;">&nbsp;&nbsp;</span><span style="font-size:14px;" id="media_name"><a href="http://epaper.nfdaily.cn/html/2011-05/15/content_6960549.htm" target="_blank"><span style="font-size:14px;">南方日报</span></a> <a href="http://epaper.nfdaily.cn/html/2011-05/15/content_6960549.htm" target="_blank"></a></span></div>\r\n<!-- 正文内容 begin --><!-- google_ad_section_start --><p class="img_wrapper" align="center"><img title="周嘉威和梁思捷展示五彩斑斓的大运会火炬。王亮 摄" alt="周嘉威和梁思捷展示五彩斑斓的大运会火炬。王亮 摄" src="http://i2.sinaimg.cn/dy/c/2011-05-15/1305419548_zfo2kg.jpg" /></p>\r\n<div class="img_wrapper" align="center"><span style="font-size:14px;"> </span><span style="font-size:14px;" class="img_descr">周嘉威和梁思捷展示五彩斑斓的大运会火炬。王亮 摄</span><span style="font-size:14px;"> </span></div>\r\n<div class="blkContainerSblkCon" align="center"><br />\r\n</div>\r\n<!-- publish_helper name=''原始正文'' p_id=''1'' t_id=''1'' d_id=''22466967'' f_id=''3'' --><p class="blkContainerSblkCon"><span style="font-size:14px;">　　南方日报讯 (记者/郑佳欣)第26届世界大学生夏季运动会(下称“大运会”)火炬传递，今天上午9时30分将在广州大学城举行，100名火炬手中有52名在校大学生，广州亚运会游泳冠军周嘉威将领衔首棒，奥运会冠军胡佳、冼东妹和劳丽诗和广州亚运会最美引导员梁思捷都将作为火炬手，亮相此次火炬传递。</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　百名火炬手纪念辛亥百年</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　继北京、深圳之后，大运火炬广州大学城传递是火炬实体传递的最后一站。今天的传递线路是从中山大学牌坊处起，沿外环东路进入广东外语外贸大学，再经由中环东路回到中山大学牌坊处，全程8公里。</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　在昨日下午举行的相关新闻发布会上，大运会执行局大型活动策划部副部长袁承咏表示，今天将有100名火炬手参加广州大学城的火炬传递，以纪念辛亥革命100周年，而此前大运会圣火在北京大学、深圳大学成功传递，火炬手数量分别为54人和90人。今天在100名火炬手中，有52名在校大学生。其中年纪最小的是来自俄罗斯的“90后”大学生娜斯佳，她在2010年作为交换生到广东外语外贸大学学习汉语。</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　周嘉威：圆了我的大运梦</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　作为火炬手代表，周嘉威和梁思捷昨日一亮相大运会火炬传递新闻发布会，就被媒体的“长枪短炮”团团围住。</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　周嘉威表示，“很荣幸成为大运火炬广州传递的第一棒，虽然一直没有机会参加世界大学生运动会，但是能以这样一种特殊的方式参与到世界大学生运动会中来，也算圆了我的大运梦。”</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　来自湖南大学的梁思捷是众多火炬手中颇为引人注目的一位。在去年举行的广州亚运会上，梁思捷在闭幕式上曾为亚奥理事会主席艾哈迈德·法赫德·萨巴赫亲王担任引导员，一度被各大媒体誉为广州亚运会上“最美的引导员”。梁思捷表示，自己一定会将大运会的激情和青春时尚，通过手中的火炬传递到世界的各个角落。</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　天气预报现场实时更新</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　记者了解到，考虑到广州阴雨天气频繁，为了保证此次广州站火炬传递的顺利进行，大运会组委会事先做足功课，安排气象局工作人员在传递现场实时更新天气预报。</span></p>\r\n<p class="blkContainerSblkCon"><span style="font-size:14px;">　　袁承咏表示，如果火炬传递开始时突然下雨，将会立即启动预案，将火炬传递时间顺延，等雨停后再继续传递。</span></p>\r\n<!-- publish_helper_end --><div style="text-align:right;padding-right:10px;" class="blkContainerSblkCon"><span style="font-size:14px;margin-right:300px;"><a style="padding-bottom:0px;padding-left:20px;padding-right:0px;background:url(http://timg.sjs.sinajs.cn/t35/style/images/thridpart/tsina_icon_logo16x16.png) no-repeat 0px 0px;padding-top:4px;" href="http://weibo.com/" target="_blank"><span style="font-size:14px;">微博推荐</span></a> | <a href="http://news.t.sina.com.cn" target="_blank"><span style="font-size:14px;">今日微博热点</span></a></span></div>', 0),
(58, '<div class="artInfo"><span id="art_source"><a href="http://www.sina.com.cn"><span style="color:#333333;font-size:14px;">http://www.sina.com.cn</span></a></span><span style="color:#333333;font-size:14px;">&nbsp;&nbsp;</span><span style="color:#333333;font-size:14px;" id="pub_date">2011年05月15日08:31</span><span style="color:#333333;font-size:14px;">&nbsp;&nbsp;</span><span style="color:#333333;font-size:14px;" id="media_name"><a href="http://epaper.nfdaily.cn/html/2011-05/15/content_6960549.htm" target="_blank"><span style="color:#333333;font-size:14px;">南方日报</span></a> <a href="http://epaper.nfdaily.cn/html/2011-05/15/content_6960549.htm" target="_blank"></a></span></div>\r\n<!-- 正文内容 begin --><!-- google_ad_section_start --><div class="img_wrapper" align="center"><img title="周嘉威和梁思捷展示五彩斑斓的大运会火炬。王亮 摄" alt="周嘉威和梁思捷展示五彩斑斓的大运会火炬。王亮 摄" src="http://i2.sinaimg.cn/dy/c/2011-05-15/1305419548_zfo2kg.jpg" /><span style="color:#333333;font-size:14px;">&nbsp;</span><br />\r\n<span style="color:#333333;font-size:14px;" class="img_descr">周嘉威和梁思捷展示五彩斑斓的大运会火炬。王亮 摄</span><span style="color:#333333;font-size:14px;"> </span></div>\r\n<div class="blkContainerSblkCon" align="center"><br />\r\n</div>\r\n<!-- publish_helper name=''原始正文'' p_id=''1'' t_id=''1'' d_id=''22466967'' f_id=''3'' --><p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　南方日报讯 (记者/郑佳欣)第26届世界大学生夏季运动会(下称“大运会”)火炬传递，今天上午9时30分将在广州大学城举行，100名火炬手中有52名在校大学生，广州亚运会游泳冠军周嘉威将领衔首棒，奥运会冠军胡佳、冼东妹和劳丽诗和广州亚运会最美引导员梁思捷都将作为火炬手，亮相此次火炬传递。</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　百名火炬手纪念辛亥百年</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　继北京、深圳之后，大运火炬广州大学城传递是火炬实体传递的最后一站。今天的传递线路是从中山大学牌坊处起，沿外环东路进入广东外语外贸大学，再经由中环东路回到中山大学牌坊处，全程8公里。</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　在昨日下午举行的相关新闻发布会上，大运会执行局大型活动策划部副部长袁承咏表示，今天将有100名火炬手参加广州大学城的火炬传递，以纪念辛亥革命100周年，而此前大运会圣火在北京大学、深圳大学成功传递，火炬手数量分别为54人和90人。今天在100名火炬手中，有52名在校大学生。其中年纪最小的是来自俄罗斯的“90后”大学生娜斯佳，她在2010年作为交换生到广东外语外贸大学学习汉语。</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　周嘉威：圆了我的大运梦</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　作为火炬手代表，周嘉威和梁思捷昨日一亮相大运会火炬传递新闻发布会，就被媒体的“长枪短炮”团团围住。</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　周嘉威表示，“很荣幸成为大运火炬广州传递的第一棒，虽然一直没有机会参加世界大学生运动会，但是能以这样一种特殊的方式参与到世界大学生运动会中来，也算圆了我的大运梦。”</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　来自湖南大学的梁思捷是众多火炬手中颇为引人注目的一位。在去年举行的广州亚运会上，梁思捷在闭幕式上曾为亚奥理事会主席艾哈迈德·法赫德·萨巴赫亲王担任引导员，一度被各大媒体誉为广州亚运会上“最美的引导员”。梁思捷表示，自己一定会将大运会的激情和青春时尚，通过手中的火炬传递到世界的各个角落。</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　天气预报现场实时更新</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　记者了解到，考虑到广州阴雨天气频繁，为了保证此次广州站火炬传递的顺利进行，大运会组委会事先做足功课，安排气象局工作人员在传递现场实时更新天气预报。</span></p>\r\n<p class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;">　　袁承咏表示，如果火炬传递开始时突然下雨，将会立即启动预案，将火炬传递时间顺延，等雨停后再继续传递。</span></p>\r\n<!-- publish_helper_end --><div style="text-align:right;padding-right:10px;" class="blkContainerSblkCon"><span style="color:#333333;font-size:14px;margin-right:300px;"><a style="padding-bottom:0px;padding-left:20px;padding-right:0px;background:url(http://timg.sjs.sinajs.cn/t35/style/images/thridpart/tsina_icon_logo16x16.png) no-repeat 0px 0px;padding-top:4px;" href="http://weibo.com/" target="_blank"><span style="color:#333333;font-size:14px;">微博推荐</span></a> | <a href="http://news.t.sina.com.cn" target="_blank"><span style="color:#333333;font-size:14px;">今日微博热点</span></a></span></div>', 0),
(59, '<div class="artInfo"><span id="art_source"><a href="http://www.sina.com.cn"><span style="color:#000000;"><span style="font-size:14px;">http://www.sina.com.cn</span></span></a></span><span style="font-size:14px;">&nbsp;&nbsp;</span><span style="font-size:14px;" id="pub_date">2011年05月15日 19:45</span><span style="font-size:14px;">&nbsp;&nbsp;</span><span id="media_name"><span style="color:#cc0000;"><span style="font-size:14px;">中国新闻网</span></span></span></div>\r\n<!--正文内容begin--><!-- google_ad_section_start --><div id="artibody" class="blkContainerSblkCon">\r\n<p class="img_wrapper" align="center"><span style="color:#cc0000;"><img alt="资料图：4月26日下午，中国人民解放军总参谋长陈炳德上将，在北京八一大楼会见以查尔斯·波斯坦尼和里克·拉森为团长的美国国会众院“美中工作小组”代表团。中新社发 宋吉河 摄" src="http://i1.sinaimg.cn/jc/2011-05-15/U4167P27T1D647225F3DT20110515194550.jpg" /></span></p>\r\n<div class="img_wrapper"><span style="font-size:14px;" class="img_descr">　　<br />\r\n资料图：4月26日下午，中国人民解放军总参谋长陈炳德上将，在北京八一大楼会见以查尔斯·波斯坦尼和里克·拉森为团长的美国国会众院“美中工作小组”代表团。中新社发 宋吉河 摄</span><span style="font-size:14px;"> </span></div>\r\n<!-- publish_helper name=''原始正文'' p_id=''27'' t_id=''1'' d_id=''647225'' f_id=''2'' --><p><span style="font-size:14px;">　　中新社北京5月15日电 (记者 陶社兰) 应美军参联会主席迈克尔•马伦海军上将邀请，解放军总参谋长陈炳德上将率解放军高级代表团15日离开北京赴美进行正式访问。</span></p>\r\n<p><span style="font-size:14px;">　　此次访问，是解放军总长时隔7年后的再次访美，目的是为了落实今年初胡锦涛主席访美时与奥巴马总统就发展两军关系达成的重要共识，进一步增进了解、加强互信、促进合作，推动两国建立相互尊重、合作互惠的新型军事关系。</span></p>\r\n<p><span style="font-size:14px;">　　访问期间，陈炳德将会见美国军政领导人，就两国两军关系、国际和地区形势及其他双方关心的问题广泛深入地交换意见；参观美军指挥机构、部队和院校，与美军官兵进行广泛接触。</span></p>\r\n<p><span style="font-size:14px;">　　陪同陈炳德访问的有第二炮兵政委张海阳上将、总长助理戚建国中将、广州军区副司令员郑勤中将、南京军区副司令员兼海军东海舰队司令员苏支前海军中将、济南军区副司令员兼济南军区空军司令员张建平空军少将、总参情报部部长杨晖少将、国防部外事办公室副主任关友飞海军少将。(完)</span></p>\r\n</div>', 0),
(70, '动态测试', 0),
(63, '<div class="artInfo"><span id="art_source"><a href="http://www.sina.com.cn"><span style="font-size:14px;">http://www.sina.com.cn</span></a></span><span style="font-size:14px;">&nbsp;&nbsp;</span><span style="font-size:14px;" id="pub_date">2011年05月16日01:36</span><span style="font-size:14px;">&nbsp;&nbsp;</span><span style="font-size:14px;" id="media_name"><a href="http://www.nfncb.cn/snxw/yw/2707.html" target="_blank"><span style="font-size:14px;">南方网-南方农村报</span></a> <a href="http://www.nfncb.cn/snxw/yw/2707.html" target="_blank"></a></span></div>\r\n<!-- 正文内容 begin --><!-- google_ad_section_start --><div id="artibody" class="blkContainerSblkCon">\r\n<p class="img_wrapper" align="center"><img title="网友曝茂名人保局一工作人员办公时间睡大觉。" alt="网友曝茂名人保局一工作人员办公时间睡大觉。" src="http://i0.sinaimg.cn/dy/c/p/2011-05-16/U3938P1T1D22468947F21DT20110516013654.jpg" /></p>\r\n<div class="img_wrapper"><span style="font-size:14px;" class="img_descr">网友曝茂名人保局一工作人员办公时间睡大觉。</span><span style="font-size:14px;"> </span></div>\r\n<br />\r\n<p class="img_wrapper" align="center"><img title="网友曝茂名人保局一工作人员办公时间睡大觉。" alt="网友曝茂名人保局一工作人员办公时间睡大觉。" src="http://i2.sinaimg.cn/dy/c/p/2011-05-16/U3938P1T1D22468947F23DT20110516013654.jpg" /></p>\r\n<div class="img_wrapper"><span style="font-size:14px;" class="img_descr">网友曝茂名人保局一工作人员办公时间睡大觉。</span><span style="font-size:14px;"> </span></div>\r\n</div>', 0),
(0, '8888', 0),
(78, '『几番秋心，几番悠』--天之骄子“闲”情记“趣”<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; 依旧斜阳西照，秋心东流，寻不到的身影轻柔，看得见的野马独走，无故总觅愁…<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; 仍是孤月空守，星孩满眸，奏不响的梁祝低吼，听得着的离歌紧凑，有意却单忧…<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; 刀光剑影，鼓角铮鸣，黄尘古道，烽火边城，多少年如烟往事，转首皆空…<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; 何故嗜愁似酒，恋恨如纣？想曲终人散，旧情化风，痴心无故入觥筹，举盏翻杯，悠步漫深秋…<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; 有泪难尽(畅)流，腹中千踌，转侧无眠，耳闻笛幽，梦中无人共月楼，含情执手，双披一貂裘…<br />\r\n天之骄子<br />\r\n（2009年6月12日下午记）', 0),
(68, '测试发布', 0),
(79, '<p align="center"><img style="width:502px;height:392px;" src="http://bbs.nxnews.net/forum/UploadFile/2005-3/200537162539629.jpg" width="1024" height="768" zoomrate="0.858072916666667" srcheight="768" srcwidth="1024" /></p>\r\n<p><br />\r\n<span style="font-size:14px;">雨水是天使的落泪？</span></p>\r\n<p><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp; 不会的。在这寒得透骨的冬天，即使落泪，天使也会用眼睛将泪水温暖，伤心时也要洒出一片温馨。</span><br />\r\n<span style="font-size:14px;">如果真是天使的落泪，为什么又会这么寒？</span><br />\r\n<span style="font-size:14px;">或许是那颗冰冻的心将它悄然冷却。</span></p>\r\n<p><span style="font-size:14px;">那一阵阵涌来的竟是一种莫名其妙的失落感，一种怀疑，一种疲倦。这世间是否还能找到一方未被污染的净土给我片刻的休憩。难道只有那神话般的幻想中才有那么一块圣洁的心灵。</span><br />\r\n<span style="font-size:14px;">为什么我们要出生在这样一个物质的世界，为什么这个世界要被物质主宰？亲情，友情，爱情…在金钱面前，它们显得是多么的渺小和卑微。但你终究会知道，这世上，不只有钱奴，也会有那般的傲骨。</span><br />\r\n<span style="font-size:14px;">人生在世，也都只不过是拖着一条命，四处劳苦奔波而已。何要低三下四的求秦问楚的。高傲的活着，可能会万般辛苦，但死后的价值会比那些用尽心机，迷恋世俗红尘，灯红酒绿的人高尚千万倍。</span><br />\r\n<span style="font-size:14px;">我一个高傲的贤士，只需要一张床，一个破屋，一本书，一盏浊酒，便可享受人间佳境，一个与世隔绝的世外桃源，一个善良和纯洁，真诚和忠心真空的地方。那是一片精神的沃土。</span><br />\r\n<span style="font-size:14px;">归去来兮，那陶士是带着多大的失望与欣慰说出这句话的啊。厌弃了红尘，只有这青松翠草，旧书破屋才是我终究的伴侣！</span><br />\r\n<span style="font-size:14px;">昨夜的风，一直延续到现在，呼呼呼鬼一般的嚎叫着，那雨想是哭累了，哭丧着脸却挤不出一滴眼泪。</span><br />\r\n<span style="font-size:14px;">是那天国的声音在招唤:来吧，孩子！来这里吧，这里虽没有梦婆汤，虽没有忘情水，但会有一个仁慈的上帝为你疗伤。。 </span><br />\r\n<span style="font-size:14px;">酒醒了，梦没了，梦醒了，心碎了… </span></p>\r\n<p><span style="font-size:14px;">&nbsp;</span></p>', 0),
(82, '<p align="center"><img style="width:500px;height:375px;" src="http://photocdn.sohu.com/20110603/Img309195009.jpg" width="500" height="375" zoomrate="1" srcheight="375" srcwidth="500" /></p>\r\n<br />\r\n<br />\r\n为生活助威，为未来助威，努力奋斗年少。中年才会有出息。', 0),
(83, '<br />\r\n<br />\r\n<p align="center"><img style="width:478px;height:427px;" src="http://www.ahltsj.com/CommImg/b/20100415/2000000016313.jpg" width="700" height="700" zoomrate="0.941428571428571" srcheight="700" srcwidth="700" /></p>\r\n<br />\r\n<br />\r\n远离或是近距离。我和你，相隔总是遥不可及。何时才是相逢。', 0),
(84, '<p style="text-indent:2em;" align="center"><span style="font-size:14px;"><img style="width:543px;height:337px;" src="http://image161.poco.cn/mypoco/myphoto/20100411/02/24294391201004110206021160190548407_056.jpg" width="885" height="628" zoomrate="1" srcheight="628" srcwidth="885" /></p>\r\n<p style="text-indent:2em;"><br />\r\n腾讯体育讯 跟奥运会以及</span><a class="a-tips-Article-QQ" href="http://worldcup.qq.com/" target="_blank"><span style="color:#000000;"><span style="font-size:14px;">世界杯</span></span></a><span style="font-size:14px;">这种国际大赛一样，同性恋运动会也是每四年举办一次，从1982年创始至今，已经成功举办过8届。包括政府高官和奥运会冠军，都曾以同性恋的身份参加过该项大会。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">很难想象，这样一场覆盖面不算很广的运动会居然能吸引一万多名参赛者参赛，尤其是上一届在德国举办的时候更是盛况空前。同性恋运动会对参赛者没有要求，不管竞技水平如何、年龄高低、贫贱与否，只要你愿意参加，均可报名。跟普通运动会差不多，主办方也设立30-40个项目，包括健美、国标舞、花样滑冰还有“爱的接力赛”，听上去更像是一种休闲娱乐而并非竞技运动。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">据不完全统计，同性恋运动会参赛选手年龄最大的竟然有92岁，而十几岁的参赛者更是比比皆是。因为性取向的问题，所以经常能在花滑或者国标舞赛场看到两个健硕的男人穿着短裙翩翩起舞，场面搞笑且温馨。除了参赛选手之外，也有不少同性恋观众到场助兴，而且大多数也是以男士为主。他们穿着粉嫩的蕾丝边裙子，画着冶艳的妆，有的还搞顶怪异的假发或者蝴蝶结发夹放在头上，整个场面看上去就像万圣节狂欢，极其热闹。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">可别以为这是项无组织无纪律的赛事，不少明星大腕都慕名来参加。曾在北京奥运会勇夺男子十米跳台冠军的澳大利亚名将马修-米切姆就是运动员代表，这位公开承认自己有同性爱侣的小正太十分大方，甚至携伴到场。而跟男伴相恋十多年的德国副总理兼外交部长韦斯特韦勒也是亲自出面支持。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">当然，身为体育大国，中国自然也有“代表团”出征，只是比起奥运会庞大的阵容，真正参加同性恋运动会项目的只有区区四个人，剩下还有十多人分别负责参加会议和媒体报道。不过别看人数少，中国在上一届同性恋运动会当中还实现了金牌零的突破。一对男性沙排搭档成功折桂，算是填补了中国体育史在这项运动会的金牌空白。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">爱情和体育一样，都是不分性别、国界、年龄、种族，正是因为有这样的信念，所以这项运动会才能经久不息地办下去。</span></p>', 0),
(85, '<p><span style="font-size:14px;">　　</p>\r\n<p align="center"><img style="width:501px;height:490px;" src="http://51love.zjg.js.cn/uploadfile/Fashion/uploadfile/201005/20100525042104673.jpg" width="500" height="566" zoomrate="1" srcheight="566" srcwidth="500" /></p>\r\n<p><br />\r\n<br />\r\n</span><strong><span style="font-size:14px;">80后离婚高原因：父母插手多</span></strong></p>\r\n<p><span style="font-size:14px;">　　“80后离婚，父母的影响力太大了。”裴谕新告诉记者，一位研究中国问题的外国学者曾经向她感慨“中国的80后，从来没有见过如此被父母意见左右的一代”。</span></p>\r\n<p><span style="font-size:14px;">　　相比70后，80后的离婚比例更高，裴谕新在广州做过的20人小样本调查中，20-30岁之间结婚人数达到六成，离婚人数又占其中的一半，也就是“早婚快离”。</span></p>\r\n<p><span style="font-size:14px;">　　为什么80后离婚率这么高？裴谕新表示，父母影响过大是主要原因，过于密切的亲子烙印，直接造成影响：一是由于可以从父母处得到大量的亲情，80后对小家庭的感情没那么依恋，即使离婚也不“伤”。二是被父母“宠坏了”，80后从小到大都习惯于父母的奉献型的爱，在自己的婚姻中，也常常认为“对方要以我为中心，为我做奉献”，都想索取而不愿奉献，导致家庭矛盾升级，甚至以离婚收场。三是可能导致要求对方只关注自己。裴谕新说：“我曾经访问过一个80后男人，他就很反感妻子的姐妹淘，认为‘有了我就应该绕着我转，干嘛还把时间花在其他人身上’，甚至还有一些男人说‘老婆你不要那么照顾孩子，你应该首先把我照顾好’。”这种要求得不到满足，也常常引发矛盾。</span></p>\r\n<p><span style="font-size:14px;">　　除了父母的影响，过早进入家庭平缓期也引发80后离婚潮。“70后夫妻往往要齐心协力去攻克不断出现的新问题，比如供房、供车、养孩子，‘夫妻同心，其利断金’，一定程度上有助于夫妻关系，而80后的这些问题往往已经被父母代为解决，过早进入家庭平缓期，让年轻人失去了生活的激情，跟着对婚姻也没了激情。所以，很多80后都是在婚后1-2年，生完孩子之后就离婚，甚至还在怀孕的时候，就提出离婚，因为反正大不了回到父母家住，没有什么后顾之忧。”裴谕新说。</span></p>\r\n<p><span style="font-size:14px;">　　1985年生的小琳，最近就带着不足2岁的女儿，离婚回到了老家东北。“他是广州仔，嫁给他之后一直跟他父母住，他妈妈连门都不敲就直接进我们的房，说‘儿子哪里我没见过，你又是女人，有什么好见外的’……我坚决要搬出去住，他就坚决不单飞，我说那好，咱们离婚！我爸也发话了，女儿大不了你回东北，我来养外孙女！有家里人当后台，我二话不说就离了。”</span></p>', 0),
(86, '<a href="http://xiongbingqi.qzone.qq.com/" target="_blank"><!--/keyword--><span style="color:#0b3b8c;"><strong><span style="font-size:14px;">熊丙奇</span><!--keyword--></strong></span></a><!--/keyword--><strong><span style="font-size:14px;"> 上海交大教授</span></strong> <p><span style="font-size:14px;">　　切忌把迷茫演变为更大的危机，使南科大的改革路越走越窄，最终无路可走。</span></p>\r\n<p><span style="font-size:14px;">　　近日，南科大曝出内部忧患，4名协助创办南科大的香港科技大学教师先后离开南科大，他们认为朱清时的一些做法违背教育规律，应当先将教师团队、培养方案、管理规范等全部制定完备再招生。然而，朱清时称内地优秀人才争夺激烈，可边干边修，不能完全坐等。（6月18日《华西都市报》）</span></p>\r\n<p><span style="font-size:14px;">　　南科大的改革，似乎由此陷入迷茫。</span></p>\r\n<p><span style="font-size:14px;">　　4名香港科技大学教师与朱清时之争，是如何推进内地教育改革之争。前者的理念很清晰，就是在举办新大学前，必须建立好基本制度，并基于基本制度，构建教师团队，由教师团队参与学校学科、专业的设置和人才培养方案的制定，然后再招生。避免出现学生已经进校，大学章程却未制定好，政府和学校的关系模糊不清，学校的课程体系尚未建立等问题。</span></p>\r\n<p><span style="font-size:14px;">　　然而，朱清时的做法也不无道理，如果等所有制度都设计好了再招生，一切可能都会晚了。前车之鉴是，1993年制定好的《中国教育改革和发展纲要》，很多条款直到2010版《国家中长期教育改革和发展规划纲要》颁布时仍未落实，其中包括，到上世纪末国家财政性教育经费投入达到GDP的4%，落实和扩大学校的办学自主权。1999年1月1日施行的《高等教育法》也早已规定大学拥有7项办学自主权，但至今无一所大学拥有。</span></p>\r\n<p><span style="font-size:14px;">　　对国内的高等教育改革来说，目前缺的不是理念，也不是口号，而是行动。朱清时正是在以实际行动，推进喊了多年口号，却始终没有实质进展的改革。与此同时，人们很期望有自上而下的高等教育改革，但自去年《教育规划纲要》颁布至今，自上而下系统推进改革的迹象并未出现。</span></p>\r\n<p><span style="font-size:14px;">　　确切地说，国家《教育规划纲要》明确要求大学校长没有行政级别，可南科大有了两名局级副校长；南科大筹建近4年，还没有学校章程，只是在前不久刚颁发《南方科技大学管理暂行办法》，且这一办法有很多不完善、不明确之处。这恐怕不是朱清时的责任，而是深圳市政府的责任。如果有南科大章程，这些争议都不会存在。</span></p>\r\n<p><span style="font-size:14px;">　　当然，朱清时也需要思考在校内建立民主管理和决策机制，从自身做起，去行政化。在校内的教育、学术管理与决策中，做到行政权和教育权、学术权的分离。对要立志探索高等教育全新道路的大学来说，内部的民主管理、团队的齐心协力、学校的教育质量，是争取发展空间的基础，离开了这一点，就算是“倒逼”改革，也无从谈起。</span></p>\r\n<p><span style="font-size:14px;">　　南科大的改革之路越走越窄，这不是改革者希望看到的，更不是社会和公众希望看到的。因此，有必要多方会诊南科大改革的迷茫，努力使之成为推进改革的良机。切忌把迷茫演变为更大的危机，使南科大的改革路越走越窄，最终无路可走。一旦如此，就不仅是南科大的悲剧，更是全社会的悲剧。</span></p>', 0),
(87, '<p style="text-indent:2em;" align="center"><img style="width:418px;height:264px;" border="0" alt="" src="http://image211.poco.cn/mypoco/myphoto/20081015/4483122220081015223448082_640.jpg" width="418" height="201" /><br />\r\n<br />\r\n</p>\r\n<p style="text-indent:2em;"><br />\r\n垂坠感强烈且泛着光泽的纯色<a class="a-tips-Article-QQ" href="http://lady.qq.com/style/dress.shtml" target="_blank"><span style="color:#000000;">面料</span></a>打造的这个系列以裙装为主，简约休闲的短款裙装在平时穿着舒适也好<a class="a-tips-Article-QQ" href="http://lady.qq.com/style/dress.shtml" target="_blank"><span style="color:#000000;">搭配</span></a>；而另外几款拖地的长裙营造出宛如湖心潋滟的水波质感，若在参加派对的时候穿着，定能成为众人瞩目的焦点所在。</p>\r\n<!--/link-->', 0);
INSERT INTO `articles_content` (`mid`, `message`, `user`) VALUES
(88, '<p align="center"><span style="font-size:14px;"><img border="0" alt="" src="http://www.cnbim.net/uploads/allimg/100628/15122MH0-0.jpg" /></p>\r\n<br />\r\n王锦思：越南军队还是中国对手吗？</span><br />\r\n<br />\r\n<span style="font-size:14px;">在越南抗击法国和美国侵略期间，中国曾经给越南提供了许多无私的帮助，生产的好多军工产品都是援助越南的，援助越南800亿元人民币，客观上加剧了中国经济的负担。但是统一后的越南并未成为中国可靠的盟国，还骚扰边境和驱赶华侨等因素，中国才自卫反击。</span><br />\r\n<br />\r\n<span style="font-size:14px;">1979年2月，我军总共动用了9个军，在约500公里的战线上对越南发动了攻击，一度攻占了越南约20多个城镇和军事据点。经受多年战争洗礼的越军十五万人应战。由于当时的解放军战斗素质、武器装备和战术思想受到文化大革命的破坏，与越军相差甚远。虽然基层指战员骁勇善战，但参战部队付出了沉重的代价后才完成各个阶段的作战任务。&nbsp;</span><br />\r\n<br />\r\n<span style="font-size:14px;">为了了解中国对越自卫反击战，我特意去越南河内的军事博物馆参观。说来也巧，越南军事博物馆就在中国大使馆左侧隔一条马路、不到一百米的斜前方，博物馆不大。可是进去一看，根本没有展示中国对越自卫反击战的内容，只有中国抗美援越的资料，还有许多反映越南军人作战、训练的图片。</span><br />\r\n<br />\r\n<span style="font-size:14px;">越南军事博物馆的工作人员和我国军事博物馆一样，也穿军装，我看到一男军官一女军官，就和他们交谈了解情况。他们和许多老百姓认为中国对越自卫反击战是“侵略”，我于是反驳。</span><br />\r\n<br />\r\n<span style="font-size:14px;">我在越南电视里也看到他们有军民联欢会。我不会越南语，但是根据我国类似的联欢会能猜测出个大概。看到节目中漂亮的“军嫂”似乎正在倾诉对军人丈夫的思念，眼含泪花，随后两人相拥，台下越南官兵鼓掌，高级军官深感满意。</span><br />', 0),
(89, '<div style="text-align:center;"><span style="font-size:14px;">&nbsp;<img style="width:395px;height:272px;" border="0" alt="" src="http://www.web07.cn/uploads/Shejituku/c100804/12PXE13b0-460R.jpg" width="495" height="405" /></span><br />\r\n</div>\r\n<span style="font-size:14px;"><br />\r\n什么叫域名</span><br />\r\n<br />\r\n<span style="font-size:14px;">从技术角度来看，域名是在Internet上用于解决IP地址对应的一种方法。一个完整的域名由二个或二个以上部分组成，各部分之间用英文的句号"."来分隔，最后一个"."的右边部分称为顶级域名（TLD，也称为一级域名），最后一个"."的左边部分称为二级域名（SLD），二级域名的左边部分称为三级域名，以此类推，每一级的域名控制它下一级域名的分配。 </span><br />\r\n<span style="font-size:14px;">顶级域名由美国政府控制的ICANN来定义和分配，分为通用顶级域名(gTLD, General Top Level Domain，国内也称为国际域名)和国家代码顶级域名(ccTLD, Country Code Top Level Domain)。 </span><br />\r\n<span style="font-size:14px;">通用顶级域名中向用户开放的只有.com、.net和.org三个通用顶级域名，由InterNIC来管理（目前ICANN委托美国Network Solutions公司承担InterNIC的运行和管理工作），国家代码顶级域名有240多个，它们由二个字母缩写来表示，分别代表不同的国家，.cn是中国的国家代码顶级域名，由CNNIC来管理（目前中国政府委托中国科学院计算机网络信息中心承担CNNIC的运行和管理工作）。 </span><br />\r\n<span style="font-size:14px;">从商业角度来看，域名是"企业的网上商标"。企业都非常重视自己的商标，而作为网上商标的域名，其重要性和其价值也已被全世界的企业所认识。域名和商标都在各自的范畴内具有唯一性，并且随着Internet的发展。从企业树立形象的角度看，域名和商标有着潜移默化的联系。所以，域名与商标有一定的共同特点。许多企业在选择域名时，往往希望用和自己企业商标一致的域名。但是，域名和商标相比又具有更强的唯一性。 </span><br />\r\n<span style="font-size:14px;">从域名价值角度来看，域名是互联网上最基础的东西，也是一个稀有的全球资源，无论是做ICP和电子商务，还是在网上开展其它活动，都要从域名开始，一个名正言顺和易于宣传推广的域名是互联网企业和网站成功的第一步。</span><br />\r\n<table class="ke-zeroborder" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size:14px;">1 建立网站的步骤是什么</span><br />\r\n<br />\r\n<span style="font-size:14px;">1、申请一个空间空间 </span><br />\r\n<span style="font-size:14px;">2、申请自己的域名</span><br />\r\n<span style="font-size:14px;">3、制作自己的网站 </span><br />\r\n<span style="font-size:14px;">4 上传自己的内容到空间 </span><br />\r\n<span style="font-size:14px;">5、推广自己的网站</span><br />\r\n<br />\r\n<br />\r\n<span style="font-size:14px;">2&nbsp;&nbsp;制作网站需要那些工具</span><br />\r\n<br />\r\n<span style="font-size:14px;">推荐网页三剑客：FLASH+DREAMWEAVER+FIREWORKS。 </span><br />\r\n<span style="font-size:14px;">FLASH可以创建何种小、下载速度快的网页动画。 </span><br />\r\n<span style="font-size:14px;">FIREWORKS可以设计各种位图和矢量图形，悬停按钮，分割图片。 </span><br />\r\n<span style="font-size:14px;">DREAMWEAVER综合功能强大，有网站管理功能。 </span><br />\r\n<span style="font-size:14px;">FRONTPAGE易用，但很难做出好看的效果。 </span><br />\r\n<br />\r\n<br />\r\n<span style="font-size:14px;">3 什么叫域名</span><br />\r\n<br />\r\n<span style="font-size:14px;">从技术角度来看，域名是在Internet上用于解决IP地址对应的一种方法。一个完整的域名由二个或二个以上部分组成，各部分之间用英文的句号"."来分隔，最后一个"."的右边部分称为顶级域名（TLD，也称为一级域名），最后一个"."的左边部分称为二级域名（SLD），二级域名的左边部分称为三级域名，以此类推，每一级的域名控制它下一级域名的分配。 </span><br />\r\n<span style="font-size:14px;">顶级域名由美国政府控制的ICANN来定义和分配，分为通用顶级域名(gTLD, General Top Level Domain，国内也称为国际域名)和国家代码顶级域名(ccTLD, Country Code Top Level Domain)。 </span><br />\r\n<span style="font-size:14px;">通用顶级域名中向用户开放的只有.com、.net和.org三个通用顶级域名，由InterNIC来管理（目前ICANN委托美国Network Solutions公司承担InterNIC的运行和管理工作），国家代码顶级域名有240多个，它们由二个字母缩写来表示，分别代表不同的国家，.cn是中国的国家代码顶级域名，由CNNIC来管理（目前中国政府委托中国科学院计算机网络信息中心承担CNNIC的运行和管理工作）。 </span><br />\r\n<span style="font-size:14px;">从商业角度来看，域名是"企业的网上商标"。企业都非常重视自己的商标，而作为网上商标的域名，其重要性和其价值也已被全世界的企业所认识。域名和商标都在各自的范畴内具有唯一性，并且随着Internet的发展。从企业树立形象的角度看，域名和商标有着潜移默化的联系。所以，域名与商标有一定的共同特点。许多企业在选择域名时，往往希望用和自己企业商标一致的域名。但是，域名和商标相比又具有更强的唯一性。 </span><br />\r\n<span style="font-size:14px;">从域名价值角度来看，域名是互联网上最基础的东西，也是一个稀有的全球资源，无论是做ICP和电子商务，还是在网上开展其它活动，都要从域名开始，一个名正言顺和易于宣传推广的域名是互联网企业和网站成功的第一步。</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class="ke-zeroborder" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><span style="font-size:14px;">1 建立网站的步骤是什么</span><br />\r\n<br />\r\n<span style="font-size:14px;">1、申请一个空间空间 </span><br />\r\n<span style="font-size:14px;">2、申请自己的域名</span><br />\r\n<span style="font-size:14px;">3、制作自己的网站 </span><br />\r\n<span style="font-size:14px;">4 上传自己的内容到空间 </span><br />\r\n<span style="font-size:14px;">5、推广自己的网站</span><br />\r\n<br />\r\n<br />\r\n<span style="font-size:14px;">2&nbsp;&nbsp;制作网站需要那些工具</span><br />\r\n<br />\r\n<span style="font-size:14px;">推荐网页三剑客：FLASH+DREAMWEAVER+FIREWORKS。 </span><br />\r\n<span style="font-size:14px;">FLASH可以创建何种小、下载速度快的网页动画。 </span><br />\r\n<span style="font-size:14px;">FIREWORKS可以设计各种位图和矢量图形，悬停按钮，分割图片。 </span><br />\r\n<span style="font-size:14px;">DREAMWEAVER综合功能强大，有网站管理功能。 </span><br />\r\n<span style="font-size:14px;">FRONTPAGE易用，但很难做出好看的效果。 </span><br />\r\n<br />\r\n<br />\r\n<span style="font-size:14px;">3 什么叫域名</span><br />\r\n<br />\r\n<span style="font-size:14px;">从技术角度来看，域名是在Internet上用于解决IP地址对应的一种方法。一个完整的域名由二个或二个以上部分组成，各部分之间用英文的句号"."来分隔，最后一个"."的右边部分称为顶级域名（TLD，也称为一级域名），最后一个"."的左边部分称为二级域名（SLD），二级域名的左边部分称为三级域名，以此类推，每一级的域名控制它下一级域名的分配。 </span><br />\r\n<span style="font-size:14px;">顶级域名由美国政府控制的ICANN来定义和分配，分为通用顶级域名(gTLD, General Top Level Domain，国内也称为国际域名)和国家代码顶级域名(ccTLD, Country Code Top Level Domain)。 </span><br />\r\n<span style="font-size:14px;">通用顶级域名中向用户开放的只有.com、.net和.org三个通用顶级域名，由InterNIC来管理（目前ICANN委托美国Network Solutions公司承担InterNIC的运行和管理工作），国家代码顶级域名有240多个，它们由二个字母缩写来表示，分别代表不同的国家，.cn是中国的国家代码顶级域名，由CNNIC来管理（目前中国政府委托中国科学院计算机网络信息中心承担CNNIC的运行和管理工作）。 </span><br />\r\n<span style="font-size:14px;">从商业角度来看，域名是"企业的网上商标"。企业都非常重视自己的商标，而作为网上商标的域名，其重要性和其价值也已被全世界的企业所认识。域名和商标都在各自的范畴内具有唯一性，并且随着Internet的发展。从企业树立形象的角度看，域名和商标有着潜移默化的联系。所以，域名与商标有一定的共同特点。许多企业在选择域名时，往往希望用和自己企业商标一致的域名。但是，域名和商标相比又具有更强的唯一性。 </span><br />\r\n<span style="font-size:14px;">从域名价值角度来看，域名是互联网上最基础的东西，也是一个稀有的全球资源，无论是做ICP和电子商务，还是在网上开展其它活动，都要从域名开始，一个名正言顺和易于宣传推广的域名是互联网企业和网站成功的第一步。</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0),
(90, '<span style="font-size:14px;">新浪科技讯 4月17日消息，知情人士于4月16日晚间透露，中国移动OPhone手机已完成基本的研发工作，经过小范围测试，效果良好。 </span> <p><span style="font-size:14px;">　　据悉，5月初，基于EDGE版本的OPhone手机将面市，基于TD-SCDMA标准的手机也将于第四季度上市。</span></p>\r\n<p><span style="font-size:14px;">　　OPhone手机是以中国移动OMS手机操作系统平台为基础研发的一种互联网手机，OMS又是中国移动以谷歌Android为基础。</span></p>\r\n<p><span style="font-size:14px;">　　与传统手机相比，oPhone手机在互联网浏览方面的优势是其他手机不可比拟，oPhone不仅支持移动互联网，通过oPhone也可以很舒适的浏览 Http互联网的内容，因此，oPhone手机被可以与iPhone手机相抗衡。(康钊) </span><br />\r\n</p>', 0),
(91, '<span style="font-size:14px;">&nbsp;&nbsp;树叶的缝隙中总是投下斑驳的影。影影绰绰所覆盖的，是被遗漏的阳光，当然，还有属于我们的时间。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;没有人能够读懂一棵树的思想，这就像一棵树，永远不会懂得我们被无数冠冕堂皇的理由所掩盖的，属于自己的肮脏。许是因为我们把这种肮脏掩盖的太深的缘故吧，还是因为树们的单纯远远比不上我们内心的复杂。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;此刻，我就站在树的旁边，仰视着它的郁郁葱葱的绿。在这个属于我和树所占有的空间里面，谁也打扰不到我们。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;树静静地立着，我也静静地立着，我们一起思索着自己的思索。于是，浮云来了，在叶的缝隙中，我看到云变换着千万种形状：草原出现了，骏马出现了，牧羊的姑娘出现了，篝火出现了……一切关于我的记忆与想象的东西，都出现了，包括那些我叫不出名字的玩意。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在这个夏日的正午，农人依旧在地里忙碌着，他们用自己的双手，在田野里面勾画着自己的诗行，那些平平仄仄在田地里，排列得整整齐齐地。我的思想也飞到了办公软件上，在虚拟的世界里面，我用属于我自己的锄头，耕耘着自己的田地。作为农民的儿子，我也一直是一个农民，所以，我的所有思维都是农民的思维，就像我的文字，一直被土地所养育一般。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;于是，和旁边的这棵树一样，我不断地长出新的叶子，也在不经意间一次又一次坠落。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;发芽，是一场大胆的实验。只有那些敢于大胆尝试的树，才能长出如此茂盛的叶子，才能经得起初春料峭的寒。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一场春雨过后，阳光明媚着，那些实验成功的树们，伸展着自己的枝。每片叶子上都跳动着闪烁的阳光。在这个季节，树们很容易迷失自己，因为那种真实而又虚幻的场景，总让人变得虚荣。就像我，因为一些长短句子换来的赞誉，也曾经忘记自己是农民的儿子，作为农民的儿子，我的工作应该是耕耘，不管是在地里，还是纸上。甚至，我也忘记了，没有春天的耕耘，哪来秋天的收获。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一片长得最快的叶子，总是最先伸展出来，展现着属于自己的全部的美。但是，这种美却始终面临着无数的考验。在叶子的一生中，要经历太多的东西，风的撕扯，雨的击打，虫的穿刺，还有的就是季节的轮换……有太多的东西需要它们去承受，幸运的是，树们一直是叶子坚强的后盾。可是，当叶子成长起来，却一次又一次地嘲笑着树的丑陋。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我一直在纠结一个问题，那片最先落下的叶子，在坠落的瞬间，它的心里所充满的，究竟是因为自己无法抗拒的命运的悲哀，还是因为自己力量微小的惭愧，还是为自己丰满的人生经历而带来的骄傲与自豪。这一切，我不得而知，所以我的思想里面，便增添了无数的重负。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;生长叶子的那些树们，冷冷地看着叶子们关于生命与人生的那些思索，一言不发，只是当那些思索着的叶子开始坠落的时候，他却有着些许的遗憾，但这种遗憾是短暂的，它们明白，叶子今天的死正是明天的生，生与死之间，并没有什么明显的界限。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;老家的群山与树们很相似，当然这是一句多余的话，生长在这块土地上的那些树们，本来就遗传了山们的性格。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我们这群大山的儿子，汲取着山们给我们的养分，一天天长大。而当我们长大以后，却一而再，再而三地嘲笑着老家的贫瘠，嘲笑着那片土地的荒凉。所有的人都没有例外，当然，也包括我。我不知道，那些逝去的老人，在生命的最后一刻，是否有着关于生命的大彻大悟，但我知道在他们的内心，一定充满了对这个世界的留恋和对自己曾经幼稚的想法的嘲笑。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;群山依旧在，他们目睹着我们所有的年少轻狂，看着我们哭，也看着我们笑，就像树们一样，看着叶子所经历的一切，与其说它不能改变，还不如说是为了让我们自己去感受，这些丰满的人生经历。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在树荫的中间，我看见了一只自由自在的虫儿，它是如此地弱小，弱小得可以忽略它的存在。但是可以肯定，面对着树下陷入沉思的我，它的内心一定是鄙视的，因为在它的世界里面，从来不需要这些繁琐的东西，有着实实在在的生活，干嘛还要希望别的呢？ </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;因为太多欲望的缘故，所以我们一直很痛苦，除开那些应有的柴米油盐、生老病死外，我们给自己的人生添加太多的负累：那些鄙夷的眼神总让我们的内心，一次又有一次地掀起没有任何意义的波澜；红尘俗世的诱惑迷蒙了我们的双眼，我们甚至感受不到身边那触手可及的幸福；张三的升迁让我们嫉妒；面对李四的落魄，我么一次又一次地幸灾乐祸…… </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一片叶子从空中落下，正好落在我的手心，看着叶子上那些熟悉的纹路，我的脑海里面突然浮现出一句话：生命的面积。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一直以来，我么以万物之灵自居，我们藐视着这世间的一切，我们征服，我们占有，我们还有着永远填不满的欲海……跟自然界那些自由自在存在的生命相比，我们活得很累，而且我们不自知——多少年来，我们一直忽略了一个问题，与一棵树，一滴水一样，我们也不过是自然界的一种客观的存在罢了。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;很多年前，我在老家的门前栽过一棵树，它比我小很多，所以，一直以来，我以它的主人自居，因为是我给了它这现在的地方生活的机会。离开故乡的时候，它跟我一样高，可是现在，当我站在它的旁边，我需要仰视，才能够看见它的枝叶。是什么原因造成了这种转变，大家都告诉我，因为生物学的原因，它与我身体构造不同。曾经的我很认可这个答案，直到现在我才明白，那些都是我们自己给自己找的借口罢了，真实的原因，是因为它一直站在一个固定的地方，供给它生长的是它的脚下厚实的土地，而我们，一直在漂泊，早就成了无根之木。一场不经意的打击就有可能成为我们灭顶之灾，而那棵比我小的多的树，谁才知道这些年来，它经历过多少风雨，可是它一直努力地生长，因为它相信，脚下的土地是它不停生长的力量源泉。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;停留在这棵原本很陌生的树的下面，我却感受到了几许熟悉的味道，我知道这种熟悉不是来自面前的这棵树，它跟我刚刚认识没多久，真正让我熟悉的，是脚下的土地。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在茫茫的群山深处，面对着满山葱茏的绿色，世界就变得小了许多。因为天的边际在我看来，是如此的触手可及，只需要一天半天的时间，我就可以爬到山的顶峰，去触摸那一片清澈的蔚蓝。可是当我爬到山的顶峰的时候，我才发现，所谓天际，依旧在我的前方，前方依旧触手可及。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;这跟我的写作很相似，我用文字记录着自己的生活，可当我及路线那些属于自己的或者他人的过往的时候，我才发现，曾经的将来又变成了值得玩味的过往。这就像儿时，我们本以为天空就是树的顶端，可是当我们爬上一棵树的时候才发现，天空又变高了，停留在了比我们现在还高的树的顶端。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在山里面生活久了，很多变化都在不经意间流过，而当我们发现的时候，一切早已变得面目全非。这就像山的高度一般，一直以来，我们以为山的高度是固定不变的。可是很多年后，我们再经过曾经熟悉的山峰的时候，我们会发现，山长高了许多，因为树的原因，山的高度总是在不断变化着，尤其是那些长在山顶的树，在让山长高的同时，也让天空离我们越来越远。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我们拒绝着这种变化，狂妄自大的我们总想让天空的蔚蓝离我们更近，所以我们展开了疯狂的杀戮，于是，那些生长在山顶的树，就变成了我们虚荣心的牺牲品。砍倒了树，感受着天空离我们，我们就开始吹嘘着自己的本领，殊不知，那些树根正在嘲笑着我们的无知，因它们才是离天空更近的活物，而且它们相信，只要土地依旧在，总有一天，它们会触摸到天空的。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我是属猪的人。然而我的星座却是金牛。猪的懒惰与牛的勤劳在我的身上得到了统一。同时，我对绿色，对土地也有着不同于别人的感情。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;儿时曾经放过牛，因为老家的山上长满了青草，放牛并不是一件多么困难的事，找一个水草丰盛的地方，把牛栓在树上，然后就自己跑到一边去了，牛不会走远的，因为那些有那些水草的缘故。曾经的我是一只被拴住的牛，那些乡音乡情，像绳子一般，一直把我牢牢地拴住，而我，也一直满足于这种禁锢。由于生活的原因，我换了一个地方来放牧自己，我来到了城市，可是我发现，在城市里面，我再也找不到那些丰盛的水草了。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一直以肉食动物自居，对猪肉的偏爱，让我的身体早早地肥胖起来。其实我现在的生活，根被圈养的猪没什么两样，生活在自己的狭小空间里面，我所看到了只有自己周围那一个狭小的空间，我们又用各种苛责给自己填上了无数的栅栏。幸运的是，每年年终的时候，没有屠夫的刀刺进我们的胸膛里面罢了。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;停留在树下，天上的浮云不停变换着自己的姿态。擦干头上的汗珠，我才发现在我的身旁静静立着的树，依旧静静的。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;倚在树上，我的思绪再一次翻飞起来，我在考虑：怎么样才能得到别人的尊重，怎么样才能实现自己的人生价值，怎么样才能获取最大的利益，那些张三李四王五赵六的眼睛里面到底掩藏着什么？</span><br />\r\n<br />', 0),
(92, '<span style="font-size:14px;">&nbsp;一个季节已经过去了，另一个季节已经走入了腹地。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;雨水开始多了起来，于是，河水开始涨起来。大沟小河仿佛听了谁的召唤似的，一夜之间丰腴了许多。那些带着些许浑黄的水，加快了自己的流淌的速递，我知道是因为他们害怕被拘束，更害怕由此停止了自己前行的脚步，毕竟远方是它们永远的追求。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;山脚的水田里面，已经灌满了水，辛勤的农人吆喝着辛勤的牛，拖着犁铧，在田里来来回回地走着。田里的水，比河里的水，浑得多，当然也肥沃得多。牛的眼中，带着些许的困惑，不知道为什么自己走了一个又一个来回，却没有留下了丝毫的印记，于是，它们的脚步声也越来越重，呼吸也就变粗了许多，就连很远的地方，也能听到它们“呼哧——呼哧——”的喘息。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我知道，一个新的时节来了，这是又一个播种的季节。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;每年的这个时节，是父亲最为忙碌的时候。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;老家有田，在四月的时候，父亲便开始为一家大小的口食而忙碌。对我来说，最好玩的莫过于在温棚里培养小秧苗了。首先得选一个合适的地方，我们家一般都在自家的院坝里，再院坝的边缘，挖一个简易的灶，放上一口锅。然后以灶为起点，用竹子搭一个简易的温棚（当然，灶在温棚里面），外面蒙上塑料纸，里面用竹子搭起一些架子，就像人们养蚕时放蚕簸的架子一样。侧面得留一道小门，便于进出。再把一些竹子劈开，编成三尺长两尺宽的篾笆，把买来的稻种薄薄地洒在上面，浇上水。当一切准备就绪以后，就把这些撒着稻种的篾笆整整齐齐地放到里面的架子上，在锅里汆上水，在灶里面生火，这样在蒸汽的作用下，温棚里面的温度就会慢慢升高，于是稻种发芽就会快一些。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;每当这个时候，我特爱到温棚里面帮忙。看到那些饱满的稻种慢慢长出白色的芽儿，芽儿一天天变绿，渐渐低绿色越来越浓，差不多六七天的时候，整个篾笆上已经是绿油油的一片了。这个过程，表面上看起来挺简单的，事实上却是异常复杂，因为温棚里面的温度着实不好把握。温度过高了不行，过高的话，会把稻种烧熟的，过低了也不行，过低了稻种就很不容易发芽，更别说长大了，所以每次父亲都会在温棚里面放上一支温度计。而且，还要不断地把温棚里面的篾笆交换位置，因为靠近灶的地方，温度高一些，远离灶的地方，温度低一些，如果不让它们彼此交换位置的换，篾笆上的小苗就会发育不一样，这对它们以后的生长极为不利，毕竟输在起跑线上的以后的生涯就会困难许多。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;七八天过后，篾笆里的小苗差不多都有一寸来深了，这就要开始第二步了——把温室里面的秧苗移栽到母田的苗床上去。在温棚开始生活的时候，父亲已经开始在母田里面做准备工作了。首先把干了一冬的田灌满水，泡上几天，带泥土变软以后，接住牛的力量把田翻过来，然后耙上几遍，用锄头把田里面的泥土培成长方形的苗床，再用木板把苗床弄平整，在上面撒上厚厚的一层火灰（一种自制的熏肥）。这时候的母田，就像农村办酒席的时候做的蒸肉一般，一条一条的，整整齐齐的。后来长大后，看到国旗杆月饼的场面以后，我才发现，儿时的比喻是多么的可笑，那分明是排列好的方阵，正在等候父亲的检阅。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一切准备工作做好以后，我们就要开始移苗了，这是一个细活。把篾笆上的秧苗一棵棵地取下来，整整齐齐地排在苗床上，力度不能过大，过大的话，秧苗就会现在泥土里面，会让自己给活活闷死；力度也不能过小，过小的话，秧苗就无法在苗床上扎下根，无法有效地吸收苗床上的营养，就会渐渐地发育不良。而且，秧苗之间的距离也要刚刚合适才行，否则的话，要么就会因为过密而发育不良，要么就会因为过稀而浪费苗床。当然这事，我们全家人都上，因为这活毕竟不累，而且可以坐在板凳上完成，只是晚上的时候，腰会很酸罢了。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;只到现在，我都清晰地记得父亲移苗时的情景，父亲的眼神，很专注地盯着苗床上的秧苗，像抚摸孩子的脸庞一般，手很轻很轻的，好像生怕把秧苗给弄疼了似的。在我幼小的心里，甚至嫉妒过那些秧苗，因为父亲对于我们是粗犷的，而对于这些秧苗，确实如此地细心。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;后来，大家发现，这样做太麻烦了，就改用直接在母田的苗床上培育秧苗，先让稻种发芽，再把稻种均匀地洒在苗床上，像大棚蔬菜一样蒙上塑料薄膜。这样做，是省事了许多，但是也就少了许多乐趣。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;到了五月底六月初的时候，秧苗差不多长到一揸左右，每棵秧苗也差不多分出了六七棵的时候，就可以移栽了。移栽之前，父亲已经把田弄好了，就跟我吸现在看到的一摸一样，灌上水，用牛把田翻几遍，耙好。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;到了移栽的那一天，一定的请好几个人帮忙，因为我家有一亩多田，仅仅靠自己家里的人，得好几天。幸运的是，在老家，邻居都是自己人，要么是亲戚，要么是本家，而且还是很近很近的那种，大家都互相帮忙。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;移栽的时候，首先得把秧苗从母田里面拔起来，这是一个技术活，只有在力度把握的好的情况下才能完成，力度过大的话，会把秧苗的根须拔断，力度过小又拔不起来。拔好的秧苗整理得整整齐齐的，再用撕开的粽叶捆成一把一把的。这活，大人小孩都能干，不过我却不大愿意做，因为母田里总会有蚂蝗，我打小就怕蚂蝗，那些软软的黑黑的小东西一旦沾上，就会牢牢地站住，怎么也不下来，只有用巴掌拍或者用秧苗刷才会下来，还会在皮肤上留下一个小眼，不住地流血，怎么都止不住。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;秧苗拔好以后，就把它移栽到新翻的田里，每次到新翻的田里插秧的时候，我都兴高采烈的，因为母亲说过“栽秧采茶无大小”，也就是说这活大人小孩都能干，而且，插秧的田里由于是新翻过来的，里面没有蚂蝗。直到现在，我都清晰的记得，每次都是我走在前面，拿着几把秧苗，唱着自己才能听懂的歌谣，跑得飞快，父亲总是追不上我的脚步，只得一个近在后面喊：“慢一点，别摔着了，别把秧苗捏得太紧，会把秧苗烧死的。” </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;站在心新翻的田里，感受到脚下的软软的泥土的温暖和水的清凉，我的思绪就瞬间变得亢奋了。我和大人们一起，一字排开，倒退着，把一颗颗的秧苗插到松软的泥土里面。有时候，我会自不量力地跟大人比赛，看谁快一点，当然，大人们都会让着我，他们多插几行，我少插几行，但是我的速度还是没有大人们快，有时候他们为了逗我开心，会在我的身后把秧苗插满，把我围在中间，然后就到一边抽烟喝茶去了，一边休息着，一边拿我逗乐。那是我已经知道他们是逗我开心，我也不会生气。终于，把我自己身后的田里插满了以后，我也走上岸来，看看自己插的，再看看大人们插的，我自己都不好意思起来。因为大人们插的，都是整整齐齐的，而我的呢？东倒西歪的，有几棵甚至漂了起来，看着大人们调侃的笑容，我便要下田重新去插，这时候，父亲一定会阻止我的，因为他害怕我把其它的秧苗给踩坏了，只得他自己去把我没做好的一一纠正过来。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;黄昏时候，所有的秧苗都已经搬了新家，我也感觉到了疲乏，回头看看自家的田，在一片浑黄的水的里面，无数苍翠欲滴的秧苗整整齐齐地站着，就像等待检阅的仪仗队。看着这些属于自己的将士们，我幼小的心理，竟然有了一丝丝的满足。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;当然，这并不是结束，仅仅只是一个开始而已。施肥，除草，一连串的活都等着父亲去完成，我能做的只是在夜晚灌田的时候，和父亲作伴而已。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;后来，我到了外地求学，离家渐远，对于家里的活计便少做了许多。父亲也因为要给我凑学费的缘故，常年奔波在外，家里的活全丢给了母亲和弟弟妹妹。再后来，弟弟妹妹都大了，都到了远方，母亲一个人忙不过来。正巧有了“退田还茶”的机会，在我和弟弟妹妹的怂恿下，父亲把大部分的田都种上了茶。接连几年，家里再也没有插秧了。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;又到一个插秧的季节，看着学校对面的秧田，我不由得想起了父亲，想起了上次父亲外出的情景，一直以为，父亲是一座山，能够给我撑起全部的天空。可是那次，我发现了，父亲的脸上早已写满了沧桑，曾经笔直的脊背已经被生活的重负压弯了，父亲真的老了，不再是那个用心呵护着秧苗的细心男人，也不再是当初那个使劲揍我的威严汉子了。可是，为了我们这群不孝的儿女，依旧在外漂泊；而母亲，依旧一个人支撑着整个家。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;有时候，我也曾经想过，假如不是当初的我那么自私，一定要跳出农门，父亲何至于一直在外奔波，又怎么会把一个沉重的家扔给母亲一个人，让母亲一个人负担起这么多。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;现代文明的速度日益加快，我记忆深处的农耕生活已经慢慢远去。如果哪一天，父母离我而去，而我，早已离开了生我养我的土地。那时候，我又到哪里去寻找那些曾经有过的童真与快乐呢？</span><br />', 0),
(93, '<span style="font-size:14px;">&nbsp;在我的记忆深处，所有的历史都是写在纸上的。那些大人物，英雄也罢，枭雄也可，都在纸上用文字的形式，留下了自己浓墨重彩的一笔。可是当我们打开历史的画册，却无法找到关于小人物的些许记忆。也许很多很多年前，我们可以在族谱上翻到那些我们叫做祖先的卑微的名字。随着现代文明的发展，农耕时代的结束，人们的家族观念也随风而去，当一个生命逐渐逝去的时候，我们没有任何关于他们的记忆，有人说这是一种进步，是进步吗？我不得而知。也有人说，这是人们对自己祖先的遗忘，是人的一种退化，是退化吗？我也不得而知。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我的祖先不属于我现在脚下的土地，听祖父说起，我们是从很远很远的地方，一路迁徙而来。在我的老家，我们已经居住了整整五代。对我来说，我记住的，除了祖父一代人，父亲一代人和我自己这一代人，以及正在成长的我的女儿他们一代。那些更早的，比如我的曾祖，我的高祖，我没有丝毫记忆，也曾想过翻阅一下那些只言片语，找找他们生活的那些痕迹，可是，随着老家的几次修建，那种叫做族谱的东西，到底去了哪儿，却已经没有人知道了；我也只是从祖父和伯父的口中偶尔听到而已。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在我很小很小的时候，我从来没有想过，作为大山的儿子，我会离开生我养我的大山，到外面去讨生活。在我所接受的传统思想里面，我一直以为我会和我的父辈一样，在土地里面刨生活，生于斯，长于斯，老于斯，也葬于斯。阴差阳错的缘故，我离开了我的老家，把握自己的家定义在了一个对我的父辈来说很陌生的地方，在那里，我听不见农村那亲切的牛哞，看不见轻盈的袅袅炊烟，当然也就没有了那些熟悉的面庞、悦耳的乡音。行走在城市的街头，我所能把握的除了自己微不足道的一家人，再也没有了其它。其实我知道，老家将会逐渐淡出我的视线，而我也会逐渐被老家所遗忘。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;幸运的是，我工作的单位，依旧在老家的小镇上，每年的三百六十五天，我有超过两百天的时间可以听到那些熟悉的乡音，看到那些朴实的脸庞。只有这样，我才能感觉到我内心深处的关于老家的许多东西依旧鲜活着，就像我依旧活着一样。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;曾经看过别人的族谱，在一个偶然的机会，当然这是莫大的荣耀。一个泛黄的本子，用工整的笔记，记载着一个个曾经逝去的生命名讳，普通人只有短短的几行，记载着某人生于某年某月，逝于某年某月，曾娶某人为妻，生有几子几女，仅此而已，个别在历史上曾经留下过自己的足迹的人也许会幸运一些，会加上几笔关于他的生平的记载。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我知道，在很多的家族里面，对这寥寥几笔却是极端重视。在很多文学作品里面，那些家族内部的惩罚，点天灯、浸猪笼等虽然血腥，却无法让族人真正恐惧，最然人恐惧的莫过于开除祖籍，死后不得葬入祖坟，每当这种惩罚实施的时候，总面临着无数的争斗，以前我不理解这一切，随着年龄渐长，开始接触历史的时候，我开始明白这一切。这种做法是将一个人在世上存在的一切全部铲去，这种做法虽然不会伤及人的生命，但是被惩罚者的子子孙孙都将要接受这种惩罚，无休无止，一时的惩罚将成为子子孙孙永远的耻辱，而且永远无法抹去。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在很多农村，人们都忌讳把自己的孩子过继给别人，尤其是异姓，在他们看来，一旦孩子过继给了别人，就是把自己的孩子从宗族上抹去，而且是永远地抹去。在我小时候，骂人时最恶毒的话，就是说谁的父亲是领养的孩子，这种骂人话比骂别人的母亲还要恶毒，为这种事轻生的人也大有存在。有一次回老家，走到一处，母亲告诉我那个地方曾经居住了一个望族，由于各种原因，那一家人先后死去，曾经让别人所羡慕的青砖绿瓦已经变成了断壁残垣。我不由生出一种感慨，像这样的人家，他们还有宗族存在吗？一旦一个家族走到这一步，活着的最后一人，面对着曾经存在的一切，他们会想些什么呢？这种情况下，那些曾经坚持的宗族观念，还有存在的意义吗？ </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我的家族一直是一个漂泊的家族，在老辈的口耳相传的记忆里面，我听不到多少辉煌的记忆，有的只是生活的苦楚。父亲曾经告诉过我，我的曾祖，实在“湖广填四川”和“四川填陕西”的两次大移民中，从遥远的湖北黄州一路迁徙而来。刚到这里的时候，当时的土著对曾祖他们极为排斥，于是，曾祖不得不采用了一些极端的手段来获得大家的认可，当然包括使用武力。每次听父亲讲到这里的时候，我不由生出几分钦佩，我的曾祖是一个小人物，在历史的长河中，没有关于他的记载，但是对我来说，却是非常重要的，假如当初没有曾祖他们的一路艰辛，那么也就没有我的祖父，当然也就没有了我的父亲，父亲也不可能遇到我的母亲，自然也就没有了我，自然也就没有了这些文字。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;年少的时候，我对我的曾祖有过太多的埋怨，当时的我不明白，曾祖为什么会选择在这个地方扎下跟来，因为这里的土地贫瘠，穷山恶水的，用一句现在很流行的话来说，这是一个鸟不生蛋，兔子不拉屎，鬼都不长毛的地方，局限了他们的一生也就罢了，还让我们这些子孙们从一开始就比别人差了好多。随着年岁见长，一次又一次的背井离乡，对于我的曾祖，我不再埋怨，我的敬佩感与日俱增，试想想，一个外地人，来到一个陌生的地方，一无所有的自己，要取得别人的认可，并且落地生根，这需要多大的勇气，而且在这样的一个地方，一个新落户的外地人，势必要夺去别人的土地，对于农民来说，这可是他们的命根子，谁能容许别人夺走自己赖以生存的东西呢？在父辈的口中，我听不到关于曾祖软弱的记忆，但我相信，面对着恶劣的生存环境以及村民的集体排斥，曾祖的心里，也曾经动摇过，何况，当时的他也是背井离乡来到这里，对于自己的家乡，他也有过太多的，太多的留恋。面对这样一位真正的男人，我又有什么可以埋怨的呢？ </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;去年给曾祖上香的时候，跪在曾祖的坟前，我突然有了一种想法，假如曾祖活到现在，面对着一群自己的子孙们，一个个抛弃了他辛辛苦苦打下的家业，到外面的世界去寻找自己的梦想，他又会作何感想呢？是生气，还是理解，我不得而知。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在《折叠的山峰》里面，我曾经写过这样一段话：“我是一个不孝的人，因为我离开了老家，离开了土地，也离开了生我养我的父母，走出家门的那一刻，我就明白，在这世上，我已经成了无根的浮萍，断线的风筝。”现在的我，虽然一直在老家工作，但是我知道，叶落归根对我来说也许只是想想罢了。等到很多年后，我已经离去，那些居住在老家的子孙们，面对着我这个几乎从来没有存在过的先人，他们会说些什么呢？在他们记载的族谱上，又该给我写下怎样的一笔呢？</span><br />', 0);
INSERT INTO `articles_content` (`mid`, `message`, `user`) VALUES
(94, '<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;1 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;很多记忆都已经远了，消失在了时间的转动中。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;横躺在我的手掌上的，是夏日独有的炎热，以及炎热送给我的思维。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;2 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在夏天的腹地，我是孤独的旅人。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在文字的背面，我用自己的全部时间，诉说着我的思念，以及快乐。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;这个季节，我是安静的，也是幸福的，因为家中守候的娇妻弱女。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;苍白的日子。炎热的感官。烟雨掩饰的远方。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;深情的文字。纷飞的意象。长长短短的诗行。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一滴来自北方的雨，不经意间落入我的眼角，润湿了我干渴的目光。于是，漫山遍野的绿色，逐渐蔓延开来，生命开始以爱的姿态存在。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;纷飞的眼泪汪洋恣肆，我的眼神却可以穿透重重群山的厚重。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;3 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在一楼，我拉上窗帘，给自己一个封闭的空间。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;手中茶渐凉，水气氤氲中，许多场景若隐若现。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;以一头牛的姿势在纸上耕耘，灯光模仿着乡村的太阳。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;苍苍茫茫的山。忙忙碌碌的人。黄黄绿绿的庄稼。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;早已光滑的锄头。宛若弯月的柴刀。渐渐苍老的父亲。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;关于老家的记忆，是我内心最深的柔软，总是不停地叩问，问我的文字，也问我的良心。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;于是，我的文字有了土地的厚重。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;4 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;一片叶子在风中坠落，又一片叶子在风中坠落。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我听见了寂寞在窗外歌唱。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;于是，夏日的黄昏，一个个地破了，漫山遍野的凉爽，仙女般洁白、圣洁，轻盈着我的思绪，以绝美的姿态，进入了时间背后。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;才子佳人。刀光剑影。恩怨情仇。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;发黄的典籍。久远的历史。唐诗宋词的桃花。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;停留，在雾气朦胧的时间河流旁边。一个个优雅的女子翩然而来，一个个英俊的男子翩然而来。于是，男儿有情，英雄滴血，美人施恩，思妇留怨。岸芷汀兰的芬芳，诉说着一个个时代的沧桑。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;于是，我成了我的世界的王。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;5 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;生活着，工作着，也忙碌着。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;秧田一样的教室，有着无数秧苗，排列得整整齐齐。就像，我对儿时乡村生活的回忆。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我用父亲呵护秧苗的细心，呵护着那些正在成长的苗。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;在里面注入思想的水，唯美的水，善良的水，逻辑的水；再加入一些月光，一些清风，一些虔诚；然后，泡一壶自己炮制的绿茶，等待着下一个稻香时节…… </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;我愿意在这个田里，注入所有我所拥有的养分，哪怕是我的泪，我的血…… </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;6 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;绿叶的背后，叶的血管清晰可见。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;花朵之外的花朵，距离我们的时间越来越远，季节用它随口许下的承诺，交换了属于我的全部时间。 </span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;于是，我成了一直没有预约的蚕，用自己的丝，编织着自己的世界。</span><br />\r\n<br />', 0),
(96, '<div id="Cnt-Main-Article-QQ">\r\n<p align="center"></p>\r\n<p></p>\r\n<p align="center"></p>\r\n<p style="text-align:center;"><span style="font-size:14px;"><img alt="李彦宏：百度也是媒体 希望用户更多时间停留" src="http://img1.gtimg.com/tech/pics/hv1/151/195/796/51809776.jpg" /><br />\r\n百度CEO<a class="a-tips-Article-QQ" href="http://datalib.tech.qq.com/people/3/index.shtml" target="_blank"><span style="color:#000000;font-size:14px;">李彦宏</span></a>(腾讯科技配图)</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">腾讯科技讯</span></strong><span style="font-size:14px;">（乐天）6月13日消息，百度创始人</span><a class="a-tips-Article-QQ" href="http://datalib.tech.qq.com/people/3/index.shtml" target="_blank"><span style="color:#000000;font-size:14px;">李彦宏</span></a><span style="font-size:14px;">近日在清华经管学院与商学院MBA及大学生互动交流，披露了自己11年创业心路历程与人生感悟。李彦宏总结做好企业三个心得：便捷、简单可依赖、高效。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏还谈及与谷歌本质不同，称百度本质上也是一个媒体，希望用户未来会有更多的媒体时间花在百度上，从来没有像谷歌那样一直强调让用户尽快地离开谷歌网站。</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">百度本质上也是一个媒体</span></strong></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏近日就百度SNS战略再度作出解释，称整个互联网发展有一条主线，本质上互联网是一个新的媒体，百度本质上也是一个媒体，自己在上市时，为了跟美国人说清楚百度，就强调百度是一个基于技术的媒体公司。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏认为，媒体公司最根本的就是争夺所谓的媒体时间，让用户在网站上停留更多时间，百度做的事情是能够获得更多的消费者或者用户的媒体时间，这也是与谷歌很大的不同。“Google一直讲自己存在理由就是让用户尽快地离开谷歌网站，百度从来没有说过这个话，因为我们觉得，大家在做的事情是要获得媒体时间，我们才有贴吧、知道这一系列的内容出来。”</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏指出，SNS或社会化媒体并非只有Facebook模式可成功，在中国有很多形式，微博就是这种形式、QZONE的形式、腾讯朋友形式，百度现在相当有几个非常受欢迎的应用，贴吧、知道都是社会化的应用，百度正在底层构建一个通行社会化平台。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">“用户到了百度后，在任何一个产品，任何一个应用之间自由切换，未来会有更多的媒体时间花在百度上，同时我们也使得我们的用户能够更加便捷获取信息和掌握所求，这一点上来说，百度所处的位置，其实比Google在美国所处的位置要好很多。”</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">总结十一年创业三大心得</span></strong></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏在回顾11年创业时，向学生讲述了2004年前后百度面对Google强大压力下的一些不为人知的小故事。2000年到2004年，百度工程师面对强大的Google普遍有自卑心理，认为百度“加上兼职、前台各种各样的才二十来人”，绝对无法与Google竞争。在这种情况下，2004年李彦宏被迫从CEO位置下来做一个项目的经理，开始超越Google的“闪电计划”。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏回忆说，当时的策略就是“用百度强的地方攻Google弱的地方”。百度很快找到两个突破点，一是百度服务器在中国，可以抓到四倍于Google的中文信息，百度索引量每年涨200%，Google每年仅涨50%；二是在中文内容稀少的情况下，百度推出贴吧等产品来增加内容。几年下来，信赖百度的用户终于超过竞争对手。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏表示，多年来坚持做一件事情，并且跟着公司不断成长，“最根本的原因，还是自己心目当中的一个理想，想把一件事情做成。”在追逐理想的过程中会发生各种各样的变化，这时是否还能坚持理想，是成功与否的关键。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">百度发展从一两个人到现在一万两千人，远超李彦宏创业时想象。李彦宏还向学生总结了做好企业的三个心得：首先要有共同的使命目标，百度使命是“让人们最便捷的获取信息找到所求”；其次是核心的公司文化，百度 “简单可依赖”文化已为每个员工理解、认同和贯彻；第三是高效的流程和制度，“想要做世界级的公司，必须要有世界级的流程”。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏还强调，未来操作系统越来越不重要，相反，构建在操作系统上的服务很重要。比如说安卓电话在中国现在越来越多，但是大多数安卓电话默认的搜索变成百度了，因为百度跟手机厂商谈，在中国百度可以给厂商分更多的钱。”</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏指出，不管百度做不做操作系统，未来整个IT产业的重心会从操作系统转到互联网服务。百度要做的是不仅有网页检索，还有贴吧知道一系列用户非常喜欢的服务。</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">李彦宏在清华大学经管学院演讲内容精选：</span></strong></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">（创业初期）大概有两个月的时间，我再也没有跟投资人联系过，他们心目中觉得这家伙没准跑了，再也没有消息了。后来等到我们把程序走完，公司基本上建起来，这个老人很高兴，正好来中国，就到了百度办公室，那个时候我们在租了两个很简陋的办公室，他进门，觉得真有这样的公司，真有人在工作，一进去就敲桌子，这是真的吗？</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">一个很核心的工程师突然跑来跟我说，有一个消息你知道吗？Google的中文版发布了，我说我知道，刚刚看过，他说你看了什么感觉，我说不错…但是我们工程师马上产生一种自卑感，就说Google是硅谷最优秀的工程师做技术，而且规模比我们大很多，百度加上兼职、前台各种各样的人才二十来人，怎么可能跟他们竞争？</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">2000到2004年它(Google)每一件事情出来，我们都感到很大的压力。如果我们再这样僵持下去的话，对百度会产生不利的影响，所以到2002年初，我就决定从CEO位置下来做一个项目的经理，内部项目的“闪电计划”，这个计划就是要快速的提升百度的中文搜索的质量，超越Google。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">百度强的地方在哪里？我们能不能用我们强的地方攻Google弱的地方？……我们就开始找。找到第一点：我们服务器在本地，我们可以抓到更多中文信息……我们的索引量每年是涨200%，我们的竞争对手每年涨50%……第二点：因为网上就没有内容，就是技术再好也没有用，2003年我们推出贴吧来缓解这个问题的……</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">2004年我跟我妈妈说，如果我把这个公司卖掉的话，我估计我会成为亿万富翁，我妈说，你每天干的这么辛苦，你快卖掉算了，我说我不想卖，我不是为钱工作的。百度不是我一个人的。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">人最难受的时候是不确定，对自己未来有极强的不确定时是最难受、最焦虑的时候，那个时候就是这样的阶段，不知道明天打道回府，还是说要站在时代广场看我们的股票价格，不知道会发生什么，就很难受；在路演的时候，也生病了，讲几句话都会咳嗽，压力非常大。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">百度发展从一两个人到现在一万两千人，远远超出我当时的想象。管理一个公司，到底需要在哪些方面做好，基本上是三个方面。第一个方面是目标；第二个方式是很核心的企业文化；第三是流程和制度。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">（提问：请问十多年来您怎么保持身材的？）回答：关于身材的问题，是因为压力一直很大，所以胖不起来，每天都有很多事情要去担心，每天睡的时间也很少，就是自然变成这样，没有刻意。</span></span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">以下为李彦宏在清华大学经管学院演讲实录：</span></strong><span style="font-size:14px;"> </span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">李彦宏：</span></strong><span style="font-size:14px;">我是上次来清华经管学院讲过一次，不过那是七年前的事情，今天看到在座的同学比那个时候的同学还要年轻，而我们已经老了七岁。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">七年前，百度还没有上市，今天百度已经市值400多亿美金。2005年百度上市创造了美国资本市场的一个记录：一个外国公司股票当天涨幅350%多，这在以前是从来没有过的。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">去年8月5号上市五周年时，我们做了一个小的庆祝：纳斯达克专门为一家公司做远程开市，就是在百度大楼里敲响了大钟。现场有一个美国老人，大概七八十岁了，叫鲍勃蒂姆，他其中讲到一句话，百度上市五年为股东创造了很大价值，股票五年涨了30多倍，收入涨了几十倍。但是他说，唯一一个我见到比百度成长更快的人是李彦宏本人。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">这么多年一直坚持做同样一件事情，并且能够跟着公司不断的成长，到底最主要的原因在哪里？最根本的原因，还是自己心目中的理想。前段时间有一本讲百度的书叫做《人生可以走直线》，从A点到B点，如果我在A点，B点是我的目标，从A到B点，我可以找一条直线过去，那么怎样达到走直线的状态，很多事情说起来容易。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">我问很多人，包括问在座的同学，你将来想做什么，可能很多人能够说出来，我想做什么，成就什么样的事业，是能够说出来的，但是从现在的状态到最后实现理想，这个过程当中，可能会发生各种各样的变化，市场会在变，想法有可能会在变，就是说可能现在的状态跟你想要达到的状态，差距很大，是不是有信心，当你遇到大的困难的时候，当你有很强大阻力或者强大敌人、竞争对手的时候，是否还会坚持，当你有很多诱惑的时候，是否会改变自己的想法，这些因素在人生成长过程中，每个人都会遇到。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">1999年10月1号，我作为一个留学代表参加五十周年的大庆，我跟硅谷博士企业家代表团回国，我不是博士，也不知道怎么选上我了。这个团主要见的都是一些各地的政府官员，省委书记、省长、副省长，很多其他代表团的成员都非常的活跃，每一次看到领导就赶紧抢机会说话，不停的在宣传想做什么。我觉得政府官员跟我想做的事情关系不是很大，我就不太爱说话，助理很难受，他说李先生，你看人家都那么积极的跟领导套近乎，你老不说话，怎么能做成事。</span></p>\r\n<p></p>\r\n</div>', 0),
(97, '<div id="Cnt-Main-Article-QQ">\r\n<p align="center"></p>\r\n<p></p>\r\n<p align="center"></p>\r\n<p style="text-align:center;"><span style="font-size:14px;"><img alt="李彦宏：百度也是媒体 希望用户更多时间停留" src="http://img1.gtimg.com/tech/pics/hv1/151/195/796/51809776.jpg" /><br />\r\n百度CEO<a class="a-tips-Article-QQ" href="http://datalib.tech.qq.com/people/3/index.shtml" target="_blank"><span style="color:#000000;font-size:14px;">李彦宏</span></a>(腾讯科技配图)</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">腾讯科技讯</span></strong><span style="font-size:14px;">（乐天）6月13日消息，百度创始人</span><a class="a-tips-Article-QQ" href="http://datalib.tech.qq.com/people/3/index.shtml" target="_blank"><span style="color:#000000;font-size:14px;">李彦宏</span></a><span style="font-size:14px;">近日在清华经管学院与商学院MBA及大学生互动交流，披露了自己11年创业心路历程与人生感悟。李彦宏总结做好企业三个心得：便捷、简单可依赖、高效。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏还谈及与谷歌本质不同，称百度本质上也是一个媒体，希望用户未来会有更多的媒体时间花在百度上，从来没有像谷歌那样一直强调让用户尽快地离开谷歌网站。</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">百度本质上也是一个媒体</span></strong></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏近日就百度SNS战略再度作出解释，称整个互联网发展有一条主线，本质上互联网是一个新的媒体，百度本质上也是一个媒体，自己在上市时，为了跟美国人说清楚百度，就强调百度是一个基于技术的媒体公司。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏认为，媒体公司最根本的就是争夺所谓的媒体时间，让用户在网站上停留更多时间，百度做的事情是能够获得更多的消费者或者用户的媒体时间，这也是与谷歌很大的不同。“Google一直讲自己存在理由就是让用户尽快地离开谷歌网站，百度从来没有说过这个话，因为我们觉得，大家在做的事情是要获得媒体时间，我们才有贴吧、知道这一系列的内容出来。”</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏指出，SNS或社会化媒体并非只有Facebook模式可成功，在中国有很多形式，微博就是这种形式、QZONE的形式、腾讯朋友形式，百度现在相当有几个非常受欢迎的应用，贴吧、知道都是社会化的应用，百度正在底层构建一个通行社会化平台。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">“用户到了百度后，在任何一个产品，任何一个应用之间自由切换，未来会有更多的媒体时间花在百度上，同时我们也使得我们的用户能够更加便捷获取信息和掌握所求，这一点上来说，百度所处的位置，其实比Google在美国所处的位置要好很多。”</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">总结十一年创业三大心得</span></strong></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏在回顾11年创业时，向学生讲述了2004年前后百度面对Google强大压力下的一些不为人知的小故事。2000年到2004年，百度工程师面对强大的Google普遍有自卑心理，认为百度“加上兼职、前台各种各样的才二十来人”，绝对无法与Google竞争。在这种情况下，2004年李彦宏被迫从CEO位置下来做一个项目的经理，开始超越Google的“闪电计划”。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏回忆说，当时的策略就是“用百度强的地方攻Google弱的地方”。百度很快找到两个突破点，一是百度服务器在中国，可以抓到四倍于Google的中文信息，百度索引量每年涨200%，Google每年仅涨50%；二是在中文内容稀少的情况下，百度推出贴吧等产品来增加内容。几年下来，信赖百度的用户终于超过竞争对手。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏表示，多年来坚持做一件事情，并且跟着公司不断成长，“最根本的原因，还是自己心目当中的一个理想，想把一件事情做成。”在追逐理想的过程中会发生各种各样的变化，这时是否还能坚持理想，是成功与否的关键。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">百度发展从一两个人到现在一万两千人，远超李彦宏创业时想象。李彦宏还向学生总结了做好企业的三个心得：首先要有共同的使命目标，百度使命是“让人们最便捷的获取信息找到所求”；其次是核心的公司文化，百度 “简单可依赖”文化已为每个员工理解、认同和贯彻；第三是高效的流程和制度，“想要做世界级的公司，必须要有世界级的流程”。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏还强调，未来操作系统越来越不重要，相反，构建在操作系统上的服务很重要。比如说安卓电话在中国现在越来越多，但是大多数安卓电话默认的搜索变成百度了，因为百度跟手机厂商谈，在中国百度可以给厂商分更多的钱。”</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">李彦宏指出，不管百度做不做操作系统，未来整个IT产业的重心会从操作系统转到互联网服务。百度要做的是不仅有网页检索，还有贴吧知道一系列用户非常喜欢的服务。</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">李彦宏在清华大学经管学院演讲内容精选：</span></strong></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">（创业初期）大概有两个月的时间，我再也没有跟投资人联系过，他们心目中觉得这家伙没准跑了，再也没有消息了。后来等到我们把程序走完，公司基本上建起来，这个老人很高兴，正好来中国，就到了百度办公室，那个时候我们在租了两个很简陋的办公室，他进门，觉得真有这样的公司，真有人在工作，一进去就敲桌子，这是真的吗？</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">一个很核心的工程师突然跑来跟我说，有一个消息你知道吗？Google的中文版发布了，我说我知道，刚刚看过，他说你看了什么感觉，我说不错…但是我们工程师马上产生一种自卑感，就说Google是硅谷最优秀的工程师做技术，而且规模比我们大很多，百度加上兼职、前台各种各样的人才二十来人，怎么可能跟他们竞争？</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">2000到2004年它(Google)每一件事情出来，我们都感到很大的压力。如果我们再这样僵持下去的话，对百度会产生不利的影响，所以到2002年初，我就决定从CEO位置下来做一个项目的经理，内部项目的“闪电计划”，这个计划就是要快速的提升百度的中文搜索的质量，超越Google。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">百度强的地方在哪里？我们能不能用我们强的地方攻Google弱的地方？……我们就开始找。找到第一点：我们服务器在本地，我们可以抓到更多中文信息……我们的索引量每年是涨200%，我们的竞争对手每年涨50%……第二点：因为网上就没有内容，就是技术再好也没有用，2003年我们推出贴吧来缓解这个问题的……</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">2004年我跟我妈妈说，如果我把这个公司卖掉的话，我估计我会成为亿万富翁，我妈说，你每天干的这么辛苦，你快卖掉算了，我说我不想卖，我不是为钱工作的。百度不是我一个人的。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">人最难受的时候是不确定，对自己未来有极强的不确定时是最难受、最焦虑的时候，那个时候就是这样的阶段，不知道明天打道回府，还是说要站在时代广场看我们的股票价格，不知道会发生什么，就很难受；在路演的时候，也生病了，讲几句话都会咳嗽，压力非常大。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">百度发展从一两个人到现在一万两千人，远远超出我当时的想象。管理一个公司，到底需要在哪些方面做好，基本上是三个方面。第一个方面是目标；第二个方式是很核心的企业文化；第三是流程和制度。</span></span></p>\r\n<p style="text-indent:2em;"><span style="font-family:楷体_GB2312;"><span style="font-size:14px;">（提问：请问十多年来您怎么保持身材的？）回答：关于身材的问题，是因为压力一直很大，所以胖不起来，每天都有很多事情要去担心，每天睡的时间也很少，就是自然变成这样，没有刻意。</span></span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">以下为李彦宏在清华大学经管学院演讲实录：</span></strong><span style="font-size:14px;"> </span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">李彦宏：</span></strong><span style="font-size:14px;">我是上次来清华经管学院讲过一次，不过那是七年前的事情，今天看到在座的同学比那个时候的同学还要年轻，而我们已经老了七岁。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">七年前，百度还没有上市，今天百度已经市值400多亿美金。2005年百度上市创造了美国资本市场的一个记录：一个外国公司股票当天涨幅350%多，这在以前是从来没有过的。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">去年8月5号上市五周年时，我们做了一个小的庆祝：纳斯达克专门为一家公司做远程开市，就是在百度大楼里敲响了大钟。现场有一个美国老人，大概七八十岁了，叫鲍勃蒂姆，他其中讲到一句话，百度上市五年为股东创造了很大价值，股票五年涨了30多倍，收入涨了几十倍。但是他说，唯一一个我见到比百度成长更快的人是李彦宏本人。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">这么多年一直坚持做同样一件事情，并且能够跟着公司不断的成长，到底最主要的原因在哪里？最根本的原因，还是自己心目中的理想。前段时间有一本讲百度的书叫做《人生可以走直线》，从A点到B点，如果我在A点，B点是我的目标，从A到B点，我可以找一条直线过去，那么怎样达到走直线的状态，很多事情说起来容易。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">我问很多人，包括问在座的同学，你将来想做什么，可能很多人能够说出来，我想做什么，成就什么样的事业，是能够说出来的，但是从现在的状态到最后实现理想，这个过程当中，可能会发生各种各样的变化，市场会在变，想法有可能会在变，就是说可能现在的状态跟你想要达到的状态，差距很大，是不是有信心，当你遇到大的困难的时候，当你有很强大阻力或者强大敌人、竞争对手的时候，是否还会坚持，当你有很多诱惑的时候，是否会改变自己的想法，这些因素在人生成长过程中，每个人都会遇到。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">1999年10月1号，我作为一个留学代表参加五十周年的大庆，我跟硅谷博士企业家代表团回国，我不是博士，也不知道怎么选上我了。这个团主要见的都是一些各地的政府官员，省委书记、省长、副省长，很多其他代表团的成员都非常的活跃，每一次看到领导就赶紧抢机会说话，不停的在宣传想做什么。我觉得政府官员跟我想做的事情关系不是很大，我就不太爱说话，助理很难受，他说李先生，你看人家都那么积极的跟领导套近乎，你老不说话，怎么能做成事。</span></p>\r\n<p></p>\r\n</div>', 0),
(98, '<div id="Cnt-Main-Article-QQ">\r\n<p style="text-align:center;" align="center"></p>\r\n<p align="center">\r\n<p></p>\r\n<p style="font-family:宋体;font-size:10pt;" align="center"><span style="font-size:14px;"><img alt="雅虎正物色新CEO 投资人希望马云孙正义担纲" src="http://img1.gtimg.com/tech/pics/hv1/212/100/803/52240787.jpg" /><br />\r\n雅虎CEO卡罗尔·巴茨（腾讯科技配图）</span></p>\r\n<p style="text-indent:2em;"><strong><span style="font-size:14px;">腾讯科技讯</span></strong><span style="font-size:14px;">（观海）北京时间6月22日消息，据国外媒体报道，雅虎正在寻找接替CEO卡罗尔·巴茨(Carol Bartz)的继任者，福克斯数字媒体(Fox Digital)董事长乔纳森·米勒(Jon Miller)正在与雅虎董事会就接替巴茨一事，进行初期、非正式谈判。雅虎董事会成员大卫·肯尼(David Kenny)目前也是潜在人选。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">对于股东而言，雅虎与阿里巴巴的纠纷尚未尘埃落定，但事情变得更加糟糕。雅虎CEO长期以来一直承诺对公司进行转变。但即将于本周末召开的雅虎年度股东大会传出不利消息。投资者表示：“公司正在进行转变，但这是360度转变。基本上，公司是在转圈圈。”</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">消息称，雅虎正在悄悄寻找接替巴茨的人选，福克斯数字媒体董事长米勒正在与雅虎董事会就接替巴茨一事，进行初期、非正式谈判。雅虎董事会成员大卫目前也是潜在人选。目前还不知道其他的潜在人选。消息人士透露，巴茨可能知道公司正在非正式的寻找CEO继任者。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">此前担任雅虎搜索主管的普拉巴卡·拉加万(Prabhakar Raghavan)现升任公司首席战略官，负责雅虎长期企业战略和技术前景的发展。但由于缺少业务经验，普拉巴卡的任职令投资者吃惊，投资者认为这是巴茨的错误判断。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">甚至在分析师今年5月下调了业绩预期之后，雅虎财务结果据说仍远低于华尔街预期。分析师预计将对雅虎业绩预期做出大幅修正，特别是对雅虎今年下半年的业绩预期。即便如此，雅虎的股价可能不会下跌太多。投资者表示：“投资者已经将雅虎的主要业务评定到零点位置。”</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">雅虎董事会主席罗伊·波斯托克(Roy Bostock)看起来现在成为沮丧股东们的主要目标。消息人士透露，将巴茨从董事会中剔除太具有破坏性，但这表明一个明确的信息，他们并不认为波斯托克是董事会主席的合适人选。当然，以前也出现过类似情况，但波斯特克都得以幸免。</span></p>\r\n<p style="text-indent:2em;"><span style="font-size:14px;">雅虎投资人埃里克·杰克森(Eric Jackson)希望在6月23日召开的股东大会将会对董事会进行改组。对于雅虎CEO巴茨的继任者，杰克逊表示：“我个人希望软银CEO孙正义或者阿里巴巴创始人</span><!--keyword--><a class="a-tips-Article-QQ" href="http://datalib.tech.qq.com/people/1/index.shtml" target="_blank"><!--/keyword--><span style="color:#000000;"><span style="font-size:14px;">马云</span><!--keyword--></span></a><span style="font-size:14px;">(</span><span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/tncmayun#pref=qqcom.keyword" rel="tncmayun" target="_blank" reltitle="TNC马云"><span style="color:#000000;font-family:宋体;"><span style="font-size:14px;">微博</span></span></a></span><span style="font-size:14px;">)</span><!--/keyword--><span style="font-size:14px;">担任雅虎的首席执行官。”</span></p>\r\n</div>', 0),
(99, '<p align="center"><embed src="http://www.xiami.com/widget/0_1769749913/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent" /><br />\r\n<br />\r\n<br />\r\n<strong>歌词：</strong> </p>\r\n<div class="lrc_main">杨韵禾 - 放晴 <br />\r\n<br />\r\n作词：王雅君 作曲：杨韵禾 <br />\r\n<br />\r\n<br />\r\n决定了今天 就不怕累或冒险 <br />\r\n听陌生的语言 看不同的世界 <br />\r\n我相信直觉 就背著梦和明天 <br />\r\n后退或向前 偶尔有些疲倦 <br />\r\n爱 的极限 一定能 超越 <br />\r\n<br />\r\n我用尽全力去相信 在勇敢和泪中旅行 <br />\r\n不管我淋了几场雨 紧握未知的命运 <br />\r\n不论狂风还是暴雨 我看到彩虹和决心 <br />\r\n我相信 坏天气 会放晴</div>\r\n<p align="center"><br />\r\n&nbsp;</p>', 0),
(100, '<p align="center"><embed src="http://www.xiami.com/widget/0_1770279678/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent" /><br />\r\n<strong>歌词：</strong> </p>\r\n<div class="lrc_main">填词：姚谦<br />\r\n作曲：a-lin(黄丽玲)<br />\r\n演唱：a-lin(黄丽玲)<br />\r\n<br />\r\n<br />\r\n想 再为你仰着头放声唱<br />\r\n站 在仲夏星空的沙滩上<br />\r\n在 追逐理想忐忑的道路上<br />\r\n就算眼眶有泪也因你变力量<br />\r\n<br />\r\n当 聚光灯投在我的身上<br />\r\n我 闭上眼当你在我身旁<br />\r\n曾 困惑过我的心事和感想<br />\r\n这一瞬都成了可以分享的光<br />\r\n<br />\r\n就算是微小一首歌的力量<br />\r\n只有爱你的人有一瞬之光<br />\r\n穿越时空也蔓延渗透人群的心房<br />\r\n谢谢你愿意倾听我歌唱<br />\r\n时光交换许多微笑的泪光<br />\r\n每一分一秒都是感动的对望<br />\r\n<br />\r\n<br />\r\n当 聚光灯投在我的身上<br />\r\n我 闭上眼当你在我身旁<br />\r\n曾 困惑过我的心事和感想<br />\r\n这一瞬都成了可以分享的光<br />\r\n就算是微小一首歌的力量<br />\r\n只有爱你的人有一瞬之光<br />\r\n穿越时空也蔓延渗透人群的心房<br />\r\n谢谢你愿意倾听我歌唱<br />\r\n时光交换许多微笑的泪光<br />\r\n每一分一秒都是感动的对望<br />\r\n是你点燃了我 来自灵魂的光亮<br />\r\n我们沿着爱 交会一瞬之光<br />\r\n<br />\r\n就算是微小一首歌的力量<br />\r\n只有爱你的人有一瞬之光<br />\r\n穿越时空也蔓延渗透人群的心房<br />\r\n谢谢你愿意倾听我歌唱<br />\r\n时光交换许多微笑的泪光<br />\r\n每一分一秒都是感动的对望<br />\r\n不管明天 有何为难<br />\r\n只有爱是 一瞬之光<br />\r\n</div>', 0),
(101, '<p align="center"><embed src="http://www.xiami.com/widget/0_70149/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent" /><br />\r\n</p>\r\n<div id="lrc" class="clearfix">\r\n<p>Sorry，此歌曲暂无歌词。</p>\r\n</div>\r\n<p align="center"><br />\r\n&nbsp;</p>', 0),
(102, '<p align="center"><embed src="http://www.xiami.com/widget/0_1769845026/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent" /><br />\r\n<strong>歌词：</strong> </p>\r\n<div class="lrc_main">老男孩<br />\r\n作曲：大桥卓弥<br />\r\n作词：筷子兄弟<br />\r\n唱：筷子兄弟<br />\r\n歌词制作：ドラえもん<br />\r\n<br />\r\n那是我日夜思念深深爱着的人啊 / I am deeply in love with her Thinking of her day and night<br />\r\n到底我该如何表达 / But how can I express myself<br />\r\n她会接受我吗 / And will she accept me<br />\r\n也许永远都不会跟她说出那句话 / Maybe I''ll never expose my heart to her<br />\r\n注定我要浪迹天涯 / For I am always wondering about Alone and homeless<br />\r\n怎么能有牵挂 / How can I be on tenderhooks<br />\r\n梦想总是遥不可及 / Dreams are but dreams<br />\r\n是不是应该放弃 / Maybe I should give up<br />\r\n花开花落又是一季 / Flowers bloom and fade again and again<br />\r\n春天啊你在哪里 / But where is the spring for me<br />\r\n<br />\r\n----------Music----------<br />\r\n<br />\r\n青春如同奔流的江河 / Youth is like a swift current<br />\r\n一去不回来不及道别 / rushing by without saying good-bye<br />\r\n只剩下麻木的我 / Leaving me behind<br />\r\n没有了当年的热血 / numb cold spent<br />\r\n看那满天飘零的花朵 / A beautiful flower<br />\r\n在最美丽的时刻凋谢 / faded at its prime time in spring<br />\r\n有谁会记得这世界他来过 / But who cares if it ever lived in this world<br />\r\n<br />\r\n----------Music----------<br />\r\n<br />\r\n转眼过去 多年世间 / Many years have elapsed in a blink of the eyes<br />\r\n多少离合悲欢 / Witnessing unions and departures joys and sorrows<br />\r\n曾经志在四方少年 / The wondering boy envies the wild goose<br />\r\n羡慕南飞的雁 / that flies to his home in the south before winter comes<br />\r\n各自奔前程的身影 / People go in different directions<br />\r\n匆匆渐行渐远 / away and gone<br />\r\n未来在哪里平凡 / But where is my future just simple ordinary days for me<br />\r\n啊 谁给我答案 / Oh who can give me the answer<br />\r\n那时陪伴我的人哪 / Where are you<br />\r\n你们如今在何方 / The girl who used to sit by my side<br />\r\n我曾经爱过的人啊 / Are you still beautiful and lovely<br />\r\n现在是什么模样 / As the girl in my memory<br />\r\n<br />\r\n----------Music----------<br />\r\n<br />\r\n当初的愿望实现了吗 / Have you realized your dreams<br />\r\n事到如今只好祭奠吗 / Maybe we''ll let bygones be bygones<br />\r\n任岁月风干理想再也 / However hard I may try<br />\r\n找不回真的我 / I can not find my true self<br />\r\n抬头仰望这漫天星河 / A million stars are twinkling in the sky<br />\r\n那时候陪伴我的那颗 / And I try to find out the one that used to stay by me<br />\r\n这里的故事 / Oh my dear companion of yesterday<br />\r\n你是否还记得 / Do you still remember the time we shared together<br />\r\n<br />\r\n----------Music----------<br />\r\n<br />\r\n歌词制作：ドラえもん<br />\r\n<br />\r\n生活像一把无情刻刀 / Life is like a sculptor''s graver cold and ruthless<br />\r\n改变了我们模样 / Has changed our shape<br />\r\n未曾绽放就要枯萎吗 / Will the flower wither before it ever has a chance to bloom<br />\r\n我有过梦想 / But I used to have my dream<br />\r\n<br />\r\n----------Music----------<br />\r\n<br />\r\n青春如同奔流的江河 / Youth is like a swift current<br />\r\n一去不回来不及道别 / rushing by without saying good-bye<br />\r\n只剩下麻木的我 / Leaving me behind<br />\r\n没有了当年的热血 / numb cold spent<br />\r\n看那满天飘零的花朵 / A beautiful flower<br />\r\n在最美丽的时刻凋谢 / faded at its prime time in spring<br />\r\n有谁会记得这世界他曾经来过 / But who cares if it ever lived in this world<br />\r\n当初的愿望实现了吗 / Have you realized your dreams<br />\r\n事到如今只好祭奠吗 / Maybe we''ll let bygones be bygones<br />\r\n任岁月风干理想再也 / However hard I may try<br />\r\n找不回真的我 / I can not find my true self<br />\r\n抬头仰望这漫天星河 / A million stars are twinkling in the sky<br />\r\n那时候陪伴我的那颗 / And I try to find out the one that used to stay by me<br />\r\n这里的故事 / Oh my dear companion of yesterday<br />\r\n你是否还记得 / Do you still remember the time we shared together<br />\r\n<br />\r\n如果有明天 / If tomorrow ever comes<br />\r\n祝福你 亲爱的 / I''ll send my best wishes to you My dear girl<br />\r\n<br />\r\n----------End----------<br />\r\n</div>', 0),
(103, '<p align="center"><embed src="http://www.xiami.com/widget/0_373970/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent" /><br />\r\n<strong>歌词：</strong> </p>\r\n<div class="lrc_main">疯狂世界<br />\r\n演唱：五月天<br />\r\n专辑：《第一张创作专辑》<br />\r\n作词：阿信<br />\r\n作曲：阿信<br />\r\n<br />\r\n如果说了后悔 是不是一切就能倒退<br />\r\n回忆多么美 活着多么狼狈<br />\r\n为什么这个世界 总要叫人尝伤悲<br />\r\n我不能了解 也不想了解<br />\r\n<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂世界<br />\r\n那么多苦 那么多累<br />\r\n那么多莫名的泪水<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂的世界<br />\r\n如果是你 发现了我<br />\r\n也别将我挽回<br />\r\n<br />\r\n想了你一整夜 再也想不起你的脸<br />\r\n你是一种感觉 写在夏夜晚风里面<br />\r\n青春是挽不回的水 转眼消失在指间<br />\r\n用力地浪费 再用力地后悔<br />\r\n<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂世界<br />\r\n那么多苦 那么多累<br />\r\n那么多莫名的泪水<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂的世界<br />\r\n如果是你 发现了我<br />\r\n也别将我挽回<br />\r\n<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂世界<br />\r\n那么多苦 那么多累<br />\r\n那么多莫名的泪水<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂的世界<br />\r\n如果是你 发现了我<br />\r\n也别将我挽回<br />\r\n<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂世界<br />\r\n那么多苦 那么多累<br />\r\n那么多莫名的泪水<br />\r\n我好想好想飞<br />\r\n逃离这个疯狂的世界<br />\r\n如果是你 发现了我<br />\r\n也别将我挽回<br />\r\n</div>', 0),
(104, '<div id="article" class="middle_font">\r\n<p><span style="font-size:14px;">直接用file_get_contents，会报错；</span></p>\r\n<p><span style="font-size:14px;">程序代码$url = (https://xxx.com");</span><br />\r\n<span style="font-size:14px;">file_get_contents($url);</span></p>\r\n<p><span style="font-size:14px;">错误：</span><br />\r\n<span style="font-size:14px;">程序代码Warning: file_get_contents(https://xxx.com) [function.file-get-contents]: failed to open stream: No such file or directory in D:wampwwwgrabber_clientindex.php on line 3</span></p>\r\n<p><span style="font-size:14px;">用curl的方式是可以的：</span><br />\r\n<span style="font-size:14px;">程序代码$url = (https://xxx.com);</span><br />\r\n<span style="font-size:14px;">$ch = curl_init();</span><br />\r\n<span style="font-size:14px;">curl_setopt($ch, CURLOPT_URL,$url);</span><br />\r\n<span style="font-size:14px;">curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);</span><br />\r\n<span style="font-size:14px;">curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);</span><br />\r\n<span style="font-size:14px;">$result = curl_exec($ch);</span><br />\r\n<span style="font-size:14px;">print_r($result);</span><br />\r\n<span style="font-size:14px;">?&gt;</span></p>\r\n<p><span style="font-size:14px;">重点是以下两句：</span><br />\r\n<span style="font-size:14px;">curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);</span><br />\r\n<span style="font-size:14px;">curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);</span></p>\r\n</div>', 0);
INSERT INTO `articles_content` (`mid`, `message`, `user`) VALUES
(105, '<div class="postmessage firstpost">\r\n<div id="threadtitle">&nbsp;</div>\r\n<div class="t_msgfontfix">\r\n<table cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td id="postmessage_1848078" class="t_msgfont"><span style="font-size:14px;">/**</span><br />\r\n<span style="font-size:14px;">* 翻牌游戏</span><br />\r\n<span style="font-size:14px;">* </span><br />\r\n<span style="font-size:14px;">* 1-52张扑克牌,初始都翻开朝上</span><br />\r\n<span style="font-size:14px;">* 从2开始, 以倍数为基础, 将2翻一次, 4翻一次, 6翻一次...52翻一次</span><br />\r\n<span style="font-size:14px;">* 从3开始, 以倍数为基础, 将3翻一次, 6翻一次, 9翻一次...48翻一次</span><br />\r\n<span style="font-size:14px;">* 从4开始, 以倍数为基础, 将4翻一次, 8翻一次, 13翻一次...48翻一次</span><br />\r\n<span style="font-size:14px;">* .....</span><br />\r\n<span style="font-size:14px;">* 求最后朝上的牌有哪些</span><br />\r\n<span style="font-size:14px;">*/</span><br />\r\n<div class="blockcode">\r\n<div id="code0">\r\n<ol>\r\n<li><span style="font-size:14px;">class up {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; protected $max = 52;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; protected $min = 2;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; protected $rs = array(1);&nbsp; &nbsp; &nbsp; &nbsp; // 结果集,第一张牌是朝上的</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; public </span><span style="font-size:14px;" class="t_tag" href="tag.php?name=function">function</span><span style="font-size:14px;"> __construct() {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; // 循环得到2-52的整数数组</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; public function setp1() {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for($i = $this-&gt;min; $i &lt;= $this-&gt;max; $i++) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; for($j = $this-&gt;min; $j &lt;= $this-&gt;max; $j++) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(0 == $i % $j) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $arr[$i][] = $j;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return $arr;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; // 获得整除组合为偶数的牌</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; public function execute($arr) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; foreach($arr as $k =&gt; $v) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if($this-&gt;setp3(count($v))) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;rs[$k][] = $v;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return $this-&gt;rs;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; // </span><span style="font-size:14px;" class="t_tag" href="tag.php?name=%E5%88%A4%E6%96%AD">判断</span><span style="font-size:14px;">奇偶数</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; public function setp3($num) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if(0 == $num % 2) {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return true;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; }</span><br />\r\n<li><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><br />\r\n<li><span style="font-size:14px;">}</span><br />\r\n<li><br />\r\n<li><span style="font-size:14px;">$arr = array();</span><br />\r\n<li><span style="font-size:14px;">$up = new up();</span><br />\r\n<li><span style="font-size:14px;">$arr = $up-&gt;setp1();</span><br />\r\n<li><span style="font-size:14px;">print_r($up-&gt;execute($arr));</span></li>\r\n</ol>\r\n</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>', 0),
(106, '<div id="article" class="middle_font">\r\n<p><span style="font-size:14px;">有时候可变的变量名会给编程带来很大的方便。也就是说变量名可以被动态的命名和使用。通常变量通过下面这样的语句来命名 ：</span></p>\r\n<pre><ol class="dp-xml"><li class="alt"><span><span style="font-size:14px;" class="tag">&lt;?</span><span class="tag-name"><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">php</span></span></strong></u></a></span><span style="font-size:14px;">&nbsp;</span></span><li><span style="font-size:14px;">$<span style="font-size:14px;" class="attribute">a</span><span style="font-size:14px;">&nbsp;=&nbsp;</span><span style="font-size:14px;" class="attribute-value">''hello''</span><span style="font-size:14px;">;&nbsp;</span></span><li class="alt"><span><span style="font-size:14px;" class="tag">?&gt;</span><span style="font-size:14px;">&nbsp;</span></span></li>\r\n</ol>\r\n</pre> <p><span style="font-size:14px;">可变变量名指的是使用一个变量的值作为这个变量的名称。在上面的例子中，通过使用两个$符号，你可以把hello设置成一个变量的名称，就像下面那样。</span></p>\r\n<pre><ol class="dp-xml"><li class="alt"><span><span style="font-size:14px;" class="tag">&lt;?</span><span style="font-size:14px;" class="tag-name">php</span><span style="font-size:14px;">&nbsp;</span></span><li><span style="font-size:14px;">$$<span style="font-size:14px;" class="attribute">a</span><span style="font-size:14px;">&nbsp;=&nbsp;</span><span style="font-size:14px;" class="attribute-value">''world''</span><span style="font-size:14px;">;&nbsp;</span></span><li class="alt"><span><span style="font-size:14px;" class="tag">?&gt;</span><span style="font-size:14px;">&nbsp;</span></span></li>\r\n</ol>\r\n</pre> <p><span style="font-size:14px;">通过上面的两个语句，有两个变量被定义：变量$a，装的内容是”hello” 以及变量$hello，装的内容是 “world”。 于是，下面的语言：</span></p>\r\n<pre><ol class="dp-xml"><li class="alt"><span><span style="font-size:14px;" class="tag">&lt;?</span><span style="font-size:14px;" class="tag-name">php</span><span style="font-size:14px;">&nbsp;</span></span><li><span style="font-size:14px;">echo&nbsp;"$a&nbsp;${$a}";&nbsp;</span><li class="alt"><span><span style="font-size:14px;" class="tag">?&gt;</span><span style="font-size:14px;">&nbsp;</span></span></li>\r\n</ol>\r\n</pre> <p><span style="font-size:14px;">跟下面的语句的输出完全一致：</span></p>\r\n<pre><ol class="dp-xml"><li class="alt"><span><span style="font-size:14px;" class="tag">&lt;?</span><span style="font-size:14px;" class="tag-name">php</span><span style="font-size:14px;">&nbsp;</span></span><li><span style="font-size:14px;">echo&nbsp;"$a&nbsp;$hello";&nbsp;</span><li class="alt"><span><span style="font-size:14px;" class="tag">?&gt;</span><span style="font-size:14px;">&nbsp;</span></span></li>\r\n</ol>\r\n</pre> <p><span style="font-size:14px;">它们都输出：hello world。</span></p>\r\n<p><span style="font-size:14px;">为了使用数组的可变变量名，你需要解决一个歧义问题。就是，如果你写$$a[1]，解析器需要明白究竟你的意思是要把$a[1]当成一个变量，还是要把$$a当成变量、[1]指的是这个变量的索引。解决这个歧义问题的语法是：第一种情况使用${$a[1]}，第二种情况使用${$a}[1]。</span></p>\r\n<p><span style="font-size:14px;">类属性也可以通过可变属性名来访问。可变属性名从产生调用所在的变量的访问范围内获取。例如，如果你的表达式是这样的：$foo-&gt;$bar，那么运行时将会在本地变量范围内寻找变量$bar，它的值将会做为$foo对象的一个属性名。如果$bar是个数组也可以使用。</span></p>\r\n<p><span style="font-size:14px;">例1 可变变量名</span></p>\r\n<pre><ol class="dp-xml"><li class="alt"><span><span style="font-size:14px;" class="tag">&lt;?</span><span style="font-size:14px;" class="tag-name">php</span><span style="font-size:14px;">&nbsp;</span></span><li><span style="font-size:14px;">class&nbsp;foo&nbsp;{&nbsp;</span><li class="alt"><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;$<span style="font-size:14px;" class="attribute">bar</span><span style="font-size:14px;">&nbsp;=&nbsp;</span><span style="font-size:14px;" class="attribute-value">''I&nbsp;am&nbsp;bar.''</span><span style="font-size:14px;">;&nbsp;</span></span><li><span style="font-size:14px;">}&nbsp;</span><li class="alt"><span style="font-size:14px;">&nbsp;</span><li><span style="font-size:14px;">$<span style="font-size:14px;" class="attribute">foo</span><span style="font-size:14px;">&nbsp;=&nbsp;</span><span style="font-size:14px;" class="attribute-value">new</span><span style="font-size:14px;">&nbsp;foo();&nbsp;</span></span><li class="alt"><span style="font-size:14px;">$<span style="font-size:14px;" class="attribute">bar</span><span style="font-size:14px;">&nbsp;=&nbsp;</span><span style="font-size:14px;" class="attribute-value">''bar''</span><span style="font-size:14px;">;&nbsp;</span></span><li><span style="font-size:14px;">$<span style="font-size:14px;" class="attribute">baz</span><span style="font-size:14px;">&nbsp;=&nbsp;</span><span style="font-size:14px;" class="attribute-value">array</span><span style="font-size:14px;">(''foo'',&nbsp;''bar'',&nbsp;''baz'',&nbsp;''quux'');&nbsp;</span></span><li class="alt"><span style="font-size:14px;">echo&nbsp;$foo-<span style="font-size:14px;" class="tag">&gt;</span><span style="font-size:14px;">$bar&nbsp;.&nbsp;"\\n";&nbsp;</span></span><li><span style="font-size:14px;">echo&nbsp;$foo-<span style="font-size:14px;" class="tag">&gt;</span><span style="font-size:14px;">$baz[1]&nbsp;.&nbsp;"\\n";&nbsp;</span></span><li class="alt"><span><span style="font-size:14px;" class="tag">?&gt;</span><span style="font-size:14px;">&nbsp;</span></span></li>\r\n</ol>\r\n</pre> <p><span style="font-size:14px;">上面的例子将会输出下面的结果：</span></p>\r\n<p><span style="font-size:14px;">I am bar.</span></p>\r\n<p><span style="font-size:14px;">I am bar.</span></p>\r\n<p><span style="font-size:14px;">警告</span></p>\r\n<p><span style="font-size:14px;">请注意，可变变量名不能用于PHP函数和类里的超级全局数组变量上。变量$this也是一个不能动态取名的特殊变量。</span></p>\r\n</div>', 0),
(107, '<div id="article" class="middle_font"><span style="font-size:14px;">　作为</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">Web</span></span></strong></u></a><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">开发</span></span></strong></u></a><span style="font-size:14px;">中</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">应用</span></span></strong></u></a><span style="font-size:14px;">最广泛的语言之一，</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">PHP</span></span></strong></u></a><span style="font-size:14px;">有着大量的粉丝，那么你是一名优秀的程序员吗?在进行自我修炼的同时，你是否想过面对各种各样的问题，我该如何突破自身的瓶颈，以便更好的发展呢? </span> <p><span style="font-size:14px;">　　PHP工程师面临成长瓶颈</span></p>\r\n<p><span style="font-size:14px;">　　先明确这里所指的PHP工程师，是指主要以PHP进行Web系统的开发，没有使用其的语言工作过。工作经验大概在3~4年，普通的Web系统(百万级访问，千成级数据以内或业务逻辑不是特别复杂)开发起基本得心应手，没有</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">什么</span></span></strong></u></a><span style="font-size:14px;">问题。但他们会这样的物点：</span></p>\r\n<p><span style="font-size:14px;">　　◆除了PHP不使用其它的语言,可能会点shell 脚本。</span></p>\r\n<p><span style="font-size:14px;">　　◆对PHP的掌握不精(很多PHP手册都没有看完,库除外)。</span></p>\r\n<p><span style="font-size:14px;">　　◆知识面比较窄(面对需求，除开使用PHP和</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">mysql</span></span></strong></u></a><span style="font-size:14px;"> ，不</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">知道</span></span></strong></u></a><span style="font-size:14px;">其它的解决办法)。</span></p>\r\n<p><span style="font-size:14px;">　　◆PHP代码以过程为主，认为面向对象的实现太绕，看不懂。</span></p>\r\n<p><span style="font-size:14px;">　　这些PHPer在遇到需要高性能，处理高并发，大量数据的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">项目</span></span></strong></u></a><span style="font-size:14px;">或业务逻辑比较复杂(系统需要解决多领域业务的问题)时，缺少思路。不能分析问题的本质，</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">技术</span></span></strong></u></a><span style="font-size:14px;">判断力比较差，对于问题较快能找出临时的解决办法，但常常在不断临时性的解决办法中，系统和自己一步步走向崩溃。那怎么提高自己呢?怎么可以挑战难度更高的系统?</span></p>\r\n<p><span style="font-size:14px;">　　更高的挑战在那里?</span></p>\r\n<p><span style="font-size:14px;">　　结合我自己的经验，我列出一些具体挑战，让大家先有个感性的认识。</span></p>\r\n<p><span style="font-size:14px;">　　高性能系统的挑战在那里?</span></p>\r\n<p><span style="font-size:14px;">　　◆如何选择Web服务器?要不要使用fast-cgi 模式;</span></p>\r\n<p><span style="font-size:14px;">　　◆要不要使用反向代理服务?选择全内存缓存还是硬盘缓存?</span></p>\r\n<p><span style="font-size:14px;">　　◆是否需要负载均衡?是基于应用层，还是网络层? 如何保证高可靠性?</span></p>\r\n<p><span style="font-size:14px;">　　◆你的PHP代码性能如何，使用优化工具后怎么样? 性能瓶颈在那里? 是否需要写成C的扩展?</span></p>\r\n<p><span style="font-size:14px;">　　◆用户访问有什么特点,是读多还是写多?是否需要读写分离?</span></p>\r\n<p><span style="font-size:14px;">　　◆数据如何存储?写入速度和读出速度如何? 数据增涨访问速读如何变化?</span></p>\r\n<p><span style="font-size:14px;">　　◆如何使用缓存? 怎么样考虑失效?数据的一致性怎么保证?</span></p>\r\n<p><span style="font-size:14px;">　　高复杂性系统的挑战在那里?</span></p>\r\n<p><span style="font-size:14px;">　　◆能否识别业务所对应的领域?是一个还是多个?</span></p>\r\n<p><span style="font-size:14px;">　　◆能否合理对业务进行抽象，在业务规则变化能以很小的代价实现?</span></p>\r\n<p><span style="font-size:14px;">　　◆数据的一致性、安全性可否保证?</span></p>\r\n<p><span style="font-size:14px;">　　◆是否撑握了面向对象的分析和设计的方法</span></p>\r\n<p><span style="font-size:14px;">　　这里所列出的问题，你都能肯定的回答，说明在技术上你基本已经可能成为架构师了。如何你还不能回答，你需要在以下几个方向加强。</span></p>\r\n<p><span style="font-size:14px;">　　怎么样提高，突破瓶颈</span></p>\r\n<p><span style="font-size:14px;">　　如何你还不能回答，你需要在以下几个方向加强：</span></p>\r\n<p><span style="font-size:14px;">　　◆分析你所使用的技术其原理和背后运行的机制，这样可以提高你的技术判断力，提高你技术方案选择的正确性;</span></p>\r\n<p><span style="font-size:14px;">　　◆学习大学期间重要的知识, 操作系统原理，数据结构和算法。知道你以前学习都是为了考试，但现在你需要为自己学习，让自己知其所以然;</span></p>\r\n<p><span style="font-size:14px;">　　◆重新开始学习C语言，虽然你在大学已经学过。这不仅是因为你可能需要写PHP扩展，而且还因为，在做C的应用中，有一个时刻关心性能、内存控制、变量生命周期、数据结构和算法的环境;</span></p>\r\n<p><span style="font-size:14px;">　　◆学习面向对象的分析与设计，它是解决复杂问题的有效的方法。学习抽象，它是解决复杂问题的唯一之道。</span></p>\r\n<p></p>\r\n</div>', 0),
(108, '<span style="font-size:14px;">招聘一个程序员，唯一对你有意义的是他能写出好程序的能力。 很少人像这样去招人，他们更喜欢去挑剔程序员的个人癖好和性格缺点。</span> <p><span style="font-size:14px;">　　我一说出这样的话，人们大量的评论就会批评道：你错了，错了，完全的错了。 好的程序员需要具备沟通交流的技能，他们要有跟他人一起合作的能力。团队里不止你一个人! 事实上，人们会说：最好折中一下对</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">技术</span></span></strong></u></a><span style="font-size:14px;">上的要求，这样可以找出更能适应企业文化的人。</span></p>\r\n<p><span style="font-size:14px;">　　你不如这样说更合适：找不到那种技术上又好、又能适应企业文化的人，我就等着，一直找到为止。</span></p>\r\n<p><span style="font-size:14px;">　　我们很少有敢这样奢侈的公司，也许</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">Google</span></span></strong></u></a><span style="font-size:14px;">可以这样，就是Google这样的公司也一直处于一个“对招聘程序员感到绝望”的状态中。如果你决定去等，我可以预见到每招到一个程序员你都要等待一个漫长的时期，同时业务会因为缺乏程序员而崩溃，火烧眉毛。</span></p>\r\n<p><span style="font-size:14px;">　　那么，那种更好呢?</span></p>\r\n<p><span style="font-size:14px;">　　让我们来考虑要那些中等或下等的程序员，他们和蔼可亲，而且努力工作。 他们的程序写的不好 – 他们的程序根本不是按照他们想的那样工作，即使他们做到了，那也是烂程序，很难去维护。他们在基本的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">功能</span></span></strong></u></a><span style="font-size:14px;">上挣扎探索，更不解决不了复杂的问题。但是他们却 能跟上团队，</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">项目</span></span></strong></u></a><span style="font-size:14px;">进度每天点都在更新，可以看见他们每天都在座位上奋斗。一切都很好，你的经理会很高兴，因为整个团队看起来在平稳的向前推进。</span></p>\r\n<p><span style="font-size:14px;">　　当发布日期不得不往后推迟，产品Bug多的没法使用，人们会哀叹说</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">软件</span></span></strong></u></a><span style="font-size:14px;">本来就是很难做，于是投入更多的和蔼可亲的平庸的程序员去修复问题。 事情的结果我想大家都知道。</span></p>\r\n<p><span style="font-size:14px;">　　对于程序员，没有太多的事情可以用和蔼来解决。一个友善的平庸的程序员可以成为业务分析师，技术性的销售员，或着其它的能够利用他的和蔼和他的一点点的技术知识来工作的职位。这样的工作他们会很满意，但这都是在茶话会工作上的，可不是去找出有效的办法做出好的软件。</span></p>\r\n<p><span style="font-size:14px;">　　另外一个选择是，找个程序员，他能做出好的程序，但也许不善于和他人相处，或者老是迟到，或其他。他能</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">开发</span></span></strong></u></a><span style="font-size:14px;">出按照</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">设计</span></span></strong></u></a><span style="font-size:14px;">运转的软件，他能把复杂的问题抽象成一个简单的问题。软件好使，可维护，你随时可以按要求修改。</span></p>\r\n<p><span style="font-size:14px;">　　这个世界很真实，有太多的方式都会让我们把事情搞砸，但至少我们是有机会的。人可以给人留下不错的印象。团队可以建设的不错。员工在长时间的为你工作，不错。大量的业务没有按照预定的设计工作，但还是成功了，不错。但是绝对不会有伟大的软件会在平庸的程序员手下实现。.</span></p>\r\n<p><span style="font-size:14px;">　　证据就在代码里。 就这些。</span></p>', 0),
(109, '<div id="OSChina_News_11960" class="NewsContent TextContent">\r\n<p><span style="font-size:14px;">Nanoserv 是 </span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">PHP</span></span></strong></u></a><span style="font-size:14px;"> 5.1 以及以上版本下的一个 socket 守护进程的工具包。它是面向对象的，支持 TCP with SSL/TLS 和 UDP 连接，多路传输和分叉听众，处理原料连接，线路输入的HTTP，SMTP，XML - RPC的，透明的跨系统日志与叉处理过程中的通信，等等。</span></p>\r\n<p><span style="font-size:14px;">新版本主要改进内容：</span></p>\r\n<p><span style="font-size:14px;">1. 支持 Unix sockets</span><br />\r\n<span style="font-size:14px;">2. 写缓冲优化</span><br />\r\n<span style="font-size:14px;">3. telnet 协议处理</span><br />\r\n<span style="font-size:14px;">4. 基于 JSON_RPC 的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">服务器</span></span></strong></u></a><span style="font-size:14px;">类</span><br />\r\n<span style="font-size:14px;">5. 更好的处理 TLS/SSL 加密错误</span><br />\r\n<span style="font-size:14px;">6. 修复不少的bug和错误</span></p>\r\n<p><a href="http://www.oschina.net/action/project/go?id=11353&amp;p=download"><span style="color:#617b85;"><span style="font-size:14px;">下载 nanoserv 2.1.0</span></span></a></p>\r\n</div>', 0),
(110, '<div id="article_body">\r\n<div id="article" class="middle_font">\r\n<p><span style="font-size:14px;">Yii是一个高性能的PHP5的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">web</span></span></strong></u></a><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">应用</span></span></strong></u></a><span style="font-size:14px;">程序</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">开发</span></span></strong></u></a><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">框架</span></span></strong></u></a><span style="font-size:14px;">。通过一个简单的命令行</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">工具</span></span></strong></u></a><span style="font-size:14px;"> yiic 可以快速创建一个web应用程序的代码框架，开发者可以在生成的代码框架基础上添加业务逻辑，以快速完成应用程序的开发。</span></p>\r\n<p><span style="font-size:14px;">该版本有超过60项的bug修复和改进，例如支持自动的action参数绑定，新增 CSqlDataProvider 和 CArrayDataProvider ，新增 CurlManager::addRules 以支持动态的 URL 路由规则；重构了 CActiveRecord，使得 CActiveRecord::with() 方法始终返回 AR 对象本身。</span></p>\r\n</div>\r\n</div>', 0),
(111, '<div id="article" class="middle_font">\r\n<p><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp; 随着</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">Zend</span></span></strong></u></a><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">服务器</span></span></strong></u></a><span style="font-size:14px;">群集</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">管理</span></span></strong></u></a><span style="font-size:14px;">器的发布，商业</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">PHP</span></span></strong></u></a><span style="font-size:14px;">的供应商的目的在于形成多个大规模部署管理的围栏。</span></p>\r\n<p><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp; Zend公司希望减少扩大PHP部署的痛苦。商业PHP的供应商已经发布了PHP的Zend服务器群集管理器，一种用于管理多种PHP服务器的方法。</span></p>\r\n<p><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp; Zend公司的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">CEO</span></span></strong></u></a><span style="font-size:14px;">表示，这项新服务的目的主要是为促进“高可用性，可扩展性和大型PHP部署的管理”群集管理器比</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">数据库</span></span></strong></u></a><span style="font-size:14px;">更关注</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">Web</span></span></strong></u></a><span style="font-size:14px;">层的东西—— PHP，</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">Linux</span></span></strong></u></a><span style="font-size:14px;">和</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">Apache</span></span></strong></u></a><span style="font-size:14px;">。在Dveloper.com有更详细的介绍。</span></p>\r\n<p><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp; 商业PHP厂商Zend公司的目标在于提高PHP的大规模部署和在这周发布的Zend服务器群集管理器，一个用于管理多个PHP服务器的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">系统</span></span></strong></u></a><span style="font-size:14px;">。</span></p>\r\n<p><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Zend公司在2009年发布了Zend服务器并自此后扩展，这为群集管理器奠定了基础。Zend服务器是一个捆绑PHP的中间件服务器，它既提供PHP语言也提供数据库连接的Apache Web服务器。</span><br />\r\n</p>\r\n</div>', 0),
(112, '<span style="font-size:14px;">　在了解过世界最大的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">PHP</span></span></strong></u></a><span style="font-size:14px;">站点，Facebook的后台</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">技术</span></span></strong></u></a><span style="font-size:14px;">后，今天我们来了解一个百万级PHP站点的网站</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">架构</span></span></strong></u></a><span style="font-size:14px;">：Poppen.de。Poppen.de是德国的一个社交网站，相对Facebook、Flickr来说是一个很小的网站，但它有一个很好的架构，融合了很多技术，如 Nigix、</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">MySql</span></span></strong></u></a><span style="font-size:14px;">、CouchDB、Erlang、Memcached、RabbitMQ、PHP、Graphite、Red5以及Tsung。</span> <p><span style="font-size:14px;">　　Poppen.de目前有200万注册</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">用户</span></span></strong></u></a><span style="font-size:14px;">数、2万并发用户数、每天20万条私有消息、每天25万登录次数。而</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">项目</span></span></strong></u></a><span style="font-size:14px;">团队有11个</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">开发</span></span></strong></u></a><span style="font-size:14px;">人员，两个</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">设计</span></span></strong></u></a><span style="font-size:14px;">，两个</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">系统</span></span></strong></u></a><span style="font-size:14px;">管理员。该站点的商业</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">模式</span></span></strong></u></a><span style="font-size:14px;">采用免费增值模式，用户可以使用搜索用户、给好友发送消息、上载图片和视频等</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">功能</span></span></strong></u></a><span style="font-size:14px;">。</span></p>\r\n<p><span style="font-size:14px;">　　如果用户想享受不受限制发送消息和上载图片，那么就得根据需要支付不同类型的会员服务，视频聊天及网站其他服务也采用同样的策略。</span></p>\r\n<p><span style="font-size:14px;">　　Nginx</span></p>\r\n<p><span style="font-size:14px;">　　Poppen.de 所有的服务都是基于Nginx服务上的。前端有两台Nginx服务器在高峰期提供每分钟15万次请求的负载，每个机器已经有四年寿命，并且只有一个CPU 和3GB RAM。Poppen.de拥有三台独立的图像</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">服务器</span></span></strong></u></a><span style="font-size:14px;">，由三台Nginx服务器为*.bilder.poppen.de提供每分钟8万次请求服务。</span></p>\r\n<p><span style="font-size:14px;">　　Nginx 架构中一个很酷的设计就是有很多请求是由Memcached处理的，因此请求从缓存中获取内容而不需要直接访问PHP机器。比如，用户信息页(user profile)是网站需要密集处理的内容，如果把用户信息页全部缓存到Memcached上，那么请求直接从Memcached上获取内容。 Poppen.de的Memcached每分钟可以处理8000次请求。</span></p>\r\n<p><span style="font-size:14px;">　　架构中有三个Nginx图像服务器提供本地图像缓存，用户上载图 像到一个中央文件服务器。当向这三个Nginx之一中请求图像时，如果服务器本地中没有存在该图像，则从中央文件服务器下载到该服务器上作缓存并提供服 务。这种负载均衡的分布式图像服务器架构设计可以减轻主要存储设备的负载。</span></p>\r\n<p><span style="font-size:14px;">　　PHP-FPM</span></p>\r\n<p><span style="font-size:14px;">　　该网站运行在PHP- FPM上。共有28台双CPU、6GB内存的PHP机器，每个机器上运行100个PHP-FPM的工作线程。使用启用了APC的PHP5.3.x。 PHP5.3可以降低CPU和内存使用率的30%以上。</span></p>\r\n<p><span style="font-size:14px;">　　程序</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">代码</span></span></strong></u></a><span style="font-size:14px;">是基于Symfony1.2框架之上开发的。一是可以使用外部资源，二是 能够提高项目开发进度，同时在一个著名的</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">框架</span></span></strong></u></a><span style="font-size:14px;">上可以让新开发人员更容易加入到团队中来。虽然没有任何事情都是十全十美的，但可以从Symfony框架中得 到很多好处，让团队可以更多的精力放在Poppen.de的业务开发上去。</span></p>\r\n<p><span style="font-size:14px;">　　网站性能优化使用XHProf，这是Facebook开源出来的一个类库。这个框架非常容易个性化和配置，能够可以缓存大部分高代价的服务器计算。</span></p>\r\n<p><span style="font-size:14px;">　　MySQL</span></p>\r\n<p><span style="font-size:14px;">　　MySQL是网站主要的RDBMS。网站又几个MySql服务器：一台4CPU、32GB的服务器存储用户相关信息，如基本信息、照片描述信息等。这台机器已经使用了4 年，下一步计划会使用共享集群来替换它。目前仍基于这个系统上进行设计，以简化</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">数据</span></span></strong></u></a><span style="font-size:14px;">访问代码。根据用户ID进行数据分区，因为网站中大部分信息都是以用户 为中心的，如照片、视频、消息等。</span></p>\r\n<p><span style="font-size:14px;">　　有三台服务器按主-从-从配置架构提供用户论坛服务。一台从服务器负责网站自定义消息存储，到现在有 2.5亿条消息。另外四台机器为主-从配置关系。另外由4台机器配置成NDB族群专门服务于密集型写操作数据，如用户访问统计信息。</span></p>\r\n<p><span style="font-size:14px;">　　数据表设计尽量避免关联操作，尽可能缓存最多的数据。当然，</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">数据库</span></span></strong></u></a><span style="font-size:14px;">的结构化规范已经完全被破坏掉了。因此，为了更容易搜索，数据库设计创建了数据挖掘表。大部分表是MyISAM型表，可以提供快速查找。现在的问题是越来越多的表已经全表锁住了。Poppen.de正考虑往XtraDB存储引擎上迁移。</span></p>\r\n<p><span style="font-size:14px;">　　Memcached</span></p>\r\n<p><span style="font-size:14px;">　　网站架构中Memcached应用相当多，超过45GB的高速缓存和51个节点。缓存了Session会话、视图缓存以及</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">函数</span></span></strong></u></a><span style="font-size:14px;">执行缓存等。架构中有一个系统 当记录被修改时可以自动地把数据更新到缓存中去。未来改善缓存更新的可能方案是使用新的Redis Hash API或者MongoDB。</span></p>\r\n<p><span style="font-size:14px;">　　RabbitMQ</span></p>\r\n<p><span style="font-size:14px;">　　在 2009年中开始在架构中使用RabbitMQ。这是一个很好的消息解决方案，便于部署和集中到这个架构中去，在LVS后运行了两台RabbitMQ服务 器。在上个月，已经把更多的东西集成到该队列中，意味着同一时刻有28台PHP服务器每天要处理50万次请求。发送日志、邮件通知、系统消息、图像上载等 更多的东西到这个队列中。</span></p>\r\n<p><span style="font-size:14px;">　　应用PHP-FPM中的fastcgi_finish_request()函数集成队列消息，可以把消息异步发 送到队列中。当系统需要给用户发送</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">HTML</span></span></strong></u></a><span style="font-size:14px;">或JSON格式响应时，就调用这个函数，这样用户就没有必要等到PHP脚本清理。</span></p>\r\n<p><span style="font-size:14px;">　　这个系统可以改善架构资源管理。例如，在高峰期服务每分钟可以处理1000次登录请求。这表示有1000并发更新用户表保存用户的登录时间。由于使用了队列机制，可以 按相反的顺序来运行这些查询。如果需要提高处理速度，只需要增加更多的队列处理者即可，甚至可以增加更多的服务器到这集群中去，而不需要修改任何配置和部 署新节点。</span></p>\r\n<p><span style="font-size:14px;">　　CouchDB</span></p>\r\n<p><span style="font-size:14px;">　　日志存储CouchDB运行在一台机器上。在这台机器上可以根据模块/行为进行日志查询 /分组，或者根据错误类型等等。这对定位问题非常有用。在使用日志聚合服务CouchDB之前，不得不逐台登录到PHP服务器上设法日志分析定位问题，这 是非常麻烦的。而现在把所有的日志集中到队列中保存到CouchDB中，可以集中进行问题检查和分析。</span></p>\r\n<p><span style="font-size:14px;">　　Graphite</span></p>\r\n<p><span style="font-size:14px;">　　网站使用Graphite采集网站实时信息并统计。从请求每个模块/行为到Memcached的命中和未命中、RabbitMQ状态监控以及Unix负载等等。Graphite服务平均每分钟有4800次更新操作。实践已经证实要监测网站发发生什么是非常有用的，它的简单文本协议和绘图功能可以方便地即插即 用的方式用于任何需要监控的系统上。</span></p>\r\n<p><span style="font-size:14px;">　　一件很酷的事情是使用Graphite同时监控了网站的两个版本。一月份部署了Symfony框架新 版本，以前代码作为一个备份部署。这就意味着网站可能会面临性能问题。因此可以使用Graphite来对两个版本在线进行对比。</span></p>\r\n<p><span style="font-size:14px;">　　发现新版本上的Unix负载表较高，于是使用XHProf对两个版本进行性能分析，找出问题所在。</span></p>\r\n<p><span style="font-size:14px;">　　Red5</span></p>\r\n<p><span style="font-size:14px;">　　网站为用户也提供了两种类型的视频服务，一种是用户自己上载的视频，另外一种是视频聊天，用户视频互动和分享。到2009年年中，每月为用户提供17TB的流量服务。</span></p>\r\n<p><span style="font-size:14px;">　　Tsung</span></p>\r\n<p><span style="font-size:14px;">　　Tsung 是一个Erlang编写的分布式基准分析</span><a href="javascript:;" target="_self"><u><strong><span style="color:#617b85;"><span style="font-size:14px;">工具</span></span></strong></u></a><span style="font-size:14px;">。在Poppen.de网站中主要用于HTTP基准分析、MySQL与其他存储系统(XtraDB)的对比分 析。用一个系统记录了主要的MySQL服务器的流量，再转换成Tsung的基准会话。然后对该流量进行回放，由Tsung产生数以千计的并发用户访问实验 室的服务器。这样就可以在实验环境中与真实场景非常接近。</span></p>', 0),
(113, '<p align="center"><embed src="http://player.youku.com/player.php/sid/XMTk4MzA0NTEy/v.swf" type="application/x-shockwave-flash" width="550" height="400" quality="high" /><br />\r\n<br />\r\n<br />\r\n</p>\r\n<div id="content_302854541" class="text" name="content_302854541">\r\n<p id="content_4e0037cb09574b7e7f000000">经典人家就这样搞定。那些玩这个的小子们好好看看，练吧。<br />\r\n</p>\r\n</div>\r\n<p align="center"><br />\r\n&nbsp;</p>', 0),
(114, '<p align="center"><embed src="http://player.youku.com/player.php/sid/XMjczNDE0Mzg0/v.swf" quality="high" width="480" height="400" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" /><br />\r\n<br />\r\n<br />\r\n<br />\r\n不谈饶舌水平。 光这个词就很不错。 话说这个女人本身肯定长的很不错。<br />\r\n<br />\r\n</p>', 0),
(115, '<p align="center"><embed src="http://player.youku.com/player.php/sid/XMjc3MzM4NTg0/v.swf" quality="high" width="480" height="400" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" /><br />\r\n<br />\r\n</p>\r\n<div id="content_302933867" class="text" name="content_302933867">\r\n<p id="content_4e00ddff2ce2c0a226000000">这些都只是娱乐，娱乐而已，大家看看，轻松一下，很好啊。他们节目做的确实有特点啊，不然收视不会这么高的，事实是不能否认的啊，好不好，那就褒贬不一了。反正我是挺喜欢看的，因为真的挺搞笑的。<br />\r\n</p>\r\n</div>\r\n<p align="center"><br />\r\n&nbsp;</p>', 0);
INSERT INTO `articles_content` (`mid`, `message`, `user`) VALUES
(116, '<p align="center"><embed src="http://player.youku.com/player.php/sid/XMjc0MzM1OTgw/v.swf" quality="high" width="480" height="400" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" /><br />\r\n<br />\r\n<br />\r\n<br />\r\n</p>\r\n<div class="bar"><a id="comment_name_302963337" href="http://u.youku.com/user_show/id_UMjg3NjA3ODcy.html" charset="400-4" name="coment_name_302963337" target="_blank"><span style="color:#014ccc;">【幽灵骑士】</span></a>&nbsp;&nbsp;发表于4分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302963337" class="text" name="content_302963337">\r\n<p id="content_4e016fc24caea6ee35000002">very good！<br />\r\n</p>\r\n</div>\r\n<div style="display:block;" id="reply_302963337" class="handle"><a><span style="color:#014ccc;">回复</span></a></div>\r\n</div>\r\n<!--follow end--></div>\r\n<div id="comment302961865" class="comment">\r\n<div class="bar"><a id="comment_name_302961865" href="http://u.youku.com/user_show/id_UMjUwMzE1NTY0.html" charset="400-4" name="coment_name_302961865" target="_blank"><span style="color:#014ccc;">15221368005</span></a>&nbsp;&nbsp;发表于15分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302961865" class="text" name="content_302961865">\r\n<p id="content_4e016d32eb7f7f2b29000002">我喜欢裸婚 这样的话就可以和他一起奋斗 我可是90后 哦<br />\r\n</p>\r\n</div>\r\n<div style="display:block;" id="reply_302961865" class="handle"><a><span style="color:#014ccc;">回复</span></a></div>\r\n</div>\r\n<!--follow end--></div>\r\n</div>\r\n<div id="comment302961547" class="comment">\r\n<div class="bar"><a id="comment_name_302961547" href="http://u.youku.com/user_show/id_UMjU4MTM0MjU2.html" charset="400-4" name="coment_name_302961547" target="_blank"><span style="color:#014ccc;">77415044</span></a>&nbsp;&nbsp;发表于18分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302961547" class="text" name="content_302961547">\r\n<p id="content_4e016c9a67c6e20439000000">娃娃，你还小，不懂<br />\r\n</p>\r\n</div>\r\n<div style="display:block;" id="reply_302961547" class="handle"><a><span style="color:#014ccc;">回复</span></a></div>\r\n</div>\r\n<!--follow end--></div>\r\n</div>\r\n<div id="comment302961116" class="comment">\r\n<div class="bar"><a id="comment_name_302961116" href="http://u.youku.com/user_show/id_UMzU2MDExMTIw.html" charset="400-4" name="coment_name_302961116" target="_blank"><span style="color:#014ccc;">number执坳</span></a>&nbsp;&nbsp;发表于21分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302961116" class="text" name="content_302961116">\r\n<p id="content_4e016bc68a5158b236000000">好看吗<br />\r\n</p>\r\n</div>\r\n<div style="display:block;" id="reply_302961116" class="handle"><a><span style="color:#014ccc;">回复</span></a></div>\r\n</div>\r\n<!--follow end--></div>\r\n</div>\r\n<div id="comment302960980" class="comment">\r\n<div class="bar"><a id="comment_name_302960980" href="http://u.youku.com/user_show/id_UMjE1ODI2ODg4.html" charset="400-4" name="coment_name_302960980" target="_blank"><span style="color:#014ccc;">王庄主</span></a> <a href="http://c.youku.com/connect/" target="_blank"><img src="http://static.youku.com/v1.0.0673/partner/img/sns_icon.gif" /></a>&nbsp;&nbsp;发表于22分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302960980" class="text" name="content_302960980">\r\n<p id="content_4e016b85eb7f7f9028000000"><img alt="搞笑" src="http://static.youku.com/v1.0.0673/index/img/smiley/Qoo12.gif" />//<a href="http://u.youku.com/%E6%8E%92%E9%99%A4%E5%BC%82%E5%B7%B1" target="_blank"><span style="color:#014ccc;">@排除异己</span></a>:我饿了....<br />\r\n</p>\r\n</div>\r\n<div style="display:block;" id="reply_302960980" class="handle"><a><span style="color:#014ccc;">回复</span></a></div>\r\n</div>\r\n<!--follow end--></div>\r\n</div>\r\n<div id="comment302960342" class="comment">\r\n<div class="bar"><a id="comment_name_302960342" href="http://u.youku.com/user_show/id_UMzAyMzYwMDEy.html" charset="400-4" name="coment_name_302960342" target="_blank"><span style="color:#014ccc;">罗林qaz</span></a>&nbsp;&nbsp;发表于28分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302960342" class="text" name="content_302960342">\r\n<p id="content_4e016a35ee3e0fc237000000"><img alt="赞" src="http://static.youku.com/v1.0.0673/index/img/smiley/Yo17.gif" /><img alt="赞" src="http://static.youku.com/v1.0.0673/index/img/smiley/Yo17.gif" /><img alt="赞" src="http://static.youku.com/v1.0.0673/index/img/smiley/Yo17.gif" /><img alt="赞" src="http://static.youku.com/v1.0.0673/index/img/smiley/Yo17.gif" /><img alt="赞" src="http://static.youku.com/v1.0.0673/index/img/smiley/Yo17.gif" /><img alt="赞" src="http://static.youku.com/v1.0.0673/index/img/smiley/Yo17.gif" /><br />\r\n</p>\r\n</div>\r\n<div style="display:block;" id="reply_302960342" class="handle"><a><span style="color:#014ccc;">回复</span></a></div>\r\n</div>\r\n<!--follow end--></div>\r\n</div>\r\n<div id="comment302959002" class="comment">\r\n<div class="bar"><a id="comment_name_302959002" href="http://u.youku.com/user_show/id_UOTAwNTA4Mjg=.html" charset="400-4" name="coment_name_302959002" target="_blank"><span style="color:#014ccc;">因O2JAM死亡</span></a>&nbsp;&nbsp;发表于39分钟前 </div>\r\n<div class="con">\r\n<div class="replyNew">\r\n<div id="content_302959002" class="text" name="content_302959002">\r\n<p id="content_4e01678deb7f7faf27000000">没有什么危机？你说的话真可笑，看来你还是一个不脑袋不成熟的00后小孩子，对现代的中国社会一点都不了解//<a href="http://u.youku.com/DarkthroneSeven" target="_blank"><span style="color:#014ccc;">@DarkthroneSeven</span></a>:其实80后结婚压根没什么危机~我结婚了 我觉得一向挺好的~ 现在中国的电影很多都是一种炒作和不良的引导~ 吃饱了撑的 没事找事啊<br />\r\n</p>\r\n<br />\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 0),
(117, '<p align="center"><embed src="http://player.youku.com/player.php/sid/XMjcwNDYzNDIw/v.swf" quality="high" width="480" height="400" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" /><br />\r\n<br />\r\n<br />\r\n<a name="anchor"></a>&nbsp;</p>\r\n<div class="box nBox">\r\n<div class="head">\r\n<div class="caption">\r\n<h3 class="title"><span style="font-size:14px;">影片简介</span></h3>\r\n</div>\r\n<div class="extend"></div>\r\n</div>\r\n<!-- head --><div class="body">\r\n<div class="showInfo">\r\n<h3 class="title"><span style="font-size:small;"><span style="font-size:14px;">《建党伟业》之《践行者》</span></span></h3>\r\n<!-- .title --><span class="rating"><span title="有5,984人顶过&#10;有2,515人踩过"><strong><span style="color:#ff9d1e;font-size:large;">6.2</span></strong></span></span> <ul class="baseinfo">\r\n<li><a href="http://www.youku.com/v_olist/c_96_a_%E5%A4%A7%E9%99%86.html" charset="412-3-5-1" target="_blank"><span style="color:#014ccc;">大陆</span></a> <span class="break"><span style="color:#909090;">/</span></span> <a href="http://www.youku.com/v_olist/c_96_g_%E7%BA%AA%E5%BD%95%E7%89%87.html" charset="412-3-6-1"><span style="color:#014ccc;">纪录片</span></a> </li>\r\n<li><span style="display:none;" id="infoShort" class="short">中影宏篇巨制《建党伟业》官方纪录片《践行者》，由国内专业的团队精心策划、拍摄并剪辑完成。纪录片全程同步记录了电影整个拍摄过程，导演及拍摄团队深入剧组辗转北京、河北、天津、上海、横店、长沙、长春、俄罗斯等八个影片外景全程跟踪拍摄，用真实的镜头记录了影片拍摄过程中台前幕...</span> <span id="infoLong">中影宏篇巨制《建党伟业》官方纪录片《践行者》，由国内专业的团队精心策划、拍摄并剪辑完成。纪录片全程同步记录了电影整个拍摄过程，导演及拍摄团队深入剧组辗转北京、河北、天津、上海、横店、长沙、长春、俄罗斯等八个影片外景全程跟踪拍摄，用真实的镜头记录了影片拍摄过程中台前幕后所有的点点滴滴。影片记录了韩三平、黄建新及幕后团队艰苦奋战电影前线的珍贵资料；记录了国内大导演陈凯歌、姜文、陈可辛、尔冬升，记录了周润发、赵本山、刘烨、陈坤等百位演员试装、拍摄等在片场发生的鲜为人知的故事…….那些有趣的、感动的、值得纪念的画面及故事将在纪录片中一一呈现。</span><br />\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 0),
(118, '<p align="center"><embed src="http://player.youku.com/player.php/sid/XMjYyNjY4ODQ4/v.swf" quality="high" width="480" height="400" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" /><br />\r\n<br />\r\n<br />\r\n</p>\r\n<div class="head">\r\n<div class="caption">\r\n<h3 class="title"><span style="font-size:14px;">影片简介</span></h3>\r\n</div>\r\n<div class="extend"></div>\r\n</div>\r\n<!-- head --><div class="body">\r\n<div class="showInfo">\r\n<h3 class="title"><span style="font-size:small;"><span style="font-size:14px;">单身男女</span></span><span class="subtitle"><span style="color:#909090;"><span style="font-size:14px;">Don''t Go Breaking My Heart</span></span></span></h3>\r\n<!-- .title --><span class="rating"><span title="有70,072人顶过&#10;有6,777人踩过"><strong><span style="color:#ff9d1e;font-size:large;">8.6</span></strong></span></span> <ul class="baseinfo">\r\n<li><a href="http://www.youku.com/v_olist/c_96_a_%E9%A6%99%E6%B8%AF.html" charset="412-3-5-1" target="_blank"><span style="color:#014ccc;">香港</span></a> <span class="break"><span style="color:#909090;">/</span></span> <a href="http://www.youku.com/v_olist/c_96_g_%E7%88%B1%E6%83%85.html" charset="412-3-6-1"><span style="color:#014ccc;">爱情</span></a> </li>\r\n<li><span style="display:none;" id="infoShort" class="short">从内地来港任职投资分析员的程芷恩(高圆圆饰)，在香港的感情生活与事业也并不如意，前男友原是有妇之夫，市场又面临金融危机，工作时刻紧张，唯一安慰是对面商厦窗前一名叫张申然(古天乐饰)的经常向她为隔空打情骂俏，有时还会互相鼓励。芷恩有次在电车内，碰见了前男友与其怀孕妻子一起...</span> <span id="infoLong">从内地来港任职投资分析员的程芷恩(高圆圆饰)，在香港的感情生活与事业也并不如意，前男友原是有妇之夫，市场又面临金融危机，工作时刻紧张，唯一安慰是对面商厦窗前一名叫张申然(古天乐饰)的经常向她为隔空打情骂俏，有时还会互相鼓励。芷恩有次在电车内，碰见了前男友与其怀孕妻子一起，芷恩落荒而逃，差点儿在马路被车撞到，幸而，给一个打扮似乞丐的男生方启宏(吴彦祖饰)救了。芷恩为了感恩，把前男友的东西全部送予启宏来变买。原来，启宏是一名失意建筑师，而且经常卖醉，最后芷恩鼓励他戒酒，从头做起，还把一只角蛙留下来陪他。<br />\r\n　　天意弄人，芷恩本来决定与申然见面来一次真正约会，但申然却更跟了另一个美女走了。芷恩伤心得像失恋似的。亦因此忘记跟了跟启宏的另一个约定，留下启宏与角蛙在公园呆等。芷恩的感情事再次触礁。三年之后，申然竟成了芷恩的老板，芷恩极憎恨这眼中的「贱男」，但申然却想娶她为妻子，此时，启宏戒酒后成为了国家著名建筑师，又搬往芷恩办公室对面的大厦工作，两人重遇隔空再续前缘。事业有成的启宏对芷恩热烈追求，申然才惊觉要快马加鞭，凑成两男一女的三角关系。</span><br />\r\n</li>\r\n</ul>\r\n</div>\r\n</div>', 0),
(119, '<p class="img_wrapper" align="center"><img title="雅虎CEO卡罗尔·巴茨(Carol Bartz)" alt="雅虎CEO卡罗尔·巴茨(Carol Bartz)" src="http://i3.sinaimg.cn/IT/2011/0622/U5619P2DT20110622090954.jpg" /></p>\r\n<div class="img_wrapper" align="center"><span style="font-size:14px;" class="img_descr">雅虎CEO卡罗尔·巴茨(Carol Bartz)</span></div>\r\n<p><span style="font-size:14px;">　　新浪科技讯 北京时间6月22日上午消息，据美国科技博客Techcrunch报道，雅虎正在考虑接替CEO卡罗尔·巴茨(Carol Bartz)的人选，潜在人选包括Fox Digital总裁乔·米勒(Jon Miller)和雅虎董事会成员大卫·肯尼(David Kenny)。</span></p>\r\n<p><span style="font-size:14px;">　　Techcrunch负责人麦克·阿灵顿(Mike Arrington)还询问了雅虎投资人埃里克·杰克森(Eric Jackson)。埃里克·杰克森表示，希望雅虎能对人事作出大的变动，希望软银孙正义或</span><a class="akey" href="http://weibo.com/aligroup" target="_blank"><span style="font-size:14px;">阿里巴巴</span></a><a class="akey" href="http://weibo.com/mayun" target="_blank"><span style="font-size:14px;">马云</span></a><span style="font-size:14px;">作为巴茨接班人。</span><br />\r\n<br />\r\n<span style="font-size:14px;">&nbsp;&nbsp;&nbsp; 股东们对雅虎董事会主席罗伊·博斯托克(Roy Bostock)不满，可能会推动开启弹劾机制；而最近卡罗尔·巴茨提拔了缺少商业经验的前研发总监Prabakhar Raghavan为首席战略官，更是引发了投资者的非议。(新铁)<br />\r\n<br />\r\n</span></p>\r\n<!-- publish_helper_end -->', 0),
(120, '<div id="text">\r\n<div id="articleContent">\r\n<p align="center"><a href="http://www.onlylady.com/ent/yingyuanmeiying-huayuyuanxian-223591-2.html"><img border="0" hspace="0" alt="点击查看下一页" align="baseline" src="http://img.article.onlylady.com/00/21/01/24/32db212ee848e26c359bf724.jpg" /></a></p>\r\n<p align="left"><span style="font-size:14px;">　　中文名： &nbsp;倩女幽魂</span><br />\r\n<span style="font-size:14px;">　　外文名： &nbsp;A Chinese </span><span class="newkeyword"><a title="Ghost" href="http://hzp.onlylady.com/ghost/" target="_blank"><span style="color:#eb3b90;"><span style="font-size:14px;">Ghost</span></span></a></span><span style="font-size:14px;"> Story</span><br />\r\n<span style="font-size:14px;">　　出品时间： &nbsp;2011年</span><br />\r\n<span style="font-size:14px;">　　出品公司： &nbsp;泰吉世纪（北京）文化传播公司</span><br />\r\n<span style="font-size:14px;">　　制片地区： &nbsp;中国香港</span><br />\r\n<span style="font-size:14px;">　　导演： &nbsp;叶伟信</span><br />\r\n<span style="font-size:14px;">&nbsp;</span><br />\r\n<span style="font-size:14px;">　　编剧： &nbsp;张炭</span><br />\r\n<span style="font-size:14px;">　　主演： &nbsp;古天乐 刘亦菲 余少群 惠英红 巩新亮 樊少皇</span><br />\r\n<span style="font-size:14px;">　　类型： &nbsp;魔幻，古装</span><br />\r\n<span style="font-size:14px;">　　上映时间： &nbsp;2011年4月19日（内地）</span><br />\r\n<span style="font-size:14px;">　　官方网址： &nbsp;</span><a href="http://qiannyh.ent.sina.com.cn/"><span style="color:#757575;"><span style="font-size:14px;">http://qiannyh.ent.sina.com.cn</span></span></a></p>\r\n<p align="left"><span style="font-size:14px;">　　</span><strong><span style="font-size:14px;">故事梗概</span><br />\r\n</strong><span style="font-size:14px;">　　很多年以前，他就矢志要成为一个优秀的猎妖师，他选择了黑山做他修行和圆梦之旅的起点。</span><br />\r\n<span style="font-size:14px;">　　那时，燕赤霞很年轻，黑山已经是一座很老的大山，那里有更老的精灵妖怪，它们过着原始的生活，粗糙简单却充满杀戮气息。他在黑山经历一场又一场的凶险恶斗，村名们都害怕进入黑山和这间“兰若寺”。</span><br />\r\n<span style="font-size:14px;">　　他的剑变得更可怕，他的力量也更强大，他自信可以战胜一切。直到那一天，他遇上了她和他们的悲痛。</span><br />\r\n<span style="font-size:14px;">　　很多年以后，黑山山下的所有河流突然干涸，人们猝然面对干旱的生存危机，为了拯救生计，大家决定组成开山队到黑山上游开垦水源。于是文明的人类要跟古老的灵怪展开碰撞，而一段浪漫的传奇就此诞生……</span></p>\r\n</div>\r\n</div>\r\n<div id="keywords"><span style="font-size:14px;">关键词： </span> <div><a title="倩女幽魂 刘亦菲版" href="http://so.onlylady.com/index.html?act=q&amp;aritcleType=all&amp;wd=%D9%BB%C5%AE%D3%C4%BB%EA+%C1%F5%D2%E0%B7%C6%B0%E6" target="_blank"><span style="font-size:14px;">倩女幽魂 刘亦菲版</span></a><span style="font-size:14px;"> </span><a title="倩女幽魂" href="http://so.onlylady.com/index.html?act=q&amp;aritcleType=all&amp;wd=%D9%BB%C5%AE%D3%C4%BB%EA" target="_blank"><span style="font-size:14px;">倩女幽魂</span></a><span style="font-size:14px;"> </span><a title="刘亦菲" href="http://so.onlylady.com/index.html?act=q&amp;aritcleType=all&amp;wd=%C1%F5%D2%E0%B7%C6" target="_blank"><span style="font-size:14px;">刘亦菲</span></a><span style="font-size:14px;"> </span></div>\r\n</div>', 0);

-- --------------------------------------------------------

--
-- 表的结构 `articles_image`
--

CREATE TABLE IF NOT EXISTS `articles_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `path` text NOT NULL,
  `show` int(11) NOT NULL,
  `dateline` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `articles_image`
--

INSERT INTO `articles_image` (`image_id`, `aid`, `classid`, `upid`, `path`, `show`, `dateline`, `user`) VALUES
(7, 82, 103, 91, 'http://photocdn.sohu.com/20110603/Img309195009.jpg', 3, '1308781423', 0),
(8, 83, 103, 91, 'http://www.ahltsj.com/CommImg/b/20100415/2000000016313.jpg', 3, '1308760901', 0),
(9, 84, 103, 91, 'http://image161.poco.cn/mypoco/myphoto/20100411/02/24294391201004110206021160190548407_056.jpg', 3, '1308761005', 0),
(10, 85, 103, 91, 'http://51love.zjg.js.cn/uploadfile/Fashion/uploadfile/201005/20100525042104673.jpg', 3, '1308760854', 0),
(11, 87, 103, 91, 'http://image211.poco.cn/mypoco/myphoto/20081015/4483122220081015223448082_640.jpg', 3, '1308760658', 0),
(12, 88, 103, 91, 'http://www.cnbim.net/uploads/allimg/100628/15122MH0-0.jpg', 3, '1308760607', 0),
(13, 89, 103, 91, 'http://www.web07.cn/uploads/Shejituku/c100804/12PXE13b0-460R.jpg', 3, '1308760464', 0),
(14, 0, 109, 108, 'http://img1.gtimg.com/tech/pics/hv1/151/195/796/51809776.jpg', 3, '1308737703', 0),
(15, 0, 109, 108, 'http://img1.gtimg.com/tech/pics/hv1/151/195/796/51809776.jpg', 3, '1308738199', 0),
(16, 97, 109, 108, 'http://img1.gtimg.com/tech/pics/hv1/151/195/796/51809776.jpg', 0, '1308738364', 0),
(17, 98, 109, 108, 'http://img1.gtimg.com/tech/pics/hv1/212/100/803/52240787.jpg', 3, '1308744501', 0),
(18, 116, 116, 108, 'http://static.youku.com/v1.0.0673/partner/img/sns_icon.gif', 3, '1308746231', 0),
(19, 119, 109, 108, 'http://i3.sinaimg.cn/IT/2011/0622/U5619P2DT20110622090954.jpg', 3, '1308746836', 0),
(20, 120, 103, 91, 'http://img.article.onlylady.com/00/21/01/24/32db212ee848e26c359bf724.jpg', 3, '1308781868', 0);

-- --------------------------------------------------------

--
-- 表的结构 `articles_reply`
--

CREATE TABLE IF NOT EXISTS `articles_reply` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `message` text NOT NULL,
  `dateline` tinytext NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `articles_reply`
--


-- --------------------------------------------------------

--
-- 表的结构 `articles_visitor`
--

CREATE TABLE IF NOT EXISTS `articles_visitor` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL COMMENT 'the  articles   id',
  `ip` tinytext COMMENT 'the  ip',
  `ownsite` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `origin` tinyint(4) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `articles_visitor`
--


-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `classid` int(11) NOT NULL AUTO_INCREMENT,
  `upid` int(11) NOT NULL,
  `c_order` int(11) NOT NULL,
  `classname` tinytext NOT NULL,
  `belong` tinytext NOT NULL,
  `show` tinyint(4) NOT NULL,
  `temp` text NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` tinyint(4) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=198 ;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`classid`, `upid`, `c_order`, `classname`, `belong`, `show`, `temp`, `dateline`, `user`) VALUES
(1, 0, 0, '档案', '2', 1, 'self_info.html', '1301072163', 0),
(2, 0, 1, '微博', '1', 1, 'emotion.html', '1301072279', 0),
(3, 0, 14, '留言', '8', 0, 'guestbook.html', '1301072528', 0),
(109, 108, 2, '网络资讯', '0', 1, '0', '1301254963', 0),
(108, 0, 3, '网络', '3', 1, 'lite.html', '1301254931', 0),
(101, 0, 0, '情侣', '9', 0, 'lover.html', '1301230061', 0),
(103, 91, 0, '心情小语', '0', 1, '0', '1301230463', 0),
(104, 91, 4, '情殇天地', '1', 1, '1', '1301230463', 0),
(123, 91, 1, '醉酒当歌', '0', 1, '0', '1301571972', 0),
(107, 91, 2, '风雨同舟', '0', 1, '0', '1301254799', 0),
(91, 0, 4, '日志', '3', 1, 'article.html', '1301223402', 0),
(110, 108, 3, '开发经验', '0', 1, '0', '1301254963', 0),
(116, 108, 4, '资源收集', '0', 1, '0', '1301435280', 0),
(117, 108, 1, '视听频道', '0', 1, '0', '1301435541', 0),
(197, 108, 0, '音乐的士', '0', 1, '0', '1308737056', 0),
(143, 0, 6, '收藏', '7', 1, 'collect.html', '1302737021', 0),
(144, 143, 0, '常用网址', '0', 1, '0', '1302737189', 0),
(145, 143, 2, '设计前沿', '0', 1, '0', '1302737189', 0),
(146, 143, 3, 'PHP开发', '0', 1, '0', '1302737189', 0),
(153, 143, 1, '推荐网址', '0', 1, '0', '1302740170', 0),
(155, 0, 9, '音乐', '5', 1, 'music.html', '1303079374', 0),
(156, 155, 1, '流行音乐', '0', 1, '0', '1303079400', 0),
(157, 155, 3, '情歌对唱', '0', 1, '0', '1303079400', 0),
(158, 155, 4, '欧美经典', '0', 1, '0', '1303079400', 0),
(159, 155, 2, '影视经典', '0', 1, '0', '1303129781', 0),
(166, 0, 11, '资源', '6', 1, 'resource.html', '1303262764', 0),
(167, 166, 0, '实用软件', '0', 1, '0', '1303262812', 0),
(168, 166, 1, '设计软件', '0', 1, '0', '1303262812', 0),
(169, 166, 2, '精巧软件', '0', 1, '0', '1303262812', 0),
(176, 0, 13, '摄影', '4', 0, 'photo.html', '1303747191', 0),
(175, 0, 12, '相册', '4', 1, 'photo.html', '1303747191', 0),
(177, 175, 0, '野外风景', '0', 1, '0', '1306889335', 0),
(178, 175, 1, '西递之行', '0', 1, '0', '1306889335', 0),
(179, 176, 0, '摄影1', '0', 1, '0', '1303747232', 0),
(180, 176, 0, '摄影2', '0', 1, '0', '1303747232', 0),
(181, 175, 2, '私人相册', '0', 1, '0', '1305462211', 0),
(188, 175, 3, '卡通图标', '4', 1, '0', '1305463039', 0),
(196, 91, 3, '文学小栈', '0', 1, '0', '1308736977', 0);

-- --------------------------------------------------------

--
-- 表的结构 `collects`
--

CREATE TABLE IF NOT EXISTS `collects` (
  `collect_id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `url` text NOT NULL,
  `target` tinytext NOT NULL,
  `description` text,
  `show` tinyint(4) NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` tinyint(4) NOT NULL,
  PRIMARY KEY (`collect_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `collects`
--

INSERT INTO `collects` (`collect_id`, `classid`, `upid`, `name`, `url`, `target`, `description`, `show`, `origin`, `dateline`, `user`) VALUES
(20, 144, 143, '天骄天下', 'http://www.sunsonworld.com', '_self', '天骄天下，学子之家！', 3, 1, '1305802067', 0),
(4, 144, 143, '中华天骄网', 'http://200810.any2000.com', '_self', '天骄网', 3, 1, '1308739349', 0),
(5, 144, 143, '网易', 'http://www.163.com', '_self', 'wangyi', 2, 1, '1302887505', 0),
(21, 144, 143, '凤 凰 网', 'http://www.ifeng.com/', '_self', '凤凰网', 3, 1, '1308739391', 0),
(17, 144, 143, '百度', 'http://baidu.com', '_self', 'dfgdfg', 3, 1, '1308256467', 0),
(8, 153, 143, '淘宝', 'http://www.taobao.com ', '_self', '购物网站', 2, 1, '1302887672', 0),
(14, 144, 143, '中国新闻网', 'http://www.chinanews.com.cn/', '_self', '好网址', 3, 1, '1308739413', 0),
(18, 144, 143, '腾讯', 'http://www.qq.com', '_self', '腾讯QQ', 3, 1, '1308739313', 0),
(29, 144, 143, '泡 泡 网', 'http://www.pcpop.com', '_self', '团购网', 3, 1, '1308739749', 0),
(26, 144, 143, '京东商城', 'http://click.union.360buy.com', '_self', '不错的网站', 3, 1, '1308739840', 0),
(27, 144, 143, '赶 集 网', 'http://www.ganji.com', '_self', '不错的网站', 3, 1, '1308739813', 0),
(28, 144, 143, 'NBA中文网', 'http://china.nba.com', '_self', '不错的网站', 3, 1, '1308739781', 0),
(30, 144, 143, '环 球 网', 'http://www.huanqiu.com', '_self', '不错哦', 3, 1, '1308739719', 0),
(31, 144, 143, '开 心 网', 'http://www.kaixin001.com', '_self', '也不错哦', 3, 1, '1308739691', 0),
(32, 144, 143, '百合婚恋网', 'http://www.baihe.com/?policy=1&Channel=2345&Code=140021', '_self', '不错的婚嫁网站', 3, 1, '1308738832', 0),
(33, 144, 143, '大众点评网', 'http://www.dianping.com/', '_self', '美食、生活、优惠券', 3, 1, '1308739243', 0),
(34, 144, 143, 'PPTV网络电视', 'http://www.pptv.com/', '_self', 'PPTV网络电视', 3, 1, '1308739273', 0),
(35, 144, 143, '阿里巴巴', 'http://www.1688.com/', '_self', '中国最大电子商务网站', 3, 1, '1308739470', 0),
(36, 144, 143, '新　浪', 'http://www.sina.com.cn', '_self', '不错的', 3, 1, '1308739904', 0),
(37, 153, 143, '搜　狐', 'http://www.sohu.com', '_self', '也不错', 3, 1, '1308739926', 0),
(38, 153, 143, '腾　讯', 'http://www.qq.com', '_self', '腾讯QQ', 3, 1, '1308739954', 0),
(39, 153, 143, '百度', 'http://www.baidu.com', '_self', '中国最大搜索引擎', 3, 1, '1308739983', 0),
(40, 153, 143, '谷歌', 'http://www.google.com.hk', '_self', '全球最大搜索引擎', 3, 1, '1308740004', 0),
(41, 145, 143, 'css+div教程', 'http://www.divcss5.com', '_self', 'css+div教程', 3, 1, '1308740045', 0),
(42, 145, 143, 'W3Cschool', 'http://www.w3cschool.cn', '_self', '很不错的帮助文档哦', 3, 1, '1308740139', 0),
(43, 145, 143, 'AI教程', 'http://www.fevte.com/plan/ai/', '_self', '学习AI的好地方', 3, 1, '1308740124', 0),
(44, 145, 143, '婚纱摄影后期处理', 'http://www.19lou.com/forum-138-thread-8377122-1-1.htm', '_self', '婚纱摄影后期处理', 3, 1, '1308740179', 0),
(45, 145, 143, '摄影欣赏', 'http://dp.pconline.com.cn/photo/2052392.html', '_self', '很不错的摄影哦', 3, 1, '1308740208', 0),
(46, 145, 143, '英文字体下载 ', 'http://www.photoshop.org.cn/fonts-s.htm', '_self', '很全面的字体', 3, 1, '1308740241', 0),
(47, 145, 143, '草根网', 'http://www.20ju.com/', '_self', '这个网站真的很不错的', 3, 1, '1308740278', 0),
(48, 146, 143, 'PHP自学网', 'http://www.phpzixue.cn', '_self', '自学PHP', 3, 1, '1308740312', 0),
(49, 146, 143, 'PHP 开源', 'http://www.php-open.com', '_self', 'PHP 开源源码，很多提供下载', 3, 1, '1308740341', 0),
(50, 146, 143, 'WEB开发笔记', 'http://www.chhua.com/', '_self', 'WEB开发常见问题，网站建设运营策划，SEO推广优化，PHP面向对象编程', 3, 1, '1308740372', 0),
(51, 146, 143, 'PHP100', 'http://www.php100.com', '_self', '很不错的视频教学', 3, 1, '1308740404', 0),
(52, 146, 143, 'PHP100论坛', 'http://bbs.php100.com', '_self', '有很多网友分享的资源哦', 3, 1, '1308740429', 0);

-- --------------------------------------------------------

--
-- 表的结构 `emotions`
--

CREATE TABLE IF NOT EXISTS `emotions` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `c_num` int(11) NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `ip` tinytext NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `emotions`
--

INSERT INTO `emotions` (`eid`, `message`, `c_num`, `origin`, `ip`, `dateline`, `user`) VALUES
(3, '[:biggrin]今天心情很开心，希望大家也一样开心。[:mad]', 0, 1, '127.0.0.1', '1303515177', 0),
(10, '[:biggrin]今天太好笑了，哈哈哈，我是忍不住想笑了，哈哈哈哈，大伙一起开心啊', 0, 1, '127.0.0.1', '1303683575', 0),
(4, '[:cry]生活的开始总是不会很开心的。[:funk]', 0, 1, '127.0.0.1', '1303518078', 0),
(13, '测试一下今天的心情，其实期待太多，总会失望的。', 0, 1, '127.0.0.1', '1305466845', 0),
(14, '中国，何时才是振兴的时候？', 0, 1, '127.0.0.1', '1305466917', 0),
(15, '[:lol]在测试一个分页的效果', 0, 1, '127.0.0.1', '1305466938', 0),
(6, '[:dizzy][:huffy]', 0, 1, '127.0.0.1', '1303522493', 0),
(7, '[:huffy][:lol]', 0, 1, '127.0.0.1', '1303522503', 0),
(8, '唉，今天也不知道要说些什么，感冒头痛了一天，没得休息、、、唉[:sweat]', 0, 1, '127.0.0.1', '1303681548', 0),
(9, '哈哈，不过现在感觉好多了，头不是很痛了，可以写程序了；感谢苍天大地啊！！！[:loveliness]', 0, 1, '127.0.0.1', '1303681597', 0),
(16, '[:lol][:loveliness]', 0, 1, '127.0.0.1', '1305503372', 0),
(12, '[:lol]时间看着不准啊', 0, 1, '127.0.0.1', '1303771751', 0),
(17, '[:funk]', 0, 1, '127.0.0.1', '1306015616', 0),
(19, '[:loveliness]<script>', 0, 1, '127.0.0.1', '1306015693', 0),
(28, '[:titter]哈哈，其实还蛮不错的哦，哈哈', 0, 1, '127.0.0.1', '1306258712', 0),
(29, '[:cry]', 0, 1, '221.233.24.45', '1306442738', 0),
(30, '[:sad]', 0, 1, '221.233.24.50', '1306442858', 0),
(31, '[:sad]', 0, 1, '221.233.24.50', '1306442867', 0),
(32, '[:sad][:loveliness]', 0, 1, '221.233.24.50', '1306442876', 0),
(33, '[:mad][:smile]', 0, 1, '221.233.24.47', '1306442892', 0),
(34, '[:sad][:loveliness]', 0, 1, '221.233.24.50', '1306442900', 0),
(35, '[:biggrin]', 0, 1, '221.233.24.50', '1306442904', 0),
(36, '当人上徘徊在奋斗与堕落的十字路口，向左走，会走出另一个人生的高度，不过很累；向右走或走出难以想象的人生低谷，不过很轻松。没得选择，我坚决的转向了左边。', 0, 1, '127.0.0.1', '1308564563', 0);

-- --------------------------------------------------------

--
-- 表的结构 `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `name` text NOT NULL,
  `notename` text NOT NULL,
  `ip` text NOT NULL,
  `add_reason` text NOT NULL,
  `allow` tinyint(4) NOT NULL,
  `website` text NOT NULL,
  `dateline` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `friends`
--

INSERT INTO `friends` (`fid`, `classid`, `name`, `notename`, `ip`, `add_reason`, `allow`, `website`, `dateline`, `user`) VALUES
(54, -1, 'http://www.sunsonworld.com', '天骄天下', 'no', 'no', 3, 'http://www.sunsonworld.com', '1305839471', 0),
(2, 3, '中国电信', 'zhongguo电信', '202.193.255.255', '中国电信的加好友', 1, 'http://www.sunsonworld.com', '1305802006', 0),
(3, 3, '好客网', '好客', '58.50.0.113', '好客网站请求', 1, 'http://www.sunsonworld.com', '1304944180', 0),
(53, -1, '天之骄子', 'no', '127.0.0.1', 'no', 5, 'http://localhost/sunsonworld', '1305839383', 0);

-- --------------------------------------------------------

--
-- 表的结构 `friends_action`
--

CREATE TABLE IF NOT EXISTS `friends_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text,
  `website` text NOT NULL,
  `type` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=187 ;

--
-- 转存表中的数据 `friends_action`
--

INSERT INTO `friends_action` (`action_id`, `did`, `classid`, `upid`, `title`, `content`, `website`, `type`, `ip`, `dateline`, `user`) VALUES
(118, 92, 109, 108, '秧田记忆', ' 一个季节已经过去了，另一个季节已经走入了腹地。 \r\n\r\n    雨水开始多了起来，于是，河水开始涨', '0', 'article', '127.0.0.1', '1308564846', 0),
(115, 90, 103, 91, '移动OPhone手机5月将面市对抗iPhone', '新浪科技讯 4月17日消息，知情人士于4月16日晚间透露，中国移动OPhone手机已完成基本的研发工', '0', 'article', '127.0.0.1', '1308535559', 0),
(116, 36, 0, 0, '当人上徘徊在奋斗与堕落的十字路口，向左走，会走出另一个人生的高度，不过很累；向右走或走出难以想象的人', '', '0', 'emotion', '127.0.0.1', '1308564563', 0),
(117, 91, 109, 108, '透过树叶看天', '  树叶的缝隙中总是投下斑驳的影。影影绰绰所覆盖的，是被遗漏的阳光，当然，还有属于我们的时间。 \r\n', '0', 'article', '127.0.0.1', '1308564797', 0),
(119, 93, 109, 108, '一个人的历史', ' 在我的记忆深处，所有的历史都是写在纸上的。那些大人物，英雄也罢，枭雄也可，都在纸上用文字的形式，留', '0', 'article', '127.0.0.1', '1308564878', 0),
(120, 94, 109, 108, '被放逐的思维', '    1 \r\n\r\n    很多记忆都已经远了，消失在了时间的转动中。 \r\n\r\n    横躺在我的手', '0', 'article', '127.0.0.1', '1308564921', 0),
(121, 95, 109, 108, '李彦宏：百度也是媒体 希望用户更多时间停留', '\r\n\n\n\r\n\n\r\n\r\n\r\n百度CEO李彦宏(腾讯科技配图)\n\r\n腾讯科技讯（乐天）6月13日消息，百', '0', 'article', '127.0.0.1', '1308737703', 0),
(122, 96, 109, 108, '李彦宏：百度也是媒体 希望用户更多时间停留', '\r\n\n\r\n\n\n\r\n\n\r\n\r\n百度CEO李彦宏(腾讯科技配图)\n\r\n腾讯科技讯（乐天）6月13日消息，', '0', 'article', '127.0.0.1', '1308738199', 0),
(123, 97, 109, 108, '李彦宏：百度也是媒体 希望用户更多时间停留', '\r\n\n\r\n\n\n\r\n\n\r\n\r\n百度CEO李彦宏(腾讯科技配图)\n\r\n腾讯科技讯（乐天）6月13日消息，', '0', 'article', '127.0.0.1', '1308738272', 0),
(124, 32, 144, 143, '百合婚恋网', '不错的婚嫁网站', '0', 'collect', '127.0.0.1', '1308738832', 0),
(125, 33, 144, 143, '大众点评网', '美食、生活、优惠券', '0', 'collect', '127.0.0.1', '1308739243', 0),
(126, 34, 144, 143, 'PPTV网络电视', 'PPTV网络电视', '0', 'collect', '127.0.0.1', '1308739273', 0),
(127, 35, 144, 143, 'http://www.1688.com/', '中国最大电子商务网站', '0', 'collect', '127.0.0.1', '1308739451', 0),
(128, 36, 144, 143, '新　浪', '不错的', '0', 'collect', '127.0.0.1', '1308739904', 0),
(129, 37, 153, 143, '搜　狐', '也不错', '0', 'collect', '127.0.0.1', '1308739926', 0),
(130, 38, 153, 143, '腾　讯', '腾讯QQ', '0', 'collect', '127.0.0.1', '1308739954', 0),
(131, 39, 153, 143, '百度', '中国最大搜索引擎', '0', 'collect', '127.0.0.1', '1308739983', 0),
(132, 40, 153, 143, '谷歌', '全球最大搜索引擎', '0', 'collect', '127.0.0.1', '1308740004', 0),
(133, 41, 145, 143, 'css+div教程', 'css+div教程', '0', 'collect', '127.0.0.1', '1308740045', 0),
(134, 42, 144, 143, 'W3Cschool', '很不错的帮助文档哦', '0', 'collect', '127.0.0.1', '1308740083', 0),
(135, 43, 145, 143, 'AI教程', '学习AI的好地方', '0', 'collect', '127.0.0.1', '1308740124', 0),
(136, 44, 145, 143, '婚纱摄影后期处理', '婚纱摄影后期处理', '0', 'collect', '127.0.0.1', '1308740179', 0),
(137, 45, 145, 143, '摄影欣赏', '很不错的摄影哦', '0', 'collect', '127.0.0.1', '1308740208', 0),
(138, 46, 145, 143, '英文字体下载 ', '很全面的字体', '0', 'collect', '127.0.0.1', '1308740241', 0),
(139, 47, 145, 143, '草根网', '这个网站真的很不错的', '0', 'collect', '127.0.0.1', '1308740278', 0),
(140, 48, 146, 143, 'PHP自学网', '自学PHP', '0', 'collect', '127.0.0.1', '1308740312', 0),
(141, 49, 146, 143, 'PHP 开源', 'PHP 开源源码，很多提供下载', '0', 'collect', '127.0.0.1', '1308740341', 0),
(142, 50, 146, 143, 'WEB开发笔记', 'WEB开发常见问题，网站建设运营策划，SEO推广优化，PHP面向对象编程', '0', 'collect', '127.0.0.1', '1308740372', 0),
(143, 51, 146, 143, 'PHP100', '很不错的视频教学', '0', 'collect', '127.0.0.1', '1308740404', 0),
(144, 52, 146, 143, 'PHP100论坛', '有很多网友分享的资源哦', '0', 'collect', '127.0.0.1', '1308740429', 0),
(145, 27, 156, 155, '明天你是否依然爱我', '很有味的歌', '0', 'music', '127.0.0.1', '1308741995', 0),
(146, 28, 156, 155, '最美好的自己', '还不错的歌曲', '0', 'music', '127.0.0.1', '1308742309', 0),
(147, 29, 156, 155, '把它甩掉', '很有动感的音乐', '0', 'music', '127.0.0.1', '1308742422', 0),
(148, 30, 156, 155, '死也要在一起 ', '很有感觉，听觉感受不错', '0', 'music', '127.0.0.1', '1308742468', 0),
(149, 31, 156, 155, '我要的飞翔', '电视剧《一起又看流星雨》原声音乐 ', '0', 'music', '127.0.0.1', '1308742649', 0),
(150, 32, 159, 155, '千年等一回 中文', '很经典的歌啊，新百娘子传奇', '0', 'music', '127.0.0.1', '1308742767', 0),
(151, 33, 159, 155, '只想一生跟你走', '溏心风暴之家好月圆(电视剧原声音乐）', '0', 'music', '127.0.0.1', '1308742864', 0),
(152, 34, 159, 155, '一剪梅', '金装费玉清不朽经典金曲', '0', 'music', '127.0.0.1', '1308742928', 0),
(153, 35, 156, 155, '男儿当自强', '华纳超极品音色系列:林子祥精选十七首', '0', 'music', '127.0.0.1', '1308743014', 0),
(154, 36, 159, 155, '滚滚红尘', '10年金马奖最佳电影主题曲-风云际会', '0', 'music', '127.0.0.1', '1308743075', 0),
(155, 37, 159, 155, '海韵', '君心我心:电影金曲篇2', '0', 'music', '127.0.0.1', '1308743173', 0),
(156, 38, 159, 155, '一起走过的日子', '环球巨星影音启示录 - 刘德华', '0', 'music', '127.0.0.1', '1308743319', 0),
(157, 39, 159, 155, '亲亲我的宝贝', '周而复始 ', '0', 'music', '127.0.0.1', '1308743386', 0),
(158, 40, 157, 155, '做你的一半', '做你的一半', '0', 'music', '127.0.0.1', '1308743482', 0),
(159, 41, 157, 155, '小酒窝', '不错', '0', 'music', '127.0.0.1', '1308743621', 0),
(160, 42, 158, 155, '昨日重现', '经典中文歌曲英文版之十  ', '0', 'music', '127.0.0.1', '1308743673', 0),
(161, 43, 158, 155, 'Burning 听力', 'Maria Arredondo  Not Going Under  ', '0', 'music', '127.0.0.1', '1308743729', 0),
(162, 186, 177, 175, '相册', 'logo_outer_bizmail00be9a', '0', 'photo', '127.0.0.1', '1308744211', 0),
(163, 37, 0, 0, '心情', '', '0', 'emotion', '127.0.0.1', '1308744372', 0),
(164, 98, 109, 108, '雅虎正物色新CEO 投资人希望马云孙正义担纲', '\r\n\n\r\n\r\n\n\n\r\n\r\n雅虎CEO卡罗尔·巴茨（腾讯科技配图）\n\r\n腾讯科技讯（观海）北京时间6月', '0', 'article', '127.0.0.1', '1308744501', 0),
(165, 99, 197, 108, '杨韵禾 - 放晴', '\r\n\r\n\r\n歌词： \n\r\n杨韵禾 - 放晴 \r\n\r\n作词：王雅君 作曲：杨韵禾 \r\n\r\n\r\n决定了今', '0', 'article', '127.0.0.1', '1308744659', 0),
(166, 100, 197, 108, '一瞬之光', '\r\n歌词： \n\r\n填词：姚谦\r\n作曲：a-lin(黄丽玲)\r\n演唱：a-lin(黄丽玲)\r\n\r\n\r\n', '0', 'article', '127.0.0.1', '1308744767', 0),
(167, 101, 197, 108, '只因为你', '\r\n\n\r\n\r\n\nSorry，此歌曲暂无歌词。\n\r\n\n\r\n\r\n \n', '0', 'article', '127.0.0.1', '1308744922', 0),
(168, 102, 197, 108, '老男孩', '\r\n歌词： \n\r\n老男孩\r\n作曲：大桥卓弥\r\n作词：筷子兄弟\r\n唱：筷子兄弟\r\n歌词制作：ドラえもん', '0', 'article', '127.0.0.1', '1308745022', 0),
(169, 103, 197, 108, '疯狂世界', '\r\n歌词： \n\r\n疯狂世界\r\n演唱：五月天\r\n专辑：《第一张创作专辑》\r\n作词：阿信\r\n作曲：阿信\r', '0', 'article', '127.0.0.1', '1308745074', 0),
(170, 104, 110, 108, 'php抓取https的内容', '\r\n\n直接用file_get_contents，会报错；\n\r\n\n程序代码$url = (https:', '0', 'article', '127.0.0.1', '1308745169', 0),
(171, 105, 110, 108, 'PHP算法之翻牌游戏', '\r\n \n\r\n\r\n\r\n\r\n\r\n/**\r\n* 翻牌游戏\r\n* \r\n* 1-52张扑克牌,初始都翻开朝上\r', '0', 'article', '127.0.0.1', '1308745221', 0),
(172, 106, 110, 108, 'PHP的可变变量名', '\r\n\n有时候可变的变量名会给编程带来很大的方便。也就是说变量名可以被动态的命名和使用。通常变量通过下', '0', 'article', '127.0.0.1', '1308745261', 0),
(173, 107, 110, 108, 'PHP工程师面临的成长瓶颈', '　作为Web开发中应用最广泛的语言之一，PHP有着大量的粉丝，那么你是一名优秀的程序员吗?在进行自我', '0', 'article', '127.0.0.1', '1308745296', 0),
(174, 108, 110, 108, 'PHP程序员面试，切忌急功近利', '招聘一个程序员，唯一对你有意义的是他能写出好程序的能力。 很少人像这样去招人，他们更喜欢去挑剔程序员', '0', 'article', '127.0.0.1', '1308745350', 0),
(175, 109, 116, 108, 'PHP Socket工具包 nanoserv 2.1.0 发布', '\r\n\nNanoserv 是 PHP 5.1 以及以上版本下的一个 socket 守护进程的工具包。它', '0', 'article', '127.0.0.1', '1308745389', 0),
(176, 110, 116, 108, 'PHP开发框架——Yii 1.1.4 发布', '\r\n\r\n\nYii是一个高性能的PHP5的web应用程序开发框架。通过一个简单的命令行工具 yiic ', '0', 'article', '127.0.0.1', '1308745418', 0),
(177, 111, 116, 108, 'Zend公司首次推出PHP服务器管理系统', '\r\n\n     随着Zend服务器群集管理器的发布，商业PHP的供应商的目的在于形成多个大规模部署管', '0', 'article', '127.0.0.1', '1308745453', 0),
(178, 112, 116, 108, '百万级PHP网站架构工具箱', '　在了解过世界最大的PHP站点，Facebook的后台技术后，今天我们来了解一个百万级PHP站点的网', '0', 'article', '127.0.0.1', '1308745491', 0),
(179, 113, 117, 108, 'Simon Garfunkel The Sound of Silence ', '\r\n\r\n\r\n\n\r\n\r\n经典人家就这样搞定。那些玩这个的小子们好好看看，练吧。\r\n\n\r\n\n\r\n\r\n \n', '0', 'article', '127.0.0.1', '1308745879', 0),
(180, 114, 117, 108, '中国达人秀 第二季 王芳 110605 中国达人秀', '\r\n\r\n\r\n\r\n不谈饶舌水平。 光这个词就很不错。 话说这个女人本身肯定长的很不错。\r\n\r\n\n', '0', 'article', '127.0.0.1', '1308746007', 0),
(181, 115, 117, 108, '快乐大本营 2011 欢乐嘉年华 刘青云 梁朝伟 张震岳', '\r\n\r\n\n\r\n\r\n这些都只是娱乐，娱乐而已，大家看看，轻松一下，很好啊。他们节目做的确实有特点啊，不', '0', 'article', '127.0.0.1', '1308746135', 0),
(182, 116, 116, 108, '裸婚时代 第1集 ', '\r\n\r\n\r\n\r\n\n\r\n【幽灵骑士】  发表于4分钟前 \n\r\n\r\n\r\n\r\nvery good！\r\n\n\r', '0', 'article', '127.0.0.1', '1308746231', 0),
(183, 117, 117, 108, '《建党伟业》之《践行者》', '\r\n\r\n\r\n \n\r\n\r\n\r\n\r\n影片简介\r\n\n\r\n\n\r\n\n\r\n\r\n\r\n《建党伟业》之《践行者》\r\n6', '0', 'article', '127.0.0.1', '1308746350', 0),
(184, 118, 117, 108, '电影: 单身男女 (2011)', '\r\n\r\n\r\n\n\r\n\r\n\r\n影片简介\r\n\n\r\n\n\r\n\n\r\n\r\n\r\n单身男女Don''t Go Brea', '0', 'article', '127.0.0.1', '1308746484', 0),
(185, 119, 109, 108, '传雅虎寻找新CEO 投资人称希望孙正义马云接班', '\n\r\n雅虎CEO卡罗尔·巴茨(Carol Bartz)\n\r\n\n　　新浪科技讯 北京时间6月22日上午', '0', 'article', '127.0.0.1', '1308746836', 0),
(186, 120, 103, 91, '倩女幽魂 刘亦菲版', '\r\n\r\n\n\r\n　　中文名：  倩女幽魂\r\n　　外文名：  A Chinese Ghost Story', '0', 'article', '127.0.0.1', '1308747537', 0);

-- --------------------------------------------------------

--
-- 表的结构 `friends_class`
--

CREATE TABLE IF NOT EXISTS `friends_class` (
  `classid` int(11) NOT NULL AUTO_INCREMENT,
  `classname` text NOT NULL,
  `order` int(11) NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `friends_class`
--

INSERT INTO `friends_class` (`classid`, `classname`, `order`, `dateline`, `user`) VALUES
(2, '公司好友', 0, '1304723269', 0),
(3, '企业好友', 0, '1304717199', 0),
(4, '家人', 0, '1304717207', 0),
(5, '亲戚', 0, '1304717217', 0),
(14, '同学', 0, '1305821858', 0);

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `guestid` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` tinytext NOT NULL,
  `message` text NOT NULL,
  `ip` text NOT NULL,
  `dateline` text NOT NULL,
  `c_num` int(11) NOT NULL,
  `origin` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`guestid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `guestbook`
--

INSERT INTO `guestbook` (`guestid`, `nickname`, `message`, `ip`, `dateline`, `c_num`, `origin`, `user`) VALUES
(4, 'admin', '最新留言，大家不要错过了哦，！！！', '127.0.0.1', '1304285722', 0, 1, 0),
(3, 'admin', '<p>最新留言，大家不要错过了哦</p>', '127.0.0.1', '1304284669', 0, 1, 0),
(12, 'admin', '<a href="http://sunsonworld.com" target="_blank">http://sunsonworld.com</a>', '127.0.0.1', '1304287903', 0, 1, 0),
(13, 'admin', '<p>留言板测试系统，正式开启，欢迎大家访问！</p>', '127.0.0.1', '1304287941', 0, 1, 0),
(6, 'admin', '说生活美丽，生活其实也没有想想中的那么好的，但只有不断努力，才能取得最后的胜利，大家一起加油吧！', '127.0.0.1', '1304285854', 0, 1, 0),
(7, 'admin', '<img border="0" alt="" src="http://localhost/sunsonworld/upload/photos/1303811500440.jpg" />哈哈，来个大图片测试一下。', '127.0.0.1', '1304286114', 0, 1, 0),
(14, 'admin', '其实我们可以多次留言回复的，这个功能大家不要忽视了。', '127.0.0.1', '1304287962', 0, 1, 0),
(15, 'admin', '无论学习，工作，还是其他，我们都要加倍的努力，不然以后后悔也来不及了。', '127.0.0.1', '1304287993', 0, 1, 0),
(16, 'admin', '还需要留言一条，才能出现分页效果，所以再来一条！', '127.0.0.1', '1304288045', 0, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `guestbook_reply`
--

CREATE TABLE IF NOT EXISTS `guestbook_reply` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `guestid` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `message` text NOT NULL,
  `ip` text NOT NULL,
  `dateline` text NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `guestbook_reply`
--


-- --------------------------------------------------------

--
-- 表的结构 `label`
--

CREATE TABLE IF NOT EXISTS `label` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `show_id` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `upid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `label` tinytext NOT NULL,
  `style` text NOT NULL,
  `num` tinyint(4) NOT NULL,
  `tlength` tinyint(4) NOT NULL,
  `clength` int(4) NOT NULL,
  `belong` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=791 ;

--
-- 转存表中的数据 `label`
--

INSERT INTO `label` (`lid`, `show_id`, `type`, `upid`, `classid`, `label`, `style`, `num`, `tlength`, `clength`, `belong`, `user`) VALUES
(554, 0, 'index', 91, -1, 'imgtext', '	  <li class="index_list_item">\r\n\r\n           <a href="$href" class="thumb"  target="_blank"><img src="$img_src" width="100px" height="100px" alt="猫猫" /></a>\r\n\r\n            <div class="desc">\r\n\r\n            <h4 class="channel"><a target="_blank" href="$href ">[$time]</a> <a target="_blank" href="$href" class="title">$title</a></h4>\r\n\r\n            <h5><a target="_blank" href="$href " class="author">快乐花园</a> - <a target="_blank" href="$href ">蝴蝶飞飞世界日志</a></h5>\r\n\r\n            <p>$content</p>\r\n\r\n            <p class="more"><a target="_blank" href="$href">阅读更多 »</a></p>\r\n\r\n\r\n\r\n             </div>\r\n\r\n        </li>', 9, 12, 70, 'article', 0),
(540, 0, 'index', 108, -1, 'latest', '<li><a href="$href" class="lv$i" title="$title" target="_blank">$title</a></li>', 5, 24, 0, 'article', 0),
(533, 0, 'index', 2, -1, 'latest', '【$time】$content', 1, 0, 200, 'emotion', 0),
(555, 0, 'index', 91, -1, 'imgtext_page', 'imgtext_page', 0, 0, 0, 'article', 0),
(274, 0, 'index', 91, 103, 'latest', '<li><a href="$href">$title</a></li>', 5, 10, 20, 'article', 0),
(649, 91, 'list', 91, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'article', 0),
(650, 91, 'list', 91, -1, 'imgtext', '<div class="viewFocus">\r\n<a href="$href" target="_blank"><img src="$img_src" width="330" height="160" alt="$title" /></a>\r\n <div class="info">\r\n<h4>$title</h4>\r\n<small>[$time]</small>\r\n <p>$content</p> <p class="more"><a href="$href" target="_blank">点击查看更多»</a></p>\r\n            </div>\r\n            <div class="clear"></div>  \r\n\r\n		</div>', 1, 15, 50, 'article', 0),
(610, 91, 'view', 91, -1, 'pageview', 'pageview', 0, 0, 0, 'article', 0),
(541, 0, 'index', 143, -1, 'latest', '<li><a href="$href" class="lv$i" title="$title" target="_blank">$title</a></li>', 5, 24, 0, 'collect', 0),
(790, 0, 'index', 155, -1, 'latest', '<li><a href="$player_href" class="lv$i" title="$title" target="_blank">$title</a></li>', 5, 24, 0, 'music', 0),
(543, 0, 'index', 1, -1, 'basic_info', 'basic_info', 0, 0, 0, 'self_info', 0),
(676, 143, 'index', 143, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'collect', 0),
(679, 143, 'list', 143, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'collect', 0),
(680, 143, 'list', 143, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'collect', 0),
(429, 143, 'index', 155, -1, 'list', '<li><a href="$href" target="_blank">$title</a></li>\r\n描述：$content', 5, 10, 20, 'music', 0),
(428, 143, 'index', 155, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'music', 0),
(722, 155, 'index', 155, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a> · $title</a><span class="author">  [演唱：$singer   作曲：$lyric]</span></h4>\r\n<p>\r\n<object type="application/x-shockwave-flash" data="function/dewplayer-mini.swf" \r\n\r\nwidth="160" height="20" id="dewplayer" name="dewplayer">\r\n<param name="wmode" value="transparent" />\r\n<param name="movie" value="function/dewplayer-mini.swf" />\r\n<param name="flashvars" value="mp3=$href&amp;autoreplay=1" />\r\n</object>\r\n$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 10, 20, 'music', 0),
(721, 155, 'index', 155, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'music', 0),
(675, 143, 'index', 143, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'collect', 0),
(691, 166, 'list', 166, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'resource', 0),
(499, 166, 'list', 175, -1, 'latest', '<li>最新<a href="$href"><img  src="$src&width=100&height=75"  style="border:0px;"//>$title</a></</li>', 5, 10, 20, 'album', 0),
(500, 166, 'list', 175, -1, 'random', '<li>随机<a href="$href"><img  src="$src&width=100&height=75"      style="border:0px;"/>$title</a></li>', 5, 10, 10, 'album', 0),
(498, 166, 'list', 175, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'album', 0),
(789, 175, 'index', 175, -1, 'list', '<li><a href="$href" rel="example_group" class="lv$i" title="$title">$title</a> </li>', 10, 10, 20, 'album', 0),
(788, 175, 'index', 175, -1, 'random', '<li>\r\n<a href="$href"  rel="example_group"><img src="$src&width=140&height=140" width="140" height="140" alt="$title" /></a>\r\n<h5><a href="$href">$title</a></h5>\r\n<div class="author"></div>\r\n</li>', 16, 10, 0, 'album', 0),
(774, 175, 'list', 175, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'album', 0),
(775, 175, 'list', 175, -1, 'latest', '<li><a href="$href" rel="example_group" class="lv$i" title="$title">$title</a> </li>', 10, 10, 0, 'album', 0),
(552, 0, 'index', 175, -1, 'random', '<a href="$href" target="_blank"><img src="$src&width=173&height=130" width="173" height="130" /></a>', 1, 0, 0, 'album', 0),
(553, 0, 'index', 91, -1, 'latest', '<li><a href="$href" class="lv$i" title="$title" target="_blank">$title</a></li>', 5, 24, 0, 'article', 0),
(548, 0, 'index', 166, -1, 'latest', '<li>\r\n<a href="" target="_blank"><img src="themes/default/blogbusdata/CDs28.jpg" width="64" height="64" /></a>\r\n<div class="info">\r\n<h5><a href="$href" target="_blank">$title</a></h5>\r\n<p>$content</p>\r\n<p class="more"><a href="$href" target="_blank">[下载]</a> <a href="index.php?display=resource&upid=166&type=index" target="_blank">[查看更多]</a></p>\r\n </div>\r\n\r\n</li>', 3, 30, 200, 'resource', 0),
(551, 0, 'index', 175, -1, 'latest', '          <li><a href="$href" title="$title" target="_blank"><img src="$src&width=192&height=128" width="192" height="128" alt="" /></a><h4><a href="$href" target="_blank">$content</a></h4></li>', 6, 10, 10, 'album', 0),
(556, 91, 'view', 1, -1, 'basic_info', 'basic_info', 0, 0, 0, 'self_info', 0),
(609, 91, 'view', 91, -1, 'random', '<li><span class="tags"><a>[$time]</a></span> <a href="$href" target="_blank" title="$title">$title</a></li>', 10, 10, 0, 'article', 0),
(607, 91, 'view', 91, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'article', 0),
(608, 91, 'view', 91, -1, 'latest', '<li><span class="tags"><a>[$time]</a></span> <a href="$href" target="_blank">$title</a></li>', 8, 10, 0, 'article', 0),
(648, 91, 'index', 91, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'article', 0),
(645, 91, 'index', 91, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'article', 0),
(646, 91, 'index', 91, -1, 'latest', '<li><a href="$href" target="_blank">$title</a></li>', 5, 10, 50, 'article', 0),
(647, 91, 'index', 91, -1, 'imgtext', '<div class="viewFocus">\r\n<a href="$href" target="_blank"><img src="$img_src" width="330" height="160" alt="$title" /></a>\r\n <div class="info">\r\n<h4>$title</h4>\r\n<small>[$time]</small>\r\n <p>$content</p> <p class="more"><a href="$href" target="_blank">点击查看更多»</a></p>\r\n            </div>\r\n            <div class="clear"></div>  \r\n\r\n		</div>', 1, 15, 100, 'article', 0),
(651, 91, 'list', 91, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'article', 0),
(785, 108, 'index', 108, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'article', 0),
(782, 108, 'index', 108, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'article', 0),
(783, 108, 'index', 108, -1, 'latest', '<li><a href="$href" target="_blank">$title</a></li>', 5, 10, 50, 'article', 0),
(784, 108, 'index', 108, -1, 'imgtext', '<div class="viewFocus">\r\n<a href="$href" target="_blank"><img src="$img_src" width="330" height="160" alt="$title" /></a>\r\n <div class="info">\r\n<h4>$title</h4>\r\n<small>[$time]</small>\r\n <p>$content</p> <p class="more"><a href="$href" target="_blank">点击查看更多»</a></p>\r\n            </div>\r\n            <div class="clear"></div>  \r\n\r\n		</div>', 1, 15, 100, 'article', 0),
(660, 108, 'list', 108, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'article', 0),
(661, 108, 'list', 108, -1, 'imgtext', '<div class="viewFocus">\r\n<a href="$href" target="_blank"><img src="$img_src" width="330" height="160" alt="$title" /></a>\r\n <div class="info">\r\n<h4>$title</h4>\r\n<small>[$time]</small>\r\n <p>$content</p> <p class="more"><a href="$href" target="_blank">点击查看更多»</a></p>\r\n            </div>\r\n            <div class="clear"></div>  \r\n\r\n		</div>', 1, 15, 50, 'article', 0),
(662, 108, 'list', 108, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'article', 0),
(663, 108, 'view', 1, -1, 'basic_info', 'basic_info', 0, 0, 0, 'self_info', 0),
(664, 108, 'view', 108, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'article', 0),
(665, 108, 'view', 108, -1, 'latest', '<li><span class="tags"><a>[$time]</a></span> <a href="$href" target="_blank">$title</a></li>', 8, 10, 0, 'article', 0),
(666, 108, 'view', 108, -1, 'random', '<li><span class="tags"><a>[$time]</a></span> <a href="$href" target="_blank" title="$title">$title</a></li>', 10, 10, 0, 'article', 0),
(667, 108, 'view', 108, -1, 'pageview', 'pageview', 0, 0, 0, 'article', 0),
(672, 2, 'index', 2, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a> » [$time]</a><span class="author">From $origin</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 0, 200, 'emotion', 0),
(687, 166, 'index', 166, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'resource', 0),
(688, 166, 'index', 166, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'resource', 0),
(692, 166, 'list', 166, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a href="$href" target="_blank"> » $title</a><span class="author">[$time]</span></h4>\r\n<p>$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 10, 20, 'resource', 0),
(724, 155, 'list', 155, -1, 'list', '<div class="viewItem"> \r\n<div class="info">\r\n<h4><a> · $title</a><span class="author">  [演唱：$singer   作曲：$lyric]</span></h4>\r\n<p>\r\n<object type="application/x-shockwave-flash" data="function/dewplayer-mini.swf" \r\n\r\nwidth="160" height="20" id="dewplayer" name="dewplayer">\r\n<param name="wmode" value="transparent" />\r\n<param name="movie" value="function/dewplayer-mini.swf" />\r\n<param name="flashvars" value="mp3=$href&amp;autoreplay=1" />\r\n</object>\r\n$content</p>\r\n			\r\n</div>\r\n<div class="clear"></div>\r\n</div>', 10, 15, 100, 'music', 0),
(723, 155, 'list', 155, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'music', 0),
(786, 175, 'index', 175, -1, 'unit', '<li><a href="$href">$classname</a></li>', 0, 0, 0, 'album', 0),
(787, 175, 'index', 175, -1, 'latest', '<div class="item">\r\n<a href="$href">\r\n<img src="$src&width=520&height=300" width="520" height="300" alt="" /></a>\r\n<div class="info">$title</div>\r\n</div>', 1, 10, 20, 'album', 0),
(776, 175, 'list', 175, -1, 'list', '<li>\r\n<a href="$href"  rel="example_group"><img src="$src&width=140&height=140" width="140" height="140" alt="$title" /></a>\r\n<h5><a href="$href">$title</a></h5>\r\n<div class="author"></div>\r\n</li>', 16, 10, 20, 'album', 0),
(777, 1, 'index', 1, -1, 'basic_info', 'basic_info', 0, 0, 0, 'self_info', 0),
(778, 1, 'index', 1, -1, 'contact_info', 'contact_info', 0, 0, 0, 'self_info', 0),
(779, 1, 'index', 1, -1, 'edu_info', 'edu_info', 0, 0, 0, 'self_info', 0),
(780, 1, 'index', 1, -1, 'hobby_info', 'hobby_info', 0, 0, 0, 'self_info', 0),
(781, 1, 'index', 91, -1, 'latest', '<li><a href="$href">$title</a></li>', 10, 10, 0, 'article', 0);

-- --------------------------------------------------------

--
-- 表的结构 `label_default`
--

CREATE TABLE IF NOT EXISTS `label_default` (
  `label_id` int(11) NOT NULL AUTO_INCREMENT,
  `lablel_name` tinytext NOT NULL,
  `label_content` text NOT NULL,
  PRIMARY KEY (`label_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- 转存表中的数据 `label_default`
--

INSERT INTO `label_default` (`label_id`, `lablel_name`, `label_content`) VALUES
(1, 'nickname', ''),
(2, 'truename', ''),
(3, 'sex', ''),
(4, 'birthday', ''),
(5, 'birthplace', ''),
(6, 'nowplace', ''),
(7, 'lovestate', ''),
(8, 'bloodtype', ''),
(9, 'uniqsign', ''),
(10, 'selfintro', ''),
(11, 'ownpage', ''),
(12, 'phone', ''),
(13, 'mobile', ''),
(14, 'qq', ''),
(15, 'msn', ''),
(16, 'email', ''),
(17, 'edu_bg', ''),
(18, 'prischool', ''),
(19, 'midschool', ''),
(20, 'university', ''),
(21, 'academy', ''),
(22, 'profession', ''),
(23, 'company', ''),
(24, 'position', ''),
(25, 'income', ''),
(26, 'idol', ''),
(27, 'music', ''),
(28, 'movie', ''),
(29, 'book', ''),
(30, 'sport', ''),
(31, 'other_hobby', ''),
(32, 'head_pic', ''),
(33, 'master_remark', ''),
(34, 'emotion_latest', ''),
(35, 'emotion_list', ''),
(36, 'emotion_list_page', ''),
(37, 'article_latest', ''),
(38, 'article_list', ''),
(39, 'article_list_page', ''),
(40, 'article_title', ''),
(41, 'article_class', ''),
(42, 'article_content', ''),
(43, 'article_time', ''),
(44, 'article_readnum', ''),
(45, 'article_commentnum', ''),
(46, 'article_comment_list', ''),
(47, 'article_comment_page', ''),
(48, 'collect_latest', ''),
(49, 'collect_list', ''),
(50, 'collect_list_page', '');

-- --------------------------------------------------------

--
-- 表的结构 `lover_action`
--

CREATE TABLE IF NOT EXISTS `lover_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `type` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `lover_action`
--


-- --------------------------------------------------------

--
-- 表的结构 `musics`
--

CREATE TABLE IF NOT EXISTS `musics` (
  `music_id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `name` text NOT NULL,
  `singer` tinytext NOT NULL,
  `lyric` tinytext NOT NULL,
  `path` text NOT NULL,
  `rank` tinyint(4) NOT NULL,
  `description` text,
  `show` tinyint(4) NOT NULL,
  `notlove` int(11) NOT NULL,
  `samelove` int(11) NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`music_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `musics`
--

INSERT INTO `musics` (`music_id`, `classid`, `upid`, `name`, `singer`, `lyric`, `path`, `rank`, `description`, `show`, `notlove`, `samelove`, `origin`, `dateline`, `user`) VALUES
(1, 1, 1, '1', '1', '1', 'upload/music/1303111779.mp3', 1, '1', 1, 1, 1, 1, '1', 1),
(11, 156, 155, '非主流 合唱 ', '非主流', '非主流', 'http://act.52pk.com/spe/upload/qqian/1115755/100720070303.mp3', 1, '好歌，很喜欢她的歌曲', 3, 0, 0, 1, '1308750248', 0),
(6, 156, 155, '等一分钟 dj', '徐誉滕 ', '徐誉滕 ', 'http://bt.taoge.biz/COFFdD0xMzA4NzEyNjUyJmk9MjE5LjEzOS44Ljg3JnU9U29uZ3MvZmFpbnRRQy9mOC9jNTU0OGRjNDZlZTAxY2ZiYWM0YWEyNmU1NjYyMThmOC5tcDMmbT0zOWZjMzAxMDA5OWRmYzg5YWEyM2Y5ODEzNWExNmZjNyZ2PWxpc3RlbiZuPbXI0ru31tbTJTIwZGomcz3Q7NP+6/gmcD1z.mp3', 1, '大一在网吧听到的最久的一首歌，仿佛又回到那些稚嫩的年代', 3, 0, 0, 1, '1308750186', 0),
(20, 156, 155, '想象之中', '许嵩', '许嵩', 'http://www.xsjs.cn/uploadfiles/2011-3/16213789141.mp3', 1, '在听着', 3, 0, 0, 1, '1308750283', 0),
(7, 156, 155, '天使的幸福 ', '陈胜屿', '陈胜屿', 'http://bt.soneo.biz/COFFdD0xMzA1OTYxMDE2Jmk9MTExLjE3Ny44MC41JnU9U29uZ3MvdjEvZmFpbnRRQy8xZS80OGJiMDg5MmFjZWQ4Y2Y5YjcxYjJlOWQxNjc3NjIxZS5tcDMmbT1jYWFjMTUyZTRiMzVjY2UzNjZjZjhhNDQyMWUxYzU3MSZ2PWxpc3RlbiZuPczsyrm1xNDSuKMmcz2zwsqk0+wmcD1z.mp3', 1, '很好听的歌', 3, 0, 0, 1, '1308750236', 0),
(18, 156, 155, '河山大好', '许嵩', '许嵩', 'http://www.eaeb.cn/uploadfile/2011/0426/20110426025815865.mp3', 1, '新歌', 3, 0, 0, 1, '1308750307', 0),
(19, 156, 155, '微博控', '许嵩', '许嵩', 'http://www.xsjs.cn/uploadfiles/2011-3/281250199642.mp3', 1, '好歌', 3, 0, 0, 1, '1308750297', 0),
(21, 156, 155, '千百度', '许嵩', '许嵩', 'http://www.eaeb.cn/uploadfile/2011/0422/20110422044324617.mp3', 1, '好歌', 3, 0, 0, 1, '1308750274', 0),
(22, 156, 155, '去寻找', '牛奶糖', '牛奶糖', 'http://dt.zlsh.info/COFFdD0xMzA0NzYxODgzJmk9NjAuMTYxLjIyNC4xMzAmdT1Tb25ncy92MS9mYWludFFDL2FhL2Q1YWIwNDE0NjEzMDhhZDQyZDRmOTA5ZWRhZjBjNmFhLm1wMyZtPWZmYTFkY2VlMWNmN2M4ZDgwY2Y0ZGQ4ZDM1Y2RhMGUxJnY9ZG93biZuPcil0bDV0iZzPcWjxMy/p7fIJnA9cw==.mp3', 1, '听听', 3, 0, 0, 1, '1308750267', 0),
(24, 156, 155, '那些花', '朴树', '朴树', 'http://api.ning.com/files/nOymQtYDl-4aDK*gyDW**EMafGfdaHIiOIV29zt7ajJ-yRF4qD*4pdqJAs1vu7ACwmgLCLI2qUIzrwSjZ9dQYKgk4nSmqlj5/file.mp3', 1, '朴树，那些花儿，很不错的音乐，每当听到这首歌的时候，总是有很多感慨，从大一到现在，也都两三年了，但还是无法忘怀', 3, 0, 0, 1, '1308750257', 0),
(27, 156, 155, '明天你是否依然爱我', '童安格', '童安格', 'http://220.179.115.78/songMP3/song27.mp3', 1, '很有味的歌', 3, 0, 0, 1, '1308750224', 0),
(28, 156, 155, '最美好的自己', '中岛美嘉', '中岛美嘉', 'http://www.dj313.com/qq.php/dj313/81f36321-b98d-11df-80ae-0015c55db73d/dj182.mp3', 1, '还不错的歌曲', 3, 0, 0, 1, '1308742309', 0),
(29, 156, 155, '把它甩掉', '后弦', '后弦', 'http://live02.gz163.cn/ent/2011/02/houxuan.mp3', 1, '很有动感的音乐', 3, 0, 0, 1, '1308750172', 0),
(30, 156, 155, '死也要在一起 ', '赵雨航', '赵雨航', 'http://bt.soneo.biz/COFFdD0xMzA4NzEzNjM1Jmk9MjE5LjEzOS44Ljg3JnU9U29uZ3MvdjEvZmFpbnRRQy8zYS9mOTc4NDE2ODEzYTIzOGIxOTQ3MDk4NzJmNmQ3N2YzYS5tcDMmbT1jMTU0ZDI3YzNmODk0OGE4ODY5OWUzYzhkZDViMDhkMiZ2PWxpc3RlbiZuPcvA0rLSqtTa0rvG8CZzPdXU0+q6vSZwPXM=.mp3', 5, '很有感觉，听觉感受不错', 3, 0, 0, 1, '1308742468', 0),
(31, 156, 155, '我要的飞翔', '许飞 ', '许飞 ', 'http://mp3-2.jian-fei-wang.com/1/02/08/%e8%ae%b8%e9%a3%9e-%e6%88%91%e8%a6%81%e7%9a%84%e9%a3%9e%e7%bf%94.mp3', 1, '电视剧《一起又看流星雨》原声音乐 ', 3, 0, 0, 1, '1308742649', 0),
(32, 156, 155, '千年等一回 中文', '高胜美', '高胜美', 'http://ar.wlnw.gov.cn:81/RD/MP3/000046.mp3', 1, '很经典的歌啊，新百娘子传奇', 3, 0, 0, 1, '1308750106', 0),
(33, 159, 155, '只想一生跟你走', '张学友', '张学友', 'http://218.205.239.9/cmsdata/batchmusic/20070629/uwy04uIs.mp3', 1, '溏心风暴之家好月圆(电视剧原声音乐）', 3, 0, 0, 1, '1308742864', 0),
(34, 159, 155, '一剪梅', '费玉清', '费玉清', 'http://120.35.4.23/Data/MP3/%D2%BB%BC%F4%C3%B7.mp3', 1, '金装费玉清不朽经典金曲', 3, 0, 0, 1, '1308742928', 0),
(35, 156, 155, '男儿当自强', '林子祥', '林子祥', 'http://www.xlgfy.com/music/%C4%D0%B6%F9%B5%B1%D7%D4%C7%BF.mp3', 1, '华纳超极品音色系列:林子祥精选十七首', 3, 0, 0, 1, '1308743014', 0),
(36, 159, 155, '滚滚红尘', '陈淑桦', '陈淑桦', 'http://www.xlgfy.com/music/%C4%D0%B6%F9%B5%B1%D7%D4%C7%BF.mp3', 4, '10年金马奖最佳电影主题曲-风云际会', 3, 0, 0, 1, '1308743075', 0),
(37, 159, 155, '海韵', '邓丽君', '邓丽君', 'http://bt.pangzi.biz/COFFdD0xMzA4NzE0MzAwJmk9MjE5LjEzOS44Ljg3JnU9U29uZ3MvdjIvZmFpbnRRQy9jMC81Ni9mODZhNjdmMmQyMTllNDdkM2I1MWViZWMzNTNjNTZjMC5tcDMmbT0zNTgwMWE3OGU5MTA0NjM4YjRhNDY2ZWNlZDgyOTk0YiZ2PWxpc3RlbiZuPbqj1M8mcz21y8D2vv0mcD1z.mp3', 3, '君心我心:电影金曲篇2', 3, 0, 0, 1, '1308743173', 0),
(38, 159, 155, '一起走过的日子', '刘德华', '刘德华', 'http://ts33.net/upload/music/2010/11/11/20101111171141.mp3', 3, '环球巨星影音启示录 - 刘德华', 3, 0, 0, 1, '1308743319', 0),
(39, 159, 155, '亲亲我的宝贝', '周华健 ', '周华健 ', 'http://www.pingxinya.com/templates/qqwdb.mp3', 3, '周而复始 ', 3, 0, 0, 1, '1308743386', 0),
(40, 157, 155, '做你的一半', '男才女貌', '男才女貌', 'http://changsha.wenshaktv.com/upfile/5f0b0aeb-d5f5-4c08-8d05-aadc8a073a7a%D7%F6%C4%E3%B5%C4%D2%BB%B0%EB.mp3', 1, '做你的一半', 3, 0, 0, 1, '1308743482', 0),
(41, 157, 155, '小酒窝', '林俊杰 蔡卓妍', '林俊杰 蔡卓妍', 'http://www.xsdcsx.com/sourcefile/0/0/2/2187.mp3', 1, '不错', 3, 0, 0, 1, '1308743621', 0),
(42, 158, 155, '昨日重现', '卡朋特', '卡朋特', 'http://file.jbedu.net/blog/music/20100416/ff80808127f14a8f0128042edfbc05fe.mp3', 5, '经典中文歌曲英文版之十  ', 3, 0, 0, 1, '1308743673', 0),
(43, 156, 155, 'Burning 听力', 'Maria ', 'Maria', 'http://open.xcdd.ah.cn/club/forum/files/339.mp3', 1, 'Maria Arredondo  Not Going Under  ', 3, 0, 0, 1, '1308743762', 0);

-- --------------------------------------------------------

--
-- 表的结构 `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `title` text NOT NULL,
  `path` text NOT NULL,
  `c_num` int(11) NOT NULL,
  `cover` tinyint(4) NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `dateline` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=187 ;

--
-- 转存表中的数据 `photos`
--

INSERT INTO `photos` (`pid`, `classid`, `upid`, `title`, `path`, `c_num`, `cover`, `origin`, `dateline`, `user`) VALUES
(93, 181, 175, '爱情物语', 'upload/photos/1303806479552.jpg', 0, 0, 0, '1305461916', 0),
(92, 181, 175, 'image_48', 'upload/photos/1303806479122.png', 0, 0, 0, '1305461916', 0),
(86, 177, 175, '2011-4-23 21-40-31', 'upload/photos/1303800349569.png', 0, 0, 0, '1304047803', 0),
(87, 177, 175, '隐居', 'upload/photos/1303800349993.jpg', 0, 1, 0, '1304157105', 0),
(88, 177, 175, '星星', 'upload/photos/1303800349567.jpg', 0, 0, 0, '1304047337', 0),
(89, 181, 175, '个人相片', 'upload/photos/1303806479415.jpg', 0, 0, 0, '1303835279', 0),
(136, 181, 175, 'IMG_0052_conew1', 'upload/photos/1304569090827.jpg', 0, 1, 0, '1305888469', 0),
(137, 181, 175, 'xxfg3-1', 'upload/photos/1304569090479.jpg', 0, 0, 0, '1305461916', 0),
(138, 181, 175, 'xxfg6-1', 'upload/photos/1304569090399.jpg', 0, 0, 0, '1305461916', 0),
(95, 181, 175, '张洋', 'upload/photos/1303806479906.jpg', 0, 0, 0, '1305461916', 0),
(98, 181, 175, '情人节快乐，我3', 'upload/photos/1303811500988.jpg', 0, 0, 0, '1305461916', 0),
(99, 181, 175, '泪水', 'upload/photos/1303811500169.jpg', 0, 0, 0, '1305461916', 0),
(100, 181, 175, '爱殇', 'upload/photos/1303811500851.jpg', 0, 0, 0, '1305461916', 0),
(101, 181, 175, '20', 'upload/photos/1303811500955.jpg', 0, 0, 0, '1305461916', 0),
(102, 181, 175, '天下人', 'upload/photos/1303811500440.jpg', 0, 0, 0, '1305461916', 0),
(103, 181, 175, '2.', 'upload/photos/1303811501829.jpg', 0, 0, 0, '1305461916', 0),
(104, 181, 175, '14', 'upload/photos/1303811501665.jpg', 0, 0, 0, '1305461916', 0),
(105, 181, 175, '雪堂花', 'upload/photos/1303812029436.gif', 0, 0, 0, '1305461916', 0),
(106, 181, 175, '海边。牵手', 'upload/photos/1303812029446.gif', 0, 0, 0, '1305461916', 0),
(108, 181, 175, '个人小照', 'upload/photos/1303812029304.jpg', 0, 0, 0, '1305461916', 0),
(109, 181, 175, '爱情花朵', 'upload/photos/1303812029773.gif', 0, 0, 0, '1305461916', 0),
(110, 181, 175, '美丽花朵', 'upload/photos/1303812029282.jpg', 0, 0, 0, '1305461916', 0),
(111, 178, 175, '40', 'upload/photos/1303836132758.jpg', 0, 0, 0, '1305461890', 0),
(112, 178, 175, '小桥', 'upload/photos/1303836132529.jpg', 0, 0, 0, '1305461890', 0),
(113, 178, 175, '42', 'upload/photos/1303836132472.jpg', 0, 0, 0, '1305461890', 0),
(114, 178, 175, '河流', 'upload/photos/1303836132964.jpg', 0, 1, 0, '1305461890', 0),
(115, 178, 175, '44', 'upload/photos/1303836132529.jpg', 0, 0, 0, '1305461890', 0),
(116, 178, 175, '竹林', 'upload/photos/1303836132238.jpg', 0, 0, 0, '1305461890', 0),
(139, 181, 175, 'http_imgloadCAXNHD9T', 'upload/photos/1304569090782.jpg', 0, 0, 0, '1305461916', 0),
(170, 190, 175, '测试1', 'upload/photos/1306072991722.jpg', 0, 0, 0, '1306101791', 0),
(171, 190, 175, '测试2', 'upload/photos/1306072991240.jpg', 0, 0, 0, '1306101792', 0),
(128, 182, 175, '示例图片_01', 'upload/photos/1304127149271.jpg', 0, 0, 0, '1304155949', 0),
(129, 182, 175, '示例图片_02', 'upload/photos/1304127149144.jpg', 0, 0, 0, '1304155950', 0),
(130, 182, 175, '示例图片_03', 'upload/photos/1304127149260.jpg', 0, 0, 0, '1304155951', 0),
(140, 181, 175, 'IMG_0043_conew1', 'upload/photos/1304569090220.jpg', 0, 0, 0, '1305461916', 0),
(141, 179, 0, '风景', 'upload/photos/1305383659203.jpg', 0, 1, 0, '1306273278', 0),
(182, 177, 175, '0_22314240331393909_1', 'upload/photos/1308506111930.jpg', 0, 0, 0, '1308534911', 0),
(142, 188, 0, 'ryuyui', 'upload/photos/1305427965828.jpg', 0, 0, 0, '1305462258', 0),
(143, 188, 0, '404', 'upload/photos/1305427965790.png', 0, 0, 0, '1305462258', 0),
(144, 188, 0, '空间', 'upload/photos/1305427965284.jpg', 0, 0, 0, '1305462258', 0),
(145, 188, 0, '相册图标', 'upload/photos/1305427965237.png', 0, 0, 0, '1305462258', 0),
(146, 188, 0, '邮件', 'upload/photos/1305428094205.png', 0, 0, 0, '1305462258', 0),
(147, 188, 0, '音符', 'upload/photos/1305428094615.png', 0, 0, 0, '1305462258', 0),
(177, 188, 175, '1669591_130543202000_2', 'upload/photos/1306415270735.jpg', 0, 0, 0, '1306444070', 0),
(178, 190, 175, '201105141522089738', 'upload/photos/1306415345621.jpg', 0, 0, 0, '1306444145', 0),
(179, 177, 175, 'x2009040912012089', 'upload/photos/1308505770832.jpg', 0, 0, 0, '1308534570', 0),
(180, 177, 175, 'x2009040912012089', 'upload/photos/1308505843705.jpg', 0, 0, 0, '1308534643', 0),
(181, 177, 175, '1421448632389227250', 'upload/photos/1308505873238.jpg', 0, 0, 0, '1308534674', 0),
(167, 190, 0, '200771010717994_2', 'upload/photos/1306068172453.jpg', 0, 0, 0, '1306096972', 0),
(168, 190, 0, '2008527142218654_2', 'upload/photos/1306068172479.jpg', 0, 0, 0, '1306096973', 0),
(169, 190, 175, '图片1', 'upload/photos/1306068768570.jpg', 0, 0, 0, '1306097568', 0),
(174, 190, 175, 'ihome-cmt-type', 'upload/photos/1306229972328.gif', 0, 0, 0, '1306258772', 0),
(175, 190, 175, 'badge_normal', 'upload/photos/1306229972350.png', 0, 0, 0, '1306258773', 0),
(183, 177, 175, '86f884d0fa638a129b5027fd', 'upload/photos/1308506141349.jpg', 0, 0, 0, '1308534942', 0),
(184, 177, 175, '200712180324531293', 'upload/photos/1308506171532.jpg', 0, 0, 0, '1308534973', 0),
(185, 177, 175, 'W020070926624467283600', 'upload/photos/1308506202310.jpg', 0, 0, 0, '1308535005', 0);

-- --------------------------------------------------------

--
-- 表的结构 `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `reso_id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `name` text NOT NULL,
  `path` tinytext NOT NULL,
  `description` text NOT NULL,
  `rank` tinytext NOT NULL,
  `type` tinytext NOT NULL,
  `size` tinytext NOT NULL,
  `show` tinyint(4) NOT NULL,
  `view_num` int(11) NOT NULL,
  `down_num` int(11) NOT NULL,
  `origin` tinyint(4) NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`reso_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `resources`
--

INSERT INTO `resources` (`reso_id`, `classid`, `upid`, `name`, `path`, `description`, `rank`, `type`, `size`, `show`, `view_num`, `down_num`, `origin`, `dateline`, `user`) VALUES
(7, 167, 166, '更新过的ZIP文件', 'upload/resource/1303388594.zip', '好文件，更新过！', '5', 'zip', '5.33 KB', 3, 0, 0, 1, '1303507559', 0),
(6, 167, 166, '歌曲试听', 'http://sunsonworld.com/admin/index.php?display=resource_add', '<p>资源不错</p>', '1', 'unknow', 'unknow', 3, 0, 0, 1, '1308743917', 0),
(8, 168, 166, '更新过的资源PNG', 'upload/resource/1303481953.jpg', '更新过的资源PNG', '1', 'jpg', '137.67 KB', 3, 0, 0, 1, '1304124462', 0),
(17, 167, 166, '上载的图片', 'upload/resource/1303401356.jpg', '<p>看看效果怎样</p>', '1', 'jpg', '995.06 KB', 3, 0, 0, 1, '1308743845', 0),
(18, 167, 166, '图片资源', 'upload/resource/1303401370.jpg', '<p>网页截图</p>', '3', 'jpg', '33.05 KB', 3, 0, 0, 1, '1308743815', 0),
(19, 167, 166, '淘宝LOGO', 'upload/resource/1305176405.swf', '好东西,淘宝的特色LOGO文件，很有趣的哦<br />', '1', 'swf', '35.21 KB', 3, 0, 0, 1, '1308743969', 0);

-- --------------------------------------------------------

--
-- 表的结构 `resources_comment`
--

CREATE TABLE IF NOT EXISTS `resources_comment` (
  `origin` tinyint(4) NOT NULL,
  `dateline` tinytext NOT NULL,
  `oppose` int(11) NOT NULL,
  `support` int(11) NOT NULL,
  `city` tinytext NOT NULL,
  `province` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `reso_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `resources_comment`
--


-- --------------------------------------------------------

--
-- 表的结构 `safety`
--

CREATE TABLE IF NOT EXISTS `safety` (
  `username` tinytext NOT NULL,
  `password` text NOT NULL,
  `question` tinytext NOT NULL,
  `answer` text NOT NULL,
  `email` tinytext NOT NULL,
  `ip` text NOT NULL,
  `dateline` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `safety`
--

INSERT INTO `safety` (`username`, `password`, `question`, `answer`, `email`, `ip`, `dateline`, `user`) VALUES
('admin', '0651327e996696f2828ec95e7d612657', '9', '0651327e996696f2828ec95e7d612657', '1040058145@qq.com', '127.0.0.1', '1308744132', 0);

-- --------------------------------------------------------

--
-- 表的结构 `self_info`
--

CREATE TABLE IF NOT EXISTS `self_info` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` tinytext NOT NULL,
  `truename` tinytext NOT NULL,
  `sex` tinytext NOT NULL,
  `birthday` tinytext NOT NULL,
  `birthplace` tinytext NOT NULL,
  `nowplace` tinytext NOT NULL,
  `lovestate` tinytext NOT NULL,
  `bloodtype` tinytext NOT NULL,
  `uniqsign` text NOT NULL,
  `selfintro` tinytext NOT NULL,
  `ownpage` tinytext,
  `phone` tinytext NOT NULL,
  `mobile` tinytext NOT NULL,
  `qq` tinytext NOT NULL,
  `msn` tinytext NOT NULL,
  `email` tinytext,
  `edu_bg` text NOT NULL,
  `prischool` tinytext NOT NULL,
  `midschool` tinytext NOT NULL,
  `university` tinytext NOT NULL,
  `academy` tinytext NOT NULL,
  `profession` tinytext NOT NULL,
  `company` tinytext NOT NULL,
  `position` tinytext NOT NULL,
  `income` tinytext,
  `idol` tinytext NOT NULL,
  `music` text NOT NULL,
  `movie` text NOT NULL,
  `book` text NOT NULL,
  `sport` text NOT NULL,
  `other_hobby` text,
  `dateline` text NOT NULL,
  `user` int(11) NOT NULL,
  `head_pic` text,
  `Master_ remark` text,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `self_info`
--

INSERT INTO `self_info` (`sid`, `nickname`, `truename`, `sex`, `birthday`, `birthplace`, `nowplace`, `lovestate`, `bloodtype`, `uniqsign`, `selfintro`, `ownpage`, `phone`, `mobile`, `qq`, `msn`, `email`, `edu_bg`, `prischool`, `midschool`, `university`, `academy`, `profession`, `company`, `position`, `income`, `idol`, `music`, `movie`, `book`, `sport`, `other_hobby`, `dateline`, `user`, `head_pic`, `Master_ remark`) VALUES
(1, '天之骄子`3', '张洋`3', 'male`1', '1989-07-31`2', '湖北-随州`2', '湖北-荆州`2', '2`0', 'O`2', '我思故我在<img border="0" alt="" src="/sunsonworld/upload/images/20110620173741_65560.gif" />`2', '阳光与欢乐同在，与我同在`1', 'http://www.sunsonworld.com`2', '07168481739`2', '18995863040`2', '1040058145`2', 'hotil@126.com`2', 'zhangyang20085081@126.com`2', 'undergraduate`2', '星余小学`3', '尚市二中|文峰高中`3', '长江大学`3', '中山大学`3', 'INTERNET`3', '天骄天下网络中心`3', '网站总监`2', '20W`2', '成龙`3', '灰色空间`2', '《美丽的神话》`1', '文学`0', '乒乓球|跑步`3', '看书|上网|学习|编程|玩电脑`3', '1308620279', 0, 'head_pic_0.jpg', '阳光与欢乐同在与我同在'),
(2, '天之骄子`3', '张洋`3', 'male`1', '1989-07-31`2', '湖北-随州`2', '湖北-荆州`2', '2`0', 'O`2', '我思故我在<img style="width:129px;height:147px;" border="0" alt="" src="/sunsonworld/upload/photos/1303811500440.jpg" width="133" height="115" />`2', '阳光与欢乐同在，与我同在`1', 'http://www.sunsonworld.com`2', '07168481739`2', '18995863040`2', '1040058145`2', 'hotil@126.com`2', 'zhangyang20085081@126.com`2', 'undergraduate`2', '星余小学`3', '尚市二中|文峰高中`3', '长江大学`3', '中山大学`3', 'INTERNET`3', '天骄天下网络中心`3', '网站总监`3', '20W`', '成龙`3', '灰色空间`2', '《美丽的神话》`1', '文学`0', '乒乓球|跑步`3', '看书|上网|学习|编程|玩电脑`3', '1305466044', 1, '1111', '阳光与欢乐同在与我同在');

-- --------------------------------------------------------

--
-- 表的结构 `siteconfig`
--

CREATE TABLE IF NOT EXISTS `siteconfig` (
  `title` tinytext,
  `sitename` tinytext,
  `description` text,
  `keyword` tinytext,
  `url` tinytext,
  `statistic` text,
  `show` int(11) DEFAULT NULL,
  `close_reason` text,
  `question` text,
  `answer` text,
  `loverzone_on` int(11) DEFAULT NULL,
  `rewrite_on` int(11) DEFAULT NULL,
  `timezone` tinytext,
  `smtpusermail` tinytext,
  `smtpserver` tinytext,
  `smtpserverport` tinytext,
  `smtpuser` tinytext,
  `smtppass` tinytext,
  `theme` tinytext,
  `user` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `siteconfig`
--

INSERT INTO `siteconfig` (`title`, `sitename`, `description`, `keyword`, `url`, `statistic`, `show`, `close_reason`, `question`, `answer`, `loverzone_on`, `rewrite_on`, `timezone`, `smtpusermail`, `smtpserver`, `smtpserverport`, `smtpuser`, `smtppass`, `theme`, `user`) VALUES
('天骄天下_中国首个专为个人站长打造的建站系统', '天骄天下', '好网站，上天骄', '天骄天下，文学视界', 'http://www.sunsonworld.com', '<script>\r\nalert("dsfd")\r\n</script>', 3, '站点维护中……', '我的学号', '200800130', 1, 1, '+8', '1040058145@qq.com', 'SMTP.QQ.COM', '25', '1040058145', '', 'default', 0);

-- --------------------------------------------------------

--
-- 表的结构 `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `originpage` text NOT NULL,
  `firstpage` text NOT NULL,
  `dateline` tinytext NOT NULL,
  `total` int(11) NOT NULL,
  `today` int(11) NOT NULL,
  `shield` tinyint(4) NOT NULL,
  `origin` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- 转存表中的数据 `visitors`
--

INSERT INTO `visitors` (`vid`, `ip`, `originpage`, `firstpage`, `dateline`, `total`, `today`, `shield`, `origin`, `user`) VALUES
(9, '202.193.255.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304367604', 2, 0, 0, 0, 0),
(8, '202.196.015.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304367610', 2, 0, 0, 0, 0),
(7, '202.193.175.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304367612', 2, 0, 0, 0, 0),
(6, '202.193.255.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304367614', 2, 0, 0, 0, 0),
(13, '58.50.0.113', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304467837', 1, 1, 0, 1, 0),
(14, '202.114.045.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304532102', 8, 1, 0, 1, 0),
(15, '202.121.247.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304532102', 6, 4, 0, 0, 0),
(16, '202.003.255.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304446106', 7, 3, 0, 0, 0),
(17, '202.004.159.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304446108', 5, 2, 0, 0, 0),
(18, '202.008.127.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304446111', 10, 2, 0, 0, 0),
(19, '202.012.026.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304446110', 3, 1, 0, 0, 0),
(20, '202.192.127.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304446107\r\n1304446107\r\n1304446107\r\n1304446107\r\n1304446107', 4, 2, 0, 0, 0),
(10, '202.197.159.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304467837', 5, 0, 0, 0, 0),
(11, '202.197.175.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304467837', 3, 0, 0, 0, 0),
(12, '202.198.111.255', 'http://localhost/sunsonworld/admin/function/visitor_record.php', 'http://localhost/sunsonworld/admin/function/visitor_record.php', '1304467837', 3, 0, 1, 0, 0),
(78, '127.0.0.1', 'http://127.0.0.1/ssw/', 'http://127.0.0.1/ssw/', '1308781172', 15, 2, 1, 1, 0);
