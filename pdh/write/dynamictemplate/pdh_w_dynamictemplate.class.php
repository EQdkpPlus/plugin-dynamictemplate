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
	die('Do not access this file directly.');
}

/*+----------------------------------------------------------------------------
  | pdh_w_dynamictemplate
  +--------------------------------------------------------------------------*/
if (!class_exists('pdh_w_dynamictemplate')){
	class pdh_w_dynamictemplate extends pdh_w_generic
	{

		public function add($intID, $intSortID, $intActive, $strName, $strListener, $strValue = ''){
			$objQuery = $this->db->prepare("INSERT INTO __dynamictemplate :p")->set(array(
				'id'		=> $intID,
				'sortid' 	=> $intSortID,
				'active'	=> $intActive,
				'name'		=> $strName,
				'listener'	=> $strListener,
				'value'		=> $strValue,
			))->execute();
			
			$this->pdh->enqueue_hook('dynamictemplate_update');
			if($objQuery) return $objQuery->insertId;
			
			return false;
		}


		public function update($intID, $intSortID, $intActive = 0, $strName, $strListener, $strValue = ''){
			$objQuery = $this->db->prepare("UPDATE __dynamictemplate :p WHERE id=?")->set(array(
				'sortid' 	=> $intSortID,
				'active'	=> $intActive,
				'name'		=> $strName,
				'listener'	=> $strListener,
				'value'		=> $strValue,
			))->execute($intID);
			
			$this->pdh->enqueue_hook('dynamictemplate_update');
			if($objQuery) return $intID;
			
			return false;
		}


		public function delete($intID){
			$this->db->prepare("DELETE FROM __dynamictemplate WHERE id=?")->execute($intID);
			$this->pdh->enqueue_hook('dynamictemplate_update');
			return true;
		}


		public function truncate(){
			$this->db->query("TRUNCATE __dynamictemplate");
			$this->pdh->enqueue_hook('dynamictemplate_update');
			return true;
		}


	} //end class
} //end if class not exists

?>