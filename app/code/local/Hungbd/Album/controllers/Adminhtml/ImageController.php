<?php
class Hungbd_Album_Adminhtml_ImageController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Image'))->_title($this->__('Album'));

        $this->loadLayout()
            ->_setActiveMenu('AlbumManger/image')
            ->_addBreadcrumb(Mage::helper('tax')->__('Album'), Mage::helper('tax')->__('Album'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Image'), Mage::helper('tax')->__('Image'))
        ;

        $this->_addContent($this->getLayout()->createBlock('Hungbd_Album/adminhtml_image'))
            ->renderLayout();
        $imageModel  = Mage::getModel('Hungbd_Album/image');
        $data = $imageModel->getCollection();
        return $this;
    }


    /**
     * Edit action
     */
    public function editAction()
    {
        $this->_title($this->__('AlbumManger'))
            ->_title($this->__('image'));

        $image  = $this->getRequest()->getParam('id');
        $imageModel  = Mage::getModel('Hungbd_Album/image');
        if ($image) {
            $imageModel->load($image);
            if (!$imageModel->getId()) {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('tax')->__('Image ko ton tai!'));
                $this->_redirect('*/*/');
                return;
            }
        }

        $this->_title($imageModel->getId() ? sprintf("Edit image %s", $imageModel->getName()) : $this->__('New Image'));

        $albummodel  = Mage::getModel('Hungbd_Album/album');
        Mage::register('imagemodel', $imageModel);
        Mage::register('albummodel', $albummodel);
//        var_dump($imageModel); die;
        $this->loadLayout()
            ->_setActiveMenu('albummanager/image')
            ->_addBreadcrumb(Mage::helper('tax')->__('Album Manager'), Mage::helper('tax')->__('image'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Image'), Mage::helper('tax')->__('image'))
        ;

        $this->_addBreadcrumb(
                $image ? Mage::helper('tax')->__('Edit Image') :  Mage::helper('tax')->__('New Image'),
                $image ?  Mage::helper('tax')->__('Edit Image') :  Mage::helper('tax')->__('New Image'))
            ->_addContent($this->getLayout()->createBlock('Hungbd_Album/adminhtml_image_edit')
                ->setData('action', $this->getUrl('*/image/save')))
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
            return $this->getResponse()->setRedirect($this->getUrl('*/image'));
        }

        $image = Mage::getModel('Hungbd_Album/image');
        $image->setData($postData);

        try {
            $image->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The Image has been saved.'));

            if ($this->getRequest()->getParam('back')) {
                return $this->_redirect('*/*/edit', array('id' => $image->getId()));
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
        $image = $this->getRequest()->getParam('id');
        if (!$image) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('Image ko ton tai!'));
            return $this->_redirect('*/*/');
        }

        try {
            $image = Mage::getModel('Hungbd_Album/image');
            $image->setId($image);
            $image->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The Image has been deleted.'));
        } catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('An error occurred while deleting this Ablum.'));
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