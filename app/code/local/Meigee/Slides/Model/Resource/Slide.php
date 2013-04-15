<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Model_Resource_Slide extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('meigee_slides/slide', 'id');
    }
}
