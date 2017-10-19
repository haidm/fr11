<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 19-10-2017
 * Time: 01:43 CH
 */

class Dangnd_Asm6Ex1_Model_Resource_Student extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('asm61/student', 'id');
    }
}