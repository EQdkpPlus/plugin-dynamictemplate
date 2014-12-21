<?php

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

$dynamictemplateSQL = array(

  'uninstall' => array(
    1     => 'DROP TABLE IF EXISTS `__dynamictemplate`',
  ),

  'install'   => array(
    1	  => "CREATE TABLE `__dynamictemplate` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`sortid` TINYINT(3) UNSIGNED NULL DEFAULT '0',
	`active` TINYINT(3) UNSIGNED NULL DEFAULT '0',
	`name` TEXT COLLATE utf8_bin NOT NULL,
	`value` TEXT COLLATE utf8_bin NOT NULL,
	PRIMARY KEY (`id`)
	)
	DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
  ",) 
);

?>