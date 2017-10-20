<?php
class Ass7_Mega_Model_Menu extends Mage_Core_Model_Abstract
{
    public function _construct(){
        parent::_construct();
        $this->_init('ass7_mega/menu');
    }
}