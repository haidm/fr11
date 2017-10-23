<?php
class Ass7_Mega_Block_Adminhtml_Menu extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
//        echo "die0";die;
        $this->_controller = 'adminhtml_menu';
        $this->_blockGroup = 'demomega';
        $this->_headerText = Mage::helper('ass7_mega')->__('Menu Manager');
        $this->_addButtonLabel  = Mage::helper('ass7_mega')->__('Add New Menu');
//        $this->_addButtonLabel  = Mage::helper('ass7_mega')->__('Edit Menu');
//        $this->_addButtonLabel  = Mage::helper('ass7_mega')->__('Delete Menu');
        parent::__construct();
//        $this->_removeButton('add');
    }
}