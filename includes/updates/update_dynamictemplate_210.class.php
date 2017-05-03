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

include_once(registry::get_const('root_path').'maintenance/includes/sql_update_task.class.php');
if (!class_exists('update_dynamictemplate_210')){
	class update_dynamictemplate_210 extends sql_update_task
	{
		public $author		= 'Nashara';
		public $version		= '2.1.0';    // new version
		public $name		= 'Dynamic Template 2.1.0 Update';
		public $type		= 'plugin_update';
		public $plugin_path	= 'dynamictemplate';
		
		/**
		 * Constructor
		 */
		public function __construct(){
			parent::__construct();
			
			// init language
			$this->langs = array(
				'english' => array(
					'update_dynamictemplate_210' => 'Dynamic Template 2.1.0 Update Package',
					1 => 'Alter dynamictemplate table',
				),
				'german' => array(
					'update_dynamictemplate_210' => 'Dynamic Template 2.1.0 Update Paket',
					1 => 'Ändere dynamictemplate Tabelle',
				),
			);
			
			// init SQL querys
			$this->sqls = array(
				1 => "ALTER TABLE `__dynamictemplate` ADD `listener` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL AFTER `name`;",
			);
		}
	}
}
?>