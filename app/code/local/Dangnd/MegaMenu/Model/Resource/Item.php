<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 12:35 SA
 */

class Dangnd_MegaMenu_Model_Resource_Item extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('megamenu/item', 'id');
    }
}