<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 17-10-2017
 * Time: 02:17 CH
 */

class Dangnd_Assignment4_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layoutObj = $this->getLayout();
        $header = $layoutObj->createBlock('myblock/header');
        $footer = $layoutObj->createBlock('myblock/footer');

        $block = $layoutObj->createBlock('myblock/temp')
            ->setChild('header', $header)
            ->setChild('footer', $footer);

        echo $block->toHtml();
    }
}