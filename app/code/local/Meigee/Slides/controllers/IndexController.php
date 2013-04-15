<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_IndexController extends Mage_Core_Controller_Front_Action
{
     public function indexAction()
     {
        $this->loadLayout()
            ->renderLayout();
     }

     public function viewAction()
     {
         $slide_id = (int)$this->getRequest()->getParam('id');
         if (!$slide_id) {
             $this->_forward('noRoute');
         }
         $this->loadLayout();
         $this->getLayout()
            ->getBlock('slide.item')
            ->setSlideId($slide_id);
        try {
            $this->renderLayout();
        } catch (Exception $e) {
            Mage::logException($e);
            $this->_forward('noRoute');
        }
     }
}
