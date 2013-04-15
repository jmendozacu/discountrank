<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Block_Slide_Content extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        $this->setTemplate('meigee/slides/slide/view.phtml');
    }
    
    public function getSlide()
    {
        return Mage::getModel('meigee_slides/slide')->load($this->getSlideId());
    }
}
