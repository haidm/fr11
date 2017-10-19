<?php
class TestVendor_Demomodule_Model_Resource_Order extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodel/order2', 'order_id');
    }
}