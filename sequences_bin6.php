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

	   <div id="treeview" class="treeview" style="width:100%;padding-top:1px;display:none;color:white;"></div>

	</div>







<script>


function progressHandler_DES(event, progressPercent,progressBar,name) {
    var percentLoaded = Math.round((event.loaded / event.total) * 100);

    var assetName =  name.split("_")[0]+"_"+name.split("_")[1];

    // console.log(progressPercent);
    // console.log(progressBar);
    // console.log(name);
    // console.log('-------CN----------');
    // console.log(assetName);
    // console.log('-----------------');


    var progressPercent = document.querySelector('.percent');
    var progressBar = document.querySelector('.progressBar');

    // console.log('-----------------');
    // console.log(progressPercent);
    // console.log(progressBar);
    // console.log('-----------------');


    console.log(assetName+"_progressPercent");
    if (percentLoaded <= 100) {
        // progressPercent.style.width = percentLoaded + '%';
        // progressPercent.textContent = percentLoaded + '%';

        document.getElementById(assetName+"_progressBar").style.display='block';
        document.getElementById(assetName+"_progressPercent").style.width=percentLoaded + '%';
        document.getElementById(assetName+"_progressPercent").textContent=percentLoaded + '%';
    }

}

// drop file(s)
$('[droppable="true"]').on('dragenter', function (event) {
        id = "#" + this.id;
        console.log(id);

        $(this).css({"border-color": "white", "border-width":"4px", "border-bottom":"0px", "border-style":"solid"});
        
        // if($(this).hasClass("div_case")){
        //     // IE needs this event.
        //     $(this).addClass('over');
        //     //event.preventDefault();
        // }
        event.defaultPrevented;
        return false;
    });

    $('[droppable="true"]').on('dragover', function (event) {
        $(this).css({"border-color": "white", "border-width":"4px", "border-bottom":"0px", "border-style":"solid"});
        // if($(this).hasClass("div_case")){
        //     $(this).addClass('over');
        //     //event.preventDefault();
        // }
        event.defaultPrevented;
        return false;
    });

    $('[droppable="true"]').on('dragleave', function (event) {
        $(this).css({"border": "0px", "border-width":"0px",});
        // if($(this).hasClass("div_case")){
        //     $(this).removeClass('over');
        // }
        event.defaultPrevented;
        return false;
    });

    $('[droppable="true"]').on('drop', function (event) {
        $(this).css({"border": "0px", "border-width":"0px",});
        // if($(this).hasClass("div_case")){
        //     $(this).removeClass('over');
        // }
        event.defaultPrevented;
        // return false; NO !
});


// upload JPEG files
function UploadFile_assets_DES(file,name,size,type,server,progressPercent,progressBar,url_upload) {
    console.log('-----------------');
    console.log(name);
    console.log(progressPercent);
    console.log(progressBar);
    console.log('-----------------');


    //progressBar.style.display = 'block';
    $('.progressBar').hide();
    progressPercent.style.width = '0%';
    progressPercent.textContent = '0%';

    //initiate request
    xhr = new XMLHttpRequest();

    xhr.upload.addEventListener("progress", function (evt) {
        progressHandler(evt, progressPercent,progressBar,name);
    }, false);


    xhr.open('post',server,true);

    //set headers
    xhr.setRequestHeader('Content-Type',"multipart/form-data");
    //xhr.setRequestHeader('X-File-Name',file.fileName);
    xhr.setRequestHeader('X-File-Name',name);
    xhr.setRequestHeader('X-File-Size',size);
    xhr.setRequestHeader('X-File-Type',type);

    //send the file
    xhr.send(file);

}

// https://stackoverflow.com/questions/12502482/creating-progress-bar-for-uploading-files-using-jquery-and-ajax

function uploadIMG_assets_DES(input,url_upload,asset,max_filesize_octets) {
    console.log(url_upload);
    console.log(asset);
    // $(this).addClass('div_asset_hover');

    if (input.files && input.files[0]) {
        var file            = input.files[0];
        var name            = input.name;
        var size            = file.size;
        var type            = file.type;
        var url_upload      = url_upload;
        var asset           = asset;
        var max_filesize_octets = max_filesize_octets;

        var server      = asset+'s_upload_bg.php?url_upload='+url_upload;
        console.log(server);

        var progressPercent = document.querySelector('.percent');
        var progressBar = document.querySelector('.progressBar');

        if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
            //if ( /\.(jpg)$/i.test(file.name) ) {
            if ( parseInt(size) < max_filesize_octets ) {
                // if ( parseInt(size) < <?php echo $max_filesize_octets;?> ) {


                    var reader  = new FileReader();

                    reader.onload = function (e) {

                        console.log(size + " octets"); // 2 000 000 // 2 665 951
                        console.log(file.name);

                        preview = "#"+input.name;
                        $(preview).attr('src', e.target.result);
                        UploadFile_assets(file,name,size,type,server,progressPercent,progressBar,url_upload);

                        e.stopPropagation(); // Stops some browsers from redirecting.
                        e.preventDefault();

                    };

                    //  reader.onerror = errorHandler;
                    //  reader.onprogress = updateProgress;
                    //  reader.onabort = function(e) {
                    //    alert('File read cancelled');
                    //  };

                    reader.readAsDataURL(file);
            }
            else{alert('max <?php echo $max_filesize_mo;?>  Mo')}
        }
        else{alert('only jpg|jpeg|png|gif')}
        //else{alert('only jpg')}

    }

    // refresh graph // todo better
    var bt = parent.document.getElementById("bt-st");
    $( bt ).click ();

    //cy.$('#'+i).css({"background-image": url, "background-fit": "cover"});
    
}

