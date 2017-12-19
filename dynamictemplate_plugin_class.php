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

/*+----------------------------------------------------------------------------
  | dynamictemplate
  +--------------------------------------------------------------------------*/
class dynamictemplate extends plugin_generic
{

  public $version    = '2.3.1';
  public $build      = '';
  public $copyright  = 'Asitara';
  public $vstatus    = 'Beta';

  protected static $apiLevel = 23;

  /**
    * Constructor
    * Initialize all informations for installing/uninstalling plugin
    */
  public function __construct()
  {
    parent::__construct();

    $this->add_data(array (
      'name'              => 'Dynamic Template',
      'code'              => 'dynamictemplate',
      'path'              => 'dynamictemplate',
      'contact'           => 'support@assasinen.5cz.de',
      'template_path'     => 'plugins/dynamictemplate/templates/',
      'icon'              => 'fa fa-list-alt',
      'version'           => $this->version,
      'author'            => $this->copyright,
      'description'       => $this->user->lang('dynamictemplate_short_desc'),
      'long_description'  => $this->user->lang('dynamictemplate_long_desc'),
      'homepage'          => 'https://eqdkp-plus.eu/forum/index.php/User/476-assasinen/',
      'manuallink'        => 'https://eqdkp-plus.eu/wiki/Plugin:_Dynamic_Template',
      'plus_version'      => '2.1',
      'build'             => $this->build,
    ));

    $this->add_dependency(array(
      'plus_version'      => '2.1'
    ));

    // -- Register our permissions ------------------------
    // permissions: 'a'=admins, 'u'=user
    // ('a'/'u', Permission-Name, Enable? 'Y'/'N', Language string, array of user-group-ids that should have this permission)
    // Groups: 1 = Guests, 2 = Super-Admin, 3 = Admin, 4 = Member
	$this->add_permission('a', 'main', 'N', $this->user->lang('dynamictemplate_main_settings'), array(2,3));

    // -- PDH Modules -------------------------------------
	$this->add_pdh_read_module('dynamictemplate');
	$this->add_pdh_write_module('dynamictemplate');

    // -- Menu --------------------------------------------
  	$this->add_menu('admin', $this->gen_admin_menu());

    // -- Hooks -------------------------------------------
  	$this->add_hook('portal', 'dynamictemplate_portal_hook', 'portal');

  }


  /**
    * pre_install
    * Define Installation
    */
  public function pre_install()
  {
    // include SQL and default configuration data for installation
    include($this->root_path.'plugins/dynamictemplate/includes/sql.php');

    // define installation
    for ($i = 1; $i <= count($dynamictemplateSQL['install']); $i++)
      $this->add_sql(SQL_INSTALL, $dynamictemplateSQL['install'][$i]);
  }


  /**
    * post_uninstall
    * Define Post Uninstall
    */
  public function post_uninstall(){
    // include SQL data for uninstallation
    include($this->root_path.'plugins/dynamictemplate/includes/sql.php');

    for ($i = 1; $i <= count($dynamictemplateSQL['uninstall']); $i++)
      $this->db->query($dynamictemplateSQL['uninstall'][$i]);
  }


  /**
    * gen_admin_menu
    * Generate the Admin Menu
    */
  private function gen_admin_menu()
  {
    $admin_menu = array (array(
        'link' => 'plugins/dynamictemplate/admin/main_settings.php'.$this->SID,
        'text'  => $this->user->lang('dynamictemplate'),
        'check' => 'a_dynamictemplate_main',
        'icon' => 'fa-list-alt',
    ));

    return $admin_menu;
  }

}
?>
