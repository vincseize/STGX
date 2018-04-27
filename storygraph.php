<?php
// Start the session
session_start();



require_once('inc/define.php');
$_SESSION["LOCALSTORAGE_TXT_CHECK"] = 'false';
$localstorage_graph_txt = '__projects/'.$_SESSION["PROJECT"].'/localstorage_graph.txt';
if (file_exists($localstorage_graph_txt)) {
    // echo 'true';
    $_SESSION["LOCALSTORAGE_TXT_CHECK"] = 'true';
}


if(!isset($_SESSION['PROJECT']))
{
    header("Location: index.php");
    exit;
}


?>


<!DOCTYPE html>
<html>
<head>

  <title>STORYGRAPH V0.1</title>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>

  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->

  <script type="text/javascript" src="js/global_fcts.js"  type="text/javascript"></script>

  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">



  <link rel="stylesheet" type="text/css" href="css/root.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/bin.css">

  <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

  <!--
    <script type="text/javascript" src="js/jstree/jstree.min.js"></script>
    <link rel="stylesheet" href="css/jstree/style.min.css">
  -->


  <link rel="stylesheet" href="/<?php echo $_SESSION["NAME_FOLDER_APP"];?>/_storygraph/css/storygraph.css"  type="text/css">

	<!-- <script src="js/split-pane.js"></script> -->
  <script type="text/javascript" src="js/global_fcts.js"  type="text/javascript"></script>

	<link rel="stylesheet" href="css/split-pane.css" />
	<!-- The style sheet below is not part of the split-pane plugin. Feel free to use it, or style things your own way. -->
	<link rel="stylesheet" href="css/pretty-split-pane.css" />
  <!-- http://dreamchain.com/static/split-pane/fixed-left.html -->
	<script src="js/split-pane.js"></script>

</head>

<body oncontextmenu="return false;" style="" styleX="background-color: red;">















<!--   // preload div-->
<div id="loading"> 
    <div class="book">
      <div class="book__page"></div>
      <div class="book__page"></div>
      <div class="book__page"></div>
    </div>
</div>









<style type="text/css">

.iframe_modal {
       overflow:hidden;
       padding:0px;
       margin:0px;
       z-index: 9999999;
       position: absolute;
       width:100%;
       height:100%;
       background: none;
       display:none;
       /*opacity:0.8;*/
     }

</style>


<iframe id="iframe_modal" class="iframe_modal"  allowtransparency="true">








</iframe>














<!-- <div id="div_todo" class="div_todo" style="z-index: 0;"> -->
<iframe id="iframe_todo" class="iframe_todo"></iframe>
<!-- </div> -->

<!--   // top -->
  <div id="header" class="header no-border">
  <?php include('menu_top.php');?>
  </div>


<!--   // content play graph-->
  <div id="close-pg" class="close-pg">X</div>
  <iframe id="wrapper-pg" class="wrapper-pg" frameborder="0" ></iframe>

<!--   // content -->

<div id="content_graph" class="pretty-split-pane-frame content_graph">
			<div class="split-pane fixed-left">

            <!-- storygraph loaded here by footer _storygraph/graph.php -->
    				<div id="left-component" class="split-pane-component left-component">

    				    <div id="content_storygraph" class="pretty-split-pane-component-inner"></div>

    	     </div>

    	     <div id="my-divider" class="split-pane-divider" styleX="background-color: red;"></div>

    				<div id="right-component" class="split-pane-component no-border">

            					<div id="right-component-container-assets" class="pretty-split-pane-component-inner">
                              <div id="menu-bin-right-component" class="menu-bin-right-component no-border">
                                  <?php
                                  // include('menu_bin.php'); // TO DO TO MUTUALISE
                                  ?>
                              </div>
                              <!-- assets loaded here by footer sequences_bin.php -->
                              <iframe id="iframe-right-component" class="iframe-right-component no-border" frameborder="0"></iframe>
            					</div>
    				</div>
			</div>
</div>
<!--   // content -->



























<!--   footer -->
  <div id="footer" class="footer no-border">
  <?php include('footer.php');?>
  </div>
<!--   // footer -->

