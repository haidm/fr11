<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/16/2017
 * Time: 3:18 PM
 */

class Baont_Sinhvien_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){

        echo '<a href=http://computer.local/sinhvien/Index/index>http://computer.local/sinhvien/Index/index</a></br>';
        echo '<a href=http://computer.local/sinhvien/Index/insert>http://computer.local/sinhvien/Index/insert</a></br>';
        echo '<a href=http://computer.local/sinhvien/Index/update>http://computer.local/sinhvien/Index/update</a></br>';
        echo '<a href=http://computer.local/sinhvien/Index/delete>http://computer.local/sinhvien/Index/delete</a>';
}
    public function insertAction(){
        echo 'This is insert action';
    }
    public function updateAction(){
        echo 'This is update action';
    }
    public function deleteAction(){
        echo 'This is delete action';
    }
}