<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Block_Adminhtml_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'meigee_slides';
        $this->_mode = 'edit';
        $this->_controller = 'adminhtml';
        
        $slide_id = (int)$this->getRequest()->getParam($this->_objectId);
        if(!$slide_id) {
        //    Mage::throwException($this->__('Slide with this id does not exists'));
        }
        $slide = Mage::getModel('meigee_slides/slide')->load($slide_id);
        Mage::register('current_slide', $slide);
        $this->_removeButton('reset');
    }
 
    public function getHeaderText()
    {
        $slide = Mage::registry('current_slide');
        if ($slide->getId()) { 
            return Mage::helper('meigee_slides')->__("Edit Slide '%s'", $this->escapeHtml($slide->getName()));
        } else {
            return Mage::helper('meigee_slides')->__("Add new Slide");
        }
    }
}
