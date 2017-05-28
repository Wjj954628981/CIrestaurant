-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2017 at 06:11 PM
-- Server version: 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_res`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `idorder` int(11) NOT NULL,
  `appointment_time` datetime DEFAULT NULL,
  `appointment_contact` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `table_idtable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idemployee` int(11) NOT NULL,
  `employee_name` varchar(45) DEFAULT NULL,
  `employeecol_ position` varchar(45) DEFAULT '服务员',
  `join_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idemployee`, `employee_name`, `employeecol_ position`, `join_time`) VALUES
(17020100, '王佳颉', '厨师', '2017-02-01 16:23:50'),
(17030200, '严浩', '厨师', '2017-03-02 16:28:15'),
(17030201, '褚熠彤', '厨师', '2017-03-02 16:28:49'),
(17030202, '姜俊伟', '厨师', '2017-03-02 16:29:22'),
(17031600, '杨慧俊', '服务员', '2017-03-16 16:24:48'),
(17031601, '水雪', '服务员', '2017-03-16 16:25:21'),
(17031602, '严冰蓝', '服务员', '2017-03-16 16:26:20'),
(17033100, '吴芳林', '服务员', '2017-03-31 16:26:59'),
(17033101, '秦谷雪', '服务员', '2017-03-31 16:27:30'),
(17033102, '苗天磊', '服务员', '2017-03-31 16:27:52'),
(17042600, '刘帆', '大堂经理', '2017-04-26 16:29:42'),
(17042601, '李志伟', '大堂经理', '2017-04-26 16:29:59'),
(17042602, 'xhy', '服务员', '2017-05-06 21:38:47'),
(17042603, 'dd', '服务员', '2017-05-06 21:49:51'),
(17042604, 'wjjjjj', '服务员', '2017-05-06 21:50:39'),
(17042605, '菜鸟教程', '服务员', '2017-05-07 13:51:45'),
(17042606, '菜鸟教程', '服务员', '2017-05-07 13:59:03'),
(17042607, '菜鸟教程', '服务员', '2017-05-07 14:00:29'),
(17042608, 'lll', '服务员', '2017-05-07 14:00:56'),
(17042609, 'lll', '服务员', '2017-05-07 14:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `idlabel` int(11) NOT NULL,
  `label_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`idlabel`, `label_name`) VALUES
(1, '热菜'),
(2, '凉菜'),
(3, '汤菜'),
(4, '汉堡类'),
(5, '小吃类'),
(6, '炸鸡类'),
(7, '小吃类'),
(8, '套餐'),
(9, '主食'),
(10, '推荐'),
(11, '热门'),
(12, '优惠');

-- --------------------------------------------------------

--
-- Table structure for table `label_has_menu`
--

CREATE TABLE `label_has_menu` (
  `label_idlabel` int(11) DEFAULT NULL,
  `menu_idmenu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `idmaterial` int(11) NOT NULL,
  `material_name` varchar(45) DEFAULT NULL,
  `material_num` int(11) DEFAULT NULL,
  `material_min` int(11) DEFAULT NULL,
  `material_ unit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`idmaterial`, `material_name`, `material_num`, `material_min`, `material_ unit`) VALUES
