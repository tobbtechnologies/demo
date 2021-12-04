<?php
@ob_start();
session_start();
	/****************************************************************************************
	*@Company:              Tobb Technologies (Pty) Ltd                  					*
	*@Year:                 2016 - 2021                                          			*
	*@Deveopers:            Bernard Sibanda, Bongiwe Sibanda,                 				*
	*@Source Code License:  GNU GENERAL PUBLIC LICENSE(Version 3, 29 June 2007)     		*
	*@Licence url:          https://www.gnu.org/licenses/quick-guide-gplv3.html             *
	*@website:              http://www.tobb.co.za                           				*
	*@emails:               besi@tobb.co.za, bongi@tobb.co.za                				*
	****************************************************************************************/
	
	define("LOG",'false');

	define("FILE_NAME",'log_'.explode(".",basename(__FILE__))[0].'.txt');
	
	include_once("./classes/class-logger.php"); 
	
	$returnMessage = '';
	
	if
	(
		isset($_GET['name']) && 
		isset($_GET['surname']) 
	)
	{
		$returnMessage = 'hi '.$_GET['name'].' '.$_GET['surname'];
	
		j($returnMessage,'returnMessage');
	}
	else if
	(
		isset($_GET['name']) &&
		!isset($_GET['surname'])
	)
	{
		$returnMessage = 'hi '.$_GET['name'];
	
		j($returnMessage,'returnMessage');
	}
	else if
	(
		!isset($_GET['name']) &&
		isset($_GET['surname'])
	)
	{
		$returnMessage = 'hi '.$_GET['surname'];
	
		j($returnMessage,'returnMessage');
	}
	else
	{
		$returnMessage = 'hi noname!';
	
		j($returnMessage,'returnMessage');
	}
	
	
	echo $returnMessage.'<br>';
	
	

?>
