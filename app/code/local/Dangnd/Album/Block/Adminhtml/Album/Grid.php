<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:28 SA
 */

class Dangnd_Album_Block_Adminhtml_Album_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultDir('asc');
        $this->setDefaultSort('id');
        $this->setId('g_album');
        $this->setSaveParametersInSession(true);
    }

    public function _prepareCollection()
    {
        $collection = Mage::getModel('dangnd_album/album')->getCollection();

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
        $this->addColumn('name', array(
            'header' => Mage::helper('dangnd_album')->__('Name'),
            'index'  => 'name',
            'type'   => 'text'
        ));
        $this->addColumn('image', array(
            'header' => Mage::helper('dangnd_album')->__('Images'),
            'index'  => 'type',
            'type'   => 'text'
        ));

        return parent::_prepareColumns();
    }

    /**
     * @param Mage_Core_Model_Abstract $row
     * @return string : url
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $row->getId()
        ));
    }
}