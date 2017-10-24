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

    /**
     * Edit action
     */
    public function editAction()
    {
        $this->_title($this->__('Catalog'))
            ->_title($this->__('Test Menu'));

        $albumId  = $this->getRequest()->getParam('album_id');
        $albumModel  = Mage::getModel('finalmodel/album');
        if ($albumId) {
            $albumModel->load($albumId);
            if (!$albumModel->getId()) {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('tax')->__('Album ko ton tai!'));
                $this->_redirect('*/*/');
                return;
            }
        }


        $this->_title($albumModel->getId() ? sprintf("Edit order %s", $albumModel->getName()) : $this->__('New Order'));

        Mage::register('testmodel', $albumModel);

        $this->loadLayout()
            ->_setActiveMenu('catalog/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Catalog'), Mage::helper('tax')->__('Catalog'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Test Menu'), Mage::helper('tax')->__('Test Menu'))
        ;

        $this->_addBreadcrumb(
            $albumId ? Mage::helper('tax')->__('Edit order') :  Mage::helper('tax')->__('New Order'),
            $albumId ?  Mage::helper('tax')->__('Edit order') :  Mage::helper('tax')->__('New Order'))
            ->_addContent($this->getLayout()->createBlock('demomodule/adminhtml_order_edit')
                ->setData('action', $this->getUrl('*/test/save')))
            ->renderLayout();
    }


    /**
     * Save action
     *
     * @return Mage_Core_Controller_Response_Http|Mage_Core_Controller_Varien_Action
     */
    public function saveAction()
    {
        $postData = $this->getRequest()->getParams();
        if (!$postData) {
            return $this->getResponse()->setRedirect($this->getUrl('*/test'));
        }

        $order = Mage::getModel('mymodel/order');
        $order->setData($postData);

        try {
            $order->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The order has been saved.'));

            if ($this->getRequest()->getParam('back')) {
                return $this->_redirect('*/*/edit', array('order_id' => $order->getId()));
            }

            return $this->_redirect('*/*/');
        }
        catch (Mage_Core_Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        }
        catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('An error occurred while saving this order.'));
        }

        Mage::getSingleton('adminhtml/session')->setRuleData($postData);
        $this->_redirectReferer();
    }

    public function deleteAction()
    {
        $albumId = $this->getRequest()->getParam('album_id');
        if (!$albumId) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('Order ko ton tai!'));
            return $this->_redirect('*/*/');
        }

        try {
            $order = Mage::getModel('finalmodel/album');
            $order->setId($albumId);
            $order->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The order has been deleted.'));
        } catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('An error occurred while deleting this order.'));
        }
        $this->_redirect('*/*/');
    }

    /**
     * Redirect to edit action
     */
    public function newAction()
    {
        $this->_forward('edit');
    }


    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin');
    }

}