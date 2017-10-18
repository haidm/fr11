<?php

class Datdt_Assignment5_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    { 
    	// echo "ádasdasd";
        $this->loadLayout('datdt_assignment5_handle');
        $this->renderLayout();
    }
}