<?php
/*	Project:	EQdkp-Plus
 *	Package:	DynamicTemplate Plugin
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2017 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if (!defined('EQDKP_INC')){
  header('HTTP/1.0 404 Not Found');exit;
}

/*+----------------------------------------------------------------------------
  | dynamictemplate_portal_hook
  +--------------------------------------------------------------------------*/
if (!class_exists('dynamictemplate_portal_hook')){
  class dynamictemplate_portal_hook extends gen_class
  {

    public function portal(){
		// Deaktiviert die Warnung 'Dynamic Template-Plugin benötigt'		= HTML <!-- IF DYNAMICTEMPLATE --> <!-- ENDIF -->
		$this->tpl->assign_var('DYNAMICTEMPLATE', true);
		
		
		$arrModules = $this->pdh->get('dynamictemplate', 'id_list', array());
		
		foreach($arrModules as $id){
			$arrModuleData = $this->pdh->get('dynamictemplate', 'id', array($id));
			
			if($arrModuleData['active']){
				$arrModuleData['value'] = xhtml_entity_decode(htmlspecialchars_decode($arrModuleData['value']));
				
				if(!empty($arrModuleData['name']))	   $this->tpl->assign_var('DYNAMICTEMPLATE_'.$arrModuleData['name'], $this->tpl->compileString($arrModuleData['value']));
				if(!empty($arrModuleData['listener'])) $this->tpl->add_listener($arrModuleData['listener'], $arrModuleData['value'], true);
			}
		}
		
    } //end function

  } //end class
} //end if class not exists
?>