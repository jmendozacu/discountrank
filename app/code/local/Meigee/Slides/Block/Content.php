<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Block_Content extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        $this->setTemplate('meigee/slides/view.phtml');
    }
    
    public function getRowUrl(Meigee_Slides_Model_Slide $slide)
    {
        return $this->getUrl('*/*/view', array(
            'id' => $slide->getId()
        ));
    }
    
    public function getCollection()
    {
        return Mage::getModel('meigee_slides/slide')->getCollection();
    }
}
