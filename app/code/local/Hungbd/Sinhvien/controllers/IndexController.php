<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 14:47
 */
    class Hungbd_Sinhvien_IndexController extends Mage_Core_Controller_Front_Action
    {
        public function indexAction()
        {
            echo "this is index ation";
            echo "<br>";
            echo "<a href='http://computer.local/index.php/sinhvien/index/insert'>insert</a>";
            echo "<br>";
            echo "<a href='http://computer.local/index.php/sinhvien/index/update'>update</a>";
            echo "<br>";
            echo "<a href='http://computer.local/index.php/sinhvien/index/delete'>delete</a>";
        }

        public function insertAction()
        {
            echo "this is insert ation";
        }

        public function updateAction()
        {
            echo "this is update ation";
        }

        public function deleteAction()
        {
            echo "this is delete ation";
        }

    }
?>