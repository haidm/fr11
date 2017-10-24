<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/17/2017
 * Time: 10:43 AM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('myalbum/album'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Album ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name Album');

$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
	->newTable($installer->getTable('myalbum/albumimage'))
	->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
		'identity' => true,
		'unsigned' => true,
		'primary' => true
	), 'Image ID')
	->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
		'unsigned' => true,
		'nullable' => false
	), 'Album Id')
	->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
		'nullable' => false
	), 'Title')
	->addColumn('link', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
		'nullable' => false
	), 'Link Image')
	->addForeignKey($installer->getFkName('myalbum/albumimage', 'album_id',
		'myalbum/album', 'id'), 'album_id',
		$installer->getTable('myalbum/album'), 'id',
		Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
$installer->getConnection()->createTable($table);

$installer->endSetup();