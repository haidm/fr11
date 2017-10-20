<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 20-10-2017
 * Time: 05:09 CH
 */

class Dangnd_Asm7_Block_Adminhtml_Order_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('megaFrm');
        $this->setTitle(Mage::helper('dangnd_asm7')->__('Item Information'));
    }

    protected function _prepareForm()
    {
        $model  = Mage::registry('testmodel');
        $form   = new Varien_Data_Form(array(
            'id'        => 'editFrm',
            'action'    => $this->getData('action'),
            'method'    => 'post'
        ));
        $fieldset   = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('dangnd_asm7')->__('Item Information')
        ));
        $fieldset->addField('name', 'text',
            array(
                'name'      => 'name',
                'label'     => Mage::helper('dangnd_asm7')->__('Name'),
                'class'     => 'required-entry',
                'required'  => true,
            )
        );
        $fieldset->addField('active', 'select',
            array(
                'name'      => 'address',
                'label'     => Mage::helper('dangnd_asm7')->__('active'),
                'class'     => 'required-entry',
                'required'  => true,
            )
        );
        if ($model->getId()) {
            $fieldset->addField('id', 'hidden',
                array(
                    'name'      => 'id',
                    'label'     => Mage::helper('dangnd_asm7')->__('active')
                )
            );
        }

        $form->addValues($model->getData());
        $form->setUseContainer(true);
        $form->setAction($this->getUrl('*/asm7/save'));
        $this->setForm($form);
        return parent::_prepareForm();
    }
}