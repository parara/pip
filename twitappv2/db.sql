create user 'twitapp'@'localhost' identified by 'tw1t4pp';
create database testdb;
use testdb;
grant all on *.* to 'twitapp'@'localhost';

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'estu@btech.co.id');

DROP TABLE IF EXISTS `progres`;
CREATE TABLE IF NOT EXISTS `progres` (
  `id` char(1) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `progres` (`id`, `name`) VALUES
('0', 'Belum Verifikasi'),
('1', 'Verifikasi'),
('2', 'Pengecekan Lapangan'),
('3', 'Pembahasan'),
('4', 'Jawaban');

DROP TABLE IF EXISTS `lapor`;
CREATE TABLE IF NOT EXISTS `lapor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_twit` BIGINT NOT NULL,
  `tanggal` VARCHAR(50) NOT NULL,
  `name` VARCHAR(25) NOT NULL,
  `isi` VARCHAR (160) NOT NULL,
  `id_progres` char(1) NOT NULL,
  `lastvisit` date DEFAULT NULL,
  `komentar` VARCHAR(300) DEFAULT NULL,
  `editor` VARCHAR(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=501 ;

INSERT INTO `lapor` (`id`,`id_twit`,`tanggal`,`name`,`isi`,`id_progres`,`lastvisit`) VALUES
  (1,529465502553227264,'Tue Nov 04 02:49:47 +0000 2014','@yayaxzz','#JogjaAsat ','1','2012-04-17'),
  (2,529465353454112768,'Tue Nov 04 02:49:11 +0000 2014','@yayaxzz','My house . . \"killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/b1r5fdXpJS\"','0','2012-04-17'),
  (3,529464169620570113,'Tue Nov 04 02:44:29 +0000 2014','@gabrielalaras','RT @chirpstory: .@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8Dn…','0','2012-04-17'),
  (4,529462433182523393,'Tue Nov 04 02:37:35 +0000 2014','@st_kurniawan','RT @chirpstory: .@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8Dn…','0','2012-04-17'),
  (5,529462351913709568,'Tue Nov 04 02:37:16 +0000 2014','@Rio_Ramabaskara','RT @chirpstory: .@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8Dn…','0','2012-04-17'),
  (6,529461612143341568,'Tue Nov 04 02:34:19 +0000 2014','@killthedj','RT @chirpstory: .@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8Dn…','1','2012-04-17'),
  (7,529456876480499712,'Tue Nov 04 02:15:30 +0000 2014','@dodoputrabangsa','RT @chirpstory: .@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8Dn…','0','2012-04-17'),
  (8,529376866042249216,'Mon Nov 03 20:57:34 +0000 2014','@penumpang_gelap','Pak Wali kok ga ada? \"@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" http://t.co/GCLddesCS0 \"','0','2012-04-17'),
  (9,529365253227036672,'Mon Nov 03 20:11:26 +0000 2014','@sangkunet','RT @chirpstory: .@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8Dn…','0','2012-04-17'),
  (10,529364395793473536,'Mon Nov 03 20:08:01 +0000 2014','@chirpstory','.@killthedj\'s \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOraDidol\" enters lunch talk. http://t.co/wq8DnmUE8U','0','2012-04-17');

DROP TABLE IF EXISTS `mailserver`;
CREATE TABLE `mailserver` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `server` varchar(30) DEFAULT NULL,
  `port` varchar(10) DEFAULT NULL,
  `app` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mailserver` (`username`, `password`, `server`, `port`, `app`) VALUES
('estu@btech.co.id', 'cobainaja', 'smtp.gmail.com', '587', `twitter`);

DROP TABLE IF EXISTS `twitter`;
CREATE TABLE `twitter` (
  `CONSUMER_KEY` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONSUMER_SECRET` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OAUTH_TOKEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OAUTH_TOKEN_SECRET` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HASTAG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `twitter` VALUES ('7Gr71Q1V5ROhpOqTjRlEvjBOv','moWQS3WzSjmkCmrRaAcuuzcDzJm7J0LdMatMfrXlUXg6Uxuzpz','2769491365-1pRnlMNWMg9HP3DJff5qLwLroraPhOChmq6K68e','J794v0XfgYmJpDBoLmrEuSH2GOtyzE4FeSzI0TPRiN7c7','#JogjaAsat','twitter');

