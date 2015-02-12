<?php 
/**
 *	This is where you store the metadata for each page. 
 *	Included before the objectd and view. 
 *	You can store constants in the GLOBAL_CONFIG file that can be accessed 
 *	the config class too. 
 *
 *	All static variables can be accessed by config::$variable name
 */

class config extends global_config{
	public static $pageTitle 			= "PQR | Methyl 2-Hydroxybenzoate"; 
	public static $pageDescription 		= "Description for the homepage"; 

	public static $stylesheets 			= array("//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css", "styles/material.min.css"); //Include stylesheets 
	public static $javascript 			= array(); //Include javascript files

	public static $header				= "header"; //False if no header file otherwise the file name in the /app/views/includes/foo.php 
	public static $footer 				= "footer";	//Same as header 

}
?>