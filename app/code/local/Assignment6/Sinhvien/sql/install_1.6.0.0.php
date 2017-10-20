<?php

$installer = $this;

$installer->startSetup();

/**
 * Create table 'core/resource'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('assignment6_sinhvien/sinhvien'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10, array(
        'nullable'  => false,
        'primary'   => true,
        'identity' =>true,
         'unsigned' =>true ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 50, array(
        'nullable'  => false,
        'primary'   => false,
    ))
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT, 100, array(
    ));
$installer->getConnection()->createTable($table);
$installer->endSetup();