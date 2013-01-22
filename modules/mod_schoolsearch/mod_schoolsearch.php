<?php 

// no direct access

defined('_JEXEC') or die('Restricted access');

global $mainframe;



// include helper

require_once (dirname(__FILE__).DS.'helper.php');

//init vars

$module_base  = JURI::base() . 'modules/mod_schoolsearch/';

// Posted Variables

$post = JRequest::get('post');

$gender = JRequest::getVar('sex');

$sport  = JRequest::getVar('sport');

$prov   = JRequest::getVar('province');

$org    = JRequest::getVar('org');

$submit = JRequest::getVar('submit');

//Get Results

$sports = modSchoolsearchHelper::getSports();

$province = modSchoolsearchHelper::getProvince();


if(!empty($post)):
$results = modSchoolsearchHelper::getResult($post);
$sportName = modSchoolsearchHelper::getSportName($results[0]->sports);
$provinceName = modSchoolsearchHelper::getProvName($results[0]->province);
 
$session =& JFactory::getSession();

$session->set('schoolresults', $results);
$session->set('sports', $sportName);
$session->set('prov', $provinceName);
$session->set('sex', $post['sex']);
$session->set('sportID', $post['sport']);

$mainframe->redirect('index.php?option=com_content&view=article&id=41&Itemid=29');


//$_SESSION['RSLT'] = $results;

endif;



$user =& JFactory::getUser();



//Call Layout

require(JModuleHelper::getLayoutPath('mod_schoolsearch', 'default'));



?>