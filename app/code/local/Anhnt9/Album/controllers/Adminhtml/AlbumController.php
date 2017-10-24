<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/24/2017
 * Time: 2:13 PM
 */
class Anhnt9_Album_Adminhtml_AlbumController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Catalog'))
            ->_title($this->__('Album Manager'));

        $this->loadLayout()
            ->_setActiveMenu('catalog/album')
            ->_addBreadcrumb(Mage::helper('tax')->__('Catalog'), Mage::helper('tax')->__('Catalog'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Album Manager'), Mage::helper('tax')->__('Album Manager'))
        ;
        $this->_addContent($this->getLayout()->createBlock('demoalbum/adminhtml_album'))->renderLayout();
        return $this;
    }

}