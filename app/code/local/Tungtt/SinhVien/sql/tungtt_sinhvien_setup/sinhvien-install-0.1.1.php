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
    ->newTable($installer->getTable('tungtt_sinhvien/sinhvien'))
    ->addColumn('sinhvien_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
    ), 'Sinhvien ID')
    ->addColumn('lop', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false,
    ), 'class')
    ->addColumn('birth', Varien_Db_Ddl_Table::TYPE_DATE, null, array(
    ), 'ngay sinh');
$installer->getConnection()->createTable($table);

$installer->endSetup();