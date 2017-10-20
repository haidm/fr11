<?php
class Ass7_Mega_Adminhtml_AdminController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Megamenu'))
            ->_title($this->__('Test Menu'));
        $this->loadLayout()
            ->_setActiveMenu('megamenu/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Megamenu'), Mage::helper('tax')->__('Catalog'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Test Menu'), Mage::helper('tax')->__('Test Menu'))
        ;
        $this->_addContent($this->getLayout()->createBlock('mega/adminhtml_menu'))
            ->renderLayout();
        return $this;
    }
}