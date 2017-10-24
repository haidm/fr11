<?php
class Tungtt_MageFinal_Adminhtml_AlbumController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
	    		$photo = Mage::getModel('myalbum/photo')
			->getCollection();
		foreach ($photo as $item) {
			echo $item->getName() . "<br />";
		}
    }
}