<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/17/2017
 * Time: 5:45 PM
 */
class Anhnt9_Demoproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){
        $this->loadLayout('demoproduct_index_index');
        $this->renderLayout();
    }
}