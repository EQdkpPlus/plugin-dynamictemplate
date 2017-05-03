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
  'dynamictemplate_short_desc'        		=> 'Erweitere deine Templates dynamisch',
  'dynamictemplate_long_desc'          		=> 'Mit Dynamic Template kannst du deine Templates erweitern und dynamisch verwalten.',

  // main_settings.php
  'dynamictemplate_main_settings'			=> 'Haupteinstellungen',
  'dynamictemplate_plugin_not_installed'	=> 'Das Dynamic Template-Plugin ist nicht installiert.',
  'dynamictemplate_delete_selected_modules'	=> 'Ausgewählte Module löschen',
  'dynamictemplate_import'					=> 'Import & Export',
  'dynamictemplate_add_module'				=> 'Neues Modul hinzufügen',
  'dynamictemplate_delete_module'			=> 'Modul löschen',
  'dynamictemplate_import_btn'				=> 'Import',
  'dynamictemplate_active'					=> 'Aktiv',
  'dynamictemplate_name'					=> 'Variablenname',
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
  
  'dynamictemplate_customcheck_info' 	=> 'Mit diesem Plugin kannst du HTML-Code über eine Template-Variable an beliebiger Stelle in deinem Template platzieren und den HTML-Code hier verwalten.
  											<br>Eine Anleitung und weitere Informationen findest du im <a href="https://eqdkp-plus.eu/wiki/Plugin:_Dynamic_Template">Wiki-Artikel</a>.',
  'dynamictemplate_import_info'			=> 'Mit diesem Code können deine Module weitergegeben werden oder füge stattdessen ein erhaltenen Code ein um neue Module zu erhalten.
  											<br />Bitte prüfe vor dem speichern ob die Variablennamen und Aktivierungen korrekt sind, da ein Import 1:1 übernommen werden.',
);

?>