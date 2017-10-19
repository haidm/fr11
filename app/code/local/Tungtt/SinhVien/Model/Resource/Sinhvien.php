<?php
class Tungtt_SinhVien_Model_Resource_Sinhvien extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('tungtt_sinhvien/sinhvien', 'sinhvien_id');
    }
}