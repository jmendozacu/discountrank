<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Block_Adminhtml_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
    {
        $slide = Mage::registry('current_slide');
        $form = new Varien_Data_Form(array(
            'enctype'=> 'multipart/form-data'
        ));
        $fieldset = $form->addFieldset('edit_slide', array(
            'legend' => Mage::helper('meigee_slides')->__('Slide Details')
        ));

        if ($slide->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name'      => 'id',
                'required'  => true
            ));
        }
 
        $fieldset->addField('link', 'text', array(
            'name'      => 'link',
            'title'     => Mage::helper('meigee_slides')->__('Link'),
            'label'     => Mage::helper('meigee_slides')->__('Link'),
            'maxlength' => '250',
            'required'  => true,
        ));
 
        $fieldset->addField('name', 'textarea', array(
            'name'      => 'name',
            'title'     => Mage::helper('meigee_slides')->__('Slide Content'),
            'label'     => Mage::helper('meigee_slides')->__('Slide Content'),
            'maxlength' => '1000',
            'required'  => false,
            'note'  => 'Will be used as caption of slide',
        ));
	
        $fieldset->addField('image', 'file', array(
            'name'      => 'image',
            'label'     => Mage::helper('meigee_slides')->__('Image')
        ));
 
 		$form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');
        $form->setAction($this->getUrl('*/*/save'));
        
        $data = $slide->getData();
        $data['image'] = $slide->getImage();
        $form->setValues($data);
 
        $this->setForm($form);
    }
}
