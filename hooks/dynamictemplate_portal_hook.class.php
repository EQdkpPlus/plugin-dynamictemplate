<?php

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

/*+----------------------------------------------------------------------------
  | dynamictemplate_portal_hook
  +--------------------------------------------------------------------------*/
if (!class_exists('dynamictemplate_portal_hook'))
{
  class dynamictemplate_portal_hook extends gen_class
  {
  
    public function portal()
    {
	// Deaktiviert die Warnung 'Dynamic Template-Plugin benötigt'		= HTML <!-- IF DYNAMICTEMPLATE --> <!-- ENDIF -->
	  $this->tpl->assign_var('DYNAMICTEMPLATE', true);
	  
	  
	$arrFields = $this->pdh->get('dynamictemplate', 'id_list', array());
	
	foreach($arrFields as $id){
		$row = $this->pdh->get('dynamictemplate', 'id', array($id));
		
		if($row['active']){
			$this->tpl->assign_var('DYNAMICTEMPLATE_'.$row['name'], $row['value']);
		}
	}
        
    } //end function
  } //end class
} //end if class not exists
?>