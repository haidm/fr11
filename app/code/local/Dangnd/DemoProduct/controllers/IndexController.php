<?php
/**
 * Created by PhpStorm.
 * User: vothanhphong
 * Date: 16/10/2017
 * Time: 15:58
 */

class Dangnd_DemoProduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'Danh sách sản phẩm :';
        $list = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');

        foreach ($list as $key => $item) {
            echo "<br>$key . {$item->getName()}";
        }
    }
}