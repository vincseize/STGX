<?php
// Start the session
session_start();
require_once('../inc/inc.php');
require_once('../inc/define.php');
require_once('../inc/fcts.php');

$PROJECT = $_SESSION["PROJECT"];

$realpath = realpath(dirname(__FILE__)); // /var/wwww/STG5/_storygraph
$www_root = $_SERVER['DOCUMENT_ROOT']; // /var/www
$www_root_stg = str_replace($www_root, "", $realpath); // /STG5/_storygraph

// 	$path_cases_get_bg = "../cases_get_bg.php"; 
// 	if (file_exists($path_cases_get_bg)) {
// 		$path_cases_get_bg = "../cases_get_bg.php";

// 	} else {
// 	    $path_cases_get_bg = "cases_get_bg.php";
// 	}

// $PROJECT = $_SESSION["PROJECT"];


// // Get real path for our zip folder
//     $path_to_zip = "../__projects"; 
//     if (file_exists($path_to_zip)) {
//         $path_to_zip = "../__projects/".$PROJECT;
//         $path_to_zip_destination = "../__projects/".$PROJECT.".zip";

//     } else {
//         $path_to_zip = "__projects/".$PROJECT;
//         $path_to_zip_destination = "__projects/".$PROJECT.".zip";
//     }

// Get_project_zip($path_to_zip,$path_to_zip_destination);





?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>STG5</title>
	<script src="<?php echo $www_root_stg;?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo $www_root_stg;?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo $www_root_stg;?>/js/cytoscape.min.js"></script>
	<script src="<?php echo $www_root_stg;?>/js/dagre.min.js"></script>
	<script src="<?php echo $www_root_stg;?>/js/cytoscape-dagre.js"></script>

	<link rel="stylesheet" href="<?php echo $www_root_stg;?>/css/root.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo $www_root_stg;?>/css/colors.css"  type="text/css">
	<link rel="stylesheet" href="<?php echo $www_root_stg;?>/css/storygraph.css"  type="text/css">

</head>

<body oncontextmenu="return false;">
<!-- <div style="width:var(--width-left-pane);background-color: yellow;z-index: 99999999;top:250px;height: 500px;position: fixed;">  

za
</div> -->

<!-- // https://stackoverflow.com/questions/39168928/cytoscape-save-graph-as-image-by-button -->
<style type="text/css">
	*{margin:0;padding:0}
#menuSTG_container{width:100%;background:none}}
#menuSTG_container li{padding:0px 0;margin:0;text-align:center;background:#000;color:white;list-style:none;cursor:pointer}
/*#menuSTG_container li:hover{color:#000;background:none}*/

#menuSTG_container li {
    display:table-cell;
    width:1%;
}
</style>




				<div class="container_menuSTG" style="width:var(--width-left-pane);position: fixed;top:var(--height-header);">

<!-- // http://jsfiddle.net/A999r/ -->
<ul id="menuSTG_container">
    <li><button id="save_ST" class="btn_menuSTG" title="Save"><i class="fa fa-save"></i></button></li>
    <li><button id="deleteNodes_ST" class="btn_menuSTG" title="Delete Selected"><i class="fa fa-trash-o"></i></button></li>
    <li><button id="help_ST" class="btn_menuSTG" title="Help"><i class="fa fa-question-circle"></i></button></li>
    <li><button id="fit" class="btn_menuSTG" title="Show All"><i class="fa fa-arrows-alt"></i></button></li>
    <li><button id="get_project_data" class="btn_menuSTG" title="zip"><i class="fa fa-archive"></i></button></li>
</ul>









<!-- 				    <div class="cell_menuSTG" >
				        <button id="save_ST" class="btn_menuSTG" title="Save"><i class="fa fa-save"></i></button>
				    </div>



				    <div class="cell_menuSTG">
				        <button id="deleteNodes_ST" class="btn_menuSTG" title="Delete Selected"><i class="fa fa-trash-o"></i></button>
				    </div>

				    <div class="cell_menuSTG">
				        <button id="clear" class="btn_menuSTG" title="Clear Graph"><i class="fa fa-eraser"></i></button>
				    </div>
				    <div class="cell_menuSTG">
				        <button id="todo_ST" class="btn_menuSTG" title="Todo"><i class="fa fa-bell-o"></i></button>
				    </div>
				    <div class="cell_menuSTG">
				        <button id="help_ST" class="btn_menuSTG" title="Help"><i class="fa fa-question-circle"></i></button>
				    </div>

				    <div class="cell_menuSTG">
						<button id="fit" class="btn_menuSTG" title="Show All"><i class="fa fa-arrows-alt"></i></button>
				    </div> -->


				</div>		




