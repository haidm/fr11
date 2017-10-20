<?php
class Hungbd_Megamenu_Block_Adminhtml_Menuinfo extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_menuinfo';
        $this->_blockGroup      = 'demomodule';
        $this->_headerText      = Mage::helper('tax')->__('Manage Menu Info');
        $this->_addButtonLabel  = Mage::helper('tax')->__('Add Menu Info');
        parent::__construct();
    }
}