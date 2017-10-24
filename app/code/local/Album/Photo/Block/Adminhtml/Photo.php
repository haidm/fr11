<?php
class Album_Photo_Block_Adminhtml_Photo extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_photo';
        $this->_blockGroup      = 'demomodule';
        $this->_headerText      = Mage::helper('tax')->__('Manage Album');
        $this->_addButtonLabel  = Mage::helper('tax')->__('Add New Album');

        parent::__construct();
    }

}