<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/20/2017
 * Time: 12:57 PM
 */

class Anhnt9_Assignment6_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $list_student = Mage::getModel('test/student')->getCollection()->toArray();
        $this->loadLayout('assignment6_index_index');
        $this->getLayout()->getBlock('student')->setData($list_student);
        $this->renderLayout();
    }

    public function addAction()
    {
        $this->loadLayout('assignment6_index_add');
        $this->renderLayout();
    }

    public function postAddAction(){
        $data = $this->validate();

        if(is_array($data))
        {
            $std = Mage::getModel('test/student')->setData($data);

            $std->save();

            $this->_redirect('student-sm6/index/index');
        }else{
            $this->loadLayout('assignment6_index_add');
            $this->getLayout()->getBlock('add_student')->setData('error',$data);
            $this->renderLayout();
        }
    }

    public function updateAction()
    {
        $id = $this->getRequest()->getParam('id');
        $std = Mage::getModel('test/student');
        $std->load($id);

        $this->loadLayout('assignment6_index_update');

        $this->getLayout()->getBlock('update_student')->setData('std', $std);

        $this->renderLayout();
    }

    public function deleteAction()
    {
        $id = Mage::app()->getRequest()->getParam('id');
        $std = Mage::getModel('test/student');
        $std->load($id);
        $std->delete();
        $this->_redirect('student-sm6/index/index');
    }

    public function validate()
    {
        $id = Mage::app()->getRequest()->getParam('id');
        if ($id){
            $data['id'] = $id;
        }
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