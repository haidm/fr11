<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 20-10-2017
 * Time: 02:27 CH
 */

class Dangnd_Asm7_Adminhtml_Asm7Controller extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Mega Menu'));
        $this->loadLayout()
            ->_setActiveMenu('asm7')
            ->_addBreadcrumb(Mage::helper('dangnd_asm7')->__('Mega Menu'),
                Mage::helper('dangnd_asm7')->__('Mega Menu'));

        $this->_addContent($this->getLayout()->createBlock('asm7/adminhtml_megaMenu'))
            ->renderLayout();
        return $this;
    }

    public function editAction()
    {
        $this->_title($this->__('Mega Menu'));
        $id  = $this->getRequest()->getParam('id');
        $model  = Mage::getModel('asm7/megaMenu');
        if ($id) {
            $model->load($id);
            if (!$model->getId()) 
            {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('dangnd_asm7')->__('Item can not exists!'));
                $this->_redirect('*/*/');
                return;
            }
        }
        $this->_title($model->getId() ? sprintf("Edit order %s", $model->getName()) : $this->__('Create new'));
        Mage::register('testmodel', $model);
        $this->loadLayout()
            ->_setActiveMenu('asm7')
            ->_addBreadcrumb(Mage::helper('dangnd_asm7')->__('Mega Menu'), Mage::helper('dangnd_asm7')->__('Mega Menu'))
        ;
        $breadcrumb = $id ? Mage::helper('dangnd_asm7')->__('Edit') :  Mage::helper('dangnd_asm7')->__('Create new');
        $this->_addBreadcrumb($breadcrumb, $breadcrumb)
            ->_addContent($this->getLayout()->createBlock('asm7/adminhtml_megaMenu_edit')
                ->setData('action', $this->getUrl('*/asm7/save')))
            ->renderLayout();
    }
    
    public function saveAction()
    {
        $postData = $this->getRequest()->getParams();
        if (!$postData)
        {
            return $this->getResponse()->setRedirect($this->getUrl('*/test'));
        }

        $order = Mage::getModel('asm7/megaMenu');
        $order->setData($postData);

        try
        {
            $order->save();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('dangnd_asm7')->__('Success.'));
            if ($this->getRequest()->getParam('back'))
            {
                return $this->_redirect('*/*/edit', array('id' => $order->getId()));
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
                ->addError(Mage::helper('dangnd_asm7')->__('Error.'));
        }

        Mage::getSingleton('adminhtml/session')->setRuleData($postData);
        $this->_redirectReferer();
    }
    
    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');
        if (!$id)
        {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('dangnd_asm7')->__('Item can not exists!'));
            return $this->_redirect('*/*/');
        }

        try
        {
            $order = Mage::getModel('asm7/megaMenu');
            $order->setId($id);
            $order->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('dangnd_asm7')->__('Delete Success.'));
        }
        catch (Exception $e)
        {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('dangnd_asm7')
                ->__('Error.'));
        }

        $this->_redirect('*/*/');
    }
    
    public function newAction()
    {
        $this->_forward('edit');
    }

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin');
    }
}