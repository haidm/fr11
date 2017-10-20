<?php
class Hungbd_Megamenu_Adminhtml_MenuitController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Menu item'))
            ->_title($this->__('Megamenu'));

        $this->loadLayout()
            ->_setActiveMenu('catalog/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Menu item'), Mage::helper('tax')->__('Menu item'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Megamenu'), Mage::helper('tax')->__('Megamenu'))
        ;

        $this->_addContent($this->getLayout()->createBlock('demomodule/adminhtml_menuitem'))
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

        $menuItemId  = $this->getRequest()->getParam('id');
        $menuItemModel  = Mage::getModel('mymodel/menuitem');
        if ($menuItemId) {
            $menuItemModel->load($menuItemId);
            if (!$menuItemModel->getId()) {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('tax')->__('Menu item ko ton tai!'));
                $this->_redirect('*/*/');
                return;
            }
        }


        $this->_title($menuItemModel->getId() ? sprintf("Edit menu Item %s", $menuItemModel->getName()) : $this->__('New Menu Item'));

        Mage::register('testmodel', $menuItemModel);

        $this->loadLayout()
            ->_setActiveMenu('catalog/test')
            ->_addBreadcrumb(Mage::helper('tax')->__('Catalog'), Mage::helper('tax')->__('Catalog'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Test Menu'), Mage::helper('tax')->__('Test Menu'))
        ;

        $this->_addBreadcrumb(
            $menuitemId ? Mage::helper('tax')->__('Edit Menu Info') :  Mage::helper('tax')->__('New Menu Info'),
            $menuitemId ?  Mage::helper('tax')->__('Edit Menu Info') :  Mage::helper('tax')->__('New Menu Info'))
            ->_addContent($this->getLayout()->createBlock('demomodule/adminhtml_menuitem_edit')
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

        $order = Mage::getModel('mymodel/menuitem');
        $order->setData($postData);

        try {
            $order->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The menu item has been saved.'));

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
        $menuitemId = $this->getRequest()->getParam('id');
        if (!$menuitemId) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('Menu item ko ton tai!'));
            return $this->_redirect('*/*/');
        }

        try {
            $order = Mage::getModel('mymodel/menuitem');
            $order->setId($menuitemId);
            $order->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The Menu item has been deleted.'));
        } catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('An error occurred while deleting this menu item .'));
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
?>