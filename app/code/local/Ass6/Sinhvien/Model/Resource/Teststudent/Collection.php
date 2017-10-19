<?php
Class Ass6_Sinhvien_Model_Resource_Teststudent_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('ass6_sinhvien/teststudent');
    }
}