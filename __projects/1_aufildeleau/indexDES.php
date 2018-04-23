<!DOCTYPE html>
<?php
// Start the session
session_start();
require_once('../../inc/define.php');
require_once('../../inc/fcts.php');
include('get_chain.php');

$project_title = '';
$str = file_get_contents('project_info.json');
$json = json_decode($str, true);
$project_title = $json['Infos']['title']; 
// exit;


// $tmp_a = strstr($project, '_');
// $tmp_b = str_replace("_"," ",$tmp_a);

// $_SESSION["NAME_PROJECT"] = $tmp_b; // todo better

// $_SESSION["NAME_PROJECT"] = $project_title; // todo better


?>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>STG | <?php echo $project_title;?>2</title>
	<meta name="author" content="$author" />
	<meta name="description" content="Storygraph" />
	<meta name="keywords"  content="$keywords" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="../_css2/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="../_css/examples.css" />

<!-- 	// js after css !!! -->
	<script type="text/javascript" src="../_js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="../_js/jquery-ui.1.9.1.min.js"></script>

	<script type="text/javascript" src="../_js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="../_js/examples.js"></script>


<style>

/* Style for our header texts
	* --------------------------------------- */
	
	body {
	  font-size: 40px;
	  font-family: arial, helvetica;
	  color: #000;
	  margin: 0;
	  padding: 0;
	}
	
	
	h1 {
	  font-weight: normal;
	  font-size: inherit
	}

	#fp-nav {
	  display: none;
	}
	
	.section {
	  text-align: center;
	  background: grey;
	}

	.slide {
	    width:100%;
	    height:100%;
	    padding:0;
	    margin:0;
	}

	.div-no-repeat {
	    /*background-image: url('http://lorempixel.com/g/500/500/');*/
	    background-repeat: no-repeat;
	}

	.div-contain {
	    background-size: contain;
	}
	
	.div-cover {
	    background-size: cover;
	}

	.num {
	  position: absolute;
	  bottom: 15px;
	  left: 15px;
	  text-align: left;
	  z-index: 999999;
	  background:yellow;
	}

</style>


<script type="text/javascript">
	
$(document).ready(function() {



  $('#fullpage').fullpage({

 //  	sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
	// anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
	anchors: ['firstPage', 'lastPage'],
	menu: '#menu',

	afterRender: function() {
	console.log('afterRender');
	$(".fp-next").show();
	// $.fn.fullpage.setAllowScrolling(false, 'left, right');
	//$.fn.fullpage.setAllowScrolling(false);
	// $.fn.fullpage.moveSlideLeft(false);
	//$.fn.fullpage.moveSlideRight();
	},

    afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
	
			var loadedSlide = $(this);
			var totalItems = loadedSlide.siblings().length;
			var numContainer = loadedSlide.closest('.fp-section').find('.num');
			var id = loadedSlide.closest('.slide').attr('id');
			numContainer.html(slideIndex + '/' + totalItems + '   ' + id);

			$(".fp-controlArrow").show();
			$(".fp-prev").show();
			$(".fp-next").show();

			if(id == "case_TITLE"){
			    $(".fp-prev").hide();
			}
			if(id == "case_END"){
			    $(".fp-next").hide();
			}
    },

	afterLoad: function(anchorLink, index) {
		var loadedSlide = $(this);
		var id = loadedSlide.closest('.slide').attr('id');

		$(".fp-controlArrow").hide();
		// $(".fp-next").show();
		// $(".fp-prev").show();

		if(id == "case_TITLE"){
		    $(".fp-prev").hide();
		    $(".fp-next").show();
		}
		if(id == "case_END"){
			$(".fp-prev").show();
		    $(".fp-next").hide();
		}

	},

    onSlideLeave: function (anchorLink, index, slideIndex, direction, nextSlideIndex) {
            var loadedSlide = $(this);
            var id = loadedSlide.closest('.slide').attr('id');
			// if(id == "slide10"){
			// 	$(".fp-prev").show();
			//     $(".fp-next").hide();
			//     var nextSlideIndex = slideIndex;
			// }
    }



  });


});

</script>





</head>
<body>



<ul id="menu" style="display:none;" >
	<!-- <li data-menuanchor="firstPage" class="active"><a href="#firstPage/1">1</a></li> -->
<!-- 	<li data-menuanchor="firstPage" class="active"><a href="#firstPage/">1</a></li>
	<li data-menuanchor="secondPage"><a href="#firstPage/1">2</a></li>
	<li data-menuanchor="thirdPage" ><a href="#firstPage/2">3</a></li>
	<li data-menuanchor="fourthPage"><a href="#firstPage/3">4</a></li> -->

	<li data-menuanchor="firstPage"><a href="#case_TITLE">TITLE</a></li>
		<?php
			foreach ($IDS_CHAINED_NODES as $id) {
			  echo '<li data-menuanchor="case_'.$id.'"><a href="#case_'.$id.'">case '.$id.'</a></li>';
			}
		?>
	<li data-menuanchor="fourthPage"><a href="#case_END">END</a></li>

</ul>

<div id="fullpage">

	  <div class="section">

<!-- 		    <div class="slide active" id="slide1">
		      <h1>S1</h1>
		  </div> 

		    <div class="slide" id="slide1">
		      <h1>S1</h1>
		  </div>
