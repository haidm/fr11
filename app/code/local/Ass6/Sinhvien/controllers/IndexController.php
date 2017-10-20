<?php
Class Ass6_Sinhvien_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layoutObject = $this->getLayout();
        $block = $layoutObject->createBlock('core/template', 'Ass6_Sinhvien/student')
            ->setTemplate('Student/Student.phtml');
        echo $block->toHtml();
    }
    public function addAction()
    {
        $pa = $this->getRequest()->getPost('submit');
        if(isset($pa)){
            $arr['student_fn']= $this->getRequest()->getPost('fn');
            $arr['student_ln']= $this->getRequest()->getPost('ln');
            $arr['student_address']= $this->getRequest()->getPost('address');
            $arr['student_phone']= $this->getRequest()->getPost('phone');

            $data = Mage::getModel('Ass6_Sinhvien/Student');
            $data->setData($arr);
//            var_dump($data);die;
            $data->save();
        }
    }
    public function readAction()
    {

    }
}