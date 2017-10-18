<?php
/**
 * Created by PhpStorm.
 * User: baohan-baotran
 * Date: 10/16/2017
 * Time: 3:18 PM
 */

class Block_Demo_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){
        /** @var  $layoutObject $block */
    $layoutObject= $this->getLayout();

        $header=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/header.phtml');
        $logo=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/logo.phtml');
        $left=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/left.phtml');
        $a=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/a.phtml');
        $b=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/b.phtml');
        $c=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/c.phtml');
        $d=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/d.phtml');
        $content=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/content.phtml');
        $right=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/right.phtml');
        $foot=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/footer.phtml');
        $parent=$layoutObject->createBlock('core/template')
            ->setTemplate('mytemplate/template1.phtml')
            ->setMyname('HEADER')->setChild('header',$header)->setChild('logo',$logo)->setChild('left',$left)
            ->setChild('a',$a)->setChild('b',$b)->setChild('c',$c)->setChild('d',$d)->setChild('content',$content)
            ->setChild('right',$right) ->setChild('foot',$foot);

    echo $parent->toHtml();
}

}