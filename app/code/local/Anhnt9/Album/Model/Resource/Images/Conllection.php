<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/24/2017
 * Time: 2:27 PM
 */
class Anhnt9_Album_Model_Resource_Images_Conllection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('finalmodel/images');
    }
}