<?php
class Hungbd_Megamenu_Block_Adminhtml_Menuitem_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Set default value
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('id');
        $this->setId('menuitemGrid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Prepare grid collection
     *
     * @return TestVendor_Demomodule_Block_Adminhtml_Menuinfo_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('mymodel/menuitem')
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
        $this->addColumn('id',
            array(
                'header' => Mage::helper('tax')->__(' Id'),
                'index' => 'id'
            )
        );

        $this->addColumn('title',
            array(
                'header' => Mage::helper('tax')->__(' Title'),
                'index' => 'title',
                'type'    => 'text'
            )
        );

        $this->addColumn('class',
            array(
                'header' => Mage::helper('tax')->__('Class'),
                'index' => 'class',
                'type'    => 'text'
            )
        );

        $this->addColumn('link',
            array(
                'header' => Mage::helper('tax')->__('Link'),
                'index' => 'link',
                'type'    => 'text'
            )
        );

        $this->addColumn('content',
            array(
                'header' => Mage::helper('tax')->__('Content'),
                'index' => 'content',
                'type'    => 'text'
            )
        );

        $this->addColumn('parent',
            array(
                'header' => Mage::helper('tax')->__('Parent'),
                'index' => 'parent',
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
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}