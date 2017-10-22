<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 12:25 SA
 */

class Dangnd_MegaMenu_Adminhtml_MegaMenuController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Mega Menu'))
            ->_title($this->__('Manage Menu'));

        $this->loadLayout()
            ->_setActiveMenu('megamenu/menu')
            ->_addBreadcrumb(Mage::helper('megamenu')->__('Mega Menu'), Mage::helper('megamenu')->__('Mega Menu'))
            ->_addBreadcrumb(Mage::helper('megamenu')->__('Manage Menu'), Mage::helper('megamenu')->__('Manage Menu'));

        $this->_addContent($this->getLayout()
            ->createBlock('megamenu/adminhtml_menu'))
            ->renderLayout();
        
        return $this;
    }

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin');
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $this->_title($this->__('Mega Menu'))
            ->_title($this->__('Manage Menu'));

        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('megamenu/menu');

        if ($id)
        {
            $model->load($id);
            if (!$model->getId())
            {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('megamenu')->__('Id don\'t exists!'));

                $this->_redirect('*/*/');

                return;
            }
        }

        $title = $model->getId() ? sprintf('Edit order %s', $model->getName()) : $this->__('Create New Menu');
        $this->_title($title);

        Mage::register('menumodel', $model);

        $this->loadLayout()
            ->_setActiveMenu('megamenu/menu')
            ->_addBreadcrumb(Mage::helper('megamenu')->__('Mega Menu'), Mage::helper('megamenu')->__('Mega Menu'))
            ->_addBreadcrumb(Mage::helper('megamenu')->__('Menage Menu'), Mage::helper('megamenu')->__('Menage Menu'));

        $label = $id ? Mage::helper('megamenu')->__('Edit') : Mage::helper('megamenu')->__('Create');
        $this->_addBreadcrumb($label, $label)
            ->_addContent(
                $this->getLayout()
                    ->createBlock('megamenu/adminhtml_menu_edit')
                    ->setData('action', $this->getUrl('*/megaMenu/save'))
            )->renderLayout();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams();

        if (!$data)
        {
            return $this->getResponse()->setRedirect($this->getUrl('*/megaMenu'));
        }

        $menu = Mage::getModel('megamenu/menu');

        $menu->setData($data);

        try
        {
            $menu->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('megamenu')->__('Success!'));

            if ($data['back'])
            {
                return $this->_redirect('*/*/edit', array('id' => $menu->getId()));
            }

            return $this->_redirect('*/*/');
        }
        catch (Mage_Core_Exception $e)
        {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        }
        catch (Exception $e)
        {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('megamenu')->__('An error occurred while saving!'));
        }

        Mage::getSingleton('adminhtml/session')->setRuleData($data);

        $this->_redirectReferer();
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');
        if (!$id)
        {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('megamenu')->__('Id don\'t exists!'));
            return $this->_redirect('*/*/');
        }

        try
        {
            $order = Mage::getModel('megamenu/menu');
            $order->setId($id);
            $order->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('megamenu')->__('Delete Success.'));
        }
        catch (Exception $e)
        {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('megamenu')->__('An error occurred while deleting!'));
        }

        $this->_redirect('*/*/');
    }
}