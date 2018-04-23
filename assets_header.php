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



<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"><script> </script>

<link rel="stylesheet" href="css/home.css"><script> </script>
<link rel="stylesheet" href="css/bin.css"><script> </script>

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <script> </script>-->
<link rel="stylesheet" href="css/jquery-ui.css"><script> </script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-filters.min.css"><script> </script>

<script>

// var localStorage = [];
//
// if (!localStorage.graph)
// 	localStorage.graph = "";
//
// 	var toto = 'toto';
// 	var msg = 'msg';
//     $.ajax({
// 	  type: 'POST',
// 	   url: '_storygraph/localstorage.php',
// 	  data: {'nodes': localStorage.graph},
// 	  async: false,
// 	  //dataType:'JSON',
// 	  success: function(msg) {
// 		// alert(msg);
// 		var toto = msg;
// 		// console.log(msg);
// 		console.log("Outside ajax: "+msg);
//
// 	  },
// 	  error: function() {
// 		alert("There was an error. Try again please!");
// 	  }
// 	});
// console.log("Outside ajax2: "+toto);
</script>

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