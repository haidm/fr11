<?php

class Basetut_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
//        echo "ahhhhhhhhhhhh";die;
        // $this->loadLayout();
        // $this->renderLayout();
        // echo "hienzzzzz";
        // $layoutObject = $this->getLayout();
        // $block = $layoutObject->createBlock('core/template')->setTemplate('helloworld/helloworld.phtml');
        // //->setMyName('hien');
        // echo $block->toHtml();

        $layoutObject = $this->getLayout();
        $childBlock = $layoutObject->createBlock('wrapBlock/Childblock')->setTemplate('helloworld/header.phtml');
        $childBlock1 = $layoutObject->createBlock('wrapBlock/Childblock1')->setTemplate('helloworld/logo.phtml');
        $childBlock2 = $layoutObject->createBlock('wrapBlock/Childblock2')->setTemplate('helloworld/mainleft.phtml');
        $childBlock3 = $layoutObject->createBlock('wrapBlock/Childblock3')->setTemplate('helloworld/maincontenta.phtml');
        $childBlock4 = $layoutObject->createBlock('wrapBlock/Childblock4')->setTemplate('helloworld/mainright.phtml');
        $childBlock5 = $layoutObject->createBlock('wrapBlock/Childblock5')->setTemplate('helloworld/footer.phtml');
        $block = $layoutObject->createBlock('wrapBlock/helloworld')->setTemplate('helloworld/helloworld.phtml')
        ->setChild('header',$childBlock)
            ->setChild('logo',$childBlock1)
        ->setChild('mainleftc',$childBlock2)
        ->setChild('maincontent',$childBlock3)
        ->setChild('mainrightd',$childBlock4)
        ->setChild('footer',$childBlock5);
        echo $block->toHtml();
    }
}