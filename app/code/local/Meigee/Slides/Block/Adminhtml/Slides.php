<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Block_Adminhtml_Slides extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {
        $this->_addButtonLabel = Mage::helper('meigee_slides')->__('Add New Slide');
 
        $this->_blockGroup = 'meigee_slides';
        $this->_controller = 'adminhtml_slides';
        $this->_headerText = Mage::helper('meigee_slides')->__('Slides');
    }
}
