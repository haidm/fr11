<?php

/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 16/10/2017
 * Time: 14:47
 */
class Hungbd_Giaodien_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        /** @var $layoutObj */
        $layoutObj = $this->getLayout();
        $aBlock = $headerBlock = $layoutObj
            ->createBlock('myblock/ablock')
            ->setTemplate('Mytemplate/ablock.phtml');
        $bBlock = $headerBlock = $layoutObj
            ->createBlock('myblock/bblock')
            ->setTemplate('Mytemplate/bblock.phtml');
        $cBlock = $headerBlock = $layoutObj
            ->createBlock('myblock/cblock')
            ->setTemplate('Mytemplate/cblock.phtml');
        $dBlock = $headerBlock = $layoutObj
            ->createBlock('myblock/dblock')
            ->setTemplate('Mytemplate/dblock.phtml');
        $headerBlock = $layoutObj
            ->createBlock('myblock/header')
            ->setTemplate('Mytemplate/header.phtml');
        $leftBlock = $layoutObj
            ->createBlock('myblock/left')
            ->setTemplate('Mytemplate/left.phtml')
            ->append($cBlock,'c_block');
        $rightBlock = $layoutObj
            ->createBlock('myblock/right')
            ->setTemplate('Mytemplate/right.phtml')
            ->append($dBlock,'d_block');
        $contentBlock = $layoutObj
            ->createBlock('myblock/content')
            ->setTemplate('Mytemplate/content.phtml')
            ->append($aBlock,'a_block')
            ->append($aBlock,'b_block');
        $footerBlock = $layoutObj
            ->createBlock('myblock/footer')
            ->setTemplate('Mytemplate/footer.phtml');
        $wrapeBlock = $layoutObj
            ->createBlock('myblock/wraper')
            ->setTemplate('Mytemplate/hello.phtml')
            ->setChild('c1_header',$headerBlock)
            ->setChild('c1_left',$leftBlock)
            ->setChild('c1_right',$rightBlock)
            ->setChild('c1_content',$contentBlock)
            ->setChild('c1_footer',$footerBlock);
        echo $wrapeBlock->toHtml();

    }
}
?>