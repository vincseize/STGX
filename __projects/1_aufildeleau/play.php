<!DOCTYPE html>
<?php
// Start the session
session_start();
require_once('../../inc/define.php');
require_once('../../inc/fcts.php');
include('../get_chain.php');

$project_title = '';
$str = file_get_contents('project_info.json');
$json = json_decode($str, true);
$project_title = $json['Infos']['title']; 


$stg_myproject_name_index = "stg_myproject.html";
$pack_folder = $_SESSION["PROJECT"]."_pack";


// @recurseRmdir($pack_folder);
@rrmdir($pack_folder);


mkdir($pack_folder,0777);


copy_directory('../_js',$pack_folder.'/_js');
copy_directory('../_css',$pack_folder.'/_css');

copy_directory('cases',$pack_folder.'/cases');
copy_directory('sequences',$pack_folder.'/sequences');


// Start the buffering //
ob_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>STG | <?php echo $project_title;?></title>
	<meta name="author" content="$author" />
	<meta name="description" content="Storygraph" />
	<meta name="keywords"  content="$keywords" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="../_css/jquery.fullPage.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="../_css/examples.css" /> -->

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

	anchors: ['firstPage', 'lastPage'],
	menu: '#menu',

	afterRender: function() {
	console.log('afterRender');
	$(".fp-next").show();
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
    }



  });


});

</script>



</head>
<body>


<ul id="menu" style="display:none;" >

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


		<div id="case_TITLE" class="slide div-no-repeat div-contain">
				<h1><?php echo $project_title;?></h1>
		</div>

		<?php

			function resolveExt($name) {
			    // reads informations over the path
			    $info = pathinfo($name);
			    if (!empty($info['extension'])) {
			        // if the file already contains an extension returns it
			        return $name;
			    }
			    $filename = $info['filename'];
			    $len = strlen($filename);
			    // open the folder
			    $dh = opendir($info['dirname']);
			    if (!$dh) {
			        return false;
			    }
			    // scan each file in the folder
			    while (($file = readdir($dh)) !== false) {
			        if (strncmp($file, $filename, $len) === 0) {
			            if (strlen($name) > $len) {
			                // if name contains a directory part
			                $name = substr($name, 0, strlen($name) - $len) . $file;
			            } else {
			                // if the name is at the path root
			                $name = $file;
			            }
			            closedir($dh);
			            return $name;
			        }
			    }
			    // file not found
			    closedir($dh);
			    return false;
			}

			foreach ($IDS_CHAINED_NODES as $id) {

				$file = resolveExt('cases/case_'.$id.'/case_'.$id.'_bg');
				$ext = $array =  explode('.', $file)[1];
				$url_bg = 'cases/case_'.$id.'/case_'.$id.'_bg.'.$ext;

				if (file_exists($url_bg)) {
					$url_bg = 'cases/case_'.$id.'/case_'.$id.'_bg.'.$ext.'?t='.time();
				} else {
					$url_bg = '';
				}

				echo '<div id="case_'.$id.'" class="slide div-no-repeat div-contain" style="background-image:url('.$url_bg.');">';
				  	// echo '<h1>'.$id.'</h1>';
				echo '</div>';
			}
		?>

		<div id="case_END" class="slide div-no-repeat div-contain">
				<h1>FIN</h1>
		</div>
      
		    <div class="num"></div>

	  </div>

</div>


</body>
</html>

<?php

$stg_myproject_html = $pack_folder.'/'.$stg_myproject_name_index;

$myfile = fopen($stg_myproject_html, "w") or die("Unable to open file!");
fclose($myfile);

// Get the content that is in the buffer and put it in your file //
file_put_contents($stg_myproject_html, ob_get_contents());

//read the entire string
$str=file_get_contents($stg_myproject_html);

//replace something in the file string - this is a VERY simple example
$str=str_replace("../_css", "_css",$str);
$str=str_replace("../_js", "_js",$str);

//write the entire string
file_put_contents($stg_myproject_html, $str);






foreach ($IDS_CHAINED_NODES as $id) {
	@rrmdir($pack_folder.'/cases/case_'.$id.'/compressed');
}


?>



