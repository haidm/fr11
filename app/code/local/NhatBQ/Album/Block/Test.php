<?php
class NhatBQ_Album_Block_Photo_Test extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'nhatbq_album';
        $this->_controller = 'catalog_test';
        $this->_headerText = Mage::helper('nhatbq_album')->__('List Photo');

        parent::__construct();
        $this->_removeButton('add');
    }
}