(1, '猪肉', 30, 10, '斤'),
(2, '猪肘', 20, 5, '个'),
(3, '牛鞭', 20, 5, '根'),
(4, '羊肾', 20, 5, '个'),
(5, '火鸡肉', 10, 2, '斤'),
(6, '鸭肉', 20, 10, '斤'),
(7, '熏肉', 50, 10, '斤'),
(8, '肉松', 50, 10, '两'),
(9, '香肠', 20, 5, '跟'),
(10, '驴肉', 10, 2, '斤'),
(11, '淡水鱼', 10, 5, '条'),
(12, '咸水鱼', 10, 2, '条'),
(13, '鱼制品', 10, 2, '种'),
(14, '虾', 20, 5, '斤'),
(15, '蟹', 20, 5, '只'),
(16, '扇贝', 30, 10, '斤'),
(17, '土豆', 30, 10, '斤'),
(18, '胡萝卜', 30, 10, '斤'),
(19, '白萝卜', 30, 10, '斤'),
(20, '青椒', 30, 10, '斤'),
(21, '黄瓜', 20, 10, '斤'),
(22, '白菜', 30, 10, '斤'),
(23, '茄子', 30, 10, '斤'),
(24, '韭菜', 30, 10, '斤'),
(25, '豆苗', 30, 10, '斤'),
(26, '豆角', 30, 10, '斤'),
(27, '西兰花', 30, 10, '斤'),
(28, '菜花', 30, 10, '斤'),
(29, '西红柿', 30, 10, '斤'),
(30, '芹菜', 30, 10, '斤'),
(31, '藕', 30, 10, '斤'),
(32, '紫甘蓝', 30, 10, '斤'),
(33, '紫薯', 30, 10, '斤'),
(34, '山药', 30, 10, '斤'),
(35, '南瓜', 30, 10, '斤'),
(36, '冬瓜', 30, 10, '斤'),
(37, '西葫芦', 30, 10, '斤'),
(38, '香菜', 30, 10, '斤'),
(39, '油麦菜', 30, 10, '斤'),
(40, '生菜', 30, 10, '斤'),
(41, '白菜', 30, 10, '斤'),
(42, '圆白菜', 30, 10, '斤'),
(43, '小白菜', 30, 10, '斤'),
(44, '油菜', 30, 10, '斤'),
(45, '空心菜', 30, 10, '斤'),
(46, '娃娃菜', 30, 10, '斤'),
(47, '东北大米', 100, 20, '斤'),
(48, '小站稻米', 100, 20, '斤'),
(49, '面粉', 50, 10, '斤'),
(50, '玉米面', 30, 10, '斤'),
(51, '意大利面', 20, 5, '斤'),
(52, '杂粮', 20, 3, '斤'),
(53, '鸡蛋', 100, 10, '斤'),
(54, '鸭蛋', 100, 10, '斤'),
(55, '香蕉', 10, 5, '斤'),
(56, '苹果', 10, 5, '斤'),
(57, '花生', 3, 5, '斤');

-- --------------------------------------------------------

--
-- Table structure for table `material_has_menu`
--

CREATE TABLE `material_has_menu` (
  `material_idmaterial` int(11) DEFAULT NULL,
  `menu_idmenu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `dish_name` varchar(45) DEFAULT NULL,
  `dish_price` varchar(45) DEFAULT NULL,
  `dish_type` int(11) DEFAULT NULL,
  `dish_description` varchar(200) DEFAULT NULL,
  `dish_photo` varchar(45) DEFAULT NULL,
  `dish_state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `dish_name`, `dish_price`, `dish_type`, `dish_description`, `dish_photo`, `dish_state`) VALUES
