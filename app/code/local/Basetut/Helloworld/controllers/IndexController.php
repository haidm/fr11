<?php

class Basetut_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        $collection = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
// we iterate through the list of products to get attribute values
        foreach ($collection as $product) {
            echo $product->getName(); //get name
            echo '<br />';
        }
    }
}