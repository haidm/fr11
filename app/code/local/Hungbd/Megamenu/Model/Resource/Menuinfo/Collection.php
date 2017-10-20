<?php
class Hungbd_Megamenu_Model_Resource_Menuinfo_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodel/menuinfo');
    }
}