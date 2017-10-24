<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 24/10/2017
 * Time: 14:02
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$album = $installer->getConnection()
    ->newTable($installer->getTable('tbl_album'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Album ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name');
$image = $installer->getConnection()
    ->newTable($installer->getTable('tbl_image'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Album ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addColumn('link', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addForeignKey(
        $installer->getFkName('tbl_image', 'album_id', 'tbl_album','id'),
        'album_id',
        $installer->getTable('tbl_album'),
        'id',
        Varien_Db_Ddl_Table::ACTION_CASCADE,
        Varien_Db_Ddl_Table::ACTION_CASCADE
    );
$installer->getConnection()->createTable($album);
$installer->getConnection()->createTable($image);
$installer->endSetup();