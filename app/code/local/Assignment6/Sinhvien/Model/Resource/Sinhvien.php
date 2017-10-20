<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/19/2017
 * Time: 12:40 PM
 */

class Assignment6_Sinhvien_Model_Resource_Sinhvien extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * Resource initialization
     */
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('assignment6_sinhvien/sinhvien','id');
    }

}