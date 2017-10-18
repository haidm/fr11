<?php

/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 14:47
 */
class Hungbd_Assign5_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        echo "hello world"
        $this->loadLayout('assign5_layout_handle');
        $this->renderLayout();
    }
}
?>