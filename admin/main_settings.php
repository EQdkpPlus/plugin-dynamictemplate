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

// EQdkp required files/vars
define('EQDKP_INC', true);
define('IN_ADMIN', true);
define('PLUGIN', 'dynamictemplate');

$eqdkp_root_path = './../../../';
include_once($eqdkp_root_path.'common.php');

/*+----------------------------------------------------------------------------
  | dynamictemplate_main_settings
  +--------------------------------------------------------------------------*/
class dynamictemplate_main_settings extends page_generic
{
	/**
	 * Constructor
	 */
	public function __construct(){
		// plugin installed?
		if (!$this->pm->check('dynamictemplate', PLUGIN_INSTALLED)) message_die($this->user->lang('dynamictemplate_plugin_not_installed'));
		
		$handler = array(
			'save'	=> array('process' => 'save', 'csrf' => true, 'check' => 'a_dynamictemplate_main'),
		);
		parent::__construct('a_dynamictemplate_main', $handler, array('dynamictemplate', 'name'), null, 'field_ids[]');
		
		$this->process();
	}


	/**
	 * Save
	 */
	public function save(){
		$arrModules = $this->in->getArray('module', 'raw');
		$this->pdh->put('dynamictemplate', 'truncate');
		
		$intSortID = 0;
		foreach($arrModules as $arrModuleData){
			if($arrModuleData['name'] == '' && $arrModuleData['listener'] == '_') continue;
			
			$intActive	= (isset($arrModuleData['active']) && (int)$arrModuleData['active']) ? 1 : 0;
			$strName	= strtoupper($arrModuleData['name']);
			$strValue	= htmlentities($arrModuleData['value'], ENT_QUOTES, 'UTF-8');
			
			$this->pdh->put('dynamictemplate', 'add', array($arrModuleData['id'], $intSortID, $intActive, $strName, $arrModuleData['listener'], $strValue));
			$intSortID++;
		}
		
		$this->pdh->process_hook_queue();
		$this->pdc->del('pdh_dynamictemplate_table');
		
		// Success message
		$this->core->message($this->user->lang('pk_succ_saved'), $this->user->lang('success'), 'green');
	}


	/**
	 * Display
	 */
	public function display(){
		$this->confirm_delete($this->user->lang('dynamictemplate_confirm_delete_module'));
		
		$arrModuleIDs = $arrExportData = $this->pdh->get('dynamictemplate', 'id_list');
		foreach($arrModuleIDs as $key => $id){
			$arrExportData[$key] = $arrModuleData = $this->pdh->get('dynamictemplate', 'id', array($id));
			
			$this->tpl->assign_block_vars('modules', array(
				'KEY'				=> $arrModuleData['id'],
				'ACTIVE'			=> ($arrModuleData['active']) ? 'checked="checked"' : '',
				'NAME'				=> $arrModuleData['name'],
				'LISTENER'			=> (new hdropdown('listener', array('options' => $this->user->lang('dynamictemplate_listener'), 'value' => $arrModuleData['listener'], 'name' => 'module['.$arrModuleData['id'].'][listener]')))->output(),
				'VALUE'				=> xhtml_entity_decode(htmlspecialchars_decode($arrModuleData['value'])),
			));
		}
		
		$this->tpl->assign_vars(array(
			'KEY'			=> max($arrModuleIDs)+1,
			'LISTENER'		=> (new hdropdown('listener', array('options' => $this->user->lang('dynamictemplate_listener'), 'value' => '', 'name' => 'module[KEY][listener]')))->output(),
			'EXPORT_DATA'	=> json_encode($arrExportData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE),
		));
		
		// -- EQDKP ---------------------------------------------------------------
		$this->core->set_vars(array(
			'page_title'    => $this->user->lang('dynamictemplate').' '.$this->user->lang('dynamictemplate_main_settings'),
			'template_path' => $this->pm->get_data('dynamictemplate', 'template_path'),
			'template_file' => 'admin/main_settings.html',
			'page_path'		=> [
				['title'=>$this->user->lang('menu_admin_panel'), 'url'=>$this->root_path.'admin/'.$this->SID],
				['title'=>$this->user->lang('dynamictemplate'), 'url'=>' '],
			],
			'display'       => true
		));
	}

}
registry::register('dynamictemplate_main_settings');

?>