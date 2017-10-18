<?php
class Layout_Testlayout_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {

        $this->loadLayout('Layout_index_index');

        $this->renderLayout();
    }
}