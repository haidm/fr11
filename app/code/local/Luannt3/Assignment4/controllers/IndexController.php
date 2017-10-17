<?php
class Luannt3_Assignment4_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $layoutObj = $this->getLayout();

        $headBlock = $layoutObj ->createBlock('myblock/header','header') ->setTemplate('luannt3/header.phtml');
        $leftBlock = $layoutObj ->createBlock('myblock/left','left') ->setTemplate('luannt3/left.phtml');
        $contentBlock = $layoutObj ->createBlock('myblock/content','content') ->setTemplate('luannt3/content.phtml');
        $rightBlock = $layoutObj ->createBlock('myblock/right','right') ->setTemplate('luannt3/right.phtml');
        $footerBlock = $layoutObj ->createBlock('myblock/footer','footer') ->setTemplate('luannt3/footer.phtml');
        $block = $layoutObj->createBlock('myblock/hello')->setTemplate('luannt3/hello.phtml')->setChild(header,$headBlock)->setChild(left,$leftBlock)->setChild(content,$contentBlock)->setChild(right,$rightBlock)->setChild(footer,$footerBlock);
        echo $block->toHtml();
    }

}

?>
