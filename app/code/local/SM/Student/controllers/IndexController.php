<?php
class SM_Student_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
       echo __METHOD__;
    }

    public function insertStudentAction()
    {
        echo "Insert successfully!";
    }

    public function editStudentAction(){
        echo "Edit successfully!";
    }

    public function deleteStudentAction()
    {
        echo "Delete successfully!";
    }
}

?>