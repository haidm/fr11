<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/17/2017
 * Time: 10:43 AM
 */

class TestVendor_Demomodule_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $order = Mage::getModel('mymodel/order')
            ->getCollection()
            ->addFieldToFilter('name', array('like' => '%DT%'));
        foreach ($order as $item) {
            echo $item->getName() . "<br />";
        }
    }
}