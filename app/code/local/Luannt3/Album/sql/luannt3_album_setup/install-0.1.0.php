<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('malbum'))
    ->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
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
    ->newTable($installer->getTable('image'))
    ->addColumn('img_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('img', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
        'unique'    => true,
    ), 'Img')
    ->addColumn('album_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Album_id')

    ->addForeignKey(
        $installer->getFkName('image', 'album_id', 'malbum', 'album_id'),'album_id',
        $installer->getTable('malbum'),'album_id',
        Varien_Db_Ddl_Table::ACTION_CASCADE,
        Varien_Db_Ddl_Table::ACTION_CASCADE
    )  ;


$installer->getConnection()->createTable($table);



$installer->endSetup();