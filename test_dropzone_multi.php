

    <script src="js/dropzone/5.0.0/dropzone_simple.js"></script>
    <link rel="stylesheet" typ="text/css" href="css/dropzone/5.0.0/dropzone_simple.css">

<style>
.cases_bin {
    width: 120px;
    height: 60px;
    border: 1px solid;
}
</style>

<div class="cases_bin">
<form action="test_dropzone_upload.php" class="dropzone" id="DropZoneCaseBin" enctype="multipart/form-data"></form>
</div>
<br>
<!-- <div class="cases_bin">
<form action="test_dropzone_upload.php" class="dropzone" id="DropZoneCaseBin" enctype="multipart/form-data"></form>
</div> -->
<br>
<hr>

<!-- <div action="test_dropzone_upload.php" class="dropzone" id="DropZoneFiddle"></div> -->
<br>

<!-- <div action="test_dropzone_upload.php?case=2" class="dropzone" id="DropZoneFiddle" enctype="multipart/form-data"></div>
<br>

<div action="test_dropzone_upload.php?case=3" class="dropzone" id="DropZoneFiddle" enctype="multipart/form-data"></div>
<br>
<br> -->

<!-- <div class="dropzone-add-document-error-message">
    <div class="dropzone-error-div"><img src="@Links.Content.images.Declined_png" alt=""/></div>
    <div class="dropzone-error-div dropzone-error-message"><p>Error! Files of this format are not accepted!</p></div>
    <button class="close-dropzone-error-message dropzone-error-div"><img src="~/Content/images/delete_icon.png" alt=""/>
    </button>
</div> -->

<script>
// $(document).ready(function () {
//     Dropzone.autoDiscover = false;
//     $("#DropZoneFiddle").dropzone({url: "toto.php"});
//     $("#DropZoneFiddle2").dropzone({url: "toto.php"});
// });

// var myDropzone = Dropzone.forElement("#mydropzone");

$(document).ready(function () {
    Dropzone.autoDiscover = false;
    //$(".dropzone").each(function () {





Dropzone.options.DropZoneCaseBin = {


maxFiles: 2,
init: function () {
this.on("maxfilesexceeded", function (data) {
var res = eval('(' + data.xhr.responseText + ')');
alert('toomuch');

});
this.on("addedfile", function (file) {

// Create the remove button
var removeButton = Dropzone.createElement("<button>Remove file</button>");

// Capture the Dropzone instance as closure.
var _this = this;

// Listen to the click event
removeButton.addEventListener("click", function (e) {
// Make sure the button click doesn't submit the form:
e.preventDefault();
e.stopPropagation();
// Remove the file preview.
_this.removeFile(file);
// If you want to the delete the file on the server as well,
// you can do the AJAX request here.
});

// Add the button to the file preview element.
file.previewElement.appendChild(removeButton);
});
}



});



</script>
