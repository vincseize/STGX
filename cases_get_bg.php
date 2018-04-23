<?php
// Start the session
session_start();

require('inc/inc.php');
require('inc/fcts.php');

// $files = getCasesThumb("../**/thumbs/case_*_bg.*");
$files = getCasesThumb("__projects/".$_SESSION["PROJECT"]."/cases/**/thumbs/case_*_bg.*");
// print_r($files);
echo json_encode($files);
//echo $files;
//exit();

?>
