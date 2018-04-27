<?php

require('inc/define.php');
require('inc/fcts.php');
require('inc/inc.php');

$PROJECT = $_SESSION["PROJECT"];

$asset = strtolower(substr($assets, 0, -1));
$path_assets = "__projects/".$PROJECT."/".$assets."";

$class_btn_upload_fileContainer = "";
$droppable = "false";
if($assets=="cases"){
    $class_btn_upload_fileContainer = "btn_upload_fileContainer";
    $droppable = "true";
}

$id_name = localstorage_graph_id_name($PROJECT);

?>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script src="js/jquery-ui.js"></script>



<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/bin.css">

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <script> </script>-->
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-filters.min.css">



<style>

html, body{
        margin: 0px;
        margin-left: 3px;
        margin-right: 3px;
        padding: 0px;
		/*overflow: hidden;*/
		border: 0 none !important;
        background: none;
    }

</style>