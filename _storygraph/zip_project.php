<?php
// Start the session
session_start();
require_once('../inc/inc.php');
require_once('../inc/define.php');
require_once('../inc/fcts.php');

$PROJECT = $_SESSION["PROJECT"];


	// Get real path for our folders

	// $path_to_zip 			= "__projects/".$PROJECT;
	$path_tmp_zip 				= "__projects/".$PROJECT."/tmp_zip"; 
	$path_to_zip_destination 	= "__projects/STORYGRAPH_".$PROJECT.".zip";
	$path_cases 				= "__projects/".$PROJECT."/cases"; 
	$path_sequences 			= "__projects/".$PROJECT."/sequences";

	if (!file_exists($path_to_zip)) {
	    // $path_to_zip 			= "../".$path_to_zip;
		$path_tmp_zip 				= "../".$path_tmp_zip; 
	    $path_to_zip_destination 	= "../".$path_to_zip_destination;
		$path_cases 				= "../".$path_cases; 
		$path_sequences 			= "../".$path_sequences;

	} 


// create zip
if(isset($_POST['create'])) {
	// copy cases
	recurse_copy($path_cases,$path_tmp_zip."/cases");
	// copy sequences
	recurse_copy($path_sequences,$path_tmp_zip."/sequences");

	Get_project_zip($path_tmp_zip."/",$path_to_zip_destination);
}

// delete zip
if(isset($_POST['delete'])) {
	// delete tmp folder
	rrmdir($path_tmp_zip);
	// delete zip folder
	// unlink($path_to_zip_destination);
}

?>