<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2017 X.commerce, Inc. and affiliates (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml Tax Rule Edit Form
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Hungbd_Megamenu_Block_Adminhtml_Menuitem_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('menuInfoForm');
        $this->setTitle(Mage::helper('tax')->__('Menu Item'));
    }

    /**
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model  = Mage::registry('testmodel');
        $form   = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getData('action'),
            'method'    => 'post'
        ));

        $fieldset   = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('tax')->__('Menu Item')
        ));


        $fieldset->addField('title', 'text',
            array(
                'name'      => 'title',
                'label'     => Mage::helper('tax')->__('Title'),
                'class'     => 'required-entry',
                'required'  => false,
            )
        );

        $fieldset->addField('class', 'text',
            array(
                'name'      => 'class',
                'label'     => Mage::helper('tax')->__('Class'),
                'class'     => 'required-entry',
                'required'  => true,
            )
        );

        $fieldset->addField('link', 'text',
            array(
                'name'      => 'link',
                'label'     => Mage::helper('tax')->__('Link'),
                'class'     => 'required-entry',
                'required'  => true,
            )
        );

        $fieldset->addField('content', 'text',
            array(
                'name'      => 'content',
                'label'     => Mage::helper('tax')->__('Content'),
                'class'     => 'required-entry',
                'required'  => true,
            )
        );

        $fieldset->addField('parent', 'text',
            array(
                'name'      => 'parent',
                'label'     => Mage::helper('tax')->__('Parent'),
                'class'     => 'required-entry',
                'required'  => true,
            )
        );

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden',
                array(
                    'name'      => 'id',
                    'label'     => Mage::helper('tax')->__('Id')
                )
            );
        }

        $form->addValues($model->getData());
        $form->setUseContainer(true);
        $form->setAction($this->getUrl('*/test/save'));
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
