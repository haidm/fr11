<?php
class Ass7_Mega_Adminhtml_AdminController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {

        $this->_title($this->__('MegaMenu'))
            ->_title($this->__('Test Menu'));
        $this->loadLayout()
            ->_setActiveMenu('MegaMenu')
            ->_addBreadcrumb(Mage::helper('ass7_mega')->__('MegaMenu'), Mage::helper('ass7_mega')->__('MegaMenu'))
            ->_addBreadcrumb(Mage::helper('ass7_mega')->__('Test Menu'), Mage::helper('ass7_mega')->__('Test Menu'));
        $this->_addContent($this->getLayout()->createBlock('demomega/adminhtml_menu'))
            ->renderLayout();
        return $this;
    }
}