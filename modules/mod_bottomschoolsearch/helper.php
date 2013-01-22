<?php

/**

* Schoolsearch Joomla! Module

*

* @author   deftsoft.com

* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.

* @license	 GNU/GPL

*/



// no direct access

defined('_JEXEC') or die('Restricted access');



class modBottomschoolsearchHelper

{

  public function getResult($post)

  	  {

	    // Get the dbo

		 $db = JFactory::getDbo();

		      $query = "SELECT * FROM #__school_details 

					     WHERE sex = '".$post['sex']."'

					     AND sports = '".$post['sport']."'

					     AND province = '".$post['province']."'

					     AND organization = '".$post['org']."'

					     ORDER BY id ASC"; 

		    	$db->setQuery($query);

         $res = $db->loadObjectList();		

	     return $res;

	  }

	  

	public static function getSports()

	{

	  $db = JFactory::getDbo();

	  $query = 'SELECT * FROM #__sports'.

	           ' ORDER BY sname'; 

		    	$db->setQuery($query);



		$rows = $db->loadObjectList();

		return($rows);

	}
	
  public static function getSportName($sports)
  {
      $db = JFactory::getDbo();
    $query = 'SELECT sname FROM #__sports'.
			 ' WHERE id = '.$sports;
			 
				$db->setQuery($query);
		$Sname = $db->loadResult();
		return($Sname);
			 
  }
  
   public static function getProvName($prov)
  {
      $db = JFactory::getDbo();
    $query = 'SELECT province FROM #__province'.
			 ' WHERE id = '.$prov;
			 
		    $db->setQuery($query);
		$provName = $db->loadResult();
		return($provName);
			 
  }

	

	

	 public static function getProvince()

	 {

	  $db = JFactory::getDbo();

	  $query = 'SELECT * FROM #__province'.

	           ' ORDER BY province'; 

		    	$db->setQuery($query);



		$rows = $db->loadObjectList();

		return($rows);

	 }

	   

	  

}	  

?>