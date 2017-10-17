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
}