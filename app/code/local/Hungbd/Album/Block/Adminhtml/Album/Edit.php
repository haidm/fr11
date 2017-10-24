<?php
class Hungbd_Album_Block_Adminhtml_Album_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     *
     */
    public function __construct()
    {
        $this->_objectId = 'album';
        $this->_controller = 'adminhtml_album';
        $this->_blockGroup = 'Hungbd_Album';

        parent::__construct();

        $model = Mage::registry('testmodel');

        $this->_updateButton('save', 'label', Mage::helper('tax')->__('Save Album'));
        $this->_addButton('delete', array(
            'label'     => Mage::helper('tax')->__('Delete Album'),
            'onclick'   => "window.location.href = '" . $this->getUrl("*/*/delete", array("id" => $model->getId())) . "'",
            'class' => 'delete'
        ), 10);

        $this->_addButton('save_and_continue', array(
            'label'     => Mage::helper('tax')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class' => 'save'
        ), 10);

        $this->_formScripts[] = " function saveAndContinueEdit(){ editForm.submit($('edit_form').action + 'back/edit/') } ";
    }
}