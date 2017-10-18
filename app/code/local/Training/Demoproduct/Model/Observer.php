<?php
class Baont_Demoproduct_Model_Observer{

    public function  changeListPrice(Varien_Event_Observer $observer){
        $collection=$observer->getEvent()->getcollection();
        /** @var   */
        foreach ($collection as $collect){
            $collect->setFinalPrice(20);
        }
        return $this;
    }

    public function changeViewPrice(Varien_Event_Observer $observer)
{
    /** @var Mage_Catalog_Model_Product $product */
    $product = $observer->getEvent()->getProduct();

    $price = $product->getFinalPrice();

    $price += ($price*5)/100;

    $product->setFinalPrice($price);

    return $this;
}

    public function changeCartPrice(Varien_Event_Observer $observer)
    {
        /** @var Mage_Sales_Model_Quote_Item $quoteItem */
        $quoteItem = $observer->getEvent()->getQuoteItem();

        $product = $observer->getEvent()->getProduct();

        $price = $product->getFinalPrice();

        $price += ($price*5)/100;

        $price += ($price*5)/100;

        $quoteItem->setCustomPrice($price);
        $quoteItem->setOriginalCustomPrice($price);

        return $this;
    }

}