<?php

class Datdt_Student_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
         $this->loadLayout();
         $this->renderLayout();

    }
    public function insertAction()
	 {
		 echo ' Đây là trang thêm sinh viên';
	 }

  public function updateAction()
	 {
		 echo 'Đây là trang sửa sinh viên';
	 }

  public function deleteAction()
	 {
		 echo 'Đây là trang xóa sinh viên';
	 }
}