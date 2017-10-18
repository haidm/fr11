<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/16/2017
 * Time: 3:18 PM
 */

class Training_Demoproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){
 $collect= Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
 foreach ($collect as $product)

     echo $product->getName().'</br>';
}

}