<?php
class Anhnt9_Album_Block_Adminhtml_Album extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_album';
        $this->_blockGroup      = 'demoalbum';
        $this->_headerText      = Mage::helper('anhnt9_album')->__('Manage Album');
        $this->_addButtonLabel  = Mage::helper('anhnt9_album')->__('Add New Album');
        parent::__construct();
    }
}