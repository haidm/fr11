<?php
class Luannt3_Assignment7_Adminhtml_TestController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Mega Menu'))
            ->_title($this->__('Manage Menu'))
            ->_title($this->__('List'));

        $this->loadLayout()
            ->_setActiveMenu('catalog/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Catalog'), Mage::helper('tax')->__('Catalog'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Test Menu'), Mage::helper('tax')->__('Test Menu'))
        ;

        $this->_addContent($this->getLayout()->createBlock('assignment7block/adminhtml_mega'))
            ->renderLayout();
        return $this;
    }


    /**
     * Edit action
     */
//    public function editAction()
//    {
//        $this->_title($this->__('Catalog'))
//            ->_title($this->__('Test Menu'));
//
//        $orderId  = $this->getRequest()->getParam('order_id');
//        $orderModel  = Mage::getModel('mymodel/order');
//        if ($orderId) {
//            $orderModel->load($orderId);
//            if (!$orderModel->getId()) {
//                Mage::getSingleton('adminhtml/session')
//                    ->addError(Mage::helper('tax')->__('Order ko ton tai!'));
//                $this->_redirect('*/*/');
//                return;
//            }
//        }
//
//
//        $this->_title($orderModel->getId() ? sprintf("Edit order %s", $orderModel->getName()) : $this->__('New Order'));
//
//        Mage::register('testmodel', $orderModel);
//
//        $this->loadLayout()
//            ->_setActiveMenu('catalog/test')
//            ->_addBreadcrumb(Mage::helper('tax')->__('Catalog'), Mage::helper('tax')->__('Catalog'))
//            ->_addBreadcrumb(Mage::helper('tax')->__('Test Menu'), Mage::helper('tax')->__('Test Menu'))
//        ;
//
//        $this->_addBreadcrumb(
//            $orderId ? Mage::helper('tax')->__('Edit order') :  Mage::helper('tax')->__('New Order'),
//            $orderId ?  Mage::helper('tax')->__('Edit order') :  Mage::helper('tax')->__('New Order'))
//            ->_addContent($this->getLayout()->createBlock('demomodule/adminhtml_order_edit')
//                ->setData('action', $this->getUrl('*/test/save')))
//            ->renderLayout();
//    }
//
//
//    /**
//     * Save action
//     *
//     * @return Mage_Core_Controller_Response_Http|Mage_Core_Controller_Varien_Action
//     */
//    public function saveAction()
//    {
//        $postData = $this->getRequest()->getParams();
//        if (!$postData) {
//            return $this->getResponse()->setRedirect($this->getUrl('*/test'));
//        }
//
//        $order = Mage::getModel('mymodel/order');
//        $order->setData($postData);
//
//        try {
//            $order->save();
//
//            Mage::getSingleton('adminhtml/session')
//                ->addSuccess(Mage::helper('tax')->__('The order has been saved.'));
//
//            if ($this->getRequest()->getParam('back')) {
//                return $this->_redirect('*/*/edit', array('order_id' => $order->getId()));
//            }
//
//            return $this->_redirect('*/*/');
//        }
//        catch (Mage_Core_Exception $e) {
//            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
//        }
//        catch (Exception $e) {
//            Mage::getSingleton('adminhtml/session')
//                ->addError(Mage::helper('tax')->__('An error occurred while saving this order.'));
//        }
//
//        Mage::getSingleton('adminhtml/session')->setRuleData($postData);
//        $this->_redirectReferer();
//    }
//
//    public function deleteAction()
//    {
//        $orderId = $this->getRequest()->getParam('order_id');
//        if (!$orderId) {
//            Mage::getSingleton('adminhtml/session')
//                ->addError(Mage::helper('tax')->__('Order ko ton tai!'));
//            return $this->_redirect('*/*/');
//        }
//
//        try {
//            $order = Mage::getModel('mymodel/order');
//            $order->setId($orderId);
//            $order->delete();
//            Mage::getSingleton('adminhtml/session')
//                ->addSuccess(Mage::helper('tax')->__('The order has been deleted.'));
//        } catch (Exception $e) {
//            Mage::getSingleton('adminhtml/session')
//                ->addError(Mage::helper('tax')->__('An error occurred while deleting this order.'));
//        }
//        $this->_redirect('*/*/');
//    }

    /**
     * Redirect to edit action
     */
//    public function newAction()
//    {
//        $this->_forward('edit');
//    }
//
//
//    protected function _isAllowed()
//    {
//        return Mage::getSingleton('admin/session')->isAllowed('admin');
//    }

}