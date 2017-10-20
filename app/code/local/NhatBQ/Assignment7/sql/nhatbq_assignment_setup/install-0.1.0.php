<?php
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('nhatbq/order'))
    ->addColumn('order_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Order ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Name')
    ->addColumn('address', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
        'nullable'  => true,
    ), 'Address')
->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
    'unsigned'  => true,
    'nullable'  => true,
), 'Email');
$installer->getConnection()->createTable($table);
$installer->endSetup();
?>