<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 17:49
 */
public function hookToShowProductBefore($observer)
{
    //Hooking to our own event
    $product = $observer->getEvent()->getProduct();
    // do something with product
//    Mage::log("Product ".$request['product']." will be added to cart.");
    $product->getPrice() = 20;
    return $this;
}
?>