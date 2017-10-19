<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 19/10/2017
 * Time: 13:22
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
//
$installer = $this;
$installer->startSetup();
$installer->addAttribute('catalog_product', 'is_featured', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Is Featured',
    'visible' => true,
    'required' => false,
    'visible_on_front' => true,
    'is_html_allowed_on_front' => true,
    'used_in_product_listing' => true,
    'attribute_set' => 'Default',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'required' => false,
    'apply_to' => 'all',
    'group' => 'Default'
));
//$this->removeAttribute('catalog_product', 'is_featured');
$installer->endSetup();
?>