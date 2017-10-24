<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 24-10-2017
 * Time: 02:06 CH
 */

class Dangnd_Album_Adminhtml_ImageController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Album Manager'))
            ->_title($this->__('Manage Image'));

        $this->loadLayout()
            ->_setActiveMenu('dangnd_album/image')
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Album Manager'), Mage::helper('dangnd_album')->__('Album Manager'))
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Manage Image'), Mage::helper('dangnd_album')->__('Manage Image'));

        $this->_addContent($this->getLayout()
            ->createBlock('dangnd_album/adminhtml_image'))
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
        $this->_title($this->__('Manager Album'))
            ->_title($this->__('Manage Image'));

        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('dangnd_album/image');

        if ($id)
        {
            $model->load($id);
            if (!$model->getId())
            {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('dangnd_album')->__('Id don\'t exists!'));

                $this->_redirect('*/*/');

                return;
            }
        }

        $title = $model->getId() ? sprintf('Edit order %s', $model->getName()) : $this->__('Create New');
        $this->_title($title);

        Mage::register('imageModel', $model);

        $this->loadLayout()
            ->_setActiveMenu('dangnd_album/image')
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Manager Album'),
                Mage::helper('dangnd_album')->__('Manager Album'))
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Manage Image'),
                Mage::helper('dangnd_album')->__('Manage Image'));

        $label = $id ? Mage::helper('dangnd_album')->__('Edit') : Mage::helper('dangnd_album')->__('Create');
        $this->_addBreadcrumb($label, $label)
            ->_addContent(
                $this->getLayout()
                    ->createBlock('dangnd_album/adminhtml_image_edit')
                    ->setData('action', $this->getUrl('*/image/save'))
            )->renderLayout();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams();

        if (!$data)
        {
            return $this->getResponse()->setRedirect($this->getUrl('*/image'));
        }

        $item = Mage::getModel('dangnd_album/album');

        $item->setData($data);

        try
        {
            $item->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('dangnd_album')->__('Success!'));

            if ($data['back'])
            {
                return $this->_redirect('*/*/edit', array('id' => $item->getId()));
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
                ->addError(Mage::helper('dangnd_album')->__('An error occurred while saving!'));
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
                ->addError(Mage::helper('dangnd_album')->__('Id don\'t exists!'));
            return $this->_redirect('*/*/');
        }

        try
        {
            $order = Mage::getModel('dangnd_album/image');
            $order->setId($id);
            $order->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('dangnd_album')->__('Delete Success.'));
        }
        catch (Exception $e)
        {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('dangnd_album')->__('An error occurred while deleting!'));
        }

        $this->_redirect('*/*/');
    }
}