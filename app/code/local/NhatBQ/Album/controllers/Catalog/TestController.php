<?php

class NhatBQ_Album_Catalog_TestController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Catalog Test'));
        $this->loadLayout();
        $this->_setActiveMenu('catalog/catalog');
        $this->_addContent($this->getLayout()->createBlock('nhatbq_album/catalog_test'));
        $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('nhatbq_album/catalog_test_grid')->toHtml()
        );
    }
    public function checkAction(){
        $name = $this->getRequest()->getParam('photo_name', 'Test Name');
        $jsonData = array('result' => $name[0] === 'A' ? true : false);
        $this->getResponse()->setHeader('Content-type', 'application/json');
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($jsonData));
    }

    protected function _checkPhotoName($name) {
        return $name[0] === 'A' ? true : false;
    }
}