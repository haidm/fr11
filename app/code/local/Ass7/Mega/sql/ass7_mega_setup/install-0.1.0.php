<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('menu'))
    ->addColumn('menu_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
        'identity'=> true,
        'unsigned' => true,
        'nullable' => flase,
        'primary' => true,
    ),'Id')
    ->addColumn('menu_name',Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
        'nullable' => flase,
    ),'Menu Name');
$installer->getConnection()->createTable($table);
$installer->endSetup();