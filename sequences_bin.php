<?php
// Start the session
session_start();

$assets = explode("_",strtolower(basename(__FILE__)))[0];
include('assets_header.php');

?>

<!--   <script type="text/javascript" src="js/assets.js"  type="text/javascript"></script> -->

<div class="container_MenuAssetscardsAndCards">

    <?php include('assets_menu.php');?>


    <div id="div_cards" style="background-color:var(--color-grey2);">
        <ul id="cards" class="cards" style="displayX:block;">


    <?php

        foreach (getAssetsList($path_assets) as $value){

            $number = explode("_", $value)[1];

            $data_asset = $number;

            $data_date =  date("Y-m-d H:i:s",filemtime($src_img));

        	$id_asset = "#".$number;
            $id_img = "".$asset."_".$number."_bg";
            $id_progressBar = "".$asset."_".$number."_progressBar";
            $id_percent = "".$asset."_".$number."_progressPercent";
            $id_divAsset = "div_".$asset."_".$number;

        	$title_asset = $id_name[$number];
            $id_btnUploadCase = "btn_upload_".$asset."_".$number."_bg";
            $name_btnUploadCase = $id_img;

            $path_case = $path_assets."/".$asset."_".$number;
            $path_case_thumb = $path_assets."/".$asset."_".$number."thumbs";

            $bg_img_default = "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
            $bg_img = $bg_img_default;

            foreach ($auth_cases_ext as $ext) {

                $src_img = $path_case."/".$asset."_".$number."_bg.".$ext;   
                $bg_img_jpg = $src_img."?". filemtime($path_case."/".$asset."_".$number."_bg.".$ext);

                $src_img_thumb = $path_case."/thumbs/".$asset."_".$number."_bg.".$ext; 
                $bg_img_thumb_jpg = $src_img."?". filemtime($path_case."/thumbs/".$asset."_".$number."_bg.".$ext);

                if (file_exists($src_img_thumb)) {
                	$bg_img = $bg_img_thumb_jpg;
                } else {
                    if (file_exists($src_img)) {
                    $bg_img = $bg_img_jpg;
                    }
                }

            }

            echo "<li class='LI-cards__item fiche' data-length='100' data-price='16' data-asset='".$data_asset."' data-date='".$data_date."'>";
        	echo "<div class='card fiche_card'>";

                echo "<div class='div__cardImage'>";
                	echo "<img width='1000px' id='".$id_img."' class='card__image card__image--fence image_fiche' src='".$bg_img."'></img>"; // todo better
                    echo "<div id='".$id_progressBar."' class='progressBar'><div id='".$id_percent."' class='percent'>0%</div></div>";
                	echo "<div id='".$id_divAsset."' class='title-asset' droppable='$droppable'>";
                        echo "<label class='$class_btn_upload_fileContainer'>";
                            echo $id_asset.' | '.$title_asset;
                            if($assets=="cases"){
                        echo "<input id='".$id_btnUploadCase."' type='file' class='input_asset' name='".$name_btnUploadCase."' onchange=\"uploadIMG_assets(this,'".$path_assets."','".$asset."','".$max_filesize_octets."');\"/>";                        
                            }

                        echo "</label>";
                    echo "</div>";
                echo "</div>";

                echo "<div class='card__content' style='background:none;width:inherit;'>";
                echo "<div class='card__title'>[Seq 4,Seq 1]</div>";
                		echo "<div class='card__subtitle'>";
                		  echo "<span class='length'> 100M </span>";
                		  echo "<span class='price'> 16€ </span>";
                		  echo "<span class='date'> ".$data_date." </span>";
                		echo "</div>";
                echo "<p class='card__text'>

                This is the shorthand for fe second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. 
        This is the shorthand for fe second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. 


                </p>";
                echo "<button class='btn-editCard'><i class='fa fa-pencil-square-o fa-2x' aria-hidden='true'></i></button>";
                echo "</div>";

        	echo "</div>";
          echo "</li>";

        } ?>
        </ul>
	   
    </div>

    <div id="treeview" class="treeview" style="width:100%;padding-top:1px;display:block;color:white;"></div>

</div>



<script type="text/javascript" src="js/assets.js"  type="text/javascript"></script>
<script type="text/javascript" src="js/global_fcts.js"  type="text/javascript"></script>


  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript">
    


global_fcts_footer_js("seq bin");


// document.onkeydown = checkKey;

// function checkKey(e) {

//     e = e || window.event;

//     if (e.keyCode == '38') {
//         // up arrow
//     }
//     else if (e.keyCode == '40') {
//         // down arrow
//     }
//     else if (e.keyCode == '37') {
//        // left arrow
//     }
//     else if (e.keyCode == '39') {
//        // right arrow
//     }

// }


// window.addEventListener("keydown", function(e) {
//   // $(document).keydown(function(e){
//       if(e.keyCode == 37){ // left <-
//         console.log('test left seq');
//           // resize_layout_content_left();
//           event.preventDefault();
//           return false;
//         }
//       if(e.keyCode == 39){ // right ->
//         console.log('test right seq');
//           // resize_layout_content_right();
//           event.preventDefault();
//           return false;
//         }


      
//   });





</script>



<?php
 // include('assets_footer.php');
?>





