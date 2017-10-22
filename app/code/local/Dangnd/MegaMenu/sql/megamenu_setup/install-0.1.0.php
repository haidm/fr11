<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 12:05 SA
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

//$table = $installer->getConnection()
//    ->newTable($installer->getTable('megamenu/menu'))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID');
//$installer->getConnection()->createTable($table);
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable('megamenu/menu_attr'))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID')
//    ->addColumn('menu_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(), 'Menu ID')
//    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 11, array(), 'Attribute Name')
//    ->addForeignKey($installer->getFkName('megamenu/menu_attr', 'menu_id',
//        'megamenu/menu', 'id'), 'menu_id',
//        $installer->getTable('megamenu/menu'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
//$installer->getConnection()->createTable($table);
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable(array('megamenu/menu', 'varchar')))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID')
//    ->addColumn('menu_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Menu ID')
//    ->addColumn('attr_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Attribute ID')
//    ->addColumn('value', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
//        'unsigned' => true,
//    ), 'Value')
//    ->addForeignKey($installer->getFkName(array('megamenu/menu', 'varchar'), 'menu_id',
//        'megamenu/menu', 'id'), 'menu_id',
//        $installer->getTable('megamenu/menu'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE)
//    ->addForeignKey($installer->getFkName(array('megamenu/menu', 'varchar'), 'attr_id',
//        'megamenu/menu_attr', 'id'), 'attr_id',
//        $installer->getTable('megamenu/menu_attr'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
//$installer->getConnection()->createTable($table);
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable(array('megamenu/menu', 'boolean')))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID')
//    ->addColumn('menu_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Menu ID')
//    ->addColumn('attr_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Attribute ID')
//    ->addColumn('value', Varien_Db_Ddl_Table::TYPE_BOOLEAN, 255, array(
//        'unsigned' => true,
//    ), 'Value')
//    ->addForeignKey($installer->getFkName(array('megamenu/menu', 'boolean'), 'menu_id',
//        'megamenu/menu', 'id'), 'menu_id',
//        $installer->getTable('megamenu/menu'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE)
//    ->addForeignKey($installer->getFkName(array('megamenu/menu', 'boolean'), 'attr_id',
//        'megamenu/menu_attr', 'id'), 'attr_id',
//        $installer->getTable('megamenu/menu_attr'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
//$installer->getConnection()->createTable($table);
//
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable('megamenu/item'))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID');
//$installer->getConnection()->createTable($table);
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable('megamenu/item_attr'))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID')
//    ->addColumn('item_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(), 'Item ID')
//    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 11, array(), 'Attribute Name')
//    ->addForeignKey($installer->getFkName('megamenu/item_attr', 'item_id',
//        'megamenu/item', 'id'), 'item_id',
//        $installer->getTable('megamenu/item'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
//$installer->getConnection()->createTable($table);
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable(array('megamenu/item', 'varchar')))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID')
//    ->addColumn('item_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Menu ID')
//    ->addColumn('attr_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Attribute ID')
//    ->addColumn('value', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
//        'unsigned' => true,
//    ), 'Value')
//    ->addForeignKey($installer->getFkName(array('megamenu/item', 'varchar'), 'item_id',
//        'megamenu/item', 'id'), 'item_id',
//        $installer->getTable('megamenu/item'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE)
//    ->addForeignKey($installer->getFkName(array('megamenu/item', 'varchar'), 'attr_id',
//        'megamenu/item_attr', 'id'), 'attr_id',
//        $installer->getTable('megamenu/item_attr'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
//$installer->getConnection()->createTable($table);
//
//$table = $installer->getConnection()
//    ->newTable($installer->getTable(array('megamenu/item', 'int')))
//    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'identity' => true,
//        'unsigned' => true,
//        'primary' => true
//    ), 'ID')
//    ->addColumn('item_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Menu ID')
//    ->addColumn('attr_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
//        'unsigned' => true,
//    ), 'Attribute ID')
//    ->addColumn('value', Varien_Db_Ddl_Table::TYPE_INTEGER, 255, array(
//        'unsigned' => true,
//    ), 'Value')
//    ->addForeignKey($installer->getFkName(array('megamenu/item', 'int'), 'item_id',
//        'megamenu/item', 'id'), 'item_id',
//        $installer->getTable('megamenu/item'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE)
//    ->addForeignKey($installer->getFkName(array('megamenu/item', 'int'), 'attr_id',
//        'megamenu/item_attr', 'id'), 'attr_id',
//        $installer->getTable('megamenu/item_attr'), 'id',
//        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
//$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
    ->newTable($installer->getTable('mytbl_item'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity' => true,
        'unsigned' => true,
        'primary' => true
    ), 'Item ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Title')
    ->addColumn('link', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Link')
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Content')
    ->addColumn('class', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Class')
    ->addColumn('parent', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
    ), 'Parent')
    ->addForeignKey($installer->getFkName('mytbl_item', 'parent',
        'mytbl_menu', 'id'), 'parent',
        $installer->getTable('mytbl_menu'), 'id',
        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE);
$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
    ->newTable($installer->getTable('mytbl_menu'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity' => true,
        'unsigned' => true,
        'primary' => true
    ), 'Item ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Name')
    ->addColumn('type', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable' => false
    ), 'Type')
    ->addColumn('active', Varien_Db_Ddl_Table::TYPE_BOOLEAN, 1, array(), 'Active');
$installer->getConnection()->createTable($table);

$installer->endSetup();