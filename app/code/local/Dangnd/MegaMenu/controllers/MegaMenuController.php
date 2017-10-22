<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 12:00 SA
 */

class Dangnd_MegaMenu_MegaMenuController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $menu = Mage::getModel('megamenu/menu')->getCollection()->toArray();
        $items = Mage::getModel('megamenu/item')->getCollection()->toArray();

        $this->loadLayout('megamenu_layout_handle');

        $this->getLayout()->getBlock('main')
            ->setData('menu', $menu)
            ->setData('items', $items);

        $this->renderLayout();
    }
}