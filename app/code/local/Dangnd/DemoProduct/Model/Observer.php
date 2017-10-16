<?php
/**
 * Created by PhpStorm.
 * User: vothanhphong
 * Date: 16/10/2017
 * Time: 17:26
 */

class Dangnd_DemoProduct_Modal_Observer
{
    public function changeAttribute(Varien_Event_Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();

        if(count($product) > 1) {
            foreach ($product as $key => $item) {
                $product[$key]->setPriceIncvat(20);
            }
        }
        else {
            $price = $product->getPrice();
            $product->setPriceIncvat($price + $price/25);
        }
    }
}