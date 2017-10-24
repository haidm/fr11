<?php
class Datdt_Album_Model_Resource_Manage_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('album/manage1');
    }
}