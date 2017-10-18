<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/17/2017
 * Time: 10:43 AM
 */

class NhatBQ_Assignment5_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $this->loadLayout('nhatbq_assignment5_handle');
        $this->renderLayout();
    }
}