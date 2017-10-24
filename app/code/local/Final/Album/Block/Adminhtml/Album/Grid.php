<?php
class Final_Album_Block_Adminhtml_Album_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Set default value
     */
    public function __construct()
    {
//
        parent::__construct();
        $this->setDefaultSort('album_id');
        $this->setId('albumGrid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }
    protected function _prepareCollection()
    {
//        echo "fffff";die;
        $collection = Mage::getModel('album2/album')
            ->getCollection();

        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }
    protected function _prepareColumns()
    {
        $this->addColumn('album_id',
            array(
                'header' => Mage::helper('album')->__('Album ID'),
                'index' => 'album_id'
            )
        );
        $this->addColumn('album_name',
            array(
                'header' => Mage::helper('album')->__('Album Name'),
                'index' => 'album_name',
                'type' => 'text'
            )
        );
//        $this->addColumn('images',
//            array(
//                'header' => Mage::helper('album')->__('Album Images'),
//                'index' => 'album_images',
//                'type'    => 'text'
//            )
//        );
        return parent::_prepareColumns();
    }
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('album_id' => $row->getId()));
    }

}