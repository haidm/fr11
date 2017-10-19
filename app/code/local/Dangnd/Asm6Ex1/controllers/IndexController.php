<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 19-10-2017
 * Time: 01:36 CH
 */

class Dangnd_Asm6Ex1_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $list = Mage::getModel('asm61/student')->getCollection()->toArray();

        $this->loadLayout('asm61_layout_index');

        $this->getLayout()->getBlock('simple')->setData('list', $list);

        $this->renderLayout();
    }

    public function addAction()
    {
        $data = '';
        $check = $this->getRequest()->getPost('require');
        if($check && $check == 'add')
        {
            $data = $this->validate();
            if(is_array($data))
            {
                $std = Mage::getModel('asm61/student')->setData($data);

                $std->save();

                $this->_redirect('asm61');
            }
        }

        $this->loadLayout('asm61_layout_add');

        $this->getLayout()->getBlock('add')->setData('err', $data);

        $this->renderLayout();


    }

    public function updateAction()
    {
        $data = '';
        $id = $this->getRequest()->getParam('id');
        $std = Mage::getModel('asm61/student');
        $std->load($id);

        $check = $this->getRequest()->getPost('require');
        if($check && $check == 'update')
        {
            $data = $this->validate();
            if(is_array($data))
            {
                $std->setName($data['name']);
                $std->setPhone($data['phone']);
                $std->setEmail($data['email']);
                $std->setAddress($data['address']);

                $std->save();
                $this->_redirect('asm61');
            }
        }
        $std = $std->toArray();

        $this->loadLayout('asm61_layout_update');

        $this->getLayout()->getBlock('update')->setData('std', $std)->setData('err', $data);

        $this->renderLayout();
    }

    public function deleteAction()
    {
        $id = Mage::app()->getRequest()->getParam('id');
        $std = Mage::getModel('asm61/student');
        $std->load($id);
        $std->delete();
        $this->_redirect('asm61');
    }

    public function validate()
    {
        $data['name'] = $this->getRequest()->getPost('name');
        $data['phone'] = $this->getRequest()->getPost('phone');
        $data['email'] = $this->getRequest()->getPost('email');
        $data['address'] = $this->getRequest()->getPost('address');

        if (empty($data['name']) || empty($data['email']) || empty($data['phone']) || empty($data['address'])) {
            return 'Hãy nhập đủ dữ liệu!';
        }

        if (strlen($data['name']) < 2) {
            return "Tên phải từ 2 trở lên ký tự!!";
        }

        if (!preg_match('/^[0-9]{10,11}$/', $data['phone'])) {
            return 'Số điện thoại phải từ 10 - 11 ký tự số!!';
        }

        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false) {
            return 'Email không hợp lệ';
        }

        return $data;
    }
}