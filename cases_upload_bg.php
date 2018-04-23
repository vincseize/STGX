<?php

// Start the session
session_start();

require_once('inc/inc.php');
require_once('inc/fcts.php');

$str =file_get_contents('php://input');
//$dir = 'tmp/cases/';

$url_upload = $_GET['url_upload'];


$ext = $_SERVER['HTTP_X_FILE_TYPE'];
// $e = explode("/",$ext);
$e = explode(DIRECTORY_SEPARATOR,$ext);
$ext = $e[1];
if($ext=="jpeg"){$ext="jpg";}

$name = $_SERVER['HTTP_X_FILE_NAME'];
$filename = $name.'.'.$ext;

$e = explode("_",$filename);
$dir_case = $e[0].'_'.$e[1];

$path_dir_case = $url_upload . DIRECTORY_SEPARATOR . $dir_case;

$path = $path_dir_case . DIRECTORY_SEPARATOR . $filename;

$path_dir_case_thumbs = $url_upload . DIRECTORY_SEPARATOR . $dir_case. DIRECTORY_SEPARATOR . 'thumbs';
$path_thumb = $path_dir_case_thumbs . DIRECTORY_SEPARATOR . $filename;

$path_dir_case_comp = $url_upload . DIRECTORY_SEPARATOR . $dir_case. DIRECTORY_SEPARATOR . 'compressed';
$path_comp = $path_dir_case_comp . DIRECTORY_SEPARATOR . $filename;

if (!file_exists($path_dir_case)) {
    mkdir($path_dir_case, 0777, true);
}
if (!file_exists($path_dir_case_thumbs)) {
    mkdir($path_dir_case_thumbs, 0777, true);
}

foreach ($_SESSION["array_folders_case"] as $folder) {
	$path_dir_folder = $url_upload . DIRECTORY_SEPARATOR . $dir_case . DIRECTORY_SEPARATOR . $folder;
	if (!file_exists($path_dir_folder)) {
    	mkdir($path_dir_folder, 0777, true);
    }
}

// delete old files
$fp = $path_dir_case ;
$fp_thumbs = $path_dir_case . DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR ;
foreach ($auth_cases_ext as $ext) { // to do $auth_cases_ext as Glob Var
    //array_map('unlink', glob( "$fp*_bg.".$ext.""));
    array_map('unlink', glob( "$fp*_bg.*"));
    array_map('unlink', glob( "$fp_thumbs*_bg.*"));
}

file_put_contents($path,$str);

$d = make_thumb_case($path, $path_thumb, 30);

$e = make_comp_case($path, $path_comp, 50);

// echo $path;

// $myfile = fopen($url_upload."newfile.txt", "w") or die("Unable to open file!");
// $txt = $url_upload."\n";
// fwrite($myfile, $txt);

?>
