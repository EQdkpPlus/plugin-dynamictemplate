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

$lang = array(
  'dynamictemplate'                    		=> 'Dynamic Template',

  // Description
  'dynamictemplate_short_desc'        		=> 'Upgrade your templates dynamically',
  'dynamictemplate_long_desc'          		=> 'Dynamic Template upgrade your templates give you a dynamically management.',

  // main_settings.php
  'dynamictemplate_main_settings'			=> 'Main Settings',
  'dynamictemplate_plugin_not_installed'	=> 'Dynamic Template-Plugin is not installed.',
  'dynamictemplate_delete_selected_modules'	=> 'Delete selected modules',
  'dynamictemplate_import'					=> 'Import & Export',
  'dynamictemplate_add_module'				=> 'Create new module',
  'dynamictemplate_delete_module'			=> 'Delete module',
  'dynamictemplate_import_btn'				=> 'Import',
  'dynamictemplate_active'					=> 'Active',
  'dynamictemplate_name'					=> 'Variablename',
  'dynamictemplate_value'					=> 'HTML-Code',
  
   'dynamictemplate_listener'				=> array(
  													''=> ' ',
  													'head'=> 'head',
													'body_top'=> 'body_top',
													'header_top'=> 'header_top',
													'logo_container'=> 'logo_container',
													'header_bottom'=> 'header_bottom',
													'content_container_top'=> 'content_container_top',
													'mainmenu'=> 'mainmenu',
													'adminmenu'=> 'adminmenu',
													'portal_top'=> 'portal_top',
													'portal_left_top'=> 'portal_left_top',
													'portal_left_bottom'=> 'portal_left_bottom',
													'content_middle_top'=> 'content_middle_top',
													'portal-middle-top'=> 'portal-middle-top',
													'portal-middle-bottom'=> 'portal-middle-bottom',
													'content_body_top'=> 'content_body_top',
													'content_body_bottom'=> 'content_body_bottom',
													'content_middle_bottom'=> 'content_middle_bottom',
													'portal-bottom-top'=> 'portal-bottom-top',
													'portal-bottom-bottom'=> 'portal-bottom-bottom',
													'content-footer-debug'=> 'content-footer-debug',
													'portal-right-top'=> 'portal-right-top',
													'portal-right-bottom'=> 'portal-right-bottom',
													'content-footer-top'=> 'content-footer-top',
													'content-footer-left'=> 'content-footer-left',
													'content-footer-right'=> 'content-footer-right',
													'footer_top'=> 'footer_top',
													'footer_bottom'=> 'footer_bottom',
													'debug'=> 'debug',
													'login_popup'=> 'login_popup',
													'body_bottom'=> 'body_bottom',
  												),
  
  'dynamictemplate_customcheck_info'	=> 'With this plugin you can place anywhere in your template HTML code and manage them.
  											<br>Instructions and more information can be found in the <a href="https://eqdkp-plus.eu/wiki/Plugin:_Dynamic_Template">Wiki-article</a>.',
  'dynamictemplate_import_info'			=> 'With this code can you trade your modules or insert a new code and import other modules.
  											<br />Before you press save, check your new settings, cause the modules are 1:1 imported.',
);

?>