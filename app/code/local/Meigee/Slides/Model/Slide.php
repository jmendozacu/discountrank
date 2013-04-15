<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_Slides_Model_Slide extends Mage_Core_Model_Abstract
{
    protected $imagePath = 'meigee_slides';
 
    protected function _construct()
    {
        $this->_init('meigee_slides/slide');
    }
    
    protected function _beforeSave()
    {
        if ($this->getData('image/delete')) {
            $this->unsImage();
        }
        try {
            $uploader = new Varien_File_Uploader('image');
            $uploader->setAllowedExtensions(array('jpg','jpeg','gif','png'));
            $uploader->setAllowRenameFiles(true);
            
            $this->setImage($uploader);
        } catch (Exception $e) {
            // it means that we do not have files for uploading
        }
        
        return parent::_beforeSave();
    }
    
    public function getImagePath()
    {
        return Mage::getBaseDir('media') . DS . $this->imagePath . DS;
    }
    
    public function setImage($image)
    {
        if ($image instanceof Varien_File_Uploader) {
            $image->save($this->getImagePath());
            $image = $image->getUploadedFileName();
        }
        $this->setData('image', $image);
        return $this;
    }
    
    public function getImage()
    {
        if ($image = $this->getData('image')) {
            return Mage::getBaseUrl('media') . $this->imagePath . DS . $image;
        } else {
            return '';
        }
    }
    
    protected function prepareImageForDelete()
    {
        $image = $this->getData('image');
        return str_replace(Mage::getBaseUrl('media'), Mage::getBaseDir('media') . DS, $image['value']);
    }
    
    public function unsImage()
    {
        $image = $this->getData('image');
        if (is_array($image)) {
            $image = $this->prepareImageForDelete();
        } else {
            $image = $this->getImagePath() . $image;
        }
        
        if (file_exists($image)) {
            unlink($image);
        }
        $this->setData('image', '');
        return $this;
    }
}
