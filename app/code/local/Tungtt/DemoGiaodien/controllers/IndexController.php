<?php

class Tungtt_DemoGiaodien_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action: http://mageosc.local/student
     */
    public function indexAction()
    {
        echo "ahiii";
        
        $layoutObject = $this->getLayout();
        $headerBlock = $layoutObject
            ->createBlock('myblock/header')
            ->setTemplate('mymodule/header.phtml');
        $leftBlock = $layoutObject
            ->createBlock('myblock/left')
            ->setTemplate('mymodule/left.phtml');
        $rightBlock = $layoutObject
            ->createBlock('myblock/right')
            ->setTemplate('mymodule/right.phtml');
        $contentBlock = $layoutObject
            ->createBlock('myblock/content')
            ->setTemplate('mymodule/content.phtml');
        $footerBlock = $layoutObject
            ->createBlock('myblock/footer')
            ->setTemplate('mymodule/footer.phtml');
        $body = $layoutObject
            ->createBlock('myblock/body')
            ->setTemplate('mymodule/testmodule.phtml')
            ->setChild('headers',$headerBlock)
            ->setChild('lefts',$leftBlock)
            ->setChild('rights',$rightBlock)
            ->setChild('contents',$contentBlock)
            ->setChild('footers',$footerBlock);
        echo $body->toHtml();

    }

}