<?php
Class Ass6_Sinhvien_Model_Resource_Teststudent extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('ass6_sinhvien/teststudent','teststudent_id');
    }
}