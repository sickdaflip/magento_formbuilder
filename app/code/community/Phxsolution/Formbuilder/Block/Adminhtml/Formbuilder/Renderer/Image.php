<?php
/*
/**
* Phxsolution Formbuilder
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@magentocommerce.com so you can be sent a copy immediately.
*
* Original code copyright (c) 2008 Irubin Consulting Inc. DBA Varien
*
* @category   adminhtml block renderer
* @package    Phxsolution_Formbuilder
* @author     Murad Ali
* @contact    contact@phxsolution.com
* @site       www.phxsolution.com
* @copyright  Copyright (c) 2014 Phxsolution Formbuilder
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
?>
<?php
class Phxsolution_Formbuilder_Block_Adminhtml_Formbuilder_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{     
    public function render(Varien_Object $row)
    {
        $_helper = Mage::helper("formbuilder");
        $getImageUploadPath = $_helper->getImageUploadPath();
        $getMediaUrl = Mage::getUrl('media');
        $html = '<img ';
        $html .= 'id="' . $this->getColumn()->getId() . '" ';
        $html .= 'src="'. $getMediaUrl . $row->getData('title_image') . '"';
        $html .= 'class="grid-image ' . $this->getColumn()->getInlineCss().'"';
		$html .= 'style="weight:75px;height:75px"' . '"/>';
        if($row->getData('title_image'))
        	return $html;
        return "No Image";
    }
}