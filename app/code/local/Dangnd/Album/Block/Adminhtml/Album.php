<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:18 SA
 */

class Dangnd_Album_Block_Adminhtml_Album extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_album';
        $this->_blockGroup = 'dangnd_album';
        $this->_headerText = Mage::helper('dangnd_album')->__('Manage Album');
        $this->_addButtonLabel = Mage::helper('dangnd_album')->__('Create new');

        parent::__construct();
    }

}