<div idX="#menuLeft" class="menuLeft" styleX="background-color: red;">

	<div id="menuLeft_ST" class="menuLeft_ST"> <!-- // menu left ST -->

<!-- 				<div class="container_menuSTG">

				    <div class="cell_menuSTG">
				        <button id="save_ST" class="btn_menuSTG" title="Save"><i class="fa fa-save"></i></button>
				    </div>



				    <div class="cell_menuSTG">
				        <button id="deleteNodes_ST" class="btn_menuSTG" title="Delete Selected"><i class="fa fa-trash-o"></i></button>
				    </div> -->

<!-- 				    <div class="cell_menuSTG">
				        <button id="clear" class="btn_menuSTG" title="Clear Graph"><i class="fa fa-eraser"></i></button>
				    </div> -->
<!-- 				    <div class="cell_menuSTG">
				        <button id="todo_ST" class="btn_menuSTG" title="Todo"><i class="fa fa-bell-o"></i></button>
				    </div> -->
<!-- 				    <div class="cell_menuSTG">
				        <button id="help_ST" class="btn_menuSTG" title="Help"><i class="fa fa-question-circle"></i></button>
				    </div>

				    <div class="cell_menuSTG">
						<button id="fit" class="btn_menuSTG" title="Show All"><i class="fa fa-arrows-alt"></i></button>
				    </div>


				</div>		 -->



					
				<div id="nbNodes_menuSTG_div" class="nbNodes_menuSTG_div"><span id="nbNodes_menuSTG" class="nbNodes_menuSTG" ></span></div><!-- // infos save delete etc -->	




				<br> 

		<div class="menu_left_content">

<!-- 				<div class="nodeModel assetM" data-type="asset">Case</div>
				<div class="nodeModel sceneM" data-type="scene">Sequence</div> -->
				<!-- <div class="nodeModel shotM"  data-type="shot">Shot</div> -->

							<div class="nodeModel sequenceM" data-type="sequence">Sequence</div>
							<div class="nodeModel caseM"  data-type="case">Case</div>

				<hr />
				<br>
				<!-- help -->
				<div style="">
					<ul id="menuLeft_ST_memo" class="menuLeft_ST_memo" style="">

						<b>H keyboard</b> : <li>On any elements</li>
						<br>
						<b>Zoom</b> : <li>Molette souris</li>
						<b>Pano</b> : <li>Click+drag sur le fond</li>
						<b>Sélection</b> : 
							<li>Box-select -> SHIFT + click + drag</li>
							<li>Multiple -> SHIFT + click sur les nodes</li>
						<b>Menu contextuel</b> :
							<li>Clic-droit sur node -> actions du node</li>
							<li>Clic-droit sur fond -> actions génériques</li>
						<b>Connexions Manuelles</b> :
							<li>Sélectionner des nodes (avec SHIFT+clic ou le box-select), puis
							CRTL+click sur un node pour les connecter à ce dernier.</li>
							<li><b>Directions autorisées :</b></li>
							<li>&nbsp;&nbsp;&nbsp; -> Assets vers Scenes</li>
							<li>&nbsp;&nbsp;&nbsp; -> Scenes vers Scenes</li>
							<li>&nbsp;&nbsp;&nbsp; -> Scenes vers Shots</li>
						<b>Mémoire :</b>
							<li>
								Bouton "Charger" : charge un graphe depuis la mémoire
								du navigateur si présente, sinon charge depuis un fichier json sur le serveur.
							</li>
							<li>Bouton "Mémoriser" : mémorise le graphe courant dans la mémoire du navigateur.</li>
							<li>Bouton "Oublier" : Vide la mémoire du navigateur</li>
					</ul>
				</div>
		</div>
	</div>
	
</div> <!-- // menu left ST -->

<div id="container"></div>

<div id="contextMenu" style="font-size: 0.8em;">

	<div class="ctxMenuEntry nodeAction" id="renameNode">Rename</div>

	<div class="ctxNodeTitle overNode"></div>

	<div class="ctxMenuEntry nodeAction disabled">Isolate</div>
	<div class="ctxMenuEntry nodeAction disabled">Select child(s)</div>
	<div class="ctxMenuEntry nodeAction" id="deleteNode">Delete</div>
	<div class="ctxMenuEntry nodeAction disabled">Disconect</div>
	<hr class="overNode" />
	<div class="ctxMenuEntry" id="fitM">Show all</div>
	<hr />
	<div class="ctxMenuEntry addNode" data-type="case">Add Case</div>
	<div class="ctxMenuEntry addNode" data-type="sequence">Add Sequence</div>
	<!-- <div class="ctxMenuEntry addNode" data-type="shot">Add Shot</div> -->
	<hr />
	<div class="ctxMenuEntry nodeAction nodeActionCase" id="addToSequence">Add Selected to Sequence</div>
	<div class="ctxMenuEntry nodeAction nodeActionCase" id="removeFromSequence">Remove Selected from Sequence</div>
	<hr />
	<!-- <div class="ctxMenuEntry" id="clearM">Clear graph</div> -->
