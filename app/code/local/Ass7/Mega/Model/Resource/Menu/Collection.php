<?php
Class Ass7_Mega_Model_Resource_Menu_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('mymenu/menu');
    }
}