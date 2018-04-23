<?php
// Start the session
session_start();
require_once('inc/inc.php');
require_once('inc/define.php');
require_once('inc/fcts.php');
?>

&copy; &nbsp; LRDS 2017-<?php echo date ( Y );?>


  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>


<script src="js/split-pane.js"></script>

<script type="text/javascript" src="js/global_fcts.js"  type="text/javascript"></script>







<script>

var spl_true = split_pane_js(true);
// var spl_false = split_pane_js(false);

// function app(){
// 	console.log('yo');
// 	function a(){
// 		split_pane_js(false);
// 	}
// }
// window.onload=app;

// SPLIT PANE RESIZE              
function split_pane_jsDES($close,e){
    console.log("split_pane_jsDES ");
    var w = $(document).width();
    var r = (w/100)*15;
    console.log(r);

    // init size
    $('div.split-pane').splitPane('lastComponentSize', 0);
    // $('div.split-pane').splitPane('lastComponentSize', r);  


    //$(function() {
      if($close==true){
        $('div.split-pane').splitPane('lastComponentSize', 0);
      }
      if($close==false){
        $('div.split-pane').splitPane('lastComponentSize', w);
      }


        $('div.split-pane').splitPane();

        $('button:first').on('click', function() {
          $('div.split-pane').splitPane('lastComponentSize', 10);
        });

        $('button:last').on('click', function() {
          $('div.split-pane').splitPane('firstComponentSize', 0);
        });

    //});
}
// split_pane_jsDES(false);

			// function a(){
			// 	console.log('a');
			// 	console.log("->");
			// 	// split_pane_js(false);
			// }


		
		// $(document).keyup(function (e) {

		// 		var spl = split_pane_js(false);
		// 		spl;

		//                 var code = (e.keyCode ? e.keyCode : e.which);
		//                 if (code == 39) { //Enter keycode
		//                 	console.log("You pressed arrow!");
		//                     e.preventDefault();
		//                     // split_pane_jsDES(e);
		//                     // spl;


		//                     /// global_fcts_footer_js("footer 2");
		//                 }
		// }); 


// $(document).ready(function (spl_false) {
//     // When the DOM is ready, attach the event handler.
//     $(document).keypress(function (event) {            
//         enableEnter(event,spl_false);
//     });
// });

// // enableEnter is accessible in the whole page scope.
// function enableEnter(event,spl_false) {
//     if (event.keyCode == 13) {
//         event.preventDefault();
//         // ezpConsole.partOverride.retrieveParts();
//         console.log('test');
//         // split_pane_jsDES(event);
//         spl_false;
//         console.log(spl_false);
//     }
// }





















// window.addEventListener("keydown", function(e) {
//   // $(document).keydown(function(e){
//       if(e.keyCode == 37){ // left <-
//         console.log('test left footer');
//           // resize_layout_content_left();
//           event.preventDefault();
//           return false;
//         }
//       if(e.keyCode == 39){ // right ->
//         console.log('test right footer');
//           // resize_layout_content_right();
//           event.preventDefault();
//           return false;
//         }


      
//   });










  function resize_layout_content_left(){
      console.log('test left');
  }


  function resize_layout_content_right(){
      console.log('test right');
  }

  function my_todo_open(){
      console.log('test ctrl t');
  }


// window.addEventListener("keydown", function(event) {
//     // Bind to both command (for Mac) and control (for Win/Linux)
//     if (event.keyCode == 17 && event.keyCode == 115 ) {
//         console.log("Ctrl");
//             event.preventDefault();
//         return false;
//     }
// }, false);

// window.addEventListener("keydown", function(e) {
//   // $(document).keydown(function(e){
//       if(e.keyCode == 37 && e.ctrlKey){ // left <-
//         //console.log('test left');
//           resize_layout_content_left();
//           event.preventDefault();
//           return false;
//         }
//       if(e.keyCode == 39 && e.ctrlKey){ // right ->
//         //console.log('test right');
//           resize_layout_content_right();
//           event.preventDefault();
//           return false;
//         }


      
//   });




