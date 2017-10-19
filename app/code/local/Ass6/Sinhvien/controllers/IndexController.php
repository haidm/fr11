<?php
Class Ass6_Sinhvien_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layoutObject = $this->getLayout();
        $block = $layoutObject->createBlock('core/template', 'ass6_sinhvien/student')
            ->setTemplate('student/student.phtml');
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

            $data = Mage::getModel(ass6_sinhvien/student);
            //$d = Mage::getResourceModel('catalog/product_collection')

            $data->setData($arr);
                        var_dump($data);die;
            $data->save();
        }

    }
}