<?php
/**
 * Created by PhpStorm.
 * User: hungbui
 * Date: 17/10/2017
 * Time: 20:10
 */
class Hungbd_Giaodien_SecondController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        /** @var $layoutObj */
        $layoutObj = $this->getLayout();
        $aBlock = $headerBlock = $layoutObj
            ->createBlock('myblock/ablock')
            ->setTemplate('Mytemplate/ablock.phtml');
//        var_dump($aBlock);
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
            ->setChild('c1_a',$aBlock);
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
            ->setTemplate('Mytemplate/second.phtml')
            ->setChild('c2_header',$headerBlock)
            ->setChild('c2_left',$leftBlock)
            ->setChild('c2_right',$rightBlock)
            ->setChild('c2_content',$contentBlock)
            ->setChild('c2_footer',$footerBlock);
        echo $wrapeBlock->toHtml();

    }
}
?>