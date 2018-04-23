  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>

  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>

<style>
/*.grid-itemSequence { width: 25%; }
.grid-itemSequence--width2 { width: 50%; }*/




#containerAssets {
  border: 0 none;
  padding: 5px;
  height:100%;
}

.itemAsset {
  width: 70px;
  height: 70px;
  margin: 3px;
  float: left;
}

.itemAsset_h2 {
  width: 140px;
  height: 70px;
  margin: 3px;
  float: left;
}

.itemAsset_v2 {
  width: 70px;
  height: 140px;
  margin: 3px;
  float: left;
}

.itemAsset.next {
  width: 60px;
  height: 60px;
  border: 5px solid black;
  border-radius: 35px;
}

.red { background: red; }
.blue { background: blue; }
.green { background: green; }
.yellow { background: yellow; }

/* Start: Recommended Isotope styles */

/**** Isotope Filtering ****/

.isotope-itemAsset {
  z-index: 2;
}

.isotope-hidden.isotope-itemAsset {
  pointer-events: none;
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/

.isotope,
.isotope .isotope-itemAsset {
  -webkit-transition-duration: 0.8s;
     -moz-transition-duration: 0.8s;
          transition-duration: 0.8s;
}

.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
          transition-property: height, width;
}

.isotope .isotope-itemAsset {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
          transition-property:         transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-itemAsset,
.isotope .isotope-itemAsset.no-transition {
  -webkit-transition-duration: 0s;
     -moz-transition-duration: 0s;
          transition-duration: 0s;
}

/* End: Recommended Isotope styles */







#uploader {
  position:relative; 
  overflow:hidden; 
  width:70px; 
  height:70px; 
  background:transparent; 
  cursor:pointer;
  padding:0px;
  color:#555;
  font-family:'Arial';
  font-weight:bold;}

#uploader:hover{
  border:2px dashed #e8e8e8;
  /*cursor:crosshair;*/
}


#uploader img{
    position:absolute;
    width:70px;
    height:70px;
    top:-1px;
    left:-1px;
    z-index:-1;
    border:none;
    background-color: transparent;
}


#filePhoto{
    display:none;
}








#uploader2 {
  position:relative; 
  overflow:hidden; 
  width:70px; 
  height:70px; 
  background:transparent; 
  cursor:pointer;
  padding:0px;
  color:#555;
  font-family:'Arial';
  font-weight:bold;}

#uploader2:hover{
  border:2px dashed #e8e8e8;
  /*cursor:crosshair;*/
}


#uploader2 img{
    position:absolute;
    width:70px;
    height:70px;
    top:-1px;
    left:-1px;
    z-index:-1;
    border:none;
    background-color: transparent;
}







#filePhoto2{
    display:none;
}


























</style>


<div style="color:white;">

		

		assets grid



</div>


<div style="color:white;" id="filters">
  <input type="checkbox" name="red" value=".red" id="red"><label for="red">red</label>
  <input type="checkbox" name="blue" value=".blue" id="blue"><label for="blue">blue</label>
  <input type="checkbox" name="green" value=".green" id="green"><label for="green">green</label>
  <input type="checkbox" name="yellow" value=".yellow" id="yellow"><label for="yellow">yellow</label>
</div>

<p><button id="shuffle">Shuffle</button></p>

<div id="containerAssets">



  <div class="itemAsset red">

      <div class="uploader" id="uploader" onclick="$('#filePhoto').click()">

          <img src=""/>
      </div>
      <input type="file" name="userprofile_picture"  id="filePhoto" />

  </div>



  <div class="itemAsset blue">
    


      <div class="uploader" id="uploader2" onclick="$('#filePhoto2').click()">

          <img src=""/>
      </div>
      <input type="file" name="userprofile_picture"  id="filePhoto2" />



  </div>







  <div class="itemAsset green"></div>
  <div class="itemAsset yellow"></div>
  <div class="itemAsset red"></div>
  <div class="itemAsset blue"></div>
  <div class="itemAsset green"></div>
  <div class="itemAsset yellow"></div>
  <div class="itemAsset itemAsset_h2 red"></div>
  <div class="itemAsset blue"></div>
  <div class="itemAsset green"></div>
  <div class="itemAsset yellow"></div>
  <div class="itemAsset red"></div>
  <div class="itemAsset blue"></div>
  <div class="itemAsset itemAsset_v2 green"></div>
  <div class="itemAsset yellow"></div>
  <div class="itemAsset red"></div>
  <div class="itemAsset blue"></div>
  <div class="itemAsset green"></div>
  <div class="itemAsset yellow"></div>
</div>



<script>
	$(function(){

  var $containerAssets = $('#containerAssets'),
      $checkboxes = $('#filters input');

  $containerAssets.isotope({
    itemAssetSelector: '.itemAsset',
    layoutMode: 'cellsByRow',
    cellsByRow: {
		  columnWidth: 150,
		  rowHeight: 150
	}
  });
  // get Isotope instance
  var isotope = $containerAssets.data('isotope');
  // add even classes to every other visible itemAsset, in current order
  function addEvenClasses() {
    isotope.$filteredAtoms.each( function( i, elem ) {
      $(elem)[ ( i % 2 ? 'addClass' : 'removeClass' ) ]('even')
    });
  }

  $checkboxes.change(function(){
    var filters = [];
    // get checked checkboxes values
    $checkboxes.filter(':checked').each(function(){
      filters.push( this.value );
    });
    // ['.red', '.blue'] -> '.red, .blue'
    filters = filters.join(', ');
    $containerAssets.isotope({ filter: filters });
    addEvenClasses();
  });

  $('#shuffle').click(function(){
    $containerAssets.isotope('shuffle');
    addEvenClasses();
  });

});




















var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

var imageLoader2 = document.getElementById('filePhoto2');
    imageLoader2.addEventListener('change', handleImage2, false);



function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        $('#uploader img').attr('src',event.target.result);
        //$('.uploader img').attr('src',event.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
    
}

function handleImage2(e) {
    var reader2 = new FileReader();
    reader2.onload = function (event) {
        $('#uploader2 img').attr('src',event.target.result);
        //$('.uploader img').attr('src',event.target.result);
    }
    reader2.readAsDataURL(e.target.files[0]);
    
}





var dropbox;
//dropbox = document.getElementById("uploader");
//dropbox2 = document.getElementsByClassName("uploader").id;


dropbox_ar = document.querySelectorAll('.uploader');
console.log(dropbox_ar);



for (var i = 0; i < dropbox_ar.length; i++) {
    dropbox = dropbox_ar[i];
    console.log(dropbox.id);
    dropbox.addEventListener("dragenter", dragenter, false);
    dropbox.addEventListener("dragover", dragover, false);
    dropbox.addEventListener("drop", drop, false);

}


function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}

function drop(e) {
  e.stopPropagation();
  e.preventDefault();
  //you can check e's properties
  //console.log(e);
  var dt = e.dataTransfer;
  var files = dt.files;
  
  //this code line fires your 'handleImage' function (imageLoader change event)
  imageLoader.files = files;
}


















</script>