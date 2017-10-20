<?php
class Hungbd_Megamenu_Adminhtml_TestController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Menu Item'))->_title($this->__('Megamenu'));

        $this->loadLayout()
            ->_setActiveMenu('catalog/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Megamenu'), Mage::helper('tax')->__('Megamenu'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Menu Item'), Mage::helper('tax')->__('Menu Item'))
        ;

        $this->_addContent($this->getLayout()->createBlock('demomodule/adminhtml_menuinfo'))
            ->renderLayout();
        return $this;
    }


    /**
     * Edit action
     */
    public function editAction()
    {
        $this->_title($this->__('Catalog'))
            ->_title($this->__('Test Menu'));

        $menuInfoId  = $this->getRequest()->getParam('id');
        $menuInfoModel  = Mage::getModel('mymodel/menuinfo');
        if ($menuInfoId) {
            $menuInfoModel->load($menuInfoId);
            if (!$menuInfoModel->getId()) {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('tax')->__('Menu item ko ton tai!'));
                $this->_redirect('*/*/');
                return;
            }
        }


        $this->_title($menuInfoModel->getId() ? sprintf("Edit menu Item %s", $menuInfoModel->getName()) : $this->__('New Menu Item'));

        Mage::register('testmodel', $menuInfoModel);

        $this->loadLayout()
            ->_setActiveMenu('catalog/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Catalog'), Mage::helper('tax')->__('Catalog'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Test Menu'), Mage::helper('tax')->__('Test Menu'))
        ;

        $this->_addBreadcrumb(
                $menuInfoId ? Mage::helper('tax')->__('Edit Menu Info') :  Mage::helper('tax')->__('New Menu Info'),
                $menuInfoId ?  Mage::helper('tax')->__('Edit Menu Info') :  Mage::helper('tax')->__('New Menu Info'))
            ->_addContent($this->getLayout()->createBlock('demomodule/adminhtml_menuinfo_edit')
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

        $order = Mage::getModel('mymodel/menuinfo');
        $order->setData($postData);

        try {
            $order->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The menu info has been saved.'));

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
                ->addError(Mage::helper('tax')->__('An error occurred while saving this item.'));
        }

        Mage::getSingleton('adminhtml/session')->setRuleData($postData);
        $this->_redirectReferer();
    }

    public function deleteAction()
    {
        $menuInfoId = $this->getRequest()->getParam('id');
        if (!$menuInfoId) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('Menu info ko ton tai!'));
            return $this->_redirect('*/*/');
        }

        try {
            $order = Mage::getModel('mymodel/menuinfo');
            $order->setId($menuInfoId);
            $order->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The Menu info has been deleted.'));
        } catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('An error occurred while deleting this menu info.'));
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