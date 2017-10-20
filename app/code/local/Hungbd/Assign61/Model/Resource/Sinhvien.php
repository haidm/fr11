<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 20/10/2017
 * Time: 08:55
 */
    class Hungbd_Assign61_Model_Resource_Sinhvien extends Mage_Core_Model_Resource_Db_Abstract
    {
        public function _construct()
        {
            $this->_init('assign61/sinhvien','sinhvien_id');
        }
    }
?>