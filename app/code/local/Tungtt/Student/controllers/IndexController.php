<?php

class Tungtt_Student_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action: http://mageosc.local/student
     */
    public function indexAction()
    {
        echo "Trang Danh sach sinh vien:"."<br>"."<a href='http://mageosc.local/student/index/index'>Index</a>"."<br>";
        echo "<a href='http://mageosc.local/student/index/insert'>Insert</a>"."<br>";
        echo "<a href='http://mageosc.local/student/index/update'>Update</a>"."<br>";
        echo "<a href='http://mageosc.local/student/index/delete'>Delete</a>"."<br>";
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