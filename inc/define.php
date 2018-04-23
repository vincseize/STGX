<?php
// Start the session
session_start();

$path_app_folder = dirname(dirname(__FILE__));
$name_app_folder = basename(dirname(dirname(__FILE__)));


$_SESSION["PATH_FOLDER_APP"] = $path_app_folder;

$_SESSION["NAME_FOLDER_APP"] = $name_app_folder;

$_SESSION["PATH_STG_WWW"] = '/'.$_SESSION["NAME_FOLDER_APP"].'/_storygraph';
// define('PATH_STG_WWW', '/'.$_SESSION["NAME_FOLDER_APP"].'/_storygraph'); // todo better


$project = "1_aufildeleau"; // todo better get real one
$_SESSION["PROJECT"] = $project; // todo better get real one Folder Name


// $json = file_get_contents('../'.$_SESSION["NAME_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/project_info.json');
// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);

// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         echo "$key:\n";
//     } else {
//         echo "$key => $val\n";

//     }
// }

$project_title = '';
$str = file_get_contents('../'.$_SESSION["NAME_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/project_info.json');
$json = json_decode($str, true);
$project_title = $json['Infos']['title']; 
// exit;


// $tmp_a = strstr($project, '_');
// $tmp_b = str_replace("_"," ",$tmp_a);

// $_SESSION["NAME_PROJECT"] = $tmp_b; // todo better

$_SESSION["NAME_PROJECT"] = $project_title; // todo better

$_SESSION["max_thumb_case_width_height"] = 400;

$_SESSION["array_folders_case"] = array("thumbs", "compressed", "sounds", "texts", "layers");

define ('TITLE_APP', 'Storygraph');
// define ('PROJECT', '1_aufildeleau');
define ('PROJECT', $_SESSION["PROJECT"]);

?>
