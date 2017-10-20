<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 20-10-2017
 * Time: 04:41 CH
 */

class Dangnd_Asm7_Block_Adminhtml_MegaMenu_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultSort('id');
        $this->setId('megaGrid');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('asm7/megamenu')
            ->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id',
            array(
                'header' => Mage::helper('dangnd_asm7')->__('ID'),
                'index' => 'id'
            )
        );
        $this->addColumn('name',
            array(
                'header' => Mage::helper('dangnd_asm7')->__('Name'),
                'index' => 'name',
                'type'    => 'text'
            )
        );
        $this->addColumn('active',
            array(
                'header' => Mage::helper('dangnd_asm7')->__('Active'),
                'index' => 'active',
                'type'    => 'text'
            )
        );
        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}