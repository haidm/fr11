<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 19-10-2017
 * Time: 01:43 CH
 */

class Dangnd_Asm7_Model_Resource_MegaMenu extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('asm7/megamenu', 'id');
    }
}