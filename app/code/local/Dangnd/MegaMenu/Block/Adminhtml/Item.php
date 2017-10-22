<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:19 SA
 */

class Dangnd_MegaMenu_Block_Adminhtml_Item extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_item';
        $this->_blockGroup = 'megamenu';
        $this->_headerText = Mage::helper('megamenu')->__('Manage Item');
        $this->_addButtonLabel = Mage::helper('megamenu')->__('Create new');

        parent::__construct();
    }
}