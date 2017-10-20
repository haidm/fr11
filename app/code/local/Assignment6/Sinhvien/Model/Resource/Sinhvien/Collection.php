<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/19/2017
 * Time: 4:41 PM
 */

class Assignment6_Sinhvien_Model_Resource_Sinhvien_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {

        $this->_init('assignment6_sinhvien/sinhvien');
    }
}