<?php
class Luannt3_Assignment6_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $list = Mage::getModel('assignment6/student')->getCollection()->toArray();

        $this->loadLayout('ass6_list_handle');

        $this->getLayout()->getBlock('content')->setData('list', $list);

        $this->renderLayout();

    }
    public function addAction()
    {
        $this->loadLayout('ass6_add_handle');
        $this->renderLayout();

    }
//    public function postAddAction(){
//        $mssv = $this->getRequest()->getParam('mssv');
//        $name = $this->getRequest()->getParam('name');
//        $email = $this->getRequest()->getParam('email');
//        $phone = $this->getRequest()->getParam('phone');
//        $birthday = $this->getRequest()->getParam('birthday');
//        $student = Mage::getModel('assignment6/student');
//        $student = setMssv($mssv);
//        $student = setName($name);
//        $student = setEmail($email);
//        $student = setPhone($phone);
//        $student = setBirthday($birthday);
//        $student->save();

//    }
    public function editAction()
    {
        $this->loadLayout('ass6_edit_handle');
        $this->renderLayout();

    }


}

?>
