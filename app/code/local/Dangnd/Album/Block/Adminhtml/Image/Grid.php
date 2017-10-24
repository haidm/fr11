<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:28 SA
 */

class Dangnd_Album_Block_Adminhtml_Image_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('id');
        $this->setId('g_image');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    public function _prepareCollection()
    {
        $collection = Mage::getModel('dangnd_album/image')->getCollection();

        $this->setCollection($collection);

        parent::_prepareCollection();

        return $this;
    }

    public function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header' => Mage::helper('dangnd_album')->__('ID'),
            'index'  => 'id'
        ));
        $this->addColumn('albumId', array(
            'header' => Mage::helper('dangnd_album')->__('Album'),
            'index'  => 'albumId',
            'type'   => 'text'
        ));
        $this->addColumn('title', array(
            'header' => Mage::helper('dangnd_album')->__('Title'),
            'index'  => 'title',
            'type'   => 'text'
        ));
        $this->addColumn('link', array(
            'header' => Mage::helper('dangnd_album')->__('Link'),
            'index'  => 'link',
            'type'   => 'text'
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