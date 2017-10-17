<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 17:49
 */
public function changeListPrice(Varien_Event_Observer $observer)
{
    $colection = $observer->getEvent()->getCollection();
    /** @var Mage_Catalog_Model_Product $item */
    foreach ($colection as $item) {
        $item->setFinalPrice(20);
    }
    return $this;
}

?>