<?php
class Final_Album_Block_Adminhtml_Album extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
//        echo "die0";die;
        $this->_controller = 'adminhtml_album';
        $this->_blockGroup = 'album';
        $this->_headerText = Mage::helper('album')->__('Album Manager');
        $this->_addButtonLabel  = Mage::helper('album')->__('Add New Album');
//        $this->_addButtonLabel  = Mage::helper('ass7_mega')->__('Edit Menu');
//        $this->_addButtonLabel  = Mage::helper('ass7_mega')->__('Delete Menu');
        parent::__construct();
//        $this->_removeButton('add');
    }
}