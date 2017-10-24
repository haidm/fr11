<?php
class Datdt_Album_Block_Adminhtml_Order extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_mega';
        $this->_blockGroup      = 'albumblock';
        $this->_headerText      = Mage::helper('tax')->__('Manage Order');
        $this->_addButtonLabel  = Mage::helper('tax')->__('Add New Order');
        parent::__construct();
    }
}