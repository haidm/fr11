<?php

class Datdt_Assignment4_IndexController extends Mage_Core_Controller_Front_Action
{
   
    public function indexAction()
    {
         $this->loadLayout('assignment5_layout_handle');
    
         $this->renderLayout();
    }
}