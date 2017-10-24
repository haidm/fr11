<?php

class Tungtt_MageFinal_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * index action: http://mageosc.local/student
	 */
	public function indexAction()
	{
		$this->loadLayout;
		$this->renderLayout();
	}
	
}