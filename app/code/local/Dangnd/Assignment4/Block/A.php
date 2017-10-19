<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 17-10-2017
 * Time: 05:51 CH
 */

class Dangnd_Assignment4_Block_A extends Mage_Core_Block_Template
{
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('assignment4/a.phtml');
    }
}