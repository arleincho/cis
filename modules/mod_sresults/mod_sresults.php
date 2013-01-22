<?php 

// no direct access
defined('_JEXEC') or die('Restricted access');
require_once (dirname(__FILE__).DS.'helper.php');
global $mainframe;

//init vars
$module_base  = JURI::base() . 'modules/mod_sresults/';
$user =& JFactory::getUser();

$session =& JFactory::getSession();
$results = $session->get('schoolresults');
$sportName = $session->get('sports');
$provinceName = $session->get('prov');

//Call Layout
require(JModuleHelper::getLayoutPath('mod_sresults', 'results'));

?>