<?php
// Start the session
session_start();
// require_once('../inc/inc.php');
// require_once('../inc/define.php');
// require_once('../inc/fcts.php');

$array_ids_CASE = $_REQUEST['array_ids_CASE']; 
$array_ids_SEQ = $_REQUEST['array_ids_SEQ']; 
$test = json_encode($array_ids_CASE);
$myfile = fopen('array_ids_CASE_cases.txt', "w") or die("Unable to open file!");
fwrite($myfile, $test);
fclose($myfile);

$test = json_encode($array_ids_SEQ);
$myfile = fopen('array_ids_SEQ.txt', "w") or die("Unable to open file!");
fwrite($myfile, $test);
fclose($myfile);

function create_dir($dirPath){
	if (!file_exists($dirPath)) {  
		// echo "cases folder NO";
    	mkdir($dirPath, 0777, true);
	}
}

function del_dir($dirPath){
	if (file_exists($dirPath)) {  
		// echo "cases folder NO";
    	// mkdir($dir, 0777, true);
		foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $path) {
		        $path->isDir() && !$path->isLink() ? rmdir($path->getPathname()) : unlink($path->getPathname());
		}
		rmdir($dirPath);
	}
}


function updtate_dir_assets($array_ids,$types){

	$type = substr($types, 0, -1);

	// $test = json_encode($filelist_dir);
	// $myfile = fopen('array_ids_'.$type.'.txt', "w") or die("Unable to open file!");
	// fwrite($myfile, $test);
	// fclose($myfile);


	$filelist_dir = array();
	$dir = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/'.$types.'/*';
	$dirs = glob($dir, GLOB_ONLYDIR);
	foreach($dirs as $i){
	    $dir = basename($i);
	    $n = explode("_", $dir)[1];
	    $filelist_dir[] = $n;
	}
	// $test = json_encode($filelist_dir);
	// $myfile = fopen('dirExisting_'.$type.'.txt', "w") or die("Unable to open file!");
	// fwrite($myfile, $test);
	// fclose($myfile);

	$result_dir_diff = array_diff($filelist_dir, $array_ids);
	// $test = json_encode($result_dir_diff);
	// $myfile = fopen('dirDEL.txt', "w") or die("Unable to open file!");
	// fwrite($myfile, $test);
	// fclose($myfile);

	$array_dir_toDel = array();
	foreach ($result_dir_diff as $key => $value) {
		$array_dir_toDel[] = $value;
	}
	// $test = json_encode($array_dir_toDel);
	// $myfile = fopen('dirDEL_'.$type.'.txt', "w") or die("Unable to open file!");
	// fwrite($myfile, $test);
	// fclose($myfile);


	// //// create dirs 

	foreach($array_ids as $row => $value){
		$dirPath = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/'.$types.'/'.$type.'_'.$value; 
		create_dir($dirPath);
	}

	// //// delete dirs

	foreach($array_dir_toDel as $row => $value){
		$dirPath = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/'.$types.'/'.$type.'_'.$value; 
		del_dir($dirPath);
	}

	if($array_ids==NULL){
		$dirPath = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/'.$types.'';
			foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $path) {
			        $path->isDir() && !$path->isLink() ? rmdir($path->getPathname()) : unlink($path->getPathname());
			}
	}

}

updtate_dir_assets($array_ids_CASE,"cases");
updtate_dir_assets($array_ids_SEQ,"sequences");

	//////////////////////////////////////////////// SEQUENCES
	// //// create dirs sequences

	// foreach($array_ids_CASE as $row => $value){
	// 	$dirPath = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/sequences/sequence_'.$value; 
	// 	create_dir($dirPath);
	// }


	// //// delete dirs sequences

	// foreach($array_dir_toDel as $row => $value){
	// 	$dirPath = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/sequences/sequence_'.$value; 
	// 	del_dir($dirPath);
	// }



	// if($array_dir_toDel==NULL){
	// if($array_ids_SEQ==NULL){
	// 	$dirPath = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/sequences';
	// 		foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $path) {
	// 		        $path->isDir() && !$path->isLink() ? rmdir($path->getPathname()) : unlink($path->getPathname());
	// 		}
	// }





?>