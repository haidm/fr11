<?php
class Hungbd_Megamenu_Block_Adminhtml_Menuitem_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     *
     */
    public function __construct()
    {
        $this->_objectId = 'menuitem';
        $this->_controller = 'adminhtml_menuitem';
        $this->_blockGroup = 'demomodule';

        parent::__construct();

        $model = Mage::registry('testmodel');

        $this->_updateButton('save', 'label', Mage::helper('tax')->__('Save Menu Item'));
        $this->_addButton('delete', array(
            'label'     => Mage::helper('tax')->__('Delete Menu Item'),
            'onclick'   => "window.location.href = '" . $this->getUrl("*/*/ delete", array("id" => $model->getId())) . "'",
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