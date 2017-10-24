<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 24-10-2017
 * Time: 04:35 CH
 */

class Dangnd_Album_Block_Adminhtml_Album_Helper_Image extends Varien_Data_Form_Element_Image
{
    public function getHtmlAttributes()
    {
        return array_merge(parent::getHtmlAttributes(), array('multiple'));
    }
}