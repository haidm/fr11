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

$menuInfo = $installer->getConnection()
    ->newTable($installer->getTable('menu_infomation'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Menu Info ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addColumn('active', Varien_Db_Ddl_Table::TYPE_BOOLEAN, null, array(
        'nullable'  => false,
    ), 'Active')
    ->addColumn('Type', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'Type');

$menuItem = $installer->getConnection()
    ->newTable($installer->getTable('menu_item'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Menu item ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Title')
    ->addColumn('class', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Class')
    ->addColumn('link', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Link')
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'unsigned'  => true,
        'nullable'  => true,
    ), 'Content')
    ->addColumn('parent', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Parent');

$installer->getConnection()->createTable($menuInfo);
$installer->getConnection()->createTable($menuItem);
$installer->endSetup();