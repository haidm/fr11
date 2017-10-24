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
class Hungbd_Album_Block_Adminhtml_Image_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('Image');
        $this->setTitle(Mage::helper('tax')->__('Image'));
    }

    /**
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model  = Mage::registry('imagemodel');
        $album  = Mage::getModel('Hungbd_Album/album')->getCollection();
        $array = array();
        $albumId = array();
        foreach ($album as $test){
            $array[] =  $test->name;
            $albumId[] = $test->id;
        }
//        var_dump($album);
        $form   = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getData('action'),
            'method'    => 'post'
        ));

        $fieldset   = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('tax')->__('Image Information')
        ));

        $fieldset->addField('name', 'text',
            array(
                'name'      => 'name',
                'label'     => Mage::helper('tax')->__('Name'),
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

//        $fieldset->addField('album_id', 'select', array(
//            'label'     => Mage::helper('tax')->__('Album id'),
//            'class'     => 'required-entry',
//            'values'    => $array,
//            'name'      => 'album_id',
//        ));

        $fieldset->addField('album_id', 'text',
            array(
                'name'      => 'album_id',
                'label'     => Mage::helper('tax')->__('Album id'),
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
        $form->setAction($this->getUrl('*/image/save'));
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
