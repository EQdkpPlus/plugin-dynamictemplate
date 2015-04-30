<?php
/*	Project:	EQdkp-Plus
 *	Package:	DynamicTemplate Plugin
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
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
  
  'dynamictemplate_customcheck_info' 	=> 'Mit diesem Plugin kannst du HTML-Code über eine Template-Variable an beliebiger Stelle in deinem Template platzieren und den HTML-Code hier verwalten.
  											<br>Eine Anleitung und weitere Informationen findest du im <a href="https://eqdkp-plus.eu/wiki/Plugin:_Dynamic_Template">Wiki-Artikel</a>.',
  'dynamictemplate_import_info'			=> 'Mit diesem Code können deine Module weitergegeben werden oder füge stattdessen ein erhaltenen Code ein um neue Module zu erhalten.
  											<br />Bitte prüfe vor dem speichern ob die Variablennamen und Aktivierungen korrekt sind, da ein Import 1:1 übernommen werden.',
);

?>