<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 19/10/2017
 * Time: 13:22
 */
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('sinhvien'))
    ->addColumn('sinhvien_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ),'Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ),'Name')
    ->addColumn('address', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ),'Address')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ),'Email');
$installer->getConnection()->createTable($table);
$installer->endSetup();
?>