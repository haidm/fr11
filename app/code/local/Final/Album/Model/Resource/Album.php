<?php
class Final_Album_Model_Resource_Album extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('album2/album', 'album_id');
    }
}