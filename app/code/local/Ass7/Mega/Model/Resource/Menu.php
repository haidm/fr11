<?php
class Ass7_Mega_Model_Resource_Menu extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('mymenu/menu', 'menu_id');
    }
}