<?php
class NhatBQ_Assignment5_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {

        $this->loadLayout('nhatbq_layout_handle');

        $this->renderLayout();
    }
}
?>