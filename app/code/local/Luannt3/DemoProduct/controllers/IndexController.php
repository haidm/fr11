<?php
class Luannt3_DemoProduct_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $product = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
        // we iterate through the list of products to get attribute values
        foreach ($product as $pro) {
            echo $pro->getName(); //get name
            echo '<br />';
        }
    }
    public function listAction()
    {
        $product = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
        echo "<pre>";
        print_r($product);
    }

}

?>
