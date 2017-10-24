<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:28 SA
 */

class Dangnd_Album_Block_Adminhtml_Album_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'album';
        $this->_controller = 'adminhtml_album';
        $this->_blockGroup = 'dangnd_album';

        parent::__construct();

        $model = Mage::registry('albumModel');

        $this->_updateButton('save', 'lable', Mage::helper('dangnd_album')->__('Save'));
        $this->_addButton('delete', array(
            'label'   => Mage::helper('dangnd_album')->__('Delete'),
            'onclick' => "window.location.href='{$this->getUrl('*/*/delete', array('id' => $model->getId()))}'",
            'class'   => 'delete'
        ), 10);
        $this->_addButton('save_and_continue', array(
            'label'   => Mage::helper('dangnd_album')->__('Save and Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save'
        ), 10);

        $this->_formScripts[] = "function saveAndContinueEdit() {" .
            "editForm.submit($('edit_form').action + 'back/edit/')" .
            "}";
    }
}