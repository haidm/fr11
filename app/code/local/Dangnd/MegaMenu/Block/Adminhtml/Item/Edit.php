<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:28 SA
 */

class Dangnd_MegaMenu_Block_Adminhtml_Item_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'item';
        $this->_controller = 'adminhtml_item';
        $this->_blockGroup = 'megamenu';
//        $this->_mode = 'editor';

        parent::__construct();

        $model = Mage::registry('itemmodel');

        $this->_updateButton('save', 'label', Mage::helper('megamenu')->__('Save Item'));
        $this->_addButton('delete', array(
            'label'   => Mage::helper('megamenu')->__('Delete Item'),
            'onclick' => "window.location.href='{$this->getUrl('*/*/delete', array('id' => $model->getId()))}'",
            'class'   => 'delete'
        ));
        $this->_addButton('save_and_continue', array(
            'label'   => Mage::helper('megamenu')->__('Save and Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save'
        ));

        $this->_formScripts[] = "function saveAndContinueEdit() {" .
            "editForm.submit($('edit_form').action + 'back/edit/')" .
            "}";
    }
}