(1, '卤汁肉夹馍', '8', 3, '小吃，主要材料有五花肉600克、面粉300克、盐1茶匙。', 'luzhiroujiamo.jpg', 1),
(2, '黄馍馍', '3', 3, '小吃，原料由糜子面发酵，包裹蒸煮好的红枣、豆类挤压掺合成的豆枣泥馅蒸制而成，口感松软带甜，营养丰富易消化。', 'huangmomo.jpg', 1),
(3, '裤带面', '15', 3, '指biangbiang面，陕西关中特色传统风味面食。', 'kudaimian.jpg', 1),
(4, '凉拌三丝', '12', 2, '红绿白三色。鲜咸酸三味。软、脆、滑多种口感，清香爽口不腻。是以海带，青椒，红椒为原料的一道美味佳肴，适于糖尿病人的低热量菜谱。', 'liangbansansi.jpg', 1),
(5, '荷塘小菜', '15', 2, '莲藕100克、黑木耳50克、荷兰豆50克、胡萝卜、大蒜各适量。', 'hetangxiaocai.jpg', 1),
(6, '米饭', '2', 3, '东北黑土地大米', 'mifan.jpg', 1),
(7, '馒头', '1', 3, '香喷喷的大馒头', 'mantou.jpg', 1),
(8, '拍黄瓜', '12', 2, '清凉爽口，适合夏季食用。', 'paihuanggua.jpg', 1),
(9, '鱼香肉丝', '20', 1, '辣中带酸，酸中带甜，甜中带咸，咸中又带鲜……味道丰富而不杂腻！恰似女儿心，捉摸不透，又飘忽不定，似近又远，偶尔火辣又偶尔羞涩。', 'yuxiangrousi.jpg', 1),
(10, '懒人版糖醋排骨', '20', 1, '国庆在家宴客最大小通吃的菜,每每端上餐桌,总能引发一阵小小的骚动，大人也不顾形象的和小朋友开抢起来，没几下子，一盘堆尖的糖醋排骨就没影了。', 'lanrenbantangcupaigu.jpg', 1),
(11, '红烧豆腐', '20', 1, '豆瓣酱的香是精髓,真乃拌饭神器。', 'hongshaodoufu.jpg', 1),
(12, '麻辣香锅', '20', 1, '自己在家做麻辣香锅，油少，不放味精，材料新鲜，种类多样，一大锅端上桌，好吃满足又放心！ ', 'malaxiangguo.jpg', 1),
(13, '红烧肉', '20', 1, '吸饱了肉汁的蒜瓣比肉还好吃，软糯得那才叫入口即化。', 'hongshaorou.jpg', 1),
(14, '秘制老醋花生', '15', 2, '小粒花生200克，原香醋80克，糖60克，香菜少许', 'mizhilaocuhuasheng.jpg', 1),
(15, '蓝莓山药', '20', 2, '又称蓝莓山药泥，是夏日里既美味又养生，同时又老少皆宜的凉菜，说是凉菜倒是更象饭前甜点，吃起来酸甜可口。', 'lanmeishanyao.jpg', 1),
(16, '红星二锅头', '14', 4, '香型：清香型 酒精度数：56 净含量(ml)：500 包装方式：裸瓶装', 'hongxingerguotou.jpg', 0),
(17, '青岛啤酒', '7', 4, '原麦汁浓度为十二度，酒精含量3．5－4%。', 'qingdaopijiu.jpg', 0),
(18, '可口可乐（听）', '4', 4, '！。！', 'kekoukele.jpg', 0),
(19, '雪碧（2L）', '14', 4, '分为冷和常温~', 'xuebi.jpg', 0),
(20, '鲜橙多（1.2L）', '10', 4, '美味多多', 'xianchengduo.jpg', 0),
(21, '红烧排骨', '45', 1, '红烧排骨，家常菜。此菜味道香咸，排骨酥烂，色泽金红。男女老少人都可食用。适宜于 气血不足，阴虚纳差者；湿热痰滞内蕴者慎服；肥胖、血脂较高者不宜多食。', 'hongshaopaigu.jpg', 1),
(22, '回锅肉', '28', 1, '口味独特，色泽红亮，肥而不腻，入口浓香', 'huiguorou.jpg', 1),
(23, '四喜丸子', '36', 1, '由四个色泽金黄、香味四溢、形态栩栩如生的丸子组成，寓意人生福、禄、寿、喜。', 'sixiwanzi.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idorder` int(11) NOT NULL,
  `order_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `table_idtable` int(11) NOT NULL,
  `menu_idmenu` int(11) NOT NULL,
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '1 等待制作（刚下单待认领）2是正在制作 已经认领 3是制作完毕 4是已经买单完成',
  `order_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idorder`, `order_time`, `table_idtable`, `menu_idmenu`, `order_state`, `order_description`) VALUES
(1, '2017-05-07 14:22:37', 1, 1, 2, NULL),
(2, '2017-05-07 14:22:37', 2, 3, 3, NULL),
(4, '0000-00-00 00:00:00', 0, 0, 2, NULL),
(5, '0000-00-00 00:00:00', 1, 2, 2, NULL),
(10, '2017-06-06 00:00:00', 10, 23, 1, '不放辣'),
(11, '2018-08-08 00:00:00', 1, 1, 2, '22'),
(12, '2017-05-07 14:47:19', 1, 1, 1, NULL),
(13, '2017-05-07 14:47:19', 1, 1, 2, NULL),
(14, '2017-05-07 14:59:46', 2, 3, 3, NULL),
(15, '2017-05-07 15:00:59', 10, 10, 4, NULL),
(16, '2017-05-07 15:01:11', 3, 12, 1, ''),
(17, '2017-05-07 15:01:19', 3, 12, 2, ''),
(18, '2017-05-07 15:04:02', 3, 12, 2, NULL),
(19, '2017-05-07 15:04:25', 3, 12, 2, NULL),
(20, '2017-05-07 15:04:37', 3, 99, 1, NULL),
(21, '2017-05-07 15:05:47', 3, 99, 1, 'wjjxx'),
(22, '2017-05-07 15:06:43', 3, 99, 1, 'wjjxx'),
(23, '2017-05-07 15:08:28', 7, 13, 4, 'xtest'),
(24, '2017-05-07 15:08:28', 7, 9, 4, 'xtest'),
(25, '2017-05-07 15:08:28', 7, 21, 4, 'xtest'),
(26, '2017-05-07 15:09:08', 7, 1, 4, 'xtest'),
(27, '2017-05-07 15:09:08', 7, 7, 4, 'xtest'),
(28, '2017-05-07 15:09:08', 7, 6, 4, 'xtest'),
(29, '2017-05-07 15:09:08', 7, 6, 4, 'xtest'),
(30, '2017-05-07 15:37:05', 7, 2, 4, 'xtest'),
(31, '2017-05-07 15:37:05', 7, 2, 4, 'xtest'),
(32, '2017-05-07 15:37:24', 9, 21, 1, 'xtest'),
(33, '2017-05-07 15:37:24', 9, 21, 2, 'xtest'),
(34, '2017-05-07 15:50:45', 44, 9, 1, 'xtest'),
(35, '2017-05-07 15:51:43', 33, 9, 1, 'xtest'),
(36, '2017-05-07 16:03:55', 12, 23, 2, 'xtest'),
(37, '2017-05-07 16:03:55', 12, 23, 1, 'xtest'),
(38, '2017-05-07 16:08:15', 55, 2, 1, NULL),
(39, '2017-05-07 19:30:11', 0, 8, 1, 'xtest'),
(40, '2017-05-07 19:30:11', 0, 2, 1, 'xtest'),
(41, '2017-05-07 19:30:11', 0, 2, 1, 'xtest'),
(42, '2017-05-08 11:35:19', 0, 14, 1, 'xtest'),
(43, '2017-05-08 11:35:19', 0, 14, 1, 'xtest'),
(44, '2017-05-08 22:45:48', 15, 8, 1, 'xtest'),
(45, '2017-05-08 22:45:48', 15, 5, 1, 'xtest');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `idtable` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL COMMENT '0为可使用；1为被预定；2为被占用；3为需清理',
  `table_num` int(11) DEFAULT NULL,
  `table_type` int(11) DEFAULT NULL COMMENT '0为堂食；1为包间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`idtable`, `state`, `table_num`, `table_type`) VALUES
(1, 1, 2, 0),
(2, 1, 2, 0),
(3, 1, 2, 0),
(4, 1, 2, 0),
(5, 0, 2, 0),
(6, 3, 2, 0),
(7, 1, 4, 0),
(8, 0, 4, 0),
(9, 0, 4, 0),
(10, 0, 4, 0),
(11, 1, 4, 0),
(12, 3, 4, 0),
(13, 1, 6, 0),
(14, 2, 6, 0),
(15, 1, 6, 1),
(16, 0, 6, 1),
(17, 0, 10, 0),
(18, 1, 10, 1),
(19, 3, 10, 1),
(20, 0, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `idUser` int(11) NOT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '0为客户；1为服务员；2为厨师；10为大堂经理',
  `username` varchar(45) DEFAULT NULL,
  `userpassword` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `user_type`, `username`, `userpassword`) VALUES
(1, 0, '严怡悦', '123'),
(2, 0, '平雄逸', '123'),
(3, 0, '王伟祺', '123'),
(4, 0, '韦新荣', '123'),
(7, 0, 'helloworld', '123'),
(8, 0, '孟立诚', '123'),
(9, 1, '杨慧俊', '111'),
(10, 1, '水雪', '111'),
(11, 1, '严冰蓝', '111'),
(12, 1, '吴芳林', '111'),
(13, 1, '秦谷雪', '111'),
(14, 1, '苗天磊', '111'),
(15, 2, '严浩', '012'),
(16, 2, '褚熠彤', '012'),
(17, 2, '王佳颉', '012'),
(18, 2, '姜俊伟', '012'),
(19, 10, '刘帆', '000'),
(20, 10, '李志伟', '000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `fk_appointment_table1_idx` (`table_idtable`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idemployee`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`idlabel`);

