<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 20-10-2017
 * Time: 04:37 CH
 */

class Dangnd_Asm7_Block_Adminhtml_MegaMenu extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller      = 'adminhtml_megaMenu';
        $this->_blockGroup      = 'asm7';
        $this->_headerText      = Mage::helper('dangnd_asm7')->__('Manage Mega Menu');
        $this->_addButtonLabel  = Mage::helper('dangnd_asm7')->__('Add Mega Menu');
        parent::__construct();
    }
}