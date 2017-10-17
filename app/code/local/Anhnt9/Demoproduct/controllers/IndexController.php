<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/17/2017
 * Time: 5:45 PM
 */
class Anhnt9_Demoproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){
        $layoutObject = $this->getLayout();

        $blockChildHeader = $layoutObject->createBlock('myblock/logo','logo_header');
        $blockHeader = $layoutObject->createBlock('myblock/header','header')->append($blockChildHeader,'block_header');

        $blockChildLeft = $layoutObject->createBlock('myblock/c','c');
        $blockLeft = $layoutObject->createBlock('myblock/left','left')->append($blockChildLeft,'block_left');

        $blockChildRight_d = $layoutObject->createBlock('myblock/d','d');
        $blockRight = $layoutObject->createBlock('myblock/right')
        ->append($blockChildRight_d,'right_d');

        $blockChildContent_a = $layoutObject->createBlock('myblock/a','a');
        $blockChildContent_b = $layoutObject->createBlock('myblock/b','b');
        $blockContent = $layoutObject->createBlock('myblock/content')
        ->append($blockChildContent_a,'content_a')
        ->append($blockChildContent_b,'content_b');

        $blockFooter = $layoutObject->createBlock('myblock/footer','footer');
        $block = $layoutObject->createBlock('myblock/blockTemp')
            ->setChild('header',$blockHeader)
            ->setChild('left',$blockLeft)
            ->setChild('content',$blockContent)
            ->setChild('right',$blockRight)
            ->setChild('footer',$blockFooter);


        echo $block->toHtml();

    }
}