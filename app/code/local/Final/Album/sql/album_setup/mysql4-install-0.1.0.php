<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 10/24/2017
 * Time: 2:02 PM
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

///////////////////////////////////table album

$table = $installer->getConnection()
    ->newTable($installer->getTable('album'))
    ->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
    ), 'Album ID')
    ->addColumn('album_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false,
    ), 'Album Name');
$installer->getConnection()->createTable($table);

//////////////////////////////////////table image

$table = $installer->getConnection()
    ->newTable($installer->getTable('image'))
    ->addColumn('image_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
    ), 'Image ID')
    ->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
    ), 'Image ID')
    ->addColumn('image_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false,
    ), 'Image Name')
    ->addColumn('image_link', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
    'nullable' => false,
    ), 'Image Link')
    ->addForeignKey($installer->getFkName('image', 'album_id',
        'album', 'album_id'), 'album_id',
        $installer->getTable('album'), 'album_id',
        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
$installer->getConnection()->createTable($table);

$installer->endSetup();