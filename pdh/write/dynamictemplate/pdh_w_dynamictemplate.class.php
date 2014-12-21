<?php

if (!defined('EQDKP_INC'))
{
  die('Do not access this file directly.');
}

/*+----------------------------------------------------------------------------
  | pdh_w_dynamictemplate
  +--------------------------------------------------------------------------*/
if (!class_exists('pdh_w_dynamictemplate'))
{
  class pdh_w_dynamictemplate extends pdh_w_generic
  {
  
	public function add($intID, $intSortID, $intActive, $strName, $strValue=''){
		$objQuery = $this->db->prepare("INSERT INTO __dynamictemplate :p")->set(array(
			'id'		=> $intID,
			'sortid' 	=> $intSortID,
			'active'	=> $intActive,
			'name'		=> $strName,
			'value'		=> $strValue,
		))->execute();
		
		$this->pdh->enqueue_hook('dynamictemplate_update');
		if ($objQuery) return $objQuery->insertId;
		
		return false;
	}
	
	
	public function update($intID, $intSortID, $intActive=0, $strName, $strValue=''){
		$objQuery = $this->db->prepare("UPDATE __dynamictemplate :p WHERE id=?")->set(array(
			'sortid' 	=> $intSortID,
			'active'	=> $intActive,
			'name'		=> $strName,
			'value'		=> $strValue,
		))->execute($intID);
		
		$this->pdh->enqueue_hook('dynamictemplate_update');
		if ($objQuery) return $intID;
		
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