--
-- Indexes for table `label_has_menu`
--
ALTER TABLE `label_has_menu`
  ADD KEY `label_idlabel` (`label_idlabel`),
  ADD KEY `menu_idmenu` (`menu_idmenu`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`idmaterial`);

--
-- Indexes for table `material_has_menu`
--
ALTER TABLE `material_has_menu`
  ADD KEY `material_idmaterial` (`material_idmaterial`),
  ADD KEY `menu_idmenu` (`menu_idmenu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `fk_order_table_idx` (`table_idtable`),
  ADD KEY `fk_order_menu1_idx` (`menu_idmenu`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`idtable`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idemployee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17042610;
--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `idlabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `idmaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `idtable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `label_has_menu`
--
ALTER TABLE `label_has_menu`
  ADD CONSTRAINT `label_has_menu_ibfk_1` FOREIGN KEY (`label_idlabel`) REFERENCES `label` (`idlabel`),
  ADD CONSTRAINT `label_has_menu_ibfk_2` FOREIGN KEY (`menu_idmenu`) REFERENCES `menu` (`idmenu`);

--
-- Constraints for table `material_has_menu`
--
ALTER TABLE `material_has_menu`
  ADD CONSTRAINT `material_has_menu_ibfk_1` FOREIGN KEY (`material_idmaterial`) REFERENCES `material` (`idmaterial`),
  ADD CONSTRAINT `material_has_menu_ibfk_2` FOREIGN KEY (`menu_idmenu`) REFERENCES `menu` (`idmenu`);
