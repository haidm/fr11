<?php
class Tungtt_SinhVien_Model_Resource_Student extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('sinhvien/student', 'id');
    }
}
?>