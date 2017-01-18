<?php
class Toweringmedia_AgePopup_Model_System_Config_Source_Pages extends Mage_Core_Model_Abstract
{
	static public function toOptionArray()
	{
		$ignore_pages = array('no-route','enable-cookies');
		$cms_pages = Mage::getModel('cms/page')->getCollection()->toOptionArray();
		foreach($cms_pages as $cms_page) { 
			if (!in_array($cms_page['value'],$ignore_pages)) {
				$pages[] = $cms_page;
			}
		}
		$pages[] = array('value' => 'catalog-category-view', 'label' => 'Category Page');
		$pages[] = array('value' => 'catalog-product-view', 'label' => 'Product Page');
		$pages[] = array('value' => 'contacts-index-index', 'label' => 'Contact Page');
		return $pages;
    }
}