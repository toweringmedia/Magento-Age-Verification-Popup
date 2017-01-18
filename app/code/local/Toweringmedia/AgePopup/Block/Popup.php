<?php
class Toweringmedia_AgePopup_Block_Popup extends Mage_Core_Block_Template 
{
    public function _toHtml()
    {
        $this->setTemplate('toweringmedia/agepopup/popup.phtml');
        return parent::_toHtml();
    }
}
