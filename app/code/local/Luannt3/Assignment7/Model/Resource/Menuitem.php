<?php
class Luannt3_Assignment7_Model_Resource_Menuitem extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('assignment7/menuitem', 'menu_id');
    }
}