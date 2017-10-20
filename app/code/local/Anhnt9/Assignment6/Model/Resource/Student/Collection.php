<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/20/2017
 * Time: 12:57 PM
 */
class Anhnt9_Assignment6_Model_Resource_Student_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('test/student');
    }
}