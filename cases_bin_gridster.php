
    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css"> -->
    <link rel="stylesheet" type="text/css" href="css/jquery.gridster.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->

    <script src="js/jquery1.7.1.min.js"></script>
    <script src="js/jquery.gridster.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="js/dropzone/4.3.0/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dropzone/4.3.0/dropzone.css">


<style>
/*! gridster.js - v0.6.10 - 2015-05-31
* https://dsmorse.github.io/gridster.js/
* Copyright (c) 2015 ducksboard; Licensed MIT */
html, body {
  margin: 0;
  padding-left: 10px;
  padding-right: 10px;
  overflow: none;
}
h1,
h2,
h3,
p {
  margin: 10px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
.demo {
  margin: 3em 0;
  padding: 7.5em 0 5.5em;
  /*background: #26941f;*/
}
.demo:hover .gridster {
  margin: 0 auto;
  opacity: .8;
  -webkit-transition: opacity .6s;
  -moz-transition: opacity .6s;
  -o-transition: opacity .6s;
  -ms-transition: opacity .6s;
  transition: opacity .6s;
}
.content {
  color: white;
}
.gridster .gs-w {
  background: #61A9CF;
  cursor: pointer;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}
.gridster .player {
  -webkit-box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
  background: #BBB;
}
.gridster .gs-w.try {
  /*background-image: url(../img/sprite.png);*/
  background-repeat: no-repeat;
  background-position: 37px -169px;
}
.gridster .preview-holder {
  border: none !important;
  border-radius: 0 !important;
  background: red !important;
}
.gridster ul {
  /*background-color: #EFEFEF;*/
}
.gridster li {
  font-size: 1em;
  font-weight: bold;
  text-align: center;
  line-height: 100%;
}
ul {
  list-style-type: none;
}
li {
  list-style: none;
  font-weight: bold;
}
.gridster-box {
  position: relative;
  width: 100%;
  height: 100%;
}
.controls {
  margin-bottom: 20px;
}
/*# sourceMappingURL=demos/assets/css/demo.css.map */


.bg0 {
    width: 100%;
    height: 80%;
    background-image: url(img/case0.jpg);
    background-position:50% 50%;
    background-size: cover;

    /*background-image: url('img/case0.jpg');
    background-position:50% 50%;
        background-size: 80px 60px;
    background-repeat: no-repeat;*/

}


.bg1 {

    background-image: url(img/case0.jpg);
    background-position:50% 50%;

    /*background-image: url('img/case0.jpg');
    background-position:50% 50%;
        background-size: 80px 60px;
    background-repeat: no-repeat;*/

}

</style>













<style>
#holder { border: 1px dashed #ccc; width: 50px; min-height: 50px; margin: 0px auto;z-index: 9001;}
#holder.hover { border: 10px dashed #0c0; }
#holder img { display: block; margin: 10px auto; width:50px;height:50px;}
#holder p { margin: 10px; font-size: 14px; }
progress { width: 100%; }
progress:after { content: '%'; }
.fail { background: #c00; padding: 2px; color: #fff; }
.hidden { display: none !important;}
</style>
<!--

https://html5demos.com/dnd-upload/

-->




















<div class="gridster">
    <ul>
        <li data-row="1" data-col="1" data-sizex="2" data-sizey="2">case 0<div  class="bg0"></div></li>



        <li data-row="1" data-col="3" data-sizex="1" data-sizey="2" class="bg1">case 1
<article>
  <div id="holder" class="holder">
  </div>
  <p id="upload_old" class="hidden"><input type="file"></p>
  <p id="filereader">File API & FileReader API not supported</p>
  <p id="formdata">XHR2's FormData is not supported</p>
  <p id="progress">XHR2's upload progress isn't supported</p>
  <!-- <p><progress id="uploadprogress" max="100" value="0">0</progress></p> -->
</article>
        </li>




        <li data-row="1" data-col="4" data-sizex="1" data-sizey="1" >case 2

  <div id="holder" ondragover="alertx('event')" ondrop="alertx('event')" class="holder">
  </div>
  <p id="upload" class="hidden"><input type="file"></p>

  <!-- <p><progress id="uploadprogress" max="100" value="0">0</progress></p> -->
</article>


        </li>






        <li data-row="3" data-col="2" data-sizex="3" data-sizey="1">

<form action="UploadImages"
                              class="dropzone"
                              id="DropZoneFiddle1" enctype="multipart/form-data">
                              <!-- <span class="glyphicon glyphicon-download" style="background-color:yellow;height:10px;" ></span>
					<br/> -->
                    case 3
                        </form>



        </li>


        <li data-row="4" data-col="1" data-sizex="1" data-sizey="1">

<form action="UploadImages"
                              class="dropzone"
                              id="DropZoneFiddle2" enctype="multipart/form-data">
                              <!-- <span class="glyphicon glyphicon-download"></span>
					<br/> -->
case 4
                        </form>


        </li>




        <li data-row="3" data-col="1" data-sizex="1" data-sizey="1">case 5</li>
        <li data-row="4" data-col="2" data-sizex="1" data-sizey="1">case 6</li>
        <li data-row="5" data-col="2" data-sizex="1" data-sizey="1">case 7</li>
        <li data-row="4" data-col="4" data-sizex="1" data-sizey="1">case 8</li>
        <li data-row="1" data-col="5" data-sizex="1" data-sizey="3">case 9</li>
    </ul>
</div>

<script type="text/javascript">
    var gridster;

    $(function () {

        var log = document.getElementById('log');

        gridster = $(".gridster ul").gridster({
            widget_base_dimensions: [100, 55],
            widget_margins: [5, 5],
            autogrow_cols: true,
            resize: {
                enabled: true
            }
        }).data('gridster');


    });
</script>



<script>

function myFunction(event){
    event.preventDefault();
    // alert(event);
    // alert($(this).attr('ids'));

}

// $(".dropzone").each(function () {
//$(".holder").each(function () {

var holder = document.getElementsByClassName('holder')[1],
// var holder = document.getElementById('holder'),
    test = 'toto',
    tests = {
      filereader: typeof FileReader != 'undefined',
      dnd: 'draggable' in document.createElement('span'),
      formdata: !!window.FormData,
      progress: "upload" in new XMLHttpRequest
    },
    support = {
      filereader: document.getElementById('filereader'),
      formdata: document.getElementById('formdata'),
      progress: document.getElementById('progress')
    },
    acceptedTypes = {
      'image/png': true,
      'image/jpeg': true,
      'image/gif': true
    },
    progress = document.getElementById('uploadprogress'),
    fileupload = document.getElementById('upload');

"filereader formdata progress".split(' ').forEach(function (api) {
  if (tests[api] === false) {
    support[api].className = 'fail';
  } else {
    // FFS. I could have done el.hidden = true, but IE doesn't support
    // hidden, so I tried to create a polyfill that would extend the
    // Element.prototype, but then IE10 doesn't even give me access
    // to the Element object. Brilliant.
    support[api].className = 'hidden';
  }
});

//});


function previewfile(file) {
  if (tests.filereader === true && acceptedTypes[file.type] === true) {
    var reader = new FileReader();
    reader.onload = function (event) {
      var image = new Image();
      image.src = event.target.result;
      image.width = 250; // a fake resize
      holder.appendChild(image);
    };

    reader.readAsDataURL(file);
  }  else {
    holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size/1024|0) + 'K' : '');
    console.log(file);
  }
}

function readfiles(files) {
    debugger;
    var formData = tests.formdata ? new FormData() : null;
    for (var i = 0; i < files.length; i++) {
      if (tests.formdata) formData.append('file', files[i]);
      previewfile(files[i]);
    }

    // now post a new XHR request
    if (tests.formdata) {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/devnull.php');
      xhr.onload = function() {
        progress.value = progress.innerHTML = 100;
      };

      if (tests.progress) {
        xhr.upload.onprogress = function (event) {
          if (event.lengthComputable) {
            var complete = (event.loaded / event.total * 100 | 0);
            progress.value = progress.innerHTML = complete;
          }
        }
      }

      xhr.send(formData);
    }
}

if (tests.dnd) {
  holder.ondragover = function () { this.className = 'hover'; return false; };
  holder.ondragend = function () { this.className = ''; return false; };
  holder.ondrop = function (e) {
    this.className = '';
    e.preventDefault();
    readfiles(e.dataTransfer.files);
  }
} else {
  fileupload.className = 'hidden';
  fileupload.querySelector('input').onchange = function () {
    readfiles(this.files);
  };
}

</script>



</body>
</html>
