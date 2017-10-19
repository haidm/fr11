<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 19-10-2017
 * Time: 05:46 CH
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_product', 'is_featured', array(
    'type'                    => 'varchar',
    'label'                   => 'Is Featured',
    'input'                   => 'text',
    'global'                  => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'                 => true,
    'required'                => false,
    'user_defined'            => true,
    'default'                 => '1',
    'searchable'              => false,
    'filterable'              => true,
    'comparable'              => false,
    'visible_on_front'        => true,
    'used_in_product_listing' => true,
    'unique'                  => false,
    'group'                   => 'Design'
));

$installer->endSetup();