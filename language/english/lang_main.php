<?php

if (!defined('EQDKP_INC'))
{
    header('HTTP/1.0 404 Not Found');exit;
}

$lang = array(
  'dynamictemplate'                    		=> 'Dynamic Template',

  // Description
  'dynamictemplate_short_desc'        		=> 'Upgrade your templates dynamically',
  'dynamictemplate_long_desc'          		=> 'Dynamic Template upgrade your templates give you a dynamically management.',
  
  // main_settings.php
  'dynamictemplate_main_settings'		=> 'Main Settings',
  'dynamictemplate_plugin_not_installed'	=> 'Dynamic Template-Plugin is not installed.',
  'dynamictemplate_customcheck_info'		=> 'The created DT-Modules can be integrated at any point in your template, by using the
  							variable <b>{DYNAMICTEMPLATE_***}</b> <em>(where *** specified as module
  							name)</em>. <br> In the
  							<a href="https://eqdkp-plus.eu/wiki/Plugin:_Dynamic_Template">EQdkp-WiKi</a>
  							you can find more information and instructions.',
  'dynamictemplate_delete_selected_fields'	=> 'Delete selected modules',
  'dynamictemplate_add_field'			=> 'Create new module',
  'dynamictemplate_delete_field'		=> 'Delete module',
  'dynamictemplate_active'			=> 'Active',
  'dynamictemplate_name'			=> 'Name',
  'dynamictemplate_value'			=> 'Code',
);

?>