<?php
class Luannt3_Assignment5_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
       $this->loadLayout('ass5_layout_handle');
//       var_dump($this->getLayout()->getUpdate()->getHandles());
       $this->renderLayout();
    }

}

?>
