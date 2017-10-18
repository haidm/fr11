<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/16/2017
 * Time: 3:18 PM
 */

class Assignment5_Demo_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){
        /** @var  $layoutObject $block */

       $this->loadLayout('myhandler');
       $this->renderLayout();
}

}