<?php
Class Ass6_Sinhvien_Model_Resource_Student extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('Ass6_Sinhvien/student','student_id');
    }
}