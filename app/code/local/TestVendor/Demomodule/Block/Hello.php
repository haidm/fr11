<?php
class TestVendor_Demomodule_Block_Hello extends Mage_Core_Block_Template
{

    public function _construct()
    {
        $this->setTemplate('mytemplate/file.phtml');
    }


}