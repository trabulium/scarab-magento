<?php


class PD_ScarabResearch_Block_Adminhtml_System_Config_Fieldset_Filetime
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $fieldset
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {    	
    	$url = Mage::getBaseDir()."/export/scarab.csv";
		if (file_exists($url)) {
			$html = "<span style=\"color:green;\">Catalog file last updated: ". date ("F d Y H:i:s.", filemtime($url))."</span>";
		} else {
			$html = "<span style=\"color:red;\">No catalog file was found... you need to create one first.</span>";
    	}
    	return $html; 		
    }

}


?>