<?php

class Datdt_Assignment4_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        
          $layoutObj = $this->getLayout();

          $blockaBlock =$layoutObj->createBlock('myblock/blocka','blocka')->setTemplate('Datdt/blocka.phtml');

          $blockbBlock =$layoutObj->createBlock('myblock/blockb','blockb')->setTemplate('Datdt/blockb.phtml');

          $blockcBlock =$layoutObj->createBlock('myblock/blockc','blockc')->setTemplate('Datdt/blockc.phtml');

          $blockdBlock =$layoutObj->createBlock('myblock/blockd','blockd')->setTemplate('Datdt/blockd.phtml');

          $blockeBlock =$layoutObj->createBlock('myblock/blocke','blocke')->setTemplate('Datdt/blocke.phtml');

          $block = $layoutObj->createBlock('myblock/assignment4')->setTemplate('Datdt/assignment4.phtml')->setChild(blocka,$blockaBlock)->setChild(blockb,$blockbBlock)->setChild(blockc,$blockcBlock)->setChild(blockd,$blockdBlock)->setChild(blocke,$blockeBlock);

        echo $block->toHtml();
    }
}