<?php
session_start();

$check="";
$filename = $_SESSION["PATH_FOLDER_APP"].'/__projects/'.$_SESSION["PROJECT"].'/localstorage_graph.txt';

if (file_exists($filename)) {
	$check="true";
    // echo "The file $filename exists";

} else {
	$check="false";
    // echo "The file $filename does not exist";
}

$txt = fopen('checkLS.txt', 'w+') or die("Unable to open file!");
fwrite($txt, $check);
fclose($txt);

echo $check;



?>