</script>


<script>



$( document ).ready(function() {

    // // $('#container').css({"background-color": "red"});
    //var node = parent.document.getElementById("container");
    // node.css({"background-color": "red"});
    // parent.document.cy.$('#11').css({"background-image": url, "background-fit": "cover"});

    // container = parent.document.getElementById('container');
    // container.style.background = "red";

// var cy = cytoscape({
//   container: parent.document.getElementById('container')
// });

// // Récupère le premier élément DIV enfant ou descendant de
// // l'élément qui porte l'identifiant 'something'
// var child = document.getElementById('something').getElementsByTagName('div')[0];

// // Équivalent stricte avec un sélecteur CSS (compatible IE8+)
// var child = document.querySelector('#something div');

// // Même chose mais en restreignant à un DIV enfant (pas descendant)
// var child = document.querySelector('#something > div');


// var cy = parent.document.getElementById('container');
//var cy2 = parent.document.cy0;





// var cy2 = window.parent.cy;


// //var child = document.querySelector('#something > div');


// cy2.$('#11').css({"border-color": "red"});
// cy2.$('#11').removeClass();



//cy2.$('#11').hide();

    document.getElementById("input__searchAssets").value = "";


// $( "input.input_asset" ).hover(function() {
//   $( this ).fadeOut( 100 );
//   $( this ).fadeIn( 500 );
// });

// $( ".input_asset" ).hover(function() {
//     alert('toto');
//   $( this ).fadeOut( 100 );
//   $( this ).fadeIn( 500 );
// });


	$(".btn_menu_assets").click(function() {
		$(".btn_menu_assets").removeClass('btn_menu_assets_clicked');
	  	$(this).addClass('btn_menu_assets_clicked');
	});

    function cards_show() {
      $("#treeview").hide();
      $("#cards").show();
    }

	function modulo_list_cards(){
		$('.cards > li').css("background-color", "#061120");
		$('#cards li:nth-child(2n)').css("background-color", "#0D3246");
	}

	function modulo_list_cards_remove(){
		$('.cards > li').css("background", "none");
	}

    function input__searchAssets(valThis){
        if(valThis == ""){
            $('.cards > li').show();
        } else {
            $('.cards > li').each(function(){
                var text = $(this).text().toLowerCase();
                (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
            });
       };
    }

    $('#input__searchAssets').keyup(function(){
        cards_show();
       var valThis = $(this).val().toLowerCase();
       input__searchAssets(valThis);
    });

    function a(){ console.log("a"); $(".cards li").sort(sort_assets_asc_alphabetical).appendTo('.cards');}
    function z(){ console.log("b"); $(".cards li").sort(sort_assets_desc_alphabetical).appendTo('.cards');}

    function sort_assets_asc_alphabetical(a, b) {
      return ($(b).data('asset')) < ($(a).data('asset')) ? 1 : -1 ;
    }
    function sort_assets_desc_alphabetical(a, b) {
      return ($(b).data('asset')) < ($(a).data('asset')) ? -1 : 1 ;
    }

    var az = [a,z];
    $( "#bt_sort" ).click(function(e) {
        cards_show();
        $(this).find('.fa').toggleClass('fa-sort-alpha-asc fa-sort-alpha-desc');
        az.reverse()[1]();
        e.stopPropagation();
        e.preventDefault();
    });

    function da(){ console.log("a"); $(".cards li").sort(sort_dates__asc_alphabetical).appendTo('.cards');}
    function dz(){ console.log("b"); $(".cards li").sort(sort_dates__desc_alphabetical).appendTo('.cards');}

    function sort_dates__asc_alphabetical(a, b) {
      return ($(b).data('date')) < ($(a).data('date')) ? 1 : -1 ;
    }
    function sort_dates__desc_alphabetical(a, b) {
      return ($(b).data('date')) < ($(a).data('date')) ? -1 : 1 ;
    }

    var daz = [da,dz];
    $( "#bt_date" ).click(function(e) {
        cards_show();
        // $(this).find('.fa').toggleClass('fa-calendar fa-calendar-times-o');
		//$(this).find('.fa').toggleClass('fa-calendar fa-calendar');
        daz.reverse()[1]();
        e.stopPropagation();
        e.preventDefault();
    });


    $.btgl = {};
    $.btgl.switch = 2;
    $( "#bt_grid_list" ).click(function(e) {
        console.log('$.btgl.switch');
        console.log($.btgl.switch);
        cards_show();
        $(this).find('.fa').toggleClass('fa-th fa-align-justify');
        $( "#bt_img" ).find('.fa').removeClass('fa-picture-o');
        $( "#bt_img" ).find('.fa').addClass('fa-address-card-o');

    		        if ($.btgl.switch === 1) {

                        $('.fiche_card').removeClass('card__row');
                        $('.fiche').removeClass('column');
                        $('.div__cardImage').removeClass('card__image_row');
                        $('.image_fiche').removeClass('div__cardImage--row');
                        $('.card__content').removeClass('card__content--row');

                        $('.fiche').addClass('LI-cards__item');
                        $('.fiche_card').addClass('card');

                        $("#bt_img").prop("disabled",false);
                        $('.card__content').hide();

						modulo_list_cards_remove();

                        $.btimg.switch = 2;
                        $.btgl.switch = 2;

    	            }
                    else {

                        $('.fiche').removeClass('LI-cards__item');
                        $('.fiche_card').removeClass('card');

                        $('.fiche_card').addClass('card__row');
                        $('.fiche').addClass('column');
                        $('.div__cardImage').addClass('card__image_row');
                        $('.image_fiche').addClass('div__cardImage--row');
                        $('.card__content').addClass('card__content--row');

                        $("#bt_img").prop("disabled",true);
                        $('.card__content').show();

						modulo_list_cards();

                        $.btimg.switch = 1;
    		            $.btgl.switch = 1;

    		        }

        e.stopPropagation();
        e.preventDefault();
    });

    $.btimg = {};
    $.btimg.switch = 2;
    $( "#bt_img" ).click(function(e) {
        cards_show();
        $(this).find('.fa').toggleClass('fa-address-card-o fa-picture-o');

    		        if ($.btimg.switch === 2) {
						//$(this).find('.fa').toggleClass('fa-address-card-o fa-picture-o');
                        $('.card__content').show();
                        $.btimg.switch = 1;
    	            }
                    else {
						//$(this).find('.fa').toggleClass('fa-picture-o fa-address-card-o');
                        $('.card__content').hide();
    		            $.btimg.switch = 2;
    		        }
        e.stopPropagation();
        e.preventDefault();
    });

    $( "#bt_folder_tree" ).click(function(e) {
        $("#cards").hide();
        $("#treeview").show();
        $("#treeview").load("<?php echo $assets;?>_bin_treeview.php");
        console.log('treeview');
        e.stopPropagation();
        e.preventDefault();
    });

  $( function() {
    var availableTagsSearchAssets = [
      "Sequence 0001",
      "Sequence 0002"
    ];
    $( "#input__searchAssets" ).autocomplete({
      source: availableTagsSearchAssets
    });
  } );

    $('#input__searchAssets').on('autocompleteselect', function (e, ui) {
        var optionSelected = ui.item.value;
        input__searchAssets(optionSelected.toLowerCase());
    });

    // $('#input__searchAssets').on('keydown', function(e) {
    //     if( !/[a-z]|[A-Z]/.test( String.fromCharCode( e.which ) ) )
    //         return false;
    // });

    $('#input__searchAssets').on('dblclick focusin', function() {
    //$('#input__searchAssets').on('click focusin', function() {
        cards_show();
        this.value = '';
        input__searchAssets('');
    });

});


    $( "#b-select" ).change(function(){
        // cards_show();
    });
// https://www.sitepoint.com/user-sortable-lists-flexbox-jquery/
// https://codepen.io/SitePoint/pen/jyJwXO
(function($) {
  "use strict";

  $.fn.numericFlexboxSorting = function(options) {
    const settings = $.extend({
      elToSort: ".cards li"
    }, options);

    const $select = this;
    const ascOrder = (a, b) => a - b;
    const descOrder = (a, b) => b - a;

    $select.on("change", () => {
    //   $("#treeview").hide();
    //   $("#cards").show();
      const selectedOption = $select.find("option:selected").attr("data-sort");
      sortColumns(settings.elToSort, selectedOption);
    });

    function sortColumns(el, opt) {
      const attr = "data-" + opt.split(":")[0];
      const sortMethod = (opt.includes("asc")) ? ascOrder : descOrder;
      const sign = (opt.includes("asc")) ? "" : "-";

      const sortArray = $(el).map((i, el) => $(el).attr(attr)).sort(sortMethod);

      for (let i = 0; i < sortArray.length; i++) {
        $(el).filter(`[${attr}="${sortArray[i]}"]`).css("order", sign + sortArray[i]);
      }
    }

    return $select;
  };
})(jQuery);

// call the plugin
$(".b-select").numericFlexboxSorting();


// ###########  filters

    function options_filters(){ // todo
        console.log('toto');
    }

var options_filters = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {




   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options_filters.indexOf( val ) ) > -1 ) {
      options_filters.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options_filters.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();

   console.log( options_filters );

            $('.cards > li').each(function(){$(this).hide();});
            $('.cards > li').each(function(){
                var text = $(this).text().toLowerCase();
                for(var i= 0; i < options_filters.length; i++){
                    if ( text.indexOf(options_filters[i]) >= 0 ) {
                        $(this).show();
                    }
                }
                if (options_filters.length === 0) {
                    $('.cards > li').each(function(){$(this).show();});
                }
            });





   return false;
});
</script>








