<?php
/*
 * Featured product Extension Developed by Magehit
 */
?>
<?php

class Magehit_Isfeatured_Block_Isfeatured extends Mage_Core_Block_Template {

    public function ftotalProduct() {
        $collection = Mage::getModel('catalog/product');
        $products = $collection->getCollection()
                ->addAttributeToSelect('*')
                ->addAttributeToFilter('is_featured', 1)
                ->addAttributeToFilter('status', 1)
                ->load();
        return $products;
    }

    public function getStoreconfig() {
        $enable = Mage::getStoreConfig('isfeatured/genneral_setting/enabled');
        
		//horizontal_carousels_setting
		$horizontal_carousels_setting_title = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/title');
        $horizontal_carousels_setting_limit = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/product_no');
        $horizontal_carousels_setting_slide_minslides = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_minslides');
        $horizontal_carousels_setting_slide_maxslides = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_maxslides');
        $horizontal_carousels_setting_slide_width = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_width');
        $horizontal_carousels_setting_slide_margin = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_margin');
        $horizontal_carousels_setting_slide_auto = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_auto');
        $horizontal_carousels_setting_slide_pause = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_pause');
        $horizontal_carousels_setting_slide_autohover = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_autohover');
        $horizontal_carousels_setting_slide_speed = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_speed');
        $horizontal_carousels_setting_slide_autocontrols = Mage::getStoreConfig('isfeatured/horizontal_carousels_setting/slide_autocontrols');
		
		//vertical_carousels_setting
		$vertical_carousels_setting_title = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/title');
        $vertical_carousels_setting_limit = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/product_no');
        $vertical_carousels_setting_slide_minslides = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_minslides');
        $vertical_carousels_setting_slide_maxslides = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_maxslides');
        $vertical_carousels_setting_slide_width = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_width');
        $vertical_carousels_setting_slide_margin = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_margin');
        $vertical_carousels_setting_slide_auto = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_auto');
        $vertical_carousels_setting_slide_pause = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_pause');
        $vertical_carousels_setting_slide_autohover = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_autohover');
        $vertical_carousels_setting_slide_speed = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_speed');
        $vertical_carousels_setting_slide_autocontrols = Mage::getStoreConfig('isfeatured/vertical_carousels_setting/slide_autocontrols');
		
        $featuredValues = array(
			//Genneral setting
			'enabled' => $enable,
			//horizontal_carousels_setting
			'horizontal_carousels_setting_title' => $horizontal_carousels_setting_title,
			'horizontal_carousels_setting_limit' => $horizontal_carousels_setting_limit,
			'horizontal_carousels_setting_slide_minslides' => $horizontal_carousels_setting_slide_minslides,
			'horizontal_carousels_setting_slide_maxslides' => $horizontal_carousels_setting_slide_maxslides,
			'horizontal_carousels_setting_slide_width' => $horizontal_carousels_setting_slide_width,
			'horizontal_carousels_setting_slide_margin' => $horizontal_carousels_setting_slide_margin,
			'horizontal_carousels_setting_slide_auto' => $horizontal_carousels_setting_slide_auto,
			'horizontal_carousels_setting_slide_pause' => $horizontal_carousels_setting_slide_pause,
			'horizontal_carousels_setting_slide_autohover' => $horizontal_carousels_setting_slide_autohover,
			'horizontal_carousels_setting_slide_speed' => $horizontal_carousels_setting_slide_speed,
			'horizontal_carousels_setting_slide_autocontrols' => $horizontal_carousels_setting_slide_autocontrols,
			//vertical_carousels_setting
			'vertical_carousels_setting_title' => $vertical_carousels_setting_title,
			'vertical_carousels_setting_limit' => $vertical_carousels_setting_limit,
			'vertical_carousels_setting_slide_minslides' => $vertical_carousels_setting_slide_minslides,
			'vertical_carousels_setting_slide_maxslides' => $vertical_carousels_setting_slide_maxslides,
			'vertical_carousels_setting_slide_width' => $vertical_carousels_setting_slide_width,
			'vertical_carousels_setting_slide_margin' => $vertical_carousels_setting_slide_margin,
			'vertical_carousels_setting_slide_auto' => $vertical_carousels_setting_slide_auto,
			'vertical_carousels_setting_slide_pause' => $vertical_carousels_setting_slide_pause,
			'vertical_carousels_setting_slide_autohover' => $vertical_carousels_setting_slide_autohover,
			'vertical_carousels_setting_slide_speed' => $vertical_carousels_setting_slide_speed,
			'vertical_carousels_setting_slide_autocontrols' => $vertical_carousels_setting_slide_autocontrols,
		);
        return $featuredValues;
    }

}

?>
