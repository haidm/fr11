<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 24-10-2017
 * Time: 02:06 CH
 */

class Dangnd_Album_Adminhtml_AlbumController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Album Manager'))
            ->_title($this->__('Manage Album'));

        $this->loadLayout()
            ->_setActiveMenu('dangnd_album/album')
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Album Manager'), Mage::helper('dangnd_album')->__('Album Manager'))
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Manage Album'), Mage::helper('dangnd_album')->__('Manage Album'));

        $this->_addContent($this->getLayout()
            ->createBlock('dangnd_album/adminhtml_album'))
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
            ->_title($this->__('Manage Album'));

        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('dangnd_album/album');

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

        $title = $model->getId() ? sprintf('Edit order %s', $model->getName()) : $this->__('Create New Album');
        $this->_title($title);

        Mage::register('albumModel', $model);

        $this->loadLayout()
            ->_setActiveMenu('dangnd_album/album')
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Manager Album'),
                Mage::helper('dangnd_album')->__('Manager Album'))
            ->_addBreadcrumb(Mage::helper('dangnd_album')->__('Manage Album'),
                Mage::helper('dangnd_album')->__('Manage Album'));

        $label = $id ? Mage::helper('dangnd_album')->__('Edit') : Mage::helper('dangnd_album')->__('Create');
        $this->_addBreadcrumb($label, $label)
            ->_addContent(
                $this->getLayout()
                    ->createBlock('dangnd_album/adminhtml_album_edit')
                    ->setData('action', $this->getUrl('*/album/save'))
            )->renderLayout();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams();

        if (!$data)
        {
            return $this->getResponse()->setRedirect($this->getUrl('*/album'));
        }

        $item = Mage::getModel('dangnd_album/album');
        $image = Mage::getModel('dangnd_album/image');

        $item->setData($data);

        try
        {
            $item->save();

            $imgs = $_FILES['image']['name'];
            $dataImg['albumId'] = $item->getId();

            foreach ($imgs as $value)
            {
                $data['link'] = $value;
            }

            $image->setData($dataImg);

            $image->save();

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
            $order = Mage::getModel('dangnd_album/album');
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