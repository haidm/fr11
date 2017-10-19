<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 17-10-2017
 * Time: 02:17 CH
 */

class Dangnd_Assignment5_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout('asm5_layout_handle');
        $this->renderLayout();
    }
}