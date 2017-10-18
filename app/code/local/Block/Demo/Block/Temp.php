<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/17/2017
 * Time: 4:21 PM
 */

class Block_Demo_Block_Temp extends Mage_Core_Block_Template
{
public function _construct()
{
  $this->setTemplate('mytemplate/header.phtnl');
}
}