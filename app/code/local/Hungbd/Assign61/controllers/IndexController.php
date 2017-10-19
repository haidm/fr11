<?php

/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 14:47
 */
class Hungbd_Assign61_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $sinhvien = Mage::getModel('assign61/sinhvien');
        $data = $sinhvien->getCollection();
        $this->loadLayout('assign61_list_handle');
        $this->getLayout()->getBlock('list')->assign('data',$data);
        $this->renderLayout();
    }

    public function formAddAction()
    {
        $this->loadLayout('assign61_layout_handle');
        $this->renderLayout();
    }

    public function addAction()
    {
        $name = $this->getRequest()->getParam('name');
        $email = $this->getRequest()->getParam('email');
        $address = $this->getRequest()->getParam('address');
        $model = Mage::getModel('assign61/sinhvien');
        $model->setName($name)->setEmail($email)->setAddress($address);
        $model->save();
        $this->_redirect('asign61');
    }

    public function formUpdateAction()
    {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('assign61/sinhvien');
        $data = $model->load($id);
        $this->loadLayout('assign61_update_handle');
        $this->getLayout()->getBlock('update')->assign('data',$data);
        $this->renderLayout();
    }

    public function updateAction()
    {
        $id = $this->getRequest()->getParam('id');
        $name = $this->getRequest()->getParam('name');
        $email = $this->getRequest()->getParam('email');
        $address = $this->getRequest()->getParam('address');
        $model = Mage::getModel('assign61/sinhvien');
        $model->setId($id)->setName($name)->setEmail($email)->setAddress($address);
        $model->save();
        $this->_redirect('asign61');
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('assign61/sinhvien');
        $model->setId($id);
        $model->delete();
        $this->_redirect('asign61');
    }
}

?>