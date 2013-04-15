<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Model_Coineffects
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'random', 'label'=>Mage::helper('Slides')->__('Random')),
            array('value'=>'swirl', 'label'=>Mage::helper('Slides')->__('Swirl')),
            array('value'=>'rain', 'label'=>Mage::helper('Slides')->__('Rain')),
            array('value'=>'straight', 'label'=>Mage::helper('Slides')->__('Straight'))          
        );
    }

}?>