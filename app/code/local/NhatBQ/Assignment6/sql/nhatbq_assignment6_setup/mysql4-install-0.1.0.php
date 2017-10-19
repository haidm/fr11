<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('assignment6/student')}` (
      `student_id` int(11) NOT NULL auto_increment,
      `name` text,
      `email` text,
      `address` text,
      `birthday` datetime,
      
      PRIMARY KEY  (`student_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
    INSERT INTO `{$installer->getTable('assignment6/student')}` VALUES (1,'NhatBQ','nhatbui0308@gmail.com','Hanoi','03-08-1995');
");
$installer->endSetup();