<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
$installer = $this;
$installer->startSetup();
 
$installer->run("
CREATE TABLE `{$this->getTable('meigee_slides/slide')}` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `link` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
");
$installer->run("
ALTER TABLE `{$this->getTable('meigee_slides/slide')}` ADD `image` VARCHAR( 255 ) NOT NULL
");
 
$installer->endSetup();
