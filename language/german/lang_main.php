<?php

if (!defined('EQDKP_INC'))
{
    header('HTTP/1.0 404 Not Found');exit;
}

$lang = array(
  'dynamictemplate'                    		=> 'Dynamic Template',

  // Description
  'dynamictemplate_short_desc'        		=> 'Erweitere deine Templates dynamisch',
  'dynamictemplate_long_desc'          		=> 'Mit Dynamic Template kannst du deine Templates erweitern und dynamisch verwalten.',
  
  // main_settings.php
  'dynamictemplate_main_settings'		=> 'Haupteinstellungen',
  'dynamictemplate_plugin_not_installed'	=> 'Das Dynamic Template-Plugin ist nicht installiert.',
  'dynamictemplate_customcheck_info'		=> 'Die hier erstellten DT-Module können an jeder Stelle deines Templates eingebunden werden,
  							<br> mithilfe der Variable <b>{DYNAMICTEMPLATE_***}</b> <em>(wobei *** der angegebene
  							Modul-Name ist)</em>. Im
  							<a href="https://eqdkp-plus.eu/wiki/Plugin:_Dynamic_Template">EQdkp-WiKi</a>
  							finden sie weitere Infos und eine Anleitung.',
  'dynamictemplate_delete_selected_fields'	=> 'Ausgewählte Module löschen',
  'dynamictemplate_add_field'			=> 'Neues Modul hinzufügen',
  'dynamictemplate_delete_field'		=> 'Modul löschen',
  'dynamictemplate_active'			=> 'Aktiv',
  'dynamictemplate_name'			=> 'Name',
  'dynamictemplate_value'			=> 'Code',
);

?>