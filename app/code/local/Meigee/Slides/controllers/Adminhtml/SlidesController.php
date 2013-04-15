<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Adminhtml_SlidesController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Slides'));

        $this->loadLayout();
        $this->_setActiveMenu('meigee_slides');
        $this->_addBreadcrumb(Mage::helper('meigee_slides')->__('Slides'), Mage::helper('meigee_slides')->__('Slides'));
        $this->renderLayout();
    }
    
    public function newAction()
    {
        $this->_title($this->__('Add new Slide'));
        $this->loadLayout();
        $this->_setActiveMenu('meigee_slides');
        $this->_addBreadcrumb(Mage::helper('meigee_slides')->__('Add new Slide'), Mage::helper('meigee_slides')->__('Add new Slide'));
        $this->renderLayout();
    }
    
    public function editAction()
    {
        $this->_title($this->__('Edit Slide'));

        $this->loadLayout();
        $this->_setActiveMenu('meigee_slides');
        $this->_addBreadcrumb(Mage::helper('meigee_slides')->__('Edit Slide'), Mage::helper('meigee_slides')->__('Edit Slide'));
        $this->renderLayout();
    }
    
    public function deleteAction()
    {
        $tipId = $this->getRequest()->getParam('id', false);
 
        try {
            Mage::getModel('meigee_slides/slide')->setId($tipId)->delete();
            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('meigee_slides')->__('Slide successfully deleted'));
            
            return $this->_redirect('*/*/');
        } catch (Mage_Core_Exception $e){
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('Somethings went wrong'));
        }
 
        $this->_redirectReferer();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getPost();
        if (!empty($data)) {
            try {
                Mage::getModel('meigee_slides/slide')->setData($data)
                    ->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('meigee_slides')->__('Slide successfully saved'));
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError($this->__('Somethings went wrong'));
            }
        }
        return $this->_redirect('*/*/');
    }
    
    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('meigee_slides/adminhtml_slides_grid')->toHtml()
        );
    }
}
