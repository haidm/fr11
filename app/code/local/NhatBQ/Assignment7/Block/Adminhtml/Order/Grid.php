<?php
class NhatBQ_Assignment7_Block_Adminhtml_Order_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Set default value
     */
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('order_id');
        $this->setId('orderGrid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('nhatbq/order')
            ->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns()
    {
        $this->addColumn('order_id',
            array(
                'header' => Mage::helper('tax')->__('Order ID'),
                'index' => 'order_id'
            )
        );
        $this->addColumn('name',
            array(
                'header' => Mage::helper('tax')->__('Customer Name'),
                'index' => 'name',
                'type'    => 'text'
            )
        );
        $this->addColumn('address',
            array(
                'header' => Mage::helper('tax')->__('Customer Address'),
                'index' => 'address',
                'type'    => 'text'
            )
        );
        $this->addColumn('email',
            array(
                'header' => Mage::helper('tax')->__('Customer Email'),
                'index' => 'email',
                'type'    => 'text'
            )
        );
        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('order_id' => $row->getId()));
    }
}