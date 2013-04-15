<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptions_Model_Zoom
{
    public function toOptionArray()
    {
        return array(
            array('value'=>0, 'label'=>Mage::helper('ThemeOptions')->__('Cloud Zoom')),
            array('value'=>1, 'label'=>Mage::helper('ThemeOptions')->__('Zoomy'))          
        );
    }

}