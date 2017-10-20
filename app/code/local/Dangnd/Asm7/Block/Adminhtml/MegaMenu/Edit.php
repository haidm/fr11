<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 20-10-2017
 * Time: 04:47 CH
 */

class Dangnd_Asm7_Block_Adminhtml_MegaMenu_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'megamenu';
        $this->_controller = 'adminhtml_megamenu';
        $this->_blockGroup = 'asm7';
        parent::__construct();
        $model = Mage::registry('testmodel');
        $this->_updateButton('save', 'label', Mage::helper('dangnd_asm7')->__('Save'));
        $this->_addButton('delete', array(
            'label'     => Mage::helper('dangnd_asm7')->__('Delete Order'),
            'onclick'   => "window.location.href = '" . $this->getUrl("*/*/delete", array("id" => $model->getId())) . "'",
            'class' => 'delete'
        ), 10);
        $this->_addButton('save_and_continue', array(
            'label'     => Mage::helper('dangnd_asm7')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class' => 'save'
        ), 10);
        $this->_formScripts[] = " function saveAndContinueEdit(){ editForm.submit($('edit_form').action + 'back/edit/') } ";
    }
}