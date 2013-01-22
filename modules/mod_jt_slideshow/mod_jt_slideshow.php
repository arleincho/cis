<?php

/**

* @version		$Id: default.php 00005 2009-11-10 00:00:00 umitkenan $

* @package		Joomla

* @subpackage	JT SlideShow Module

* @link 		http://www.jt.gen.tr

* @copyright	Copyright (C) Joomla Türkçe Eðitim ve Destek Sitesi. http://www.jt.gen.tr 

* @license		GNU/GPL

*/



// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );



// Include the syndicate functions only once
$session =& JFactory::getSession();

$sex = $session->get('sex');
$sportID = $session->get('sportID');

session_unset('sportID');
session_unset('sex');

require_once( dirname(__FILE__).DS.'helper.php' );



$preparing = modJTSlideShowHelper::getParameterList($params);

$images = modJTSlideShowHelper::GetImages($sex,$sportID);

$path = JModuleHelper::getLayoutPath('mod_jt_slideshow', 'default');

if (file_exists($path)) {

	require($path);

}