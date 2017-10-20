<?php
class Tungtt_SinhVien_Model_Student extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
//        $sinhvien = Mage::getModel('sinhvien/sinhvien');
        $this->_init('sinhvien/student');
    }
}