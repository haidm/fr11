<?php
Class Final_Album_Model_Resource_Album_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('album2/album');
    }
}