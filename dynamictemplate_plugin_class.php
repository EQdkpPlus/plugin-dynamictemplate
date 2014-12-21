<?php

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');
  exit;
}


/*+----------------------------------------------------------------------------
  | dynamictemplate
  +--------------------------------------------------------------------------*/
class dynamictemplate extends plugin_generic
{

  public $version    = '2.0.0';
  public $build      = '';
  public $copyright  = 'Nashara';
  public $vstatus    = 'Beta';

  protected static $apiLevel = 20;

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
      'manuallink'        => false,
      'plus_version'      => '2.0',
      'build'             => $this->build,
    ));

    $this->add_dependency(array(
      'plus_version'      => '2.0'
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
    * pre_uninstall
    * Define uninstallation
    */
  public function pre_uninstall()
  {
    // include SQL data for uninstallation
    include($this->root_path.'plugins/dynamictemplate/includes/sql.php');

    for ($i = 1; $i <= count($dynamictemplateSQL['uninstall']); $i++)
      $this->add_sql(SQL_UNINSTALL, $dynamictemplateSQL['uninstall'][$i]);
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