<?php
class Ass7_Mega_Block_Adminhtml_Menu extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_menu';
        $this->_blockGroup = 'mega';
        $this->_headerText = Mage::helper('mega')->__('Menu Manager');
        $this->_addButtonLabel  = Mage::helper('mega')->__('Add New Menu');
        $this->_addButtonLabel  = Mage::helper('mega')->__('Edit Menu');
        $this->_addButtonLabel  = Mage::helper('mega')->__('Delete Menu');
        parent::__construct();
//        $this->_removeButton('add');
    }
}