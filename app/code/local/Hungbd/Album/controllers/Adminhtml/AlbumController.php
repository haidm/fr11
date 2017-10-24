<?php
class Hungbd_Album_Adminhtml_AlbumController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Ablum'))->_title($this->__('Album'));

        $this->loadLayout()
            ->_setActiveMenu('AlbumManger/album')
            ->_addBreadcrumb(Mage::helper('tax')->__('Album'), Mage::helper('tax')->__('Album'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Ablum'), Mage::helper('tax')->__('Ablum'))
        ;

        $this->_addContent($this->getLayout()->createBlock('Hungbd_Album/adminhtml_album'))
            ->renderLayout();
        return $this;
    }


    /**
     * Edit action
     */
    public function editAction()
    {
        $this->_title($this->__('AlbumManger'))
            ->_title($this->__('album'));

        $album  = $this->getRequest()->getParam('id');
        $albumModel  = Mage::getModel('Hungbd_Album/album');
        if ($album) {
            $albumModel->load($album);
            if (!$albumModel->getId()) {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('tax')->__('Album ko ton tai!'));
                $this->_redirect('*/*/');
                return;
            }
        }


        $this->_title($albumModel->getId() ? sprintf("Edit album %s", $albumModel->getName()) : $this->__('New Ablum'));

        Mage::register('testmodel', $albumModel);

        $this->loadLayout()
            ->_setActiveMenu('albummanager/album')
            ->_addBreadcrumb(Mage::helper('tax')->__('Album Manager'), Mage::helper('tax')->__('album'))
            ->_addBreadcrumb(Mage::helper('tax')->__('Album'), Mage::helper('tax')->__('Album'))
        ;

        $this->_addBreadcrumb(
                $album ? Mage::helper('tax')->__('Edit Ablum') :  Mage::helper('tax')->__('New Ablum'),
                $album ?  Mage::helper('tax')->__('Edit Ablum') :  Mage::helper('tax')->__('New Ablum'))
            ->_addContent($this->getLayout()->createBlock('Hungbd_Album/adminhtml_album_edit')
                ->setData('action', $this->getUrl('*/album/save')))
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
            return $this->getResponse()->setRedirect($this->getUrl('*/album'));
        }

        $album = Mage::getModel('Hungbd_Album/album');
        $album->setData($postData);

        try {
            $album->save();

            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The Ablum has been saved.'));

            if ($this->getRequest()->getParam('back')) {
                return $this->_redirect('*/*/edit', array('id' => $album->getId()));
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
        $album = $this->getRequest()->getParam('id');
        if (!$album) {
            Mage::getSingleton('adminhtml/session')
                ->addError(Mage::helper('tax')->__('Ablum ko ton tai!'));
            return $this->_redirect('*/*/');
        }

        try {
            $album = Mage::getModel('Hungbd_Album/album');
            $album->setId($album);
            $album->delete();
            Mage::getSingleton('adminhtml/session')
                ->addSuccess(Mage::helper('tax')->__('The Ablum has been deleted.'));
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