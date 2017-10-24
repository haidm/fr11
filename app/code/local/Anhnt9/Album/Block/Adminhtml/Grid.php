<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 10/24/2017
 * Time: 3:31 PM
 */
class Anhnt9_Album_Block_Adminhtml_Album_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Set default value
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('album_id');
        $this->setId('albumGrid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Prepare grid collection
     *
     * @return Anhnt9_Album_Block_Adminhtml_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('finalmodel/album')
            ->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }

    /**
     * Prepare grid columns
     *
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('album_id',
            array(
                'header' => Mage::helper('tax')->__('Album ID'),
                'index' => 'order_id'
            )
        );

        $this->addColumn('name_album',
            array(
                'header' => Mage::helper('tax')->__('Customer Name'),
                'index' => 'name',
                'type'    => 'text'
            )
        );

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
        return $this->getUrl('*/*/edit', array('album_id' => $row->getId()));
    }
}