<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 15:55
 */
class Hungbd_Demoproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    function IndexAction()
    {
        $collection = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
// we iterate through the list of products to get attribute values
        foreach ($collection as $product) {
            echo $product->getName(); //get name
//            echo $product->getPrice();
            echo '<br />';
        }

    }
}
?>