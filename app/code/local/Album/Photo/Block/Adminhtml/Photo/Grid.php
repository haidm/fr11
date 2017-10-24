<?php
class Album_Photo_Block_Adminhtml_Photo_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('album_id');
        $this->setId('albumGrid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }


    protected function _prepareCollection()
    {
        $collection = Mage::getModel('mymodel/photo')
            ->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }


    protected function _prepareColumns()
    {
        $this->addColumn('album_id',
            array(
                'header' => Mage::helper('tax')->__('Album ID'),
                'index' => 'album_id'
            )
        );

        $this->addColumn('name',
            array(
                'header' => Mage::helper('tax')->__(' Name'),
                'index' => 'name',
                'type'    => 'text'
            )
        );

        $this->addColumn('description',
            array(
                'header' => Mage::helper('tax')->__('Description'),
                'index' => 'description',
                'type'    => 'text'
            )
        );

        return parent::_prepareColumns();
    }


    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('album_id' => $row->getId()));
    }
}