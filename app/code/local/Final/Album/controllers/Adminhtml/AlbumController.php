<?php
class Final_Album_Adminhtml_AlbumController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
//    echo "die";die;
        $this->_title($this->__('Album Menu'))
            ->_title($this->__('Test Album'));
        $this->loadLayout()
            ->_setActiveMenu('albumadmin')
            ->_addBreadcrumb(Mage::helper('album')->__('Album Menu'), Mage::helper('album')->__('Album Menu'))
            ->_addBreadcrumb(Mage::helper('album')->__('Test Album'), Mage::helper('album')->__('Test Album'));
        $this->_addContent($this->getLayout()->createBlock('album/adminhtml_album'))
            ->renderLayout();
        return $this;
    }
    public function crAction()
    {
        echo "what?";
    }
}