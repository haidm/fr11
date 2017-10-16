<?php
/**
 * Created by PhpStorm.
 * User: vothanhphong
 * Date: 16/10/2017
 * Time: 14:49
 */

class Dangnd_Student_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'This is index action<br>';
        echo 'link insert : http://computer.local/index.php/student/index/insert <br>';
        echo 'link insert : http://computer.local/index.php/student/index/update <br>';
        echo 'link insert : http://computer.local/index.php/student/index/delete <br>';
    }

    public function insertAction()
    {
        echo 'This is insert action';
    }

    public function updateAction()
    {
        echo 'This is update action';
    }

    public function deleteAction()
    {
        echo 'This is delete action';
    }
}