<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/17/2017
 * Time: 10:43 AM
 */

class TestVendor_Demomodule_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $layoutObject = $this->getLayout();

        //Create child block
        $logo = $layoutObject->createBlock('core/template', 'logo')
            ->setTemplate('mytemplate/logo.phtml');

        $blocka = $layoutObject->createBlock('core/template', 'blocka')
            ->setTemplate('mytemplate/blocka.phtml');

        $blockb = $layoutObject->createBlock('core/template', 'blockb')
            ->setTemplate('mytemplate/blockb.phtml');

        $blockc = $layoutObject->createBlock('core/template', 'blockc')
            ->setTemplate('mytemplate/blockc.phtml');

        $blockd = $layoutObject->createBlock('core/template', 'blockd')
            ->setTemplate('mytemplate/blockd.phtml');

        //Create parent block
        $header = $layoutObject->createBlock('core/template', 'header')
            ->setTemplate('mytemplate/header.phtml')
            ->append($logo, 'logo');

        $left = $layoutObject->createBlock('core/text_list', 'left')
        ->append($blockc, 'blockc');

        $content = $layoutObject->createBlock('core/text_list', 'content')
            ->append($blocka, 'blocka')
            ->append($blockb, 'blockb');

        $right = $layoutObject->createBlock('core/text_list', 'right')
            ->append($blockd, 'blockd');

        $footer = $layoutObject->createBlock('core/template', 'footer')
            ->setTemplate('mytemplate/footer.phtml');


        //Create main block
        $block = $layoutObject->createBlock('core/template', 'mainblock')
            ->setTemplate('mytemplate/mainblock.phtml')
            ->append($header, 'header')
            ->append($left, 'left')
            ->append($content, 'content')
            ->append($right, 'right')
            ->append($footer, 'footer');

        echo $block->toHtml();
    }
}