</div>



<script type="text/javascript">
	var www_root_stg = "<?php echo $www_root_stg;?>";
</script>

	<script src="<?php echo $www_root_stg;?>/js/main.js"></script>


<script type="text/javascript">


$(document).ready(function(){

// var ele = cy.getElementById( '1' );
// cy.$('#15').css({"backgroundColor": "red", "color": "red"});

// function check_url0(){
// 		console.log('check_url0');

// 		$.ajax({
// 		  url: "../cases_get_bg.php", //or your url
// 		  success: function(data){

// return data;

// 		    // console.log('r_ajax exists');
// 		    // check_url0_callback(true);
// 		    // url(data); 
// // var value = "test";
// // return data;
// 		  },
// 		  error: function(data){
// 		    // console.log('r_ajax does not exist');
// 		    // check_url0_callback(false);
// 		   // stg_bg_Nodes_BGimg("http://127.0.0.1/STG5/cases_get_bg.php"); // <?php echo $_SESSION["NAME_FOLDER_APP"];?>/
// 		   // stg_bg_Nodes_BGimg("cases_get_bg.php"); 
// // var value = "test";
// // return value;
// 		  },
// 		})

// // var test = "success";
// // return test;

// 	}   


	// function check_url0_callback(value){
	// 	// value: value;
	//     if(value){
	//         alert(value);
	//         return value;
	//     }else{
	//         alert(value);
	//         return value;
	//     }

	// // var value = "test";
	// // return value;

	// }


	function stg_bg_Nodes_BGimg(url=false,id=false){
		var project = '<?php echo $_SESSION["PROJECT"];?>';


		// var url =  "<?php echo $www_root_stg;?>/cases_get_bg.php";
		var url =  url;
		var id =  id;
		console.log("stg_bg_Nodes_BGimg : "+url);


				$.ajax({
			       // url: "<?php echo $www_root_stg;?>/cases_get_bg.php",
			       url: url,
			       type : 'GET',
			       // data: { variable: 'value' }, 
			       dataType : 'json', // On désire recevoir du HTML
			       success : 	function(data, statut){
						       		// console.log('--- success ---');
						       		// console.log(data);
						       		// console.log('-----------');
									for (var i in data) {
						                // console.log(i);
						                console.log(data[i]);
						                if(id!=false){ i=id;}
						                var bg_img = data[i];
						                
						                // console.log(project);
						                var url = '__projects/'+project+'/cases/case_'+i+'/thumbs/'+bg_img;
						                cy.$('#'+i).css({"background-image": url, "background-fit": "cover"});
						                // cy.$('#15').css({"backgroundColor": "red", "color": "red"});
									}
					},

				   error : 		function(resultat, statut, erreur){
							   		console.log('----- error ------');
									console.log(resultat);
									console.log(statut);
									console.log(erreur);
									console.log('-----------');
				   },

				   complete : 	function(resultat, statut){
									// console.log('complete');
				   }

				});
		
	}    	


	function check_url_ajax(url) {
		var url = url;
	    var result="";
	    $.ajax({
	      // url:"../cases_get_bg.php",
	      url:url,
	      async: false,  
	      success:function(data) {
	         result = true; 
	      },
	      error: function(data){
	      	 result = false; 
	      }
	   });
	   return result;
	}


	var url =  "cases_get_bg.php";
	var check = check_url_ajax(url);
	console.log(check);
	if(check==false){var url =  "../cases_get_bg.php";}
	console.log(url);


	stg_bg_Nodes_BGimg(url);


});



$(document).keydown( // todo better in all document
    function (event) {
        console.log(event.which);
        if (event.which == 27) {
            // console.log("You have pressed esc sign");
            // closePG();
        }
        else if (event.which == 37) {
            // $("#right-component").css({"display":"none"});
            $("#menuLeft_ST").toggle();
            // $('#right-component').toggle("slide", { direction: "right" }, 1000);

        }


    }
);


// When all loaded
$(window).load(function() {
	// $( '#fit,fitM').click (); // todo better
// $("#menuLeft_ST").css({"display":"none"});

	// $( '#get_project').click ();


});



</script>















</body>
</html>