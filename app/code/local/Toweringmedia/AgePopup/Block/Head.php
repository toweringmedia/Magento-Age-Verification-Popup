<?php
class Toweringmedia_AgePopup_Block_Head extends Mage_Core_Block_Template 
{
    public function _toHtml()
    {
        $this->setTemplate('toweringmedia/agepopup/head.phtml');
        return parent::_toHtml();
    }
}