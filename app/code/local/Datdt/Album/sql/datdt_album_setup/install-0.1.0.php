<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('manage1'))
    ->addColumn('manage_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 15, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
        'unique'    => true,
    ), 'Name');
$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
    ->newTable($installer->getTable('menu_item1'))
    ->addColumn('menu_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 15, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
        'unique'    => true,
    ), 'Title')
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'Class');

$installer->getConnection()->createTable($table);



$installer->endSetup();