<?php
class Hungbd_Megamenu_Block_Adminhtml_Menuinfo_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Set default value
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('id');
        $this->setId('menuinfoGrid');
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
        $collection = Mage::getModel('mymodel/menuinfo')
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
                'header' => Mage::helper('tax')->__(' ID'),
                'index' => 'id'
            )
        );

        $this->addColumn('name',
            array(
                'header' => Mage::helper('tax')->__(' Name'),
                'index' => 'name',
                'type'    => 'text'
            )
        );

        $this->addColumn('active',
            array(
                'header' => Mage::helper('tax')->__('Active'),
                'index' => 'active',
                'type'    => 'text'
            )
        );

        $this->addColumn('Type',
            array(
                'header' => Mage::helper('tax')->__('Type'),
                'index' => 'Type',
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