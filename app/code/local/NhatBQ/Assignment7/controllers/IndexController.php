<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/20/2017
 * Time: 6:08 PM
 */


class NhatBQ_Assignment7_IndexController extends Mage_Core_Controller_Front_Action {
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
?>