<?php
class Datdt_Album_Model_Resource_Menuitem extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('album/menuitem1', 'menu_id');
    }
}