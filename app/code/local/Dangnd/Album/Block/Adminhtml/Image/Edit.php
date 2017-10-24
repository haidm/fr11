<?php
/**
 * Created by PhpStorm.
 * User: nddang196
 * Date: 21-10-2017
 * Time: 08:28 SA
 */

class Dangnd_Album_Block_Adminhtml_Image_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'item';
        $this->_controller = 'adminhtml_image';
        $this->_blockGroup = 'dangnd_album';

        parent::__construct();

        $model = Mage::registry('imageModel');

        $this->_updateButton('save', 'label', Mage::helper('dangnd_album')->__('Save'));
        $this->_addButton('delete', array(
            'label'   => Mage::helper('dangnd_album')->__('Delete'),
            'onclick' => "window.location.href='{$this->getUrl('*/*/delete', array('id' => $model->getId()))}'",
            'class'   => 'delete'
        ));
        $this->_addButton('save_and_continue', array(
            'label'   => Mage::helper('dangnd_album')->__('Save and Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save'
        ));

        $this->_formScripts[] = "function saveAndContinueEdit() {" .
            "editForm.submit($('edit_form').action + 'back/edit/')" .
            "}";
    }
}