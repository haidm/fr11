<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 19-10-2017
 * Time: 02:32 CH
 */

class Dangnd_Asm7_Model_Resource_MegaMenu_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('asm7/megamenu');
    }
}