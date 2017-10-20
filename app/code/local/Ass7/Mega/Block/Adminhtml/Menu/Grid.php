<?php
class Ass7_Mega_Block_Adminhtml_Menu_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Set default value
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('menu_id');
        $this->setId('menuGrid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('mymenu/menu')
            ->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }
    protected function _prepareColumns()
    {
        $this->addColumn('menu_id',
            array(
                'header' => Mage::helper('mega')->__('Menu ID'),
                'index' => 'menu_id'
            )
        );
        $this->addColumn('name',
            array(
                'header' => Mage::helper('mega')->__('Menu Name'),
                'index' => 'name',
                'type'    => 'text'
            )
        );
//        $this->addColumn('address',
//            array(
//                'header' => Mage::helper('tax')->__('Customer Address'),
//                'index' => 'address',
//                'type'    => 'text'
//            )
//        );
        return parent::_prepareColumns();

        public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('menu_id' => $row->getId()));
    }
    }
}
