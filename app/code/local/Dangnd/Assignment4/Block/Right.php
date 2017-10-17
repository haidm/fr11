<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 17-10-2017
 * Time: 04:42 CH
 */

class Dangnd_Assignment4_Block_Right extends Mage_Core_Block_Text_List
{
    public function _construct()
    {
        parent::_construct();
        $layoutObj = $this->getLayout();
        $d = $layoutObj->createBlock('myblock/d');
        $this->setChild('d', $d);
    }
}