

    <script src="js/dropzone/4.3.0/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dropzone/4.3.0/dropzone.css">


<form action="UploadImages"
                              class="dropzone"
                              id="DropZoneFiddle" enctype="multipart/form-data">
                              <span class="glyphicon glyphicon-download"></span>
					<br/>
                        </form>
<br>

<form action="UploadImages"
                              class="dropzone"
                              id="DropZoneFiddle2" enctype="multipart/form-data">
                              <span class="glyphicon glyphicon-download"></span>
					<br/>
                        </form>


<script>
// $(document).ready(function () {
//     Dropzone.autoDiscover = false;
//     $("#DropZoneFiddle").dropzone({url: "toto.php"});
//     $("#DropZoneFiddle2").dropzone({url: "toto.php"});
// });


$(document).ready(function () {
    Dropzone.autoDiscover = false;
    $(".dropzone").each(function () {
        new Dropzone($(this).get(0), {url: "toto.php"});
    });
  });



</script>