$(document).ready(function(){




	$('#left').hide('');
	$('#top').hide('');
	$('#close-pg').hide();

	$('#bt-st').removeClass();
	// $('#bt-st').css({"backgroundColor": var(--color-grey6), "color": var(--color-blue6)});
	// $("#bt-st").toggleClass("bt-navbar-active");
	//$("#bt-st").css({"backgroundColor": "var(--color-grey6)"});

	$('#menu-bin-right-component').load('menu_bin.php');

	//$('#right-component').load('sequences_bin3.php');
	//$('#right-component').load('assets_bin.php');

	// $('#left-component').hide();
	// $('#left-component').load('_storygraph/graph.php');
	$('#left-component').load('_storygraph/cytoscape.php');
	$('#right-component').addClass('btn_assets_bin_active');


/*$("#wrapper").hide();*/

			var url = 'sequences_bin.php';
			$("#iframe-right-component").attr("src", url);


// function testI(){console.log("test from iframe");}

// $("#iframe-right-component").bind('keydown', function(e){
//   // if target is an enter key
//   if ( e.keyCode == 13) {
//   	console.log("test from iframe");
//   	testI();
//     return false;  // kill event
//   }
// });




/*  -----------------------------------------  MEnu top ----------------------------------------- */




	$( ".bt-navbar" ).each(function(index) {
	    $(this).on("click", function(){


			var id = $(this).attr('id');

			if (id != "bt-pg") {
				$('#bt-st').removeClass('bt-navbar-active');
				$('#bt-pg').removeClass('bt-navbar-active');
				$('#bt-as').removeClass('bt-navbar-active');
				$('#bt-param').removeClass('bt-navbar-active');
				$('#bt_param_over').removeClass('bt-navbar-active');
				
			}

		    $(this).addClass('bt-navbar-active');

		});

	});

	// $('#bt-param').on("click", function(event){
	// 	console.log('param click from footer.php');
	// 	$('#bt-st').addClass('bt-navbar-active');
	// 	$("#iframe_todo").css('z-index', '0');

	// });






	$('#bt-st').on("click", function(event){ // fct to do
		// alert(event);
		// var data = event.data;
  //   alert(data.id);
  //   alert(data.name);

		//alert(event);
		// alert(event[0]);
		// alert(event.data);
		// alert(event.data.param1);
			$('#close-pg').hide();
			$('#header').fadeIn("fast");
			$('#footer').fadeIn("fast");

			$('#wrapper-pg').hide();
			$('#wrapper').show();
			$('#bottom').empty('');

			$('#left').hide();
			// $('#left-component').load('_storygraph/graph.php');
			$('#left-component').load('_storygraph/cytoscape.php');

			// $('#right_pane').empty('');
			// $('#right_pane').load('assets_bin.php');

			$('#bt-pg').removeClass('bt-navbar-active');
			$('#bt-as').removeClass('bt-navbar-active');
			$('#bt-param').removeClass('bt-navbar-active');
			$('#bt_param_over').removeClass('bt-navbar-active');
			

			$('#bt_param_over').addClass('bt-navbar-active');
			


			// cool_function(event);

			 setTimeout( function(){ // to do better with last position
    			cy.fit();
			}, 1000 );




	});


function cool_function(event){
    // alert(param);
    alert(event);
}

// function test(){
//     // alert(param);
//     alert('test');
// }


function closePG(){

	$("#iframe_todo").css('z-index', '0');

	$('#close-pg').hide();
	$('#header').fadeIn("fast");
	$('#footer').fadeIn("fast");

	$('#wrapper-pg').hide();
	$('#wrapper').show();
	$('#bottom').empty('');

	$('#left').hide();
	//$('#bottom').load('_storygraph/graph.php');

	$('#right_pane').empty('');
	//$('#right_pane').load('assets_bin.php');
	//$('#right_pane').load('sequences_bin.php');
}




	// $('#bt-pg').on("click", function(){
	// 	alert('dblClick');
	// });

	$('#bt-pgDES').on("click", function(){
			//$('#bottom').empty('');
			//$('#left').show();
			//$('#right_pane').empty('');

			$('#header').fadeOut("slow");
			$('#footer').fadeOut("slow");

			$('#wrapper').hide();
			//$('#footer').hide(); // visibility opacity 0
			$('#wrapper-pg').show();

			var url = $(this).attr('href');
			// window.open(url, '_blank');

			$("#wrapper-pg").attr("src", url);

			$('#close-pg').fadeIn('slow');

			$('#bt-pg').removeClass('bt-navbar-active');

	});


	// $("#bt-pgDES").click(function (e) {
	$('#bt-pgDES2').on("click", function(){
		var url = $(this).attr('href');
	    var $this = $(this);
	    if ($this.hasClass('clicked')){
	        $this.removeClass('clicked');
	        // alert("Double click");
	        //here is your code for double click
			window.open(url);
	    }else{
	         $this.addClass('clicked');
	         setTimeout(function() {
	             if ($this.hasClass('clicked')){
	                 $this.removeClass('clicked');
	                 //alert("Just one click!");
					//$('#bottom').empty('');
					//$('#left').show();
					//$('#right_pane').empty('');

					$('#header').fadeOut("slow");
					$('#footer').fadeOut("slow");

					$('#wrapper').hide();
					//$('#footer').hide(); // visibility opacity 0
					$('#wrapper-pg').show();

					// var url = $(this).attr('href');
					// window.open(url, '_blank');

					$("#wrapper-pg").attr("src", url);

					$('#close-pg').fadeIn('slow');

					$('#bt-pg').removeClass('bt-navbar-active');

	             }
	         }, 500);
	    }
	});


	$('#bt-pg').on("click", function(){
		var url = $(this).attr('href');
	    var $this = $(this);
	    if ($this.hasClass('clicked')){
	        $this.removeClass('clicked');
	        // alert("Double click");
	        		//here is your code for double click
					$('#header').fadeOut("slow");
					$('#footer').fadeOut("slow");

					$('#wrapper').hide();
					//$('#footer').hide(); // visibility opacity 0
					$('#wrapper-pg').show();

					// var url = $(this).attr('href');
					// window.open(url, '_blank');

					$("#wrapper-pg").attr("src", url);

					$("#close-pg").css('z-index', '9999999');
					$('#close-pg').fadeIn('slow');

					$('#bt-pg').removeClass('bt-navbar-active');
	    }else{
	         $this.addClass('clicked');
	         setTimeout(function() {
	             if ($this.hasClass('clicked')){
	                 $this.removeClass('clicked');
	                 // alert(" click");
	                 //here is your code for click
						window.open(url);



	             }
	         }, 500);
	    }
	});





	$('#bt-as').on("click", function(){ // fct to do
			$('#close-pg').hide();
			$('#header').fadeIn("fast");
			$('#footer').fadeIn("fast");

			$('#wrapper-pg').hide();
			$('#wrapper').show();
			$('#bottom').empty('');
			$('#left').show();
			$('#top').hide();
			//
			$('#bottom').load('assets_grid.php');

			$('#right_pane').empty('');
			$('#right_pane').load('assets_bin.php');

		    $('#btn_assets_bin').addClass('btn_assets_bin_active');

			$('#bt-pg').removeClass('bt-navbar-active');
			$('#bt-param').removeClass('bt-navbar-active');
			$('#bt_param_over').removeClass('bt-navbar-active');


			// split_pane_js();

	});





	$('#bt-as').click(function(){
	// 	console.log('cl true');
	//   $(this).data('clicked', true);
	//   alert("as clicked");

		// $('#bt-st').removeClass('bt-navbar-active');
		// $('#bt-pg').removeClass('bt-navbar-active');
		// $('#bt-as').removeClass('bt-navbar-active');
		// $('#bt-as').addClass('bt-navbar-active');

		// $('#menu-bin-right-component').load('menu_bin.php');


	  					var url = 'sequences_bin.php';
	  					$("#iframe-right-component").attr("src", url);

						// $('#menu-bin-right-component').load('menu_bin.php');
						removeClass_btn_active_menuBin_doublon();
						$('#btn_menu_sequences_bin').addClass('btn_bin_active');
	});


	// if($('#bt-as').data('clicked')) {
	// 	alert("as clicked");
	// 	console.log('cl');
	// 	$('#btn_assets_bin').removeClass('btn_assets_bin_active');
	// 	$('#btn_assets_bin').addClass('btn_assets_bin_active');
	//
	// }





	$('#close-pg').click(function(){ // fct to do
		console.log('close st true from footer');

		closePG();


	});






// ################################################################   menu_bin.php

    function removeClass_btn_active_menuBin_doublon() { // ds menu_bin.php  todo
        $('#btn_menu_sequences_bin').removeClass('btn_bin_active');
        $('#btn_menu_cases_bin').removeClass('btn_bin_active');
        $('#btn_menu_medias_bin').removeClass('btn_bin_active');
    }





	function stg_bg_Node_img(id=false){
		var project = '<?php echo $_SESSION["PROJECT"];?>';
		
				$.ajax({
			       url: "/<?php echo $_SESSION["NAME_FOLDER_APP"];?>/cases_get_bg.php",
			       type : 'GET',
			       // data: { variable: 'value' }, 
			       dataType : 'json', // On désire recevoir du HTML
			       success : 	function(data, statut){
						       		// console.log('--- success ---');
						       		// console.log(data);
						       		// console.log('-----------');
									for (var i in data) {
						                // console.log(i);
						                // console.log(data[i]);
						                if(id!=false){ i=id;}
						                var bg_img = data[i];
						                
						                // console.log(project);
						                var url = '__projects/'+project+'/cases/case_'+i+'/thumbs/'+bg_img;
						                // cy.$('#'+i).css({"background-image": url, "background-fit": "cover"});
						                // cy.$('#15').css({"backgroundColor": "red", "color": "red"});
						                // cy.$('#15').hide();

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

// function testDES(id=false){
	
// }

// window.test = function () {
//    // alert("I was called from a child iframe");
//    // console.log('test');
// }


$('.stg_bg_Node_img_refresh').click(function() {
  // add_event('shot');
  console.log('stg_bg_Node_img_refresh test');
});








// When all loaded
$(window).load(function() {


 //  setTimeout( function(){
 //    cy.fit();
	// }, 1000 );

	$('#left-component').show();
	$('#loading').hide();


  $( '#fit,fitM').click (); // todo better
  //console.log('END');



 //    // SPLIT PANE RESIZE              
	// function split_pane_js($close){

 //    var w = $(document).width();
 //    var r = (w/100)*15;
 //    console.log(r);

 //    // init size
 //    $('div.split-pane').splitPane('lastComponentSize', 0);

 //      if($close==true){
 //        $('div.split-pane').splitPane('lastComponentSize', 0);
 //      }

 //        $('div.split-pane').splitPane();

 //        $('button:first').on('click', function() {
 //          $('div.split-pane').splitPane('lastComponentSize', 10);
 //        });

 //        $('button:last').on('click', function() {
 //          $('div.split-pane').splitPane('firstComponentSize', 0);
 //        });

	// }




	});










});






</script>

