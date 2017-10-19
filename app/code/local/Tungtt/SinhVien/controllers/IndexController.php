<?php

class Tungtt_SinhVien_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action: http://mageosc.local/student
     */
    public function indexAction()
    {
        $this->loadLayout('tungtt_listsinhvien_handle');
        $this->renderLayout();
    }
    /**
     * http://mageosc.local/student/index/insert
     */

    public function insertAction()
    {
        $this->loadLayout('tungtt_addsinhvien_handle');
        $this->renderLayout();
    }
    /**
     * http://mageosc.local/student/index/update
     */

    public function updateAction()
    {
        $this->loadLayout('tungtt_editsinhvien_handle');
        $this->renderLayout();
    }
    /**
     * http://mageosc.local/student/index/delete
     */
    public function deleteAction()
    {
        echo "Trang Xoa sinh vien";
    }
}