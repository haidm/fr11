<?php


$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('menu_item'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'title')
    ->addColumn('class', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
        'unique'    => true
    ), 'class')
    ->addColumn('link', Varien_Db_Ddl_Table::TYPE_VARCHAR, 15, array(
        'nullable'  => false,
        'unique'    => true
    ), 'link')

    ->addColumn('parent', Varien_Db_Ddl_Table::TYPE_VARCHAR, 15, array(
        'nullable'  => false,
        'unique'    => true
    ), 'parent')
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'content');

$installer->getConnection()->createTable($table);


$installer->endSetup();