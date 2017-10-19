<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/17/2017
 * Time: 10:43 AM
 */

class Tungtt_DemoLayout_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $this->loadLayout('tungtt_demolayout_handle');
        $this->renderLayout();
//        $layoutObject = $this->getLayout();
//
//        //Create child block
//        $logo = $layoutObject->createBlock('core/template', 'logo')
//            ->setTemplate('mylayout/logo.phtml');
//
//        $banner = $layoutObject->createBlock('core/template', 'banner')
//            ->setTemplate('mylayout/banner.phtml');
//
//        $blocka = $layoutObject->createBlock('core/template', 'blocka')
//            ->setTemplate('mylayout/editsinhvien.phtml');
//
//        $blockb = $layoutObject->createBlock('core/template', 'blockb')
//            ->setTemplate('mylayout/addsinhvien.phtml');
//
//        $blockc = $layoutObject->createBlock('core/template', 'blockc')
//            ->setTemplate('mylayout/blockc.phtml');
//
//        $blockd = $layoutObject->createBlock('core/template', 'blockd')
//            ->setTemplate('mylayout/listsinhvien.phtml');
//
//        //Create parent block
//        $header = $layoutObject->createBlock('core/template', 'header')
//            ->setTemplate('mylayout/header.phtml')
//            ->append($logo, 'logo')
//            ->append($banner, 'banner');
//
//        $left = $layoutObject->createBlock('core/text_list', 'left')
//        ->append($blockc, 'blockc');
//
//        $content = $layoutObject->createBlock('core/text_list', 'content')
//            ->append($blocka, 'blocka')
//            ->append($blockb, 'blockb');
//
//        $right = $layoutObject->createBlock('core/text_list', 'right')
//            ->append($blockd, 'blockd');
//
//        $footer = $layoutObject->createBlock('core/template', 'footer')
//            ->setTemplate('mylayout/footer.phtml');
//
//
//        //Create main block
//        $block = $layoutObject->createBlock('core/template', 'mainblock')
//            ->setTemplate('mylayout/mainlist.phtml')
//            ->append($header, 'header')
//            ->append($left, 'left')
//            ->append($content, 'content')
//            ->append($right, 'right')
//            ->append($footer, 'footer');
//
//        echo $block->toHtml();
    }
}