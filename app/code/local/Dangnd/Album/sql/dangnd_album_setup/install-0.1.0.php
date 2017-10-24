<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 24-10-2017
 * Time: 01:58 CH
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('dangnd_album/album'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity' => true,
        'unsigned' => true,
        'primary' => true
    ), 'Album ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Album Name');
$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
    ->newTable($installer->getTable('dangnd_album/image'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity' => true,
        'unsigned' => true,
        'primary' => true
    ), 'Image ID')
    ->addColumn('albumId', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'unsigned' => true,
        'nullable' => false
    ), 'Album Id')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Title')
    ->addColumn('link', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Link Image')
    ->addForeignKey($installer->getFkName('dangnd_album/image', 'albumId',
        'dangnd_album/album', 'id'), 'albumId',
        $installer->getTable('dangnd_album/album'), 'id',
        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
$installer->getConnection()->createTable($table);

$installer->endSetup();