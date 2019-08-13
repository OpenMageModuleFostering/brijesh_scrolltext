<?php
class Brijesh_Scrolltext_Block_Scrolltextsidebar extends Brijesh_Scrolltext_Block_Scrolltext
{
    public function _construct() {
        $this->setTemplate('scrolltext/scrolltext.phtml');
        return parent::_construct();
    }
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
}
?>