<!--   bt param , important here at bottom at least -->
<div id="bt_param_over">
    <ul >
      <li><a href="#"   id="bt_param" style="opacity: 0.5;line-height:var(--height-header);"><i class="fa fa-cog"  style="opacity: 0.5;"></i></a>
        <ul style="width: 15vw;" >
          <li style="border-top: 1px solid var(--color-grey3);width:100%;"><a href="#">Projects</a></li>
          <li style="width:100%;"><a href="#">Add Project</a></li>
          <li style="width:100%;"><a href="#" id="todo_ST"><i class="fa fa-bell-o""></i>&nbsp;&nbsp;My Todos</a></li>
          <li style="width:100%;"><a href="#">Parameters</a></li>
          <li style="width:100%;"><a href="#"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a></li>
        </ul>
      </li>

    </ul>
<div>

<!-- <div id="bt_save_over">
    <ul >
      <li><a href="#"   id="bt_save_over_a" style="opacity: 0.5;line-height:var(--height-header);"><i class="fa fa-save"  style="opacity: 0.5;"></i></a>

      </li>

    </ul>
<div> -->



























<script type="text/javascript" src="js/jquery-ui.js"></script>

<script>

$(document).ready(function(){

    // $('#bt_param_over').on("click", function(){
    //     console.log('bt_param_over clicked');
    // }); 


// global_fcts_footer_js();


    // $('#bt_param_over').trigger("click");

// $(window).keypress(function(event) {
//     if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
//     alert("Ctrl-S pressed");
//     event.preventDefault();
//     return false;
// });




// $(document).bind('keydown', 'ctrl+c', test);



 // var code = e.keyCode || e.which;
 // if(code == 13) { //Enter keycode
 //   //Do something
 // }



  // $("body").keydown(function(e) {
  //   // layout_dimensions();
  //   var keyCode = (e.keyCode ? e.keyCode : e.which);  
  //     if(e.keyCode == 37) { // left
  //     resize_layout_content_left();
  //     }
  //     if(e.keyCode == 13) { // right
  //       resize_layout_content_right();
  //     }
  // });



                // if (event.which == 64) {
                //     alert("You have pressed @ sign");
                // }
                // else if (event.which == 35) {
                //     alert("You have pressed # sign");
                // }
                // else if (event.which == 36) {
                //     alert("You have pressed $ sign");
                // }
                // else if (event.which == 42) {
                //     alert("You have pressed * sign");
                // }
                // else if (event.which >= 65 && event.which <= 90) {
                //     alert("You have pressed uppercase alphabet character");
                // }
                // else if (event.which >= 97 && event.which <= 122) {
                //     alert("You have pressed lowercase alphabet character");

                // }


    // SPLIT PANE RESIZE           

    // $(function() {

    //   $('div.split-pane').splitPane('lastComponentSize', 0);

    //     $('div.split-pane').splitPane();

    //     $('button:first').on('click', function() {
    //       $('div.split-pane').splitPane('lastComponentSize', 10);
    //     });

    //     $('button:last').on('click', function() {
    //       $('div.split-pane').splitPane('firstComponentSize', 0);
    //     });

    // });


});


var localStorage_txt_check = "<?php echo $_SESSION["LOCALSTORAGE_TXT_CHECK"];?>";
console.log('localStorage_txt_check : ' + localStorage_txt_check);
var session_project = "<?php echo $_SESSION["PROJECT"];?>";
console.log('session_project : ' + session_project);


// last bt UI Assets clicked
if (!localStorage.uiMenuBin){
  localStorage.uiMenuBin = "";
}
localStorage.uiMenuBin = 'bt_sequences_clicked'; 
// console.log(localStorage.uiMenuBin);

// for debug
// console.log('localStorage : ' + localStorage); 

// When all loaded
$(window).load(function() {
  $( '#fit,fitM').click (); // todo better

  // $( '.my-divider').click(function() {
  //             alert('double click');
  //   });

  //   setTimeout( function(){
  //   cy.fit();
  // }, 1000 );


// $('#imagemodal').modal('show');



});

// TEST to do
// function app(){
//   function sub(){}
// }
// window.onload=app;










</script>



<script type="text/javascript">
  
</script>


</body>

</html>
