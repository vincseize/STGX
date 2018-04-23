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
        <ul id="cards" class="cards">


    <?php
        // echo "<br><br><br><br><br><br><br><br>";
        foreach (getAssetsList($path_assets) as $value){

            $number = explode("_", $value)[1];

            $data_asset = $number;

        	$id_asset = "#".$number;
            $id_img = "".$asset."_".$number."_bg";
            $id_progressBar = "".$asset."_".$number."_progressBar";
            $id_percent = "".$asset."_".$number."_progressPercent";
            $id_divAsset = "div_".$asset."_".$number;

        	$title_asset = $id_name[$number];
            $id_btnUploadCase = "btn_upload_".$asset."_".$number."_bg";
            $name_btnUploadCase = $id_img;

            $bg_img_default = "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
            $bg_img = $bg_img_default;

            $path_case = $path_assets."/".$asset."_".$number;

            $pop = "";
            $fileBG = glob($path_case.'/*');
            $bg_img_original = $fileBG[0]."?". filemtime($fileBG[0]);
            $data_date =  date("Y-m-d H:i:s",filemtime($fileBG[0]));

            $path_case_thumb = $path_assets."/".$asset."_".$number."thumbs";

            foreach ($auth_cases_ext as $ext) {

                $src_img = $path_case."/".$asset."_".$number."_bg.".$ext;   
                $bg_img_jpg = $src_img."?". filemtime($path_case."/".$asset."_".$number."_bg.".$ext);

                $src_img_thumb = $path_case."/thumbs/".$asset."_".$number."_bg.".$ext; 
                $bg_img_thumb_jpg = $src_img."?". filemtime($path_case."/thumbs/".$asset."_".$number."_bg.".$ext);

                if (file_exists($src_img_thumb)) {
                	$bg_img = $bg_img_thumb_jpg;
                    $pop = "pop";

                } else {
                    if (file_exists($src_img)) {
                    $bg_img = $bg_img_jpg;
                    }
                }

            }



            echo "<li class='LI-cards__item fiche' data-length='100' data-price='16' data-asset='".$data_asset."' data-date='".$data_date."'>";
        	echo "<div class='card fiche_card'>";

                echo "<div class='div__cardImage'>";
                	echo "<img width='1000px' id='".$id_img."' class='card__image card__image--fence image_fiche ".$pop."' src='".$bg_img."' src_high='".$bg_img_original."'></img>"; // todo better
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



<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" style="widthX: 400px; heightX: 264px;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript" src="js/assets.js"  type="text/javascript"></script>


<script type="text/javascript">
    $(".pop").on("click", function() {
   $('#imagepreview').attr('src', $(this).attr('src_high')); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script>

<?php
 // include('assets_footer.php');
?>





