<?php
class Toweringmedia_AgePopup_Model_System_Config_Source_Pageoption extends Mage_Core_Model_Abstract
{
	static public function toOptionArray()
	{
		 return array(
            array('value' => 1, 'label' => Mage::helper('agepopup')->__('All Pages')),
            array('value' => 2, 'label' => Mage::helper('agepopup')->__('Specific Pages')),
        );
    }
}