<?php
class Tungtt_SinhVien_Model_Sinhvien extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
//        $sinhvien = Mage::getModel('sinhvien/sinhvien');
        $this->_init('tungtt_sinhvien/sinhvien');
    }
}