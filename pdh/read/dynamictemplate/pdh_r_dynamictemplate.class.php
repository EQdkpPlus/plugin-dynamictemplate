<?php

if (!defined('EQDKP_INC'))
{
  die('Do not access this file directly.');
}

/*+----------------------------------------------------------------------------
  | pdh_r_dynamictemplate
  +--------------------------------------------------------------------------*/
if (!class_exists('pdh_r_dynamictemplate'))
{
  class pdh_r_dynamictemplate extends pdh_r_generic
  {

    /**
     * Data array loaded by initialize
     */
    private $data;


    /**
     * Hook array
     */
    public $hooks = array('dynamictemplate_update');


    /**
     * reset
     * Reset dynamictemplate read module by clearing cached data
     */
    public function reset()
    {
		$this->pdc->del('pdh_dynamictemplate_table');
		$this->data = NULL;
    }


    /**
     * init
     * Initialize the dynamictemplate read module by loading all information from db
     *
     * @returns boolean
     */
    public function init()
    {
      // try to get from cache first
      $this->data = $this->pdc->get('pdh_dynamictemplate_table');
      
      if($this->data !== NULL)
      {
        return true;
      }

      // empty array as default
      $this->data = array();

      // read all dynamictemplate entries from db
      $sql = 'SELECT * FROM `__dynamictemplate` ORDER BY sortid ASC;';
      $result = $this->db->query($sql);
      if ($result)
      {
        // add row by row to local copy
        while ($row = $result->fetchAssoc())
        {
          $this->data[(int)$row['id']] = array(
		'id'		=> (int)$row['id'],
		'sortid'	=> (int)$row['sortid'],
		'active'	=> (int)$row['active'],
		'name'	=> $row['name'],
		'value'	=> $row['value'],
          );
        }
      }

      // add data to cache
      $this->pdc->put('pdh_dynamictemplate_table', $this->data, null);

      return true;
    }
    

    /**
     * get_id_list
     * Return the list of dynamictemplate ids
     *
     * @returns array(int)
     */
    public function get_id_list()
    {
      if (is_array($this->data))
      {
        return array_keys($this->data);
      }
      return array();
    }


	public function get_id($intID){
		if (isset($this->data[$intID])){
			return $this->data[$intID];
		}
		return false;
	}
	
	public function get_sortid($intID){
		if (isset($this->data[$intID])){
			return $this->data[$intID]['sortid'];
		}
		return false;
	}
	
	public function get_active($intID){
		if (isset($this->data[$intID])){
			return $this->data[$intID]['active'];
		}
		return false;
	}
	
	public function get_name($intID){
		if (isset($this->data[$intID])){
			return $this->data[$intID]['name'];
		}
		return false;
	}
	
	public function get_value($intID){
		if (isset($this->data[$intID])){
			return $this->data[$intID]['value'];
		}
		return false;
	}
  } //end class
} //end if class not exists

?>