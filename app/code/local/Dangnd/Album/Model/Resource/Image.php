<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 24-10-2017
 * Time: 02:31 CH
 */

class Dangnd_Album_Model_Resource_Image extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('dangnd_album/image', 'id');
    }
}