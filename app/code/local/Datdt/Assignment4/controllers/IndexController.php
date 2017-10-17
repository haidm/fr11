<?php

class Datdt_Assignment4_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        
         $layoutObj = $this->getLayout();
        $block = $layoutObj->createBlock('myblock/assignment4')->setTemplate('Datdt/assignment4.phtml')->setChild(blocka,$blockaBlock)->setChild(blockb,$blockbBlock);


          $blockaBlock =$layoutObj->createBlock('myblock/blocka','blocka')->setTemplate('Datdt/blocka.phtml');

           $blockbBlock =$layoutObj->createBlock('myblock/blockb','blockb')->setTemplate('Datdt/blockb.phtml');

        echo $block->toHtml();
    }
}