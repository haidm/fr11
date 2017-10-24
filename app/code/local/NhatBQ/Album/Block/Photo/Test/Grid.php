<?php
class NhatBQ_Album_Block_Photo_Test_Grid extends Mage_Adminhtml_Block_Widget_Grid{
public function __construct()
{
    parent::__construct();
    $this->setId('nhatbqTestGrid');
    $this->setDefaultSort('entity_id');
    $this->setSaveParametersInSession(true);
    $this->setUseAjax(true);
    $this->setTemplate('nhatbq_adminhtml/customer_grid.phtml');
}

protected function _prepareColumns(){
    $this->addColumn('photo_id', array(
        'header'    => Mage::helper('customer')->__('Photo ID'),
        'width'     => '50px',
        'index'     => 'entity_id',
        'type'  => 'number',
    ));
    $this->addColumn('name', array(
        'header'    => Mage::helper('customer')->__('Name'),
        'index'     => 'name'
    ));
    $this->addColumn('size', array(
        'header'    => Mage::helper('customer')->__('Size'),
        'width'     => '150',
        'index'     => 'size'
    ));

    $groups = Mage::getResourceModel('customer/group_collection')
        ->addFieldToFilter('customer_group_id', array('gt'=> 0))
        ->load()
        ->toOptionHash();


    if (!Mage::app()->isSingleStoreMode()) {
        $this->addColumn('website_id', array(
            'header'    => Mage::helper('customer')->__('Website'),
            'align'     => 'center',
            'width'     => '80px',
            'type'      => 'options',
            'options'   => Mage::getSingleton('adminhtml/system_store')->getWebsiteOptionHash(true),
            'index'     => 'website_id',
        ));
    }

    return parent::_prepareColumns();
}
}