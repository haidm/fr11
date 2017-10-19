<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 17-10-2017
 * Time: 04:46 CH
 */

class Dangnd_Assignment_Block_Content extends Mage_Core_Block_Text_List
{
    public function _construct()
    {
        parent::_construct();
        $layoutObj = $this->getLayout();
        $a = $layoutObj->createBlock('myblock/a');
        $b = $layoutObj->createBlock('myblock/b');
        $this->setChild('a', $a)->setChild('b', $b);
    }
}