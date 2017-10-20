<?php
class Ass7_Mega_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout()
            ->renderLayout();
    }
}