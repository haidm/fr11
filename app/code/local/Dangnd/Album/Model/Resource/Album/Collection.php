<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 24-10-2017
 * Time: 02:32 CH
 */ 
class Dangnd_Album_Model_Resource_Album_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    protected function _construct()
    {
        $this->_init('dangnd_album/album');
    }

}