<?php

class Tungtt_DemoProduct_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        $collection = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('*');
// we iterate through the list of products to get attribute values
        foreach ($collection as $product) {
            echo $product->getName(); //get name
            echo ' => ';
            echo '$ '.$product->getPrice(); //get price
            echo '<br />';

        }
        foreach ($product->getCategoryIds() as $category_id) {
            $category = Mage::getModel('catalog/category')->load($category_id);
            echo $category->getName();
            echo $category->getParentCategory()->getName(); // get parent of category
        }
    }

    public function categoryAction()
    {
        $category = Mage::getModel('catalog/category')->load(1);
        $productCate = Mage::getResourceModel('catalog/product_collection')
            ->addCategoryFilter($category);
    }
}