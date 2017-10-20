<?php
class Hungbd_Megamenu_Block_Adminhtml_Menuitem extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_menuitem';
        $this->_blockGroup      = 'demomodule';
        $this->_headerText      = Mage::helper('tax')->__('Manage Menu Item');
        $this->_addButtonLabel  = Mage::helper('tax')->__('Add Menu Item');
        parent::__construct();
    }

}