<?php

class Tungtt_DemoProduct_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        echo "Trang Danh sach sinh vien:http://mageosc.local/student/index/index";
        echo "http://mageosc.local/student/index/insert";
        echo "http://mageosc.local/student/index/update";
        echo "http://mageosc.local/student/index/delete";



    }
    /**
     * http://mageosc.local/student/index/insert
     */

    public function insertAction()
    {
        echo "Trang Them sinh vien";
    }
    /**
     * http://mageosc.local/student/index/update
     */

    public function updateAction()
    {
        echo "Trang Sua sinh vien";
    }
    /**
     * http://mageosc.local/student/index/delete
     */
    public function deleteAction()
    {
        echo "Trang Xoa sinh vien";
    }
}