create database manhwalist;
 
use manhwalist;
 
CREATE TABLE `manhwa` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(100),
  `chapter` varchar(100),
  PRIMARY KEY  (`id`)
);