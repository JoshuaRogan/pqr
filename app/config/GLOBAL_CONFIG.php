<?php 
/**
 *	This is where you store the metadata for each page. 
 *	Included before the objectd and view. 
 *	You can store constants in the APPVARS file that is awlays included
 *
 *	All static variables can be accessed by config::$variable name
 */

class global_config{
	public static $debug				= false; 
	public static $render 				= true;	

	public static $author 				= "Josh Rogan"; 
	public static $pageTitle 			= "DEFAULT TITLE"; 
	public static $pageDescription 		= "DEFAULT DESCRIPTION"; 

	//Viewport optoins 
	public static $maxScale 			= "1.0";
	public static $userScalable			= "no"; 

	//iOS Options
	public static $ios_webapp			= "yes"; 
	public static $ios_status_bar_col	= "black"; 
	public static $ios_title			= "iOS Title";	//Inherit in page config
	public static $ios_icons			= false;

	public static $global_stylesheets	= array("//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css", "http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700"); 
	public static $global_javascript	= array("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js","//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js", "js/index.js", "js/typeahead-bs/bootstrap-typeahead.js", "js/pqr.typeahead.js"); 



}
?>