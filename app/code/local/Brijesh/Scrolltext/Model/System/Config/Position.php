<?php

class Brijesh_Scrolltext_Model_System_Config_Position
{
    public function toOptionArray()
    {
        $options = array(
            array('value'=>'left','label'=> Mage::helper('scrolltext')->__('Left Sidebar')),
            array('value'=>'right','label'=> Mage::helper('scrolltext')->__('Right Sidebar')),
            array('value'=>'footer','label'=> Mage::helper('scrolltext')->__('Footer Position'))
        );

        return $options;
    }
}