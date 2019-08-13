<?php
class Brijesh_Scrolltext_Block_Scrolltext extends Mage_Core_Block_Template
{
	
     public function leftSidebarBlock() {
        $block = $this->getParentBlock();
        if($block) {
            if(Mage::getStoreConfig('scrolltext_sections/scrolltext_group/scrolltext_position') == 'left') {
                $sidebarBlock = $this->getLayout()->createBlock('scrolltext/scrolltextsidebar');
                $block->insert($sidebarBlock,'', true, 'scrolltext-sidebar');
            }
        }
    }

    
    public function rightSidebarBlock() {
        $block = $this->getParentBlock();
        if($block) {
            if(Mage::getStoreConfig('scrolltext_sections/scrolltext_group/scrolltext_position') == 'right') {
                $sidebarBlock = $this->getLayout()->createBlock('scrolltext/scrolltextsidebar');

                $block->insert($sidebarBlock, '', true, 'scrolltext-sidebar');
            }
        }
    }

    public function footerBlock() {
        $block = $this->getParentBlock();
        if($block) {
            if(Mage::getStoreConfig('scrolltext_sections/scrolltext_group/scrolltext_position') == 'footer') {
                $sidebarBlock = $this->getLayout()->createBlock('scrolltext/scrolltextsidebar');

                $block->insert($sidebarBlock, '', true, 'scrolltext-sidebar');
            }
        }
    }
}