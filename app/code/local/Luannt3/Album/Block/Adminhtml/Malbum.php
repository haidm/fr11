<?php
class Luannt3_Album_Block_Adminhtml_Malbum extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_album';
        $this->_blockGroup      = 'albumblock';
        $this->_headerText      = Mage::helper('tax')->__('Manage Album');
        $this->_addButtonLabel  = Mage::helper('tax')->__('Add New Album');
        parent::__construct();
    }
}