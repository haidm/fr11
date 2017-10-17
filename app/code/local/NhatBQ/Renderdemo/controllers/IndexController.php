<?php
class NhatBQ_Renderdemo_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layoutObject = $this->getLayout();

        $layoutObject = $this->getLayout();
        $childBlock = $layoutObject->createBlock('wrapBlock/Childblock')->setTemplate('helloworld/header.phtml');
        $childBlock1 = $layoutObject->createBlock('wrapBlock/Childblock1')->setTemplate('helloworld/header.phtml');
        $childBlock2 = $layoutObject->createBlock('wrapBlock/Childblock2')->setTemplate('helloworld/mainleft.phtml');
        $childBlock3 =

    }
}
?>