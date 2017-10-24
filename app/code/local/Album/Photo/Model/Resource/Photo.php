<?php
class Album_Photo_Model_Resource_Photo extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodel/album', 'album_id');

    }
}