<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:28 SA
 */

class Dangnd_MegaMenu_Block_Adminhtml_Item_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('id');
        $this->setId('g_item');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    public function _prepareCollection()
    {
        $collection = Mage::getModel('megamenu/item')->getCollection();

        $this->setCollection($collection);

        parent::_prepareCollection();

        return $this;
    }

    public function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header' => Mage::helper('megamenu')->__('ID'),
            'index'  => 'id'
        ));
        $this->addColumn('title', array(
            'header' => Mage::helper('megamenu')->__('Title'),
            'index'  => 'title',
            'type'   => 'text'
        ));
        $this->addColumn('class', array(
            'header' => Mage::helper('megamenu')->__('Class'),
            'index'  => 'class',
            'type'   => 'text'
        ));
        $this->addColumn('link', array(
            'header' => Mage::helper('megamenu')->__('Link'),
            'index'  => 'link',
            'type'   => 'text'
        ));
        $this->addColumn('content', array(
            'header' => Mage::helper('megamenu')->__('Content'),
            'index'  => 'content',
            'type'   => 'text'
        ));
        $this->addColumn('parent', array(
            'header' => Mage::helper('megamenu')->__('Parent'),
            'index'  => 'parent'
        ));

        return parent::_prepareColumns();
    }

    /**
     * Return url
     *
     * @param Mage_Core_Model_Abstract $row
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $row->getId()
        ));
    }
}