-->


		<div id="case_TITLE" class="slide div-no-repeat div-contain">
				<h1><?php echo $project_title;?></h1>
		</div>


		<?php
			foreach ($IDS_CHAINED_NODES as $id) {
			  echo '<div id="case_'.$id.'" class="slide div-no-repeat div-contain">';
				  echo '<h1>'.$id.'</h1>';
			  echo '</div>';
			}
		?>


		<div id="case_END" class="slide div-no-repeat div-contain">
				<h1>FIN</h1>
		</div>

		      
		    <div class="num"></div>


	  </div>

</div>

<!-- 
<div id="fullpageDES" style="display:none;">

	<div class="section active" id="section1">


		<div id="case_TITLE" class="slide div-slide">
			<div class="intro">
				<h1><?php echo $project_title;?></h1>
			</div>
		</div>


		<?php
			foreach ($IDS_CHAINED_NODES as $id) {
			  echo '<div id="case_'.$id.'" class="slide div-slide">';
				  echo '<div class="intro">';
				  echo '<h1>'.$id.'</h1>';
				  echo '</div>';
			  echo '</div>';
			}
		?>


		<div id="case_END" class="slide div-slide">
			<div class="intro">
				<h1>FIN</h1>
			</div>
		</div>


	</div>

</div> -->



<script>

var url = "storygraph-json.php";


function populateCases() {
    getJson(function(json_obj) {
        //processing the data
        // console.log(json_obj);
        // var json_obj = $.parseJSON(json_obj);//parse JSON
        for (var i in json_obj) 
            {
            	// ------------------ case json
            	// console.log(json_obj[i]); // ["cases","7","jpg"]
                var classes = json_obj[i][0];
                var id = json_obj[i][1];
                var ext = json_obj[i][2];
                console.log(classes + ",  " + id + " ,  " + ext);

            	// ------------------ case json_string
                // console.log(json_obj[i].classes + ",  " + json_obj[i].id + ",  " + json_obj[i].ext);
                // var classes = json_obj[i].classes;
                // var id = json_obj[i].id;
                // var ext = json_obj[i].ext;
                // if(ext!=""){
                if(ext){
			        var imageUrl = 'cases/case_'+id+'/case_'+id+'_bg.'+ext+'';
					var id_div = "#case_"+id;
			        $(id_div).css('background-image', 'url(' + imageUrl + ')');                	
                }


            }

    });
}


function getJson(callback) {
    var data;
    $.ajax({
        url: url,
        dataType: "json", //set to JSON
        success: function (resp) {
            data = resp;
            callback(data);
        },
        error: function () {}
    }); // ajax asynchronus request 
    //the following line wouldn't work, since the function returns immediately
    //return data; // return data from the ajax request
}


populateCases();



// $.ajax({
//         type: "GET", 
//         url: urlX, 
// 		dataType: "json", //set to JSON
//         success: function(response)
//         {
// 	    	var json_obj = $.parseJSON(response);//parse JSON
//             for (var i in json_obj) 
//             {

//                 console.log(json_obj[i].classes + ",  " + json_obj[i].id + ",  " + json_obj[i].ext);
//                 var id = json_obj[i].id;
//                 var ext = json_obj[i].ext;

// 		        var imageUrl = 'cases/case_'+id+'/case_'+id+'_bg.'+ext+'';
// 				var id_div = "#case_"+id;
// 		        $(id_div).css('background-image', 'url(' + imageUrl + ')');

//             }

//         }    
// }) 








// $.get( url, function( data ) {

//  obj = JSON.parse(data);

// 	console.log('data');
// 	console.log(data);
//   // console.log(JSON.encode(data));
//   console.log(typeof(data));

// });



// for (var i = 0; i < arrayLength; i++) {
// 		id = myStringArray_ID[i];


//         var imageUrl = 'cases/case_'+id+'/case_'+id+'_bg.'+ext+'';
// 		var id_div = "#case_"+id;
//         $(id_div).css('background-image', 'url(' + imageUrl + ')');

// }


		<?php

			  // echo $imageUrl = '../../__projects/1_aufildeleau/cases/case_7/case_7_bg.jpg';
			  // echo "$('#case_7').css('background-image', 'url(".$imageUrl.")');";

			// foreach ($IDS_CHAINED_NODES as $id) {
			//   echo $imageUrl = '../../__projects/1_aufildeleau/cases/case_7/case_7_bg.jpg';
			//   echo "$('#case_7').css('background-image', 'url(".$imageUrl.")');";
			// }
		?>

        // imageUrl = '../../__projects/1_aufildeleau/cases/case_7/case_7_bg.jpg';
        // $('#case_7').css('background-image', 'url(' + imageUrl + ')');

        // imageUrl = '../../__projects/1_aufildeleau/cases/case_6/case_6_bg.jpg';
        // $('#case_6').css('background-image', 'url(' + imageUrl + ')');

        // imageUrl = '../../__projects/1_aufildeleau/cases/case_9/case_9_bg.jpg';
        // $('#case_9').css('background-image', 'url(' + imageUrl + ')');

        // imageUrl = '../../__projects/1_aufildeleau/cases/case_3/case_3_bg.png';
        // $('#case_3').css('background-image', 'url(' + imageUrl + ')');

        // imageUrl = '../../__projects/1_aufildeleau/cases/case_2/case_2_bg.jpg';
        // $('#case_2').css('background-image', 'url(' + imageUrl + ')');




</script>

</body>
</html>