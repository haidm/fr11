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
    ->newTable($installer->getTable('mymodel/album'))
    ->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'album ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
        'nullable'  => true,
    ), 'Description');

$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
    ->newTable($installer->getTable('mymodel/photo'))
    ->addColumn('photo_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Photo ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addColumn('url', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
        'nullable'  => true,
    ), 'Url');

$installer->getConnection()->createTable($table);

$installer->endSetup();