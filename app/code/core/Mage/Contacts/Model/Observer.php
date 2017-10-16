<?php

class Mage_Contacts_Model_Observer
{
    public function editData($observer)
    {
        $product = $observer->getEvent()->getProduct();
        $product->setName('tesssst');

        return $this;
    }
}