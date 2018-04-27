 <?php
//
session_start();

require('inc/define.php');
require('inc/fcts.php');
require('inc/inc.php');

$PROJECT = $_SESSION["PROJECT"];

// $asset = strtolower(substr($assets, 0, -1));
// $path_assets = "__projects/".$PROJECT."/".$assets."";






// echo $id_name['name'];


 if(isset($_GET['id']))
    {
      $id = $_GET['id'];
          // echo $id;
      $assets = "cases";
      $asset = "case";

      $id_name = localstorage_graph_id_name($PROJECT);
      $name = $id_name[$id];
      


    }





?>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script src="js/jquery-ui.js"></script>



<!-- <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
 -->


<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <script> </script>-->
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-filters.min.css">


<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">




<style>
<!-- BODY {background:none transparent;}-->
html, body{
        margin: 0px;
/*        margin-left: 3px;
        margin-right: 3px;*/
        padding: 0px;
    /*overflow: hidden;*/
    border: 0 none !important;



    font-size: 20px;
    line-height: 1.4;
    color: rgba(255,255,255,0.8);
    background: none;
/*    opacity:0.8;*/

    }


</style>








<style type="text/css">
  *,
*::after,
*::before {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

::-webkit-input-placeholder {
    opacity: 0.8;
    color: white;
}

::-moz-placeholder {
    opacity: 0.8;
    color: white;
}

:-moz-placeholder {
    opacity: 0.8;
    color: white;
}

:-ms-input-placeholder {
    opacity: 0.8;
    color: white;
}


.preview {
    display: block;
    width: 200px;
    height: 200px;
    margin: 20px auto;
    box-shadow: 0px 0px 0px 2px rgba(33, 122, 105, 1);
/*    border-radius: 50%;*/
    overflow: hidden;
}

.file-upload-wrapper {
    position: relative;
    z-index: 5;
    display: block;
    width: 250px;
    height: 30px;
    margin: 25px auto;
    border-radius: 5px;
/*    border-bottom: 1px dashed rgba(33, 122, 105, 1);*/
    background-color: grey;
}

.file-upload-native,
.file-upload-text {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    cursor: pointer;
    color: rgba(255,255,255,0.8);
}

input[type="file"]::-webkit-file-upload-button {
    cursor: pointer;
}

.file-upload-native:focus,
.file-upload-text:focus {
    outline: none;
}

.file-upload-text {
    z-index: 10;
    padding: 5px 15px 8px;
    overflow: hidden;
    font-size: 14px;
    line-height: 1.4;
    cursor: pointer;
    text-align: center;
    letter-spacing: 1px;
    text-overflow: ellipsis;
    border: 0;
    background-color: transparent;
}

.file-upload-native {
    z-index: 15;
    opacity: 0;
}


/* The Modal (background) */
.container {
    
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    /*padding-top: 100px;*/ /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}


.fiche {
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */

    left: 0;
    top: 0;

      width: 80%;
      height: 80%;
      top: 100px;
      margin: 0 auto;
position: relative;

/*    overflow: auto; /* Enable scroll if needed */
/*    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); */
}


.close{
    top : 16px;
    right: 16px;
    position: absolute;
    font-style: bold;
    color: black;
    font-size: 24px;
/*    z-index:1;*/
    cursor: pointer;

}
.close:hover{
    color: red;
    cursor: pointer;
}

</style>




<div id="container" class="container">




<div class="fiche">

<span class="close"><div>X</div></span>


    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Edit Asset #<?php echo $id; ;?></legend>


<?php
$bg_img_default = "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
$ext = "jpg";
$file = $path_case."__projects/1_aufildeleau/".$assets."/".$asset."_".$id."/compressed/".$asset."_".$id."_bg.".$ext;   
if (file_exists($file)) {
  $src_img  = $file."?". filemtime($file[0]);
  }
else{
  $src_img  = $bg_img_default;
}
?>


<style type="text/css">
  .adjusted {
background-size: contain;

    /*background-size:     cover;           */          
    background-repeat:   no-repeat;
    background-position: center center;
  }

</style>


<div class="preview img-wrapper adjusted" style="background-image: url(<?php echo $src_img;?>);"></div>
<div class="file-upload-wrapper">
    <input type="file" name="file" class="file-upload-native" accept="image/*" />
<!--     <input type="text" disabled placeholder="upload image" class="file-upload-text" /> -->
<input type="text" disabled placeholder="upload image" class="file-upload-text" value="upload"/>
<!--     <button type="submit" class="btn btn-warning">Update<span class="glyphicon glyphicon-send"></span></button> -->
</div>












<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Asset Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" value="<?php echo($name);?>">
    </div>
  </div>
</div>

<!-- Text input-->

<!-- <div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div> -->

<!-- Text input-->
<!--        <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div> -->


<!-- Text input-->
       
<!-- <div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div> -->

<!-- Text input-->
      
<!-- <div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div> -->

<!-- Text input-->
 
<!-- <div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div> -->

<!-- Select Basic -->
   
<!-- <div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Alabama</option>
      <option>Alaska</option>
      <option >Arizona</option>
      <option >Arkansas</option>
      <option >California</option>
      <option >Colorado</option>
      <option >Connecticut</option>
      <option >Delaware</option>
      <option >District of Columbia</option>
      <option> Florida</option>
      <option >Georgia</option>
      <option >Hawaii</option>
      <option >daho</option>
      <option >Illinois</option>
      <option >Indiana</option>
      <option >Iowa</option>
      <option> Kansas</option>
      <option >Kentucky</option>
      <option >Louisiana</option>
      <option>Maine</option>
      <option >Maryland</option>
      <option> Mass</option>
      <option >Michigan</option>
      <option >Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option> Uttah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option >Washington</option>
      <option >West Virginia</option>
      <option>Wisconsin</option>
      <option >Wyoming</option>
    </select>
  </div>
</div>
</div> -->

<!-- Text input-->

<!-- <div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div> -->

<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label">Website or domain name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="website" placeholder="Website or domain name" class="form-control" type="text">
    </div>
  </div>
</div> -->

<!-- radio checks -->
<!--  <div class="form-group">
                        <label class="col-md-4 control-label">Do you have hosting?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div> -->

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Add Note</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="comment" placeholder="Notes"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning">Update<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>








</div>











<script type="text/javascript">
  

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    var modal = parent.document.getElementById('iframe_modal');
    $(modal).attr("src", "");
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// var container = document.getElementsByClassName("container")[0];
// container.onclick = function() {
//   console.log('xxx');
//     var modal = parent.document.getElementById('iframe_modal');
//     modal.style.display = "none";
// }

$(function() {
  function maskImgs() {
    //$('.img-wrapper img').imagesLoaded({}, function() {
    $.each($('.img-wrapper img'), function(index, img) {
      var src = $(img).attr('src');
      var parent = $(img).parent();
      parent
        .css('background', 'url(' + src + ') no-repeat center center')
        .css('background-size', 'cover');
      $(img).remove();
    });
    //});
  }

  var preview = {
    init: function() {
      preview.setPreviewImg();
      preview.listenInput();
    },
    setPreviewImg: function(fileInput) {
      var path = $(fileInput).val();
      var uploadText = $(fileInput).siblings('.file-upload-text');

      if (!path) {
        $(uploadText).val('');
      } else {
        path = path.replace(/^C:\\fakepath\\/, "");
        $(uploadText).val(path);

        preview.showPreview(fileInput, path, uploadText);
      }
    },
    showPreview: function(fileInput, path, uploadText) {
      var file = $(fileInput)[0].files;

      if (file && file[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          var previewImg = $(fileInput).parents('.file-upload-wrapper').siblings('.preview');
          var img = $(previewImg).find('img');

          if (img.length == 0) {
            $(previewImg).html('<img src="' + e.target.result + '" alt=""/>');
          } else {
            img.attr('src', e.target.result);
          }

          uploadText.val(path);
          maskImgs();
        }

        reader.onloadstart = function() {
          $(uploadText).val('uploading..');
        }

        reader.readAsDataURL(file[0]);
      }
    },
    listenInput: function() {
      $('.file-upload-native').on('change', function() {
        preview.setPreviewImg(this);
      });
    }
  };
  preview.init();
});


</script>