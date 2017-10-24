<?php
class Final_Album_Model_Image extends Mage_Core_Model_Abstract
{
    public function _construct(){
        parent::_construct();
        $this->_init('album2/image');
    }
}