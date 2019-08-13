<?php
class Brijesh_Scrolltext_Helper_Data
extends Mage_Core_Helper_Abstract
{
	public function displayOnSideBar(){
		return (string)Mage::getStoreConfig('scrolltext/general/position');
	}
}