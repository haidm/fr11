<?php
class Anhnt9_Album_Block_Adminhtml_Album extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_album';
        $this->_blockGroup      = 'demoalbum';
        $this->_headerText      = Mage::helper('demoalbum')->__('Manage Album');
        $this->_addButtonLabel  = Mage::helper('demoalbum')->__('Add New Album');
        parent::__construct();
    }
}