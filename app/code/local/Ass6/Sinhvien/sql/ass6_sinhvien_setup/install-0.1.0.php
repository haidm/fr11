<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('student'))
    ->addColumn('student_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
        'identity'=> true,
        'unsigned' => true,
        'nullable' => flase,
        'primary' => true,
    ),'Id')
    ->addColumn('student_fn',Varien_Db_Ddl_Table::TYPE_VARCHAR, null,array(
        'nullable' => flase,
    ),'FirstName')
    ->addColumn('student_ln',Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
        'nullable' => flase,
    ),'LastName')
    ->addColumn('student_address',Varien_Db_Ddl_Table::TYPE_TEXT,null,array(
        'nullable' => flase,
    ),'Address')
    ->addColumn('student_phone',Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
        'nullable' => flase,
    ),'Phone');
$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
    ->newTable($installer->getTable('teststudent'))
    ->addColumn('teststudent_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
        'identity'=> true,
        'unsigned' => true,
        'nullable' => flase,
        'primary' => true,
    ),'Idt')
    ->addColumn('teststudent_fn',Varien_Db_Ddl_Table::TYPE_VARCHAR, null,array(
        'nullable' => flase,
    ),'FirstNamet')
    ->addColumn('teststudent_ln',Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
        'nullable' => flase,
    ),'LastNamet')
    ->addColumn('teststudent_address',Varien_Db_Ddl_Table::TYPE_TEXT,null,array(
        'nullable' => flase,
    ),'Addresst')
    ->addColumn('teststudent_phone',Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
        'nullable' => flase,
    ),'Phonet');
$installer->getConnection()->createTable($table);
$installer->endSetup();