<?php
class Datdt_Album_Model_Resource_Manage extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('album/manage1', 'manage_id');
    }
}