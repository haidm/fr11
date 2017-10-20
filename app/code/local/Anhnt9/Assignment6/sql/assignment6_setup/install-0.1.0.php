<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/20/2017
 * Time: 12:57 PM
 */
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer = $this;

$installer->startSetup();
//create table
$table = $installer->getConnection()
    ->newTable($installer->getTable('student'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'Name')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
        'unique'    => true
    ), 'E-mail')
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_VARCHAR, 15, array(
        'nullable'  => false,
        'unique'    => true
    ), 'Phone')
    ->addColumn('address', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'Address');
$installer->getConnection()->createTable($table);

$installer->endSetup();