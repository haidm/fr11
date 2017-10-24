<?php
class Hungbd_Album_Block_Adminhtml_Album extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_album';
        $this->_blockGroup      = 'Hungbd_Album';
        $this->_headerText      = Mage::helper('tax')->__('Manage Album');
        $this->_addButtonLabel  = Mage::helper('tax')->__('Add Album');
        parent::__construct();
    }
}