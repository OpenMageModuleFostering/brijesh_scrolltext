<?php

class Brijesh_Scrolltext_Model_System_Config_Direction
{
    public function toOptionArray()
    {
        $options = array(
            array('value'=>'up','label'=> Mage::helper('scrolltext')->__('Scroll Up')),
            array('value'=>'down','label'=> Mage::helper('scrolltext')->__('Scroll Down')),
            
        );

        return $options;
    }
}