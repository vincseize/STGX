<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<!-- contextMenu sample1 -->
<!-- <script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="http://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script> -->
<!-- fin sample1 -->
<style>

:root {
  --width-case-bin  : 580px;
  --height-case-bin : 200px;

  --width-case-bin-pb  : var(--width-case-bin);
  --height-case-bin-pb : 5px;
}

.div_case{
    /*display: inline-block;*/
  /*background-color: transparent;*/
  background: grey;
  border:1px solid grey;
}
.div_img_case{
    /*display: inline-block;*/
  background-color: transparent;
}


.div_input{
  z-index:101; /* // IMPORTANT*/
  position: relative;
}

/*.dragover{
    border:4px dotted blue;
}*/


.div_img_case img, .div_case, .div_img_case{
  width:var(--width-case-bin);
  height:var(--height-case-bin);
  max-width:var(--width-case-bin);
  max-height:var(--height-case-bin);
  padding:0;
  margin: 0;
}
.div_img_case img {
  z-index:100;
  position: absolute;
}

.input_case{
  position: absolute;
  padding:0;
  margin: 0;
  border: none;
  background-color: transparent;
  width:var(--width-case-bin);
  height:var(--height-case-bin);
  max-width:var(--width-case-bin);
  max-height:var(--height-case-bin);
  padding:0;
  margin: 0;
  opacity: 0;
}


[droppable] {
    width: var(--width-case-bin);
    height: var(--height-case-bin);
    border: 4px solid transparent;
    /*margin: 10px 0;
    text-align: center;
    font-weight: bold;
    padding-top: 80px;*/
}

[droppable].over {
    /*border-color: blue;*/
    border: 4px dotted green;
}

</style>




<style>
  .progressBar {
    margin: 0;
    padding: px;
    border: 1px solid #000;
    font-size: 0.6em;
    clear: both;
    opacity: 1.0;
    -moz-transition: opacity 1s linear;
    -o-transition: opacity 1s linear;
    -webkit-transition: opacity 1s linear;
    z-index: 9000;
    position:relative;
    /*top: calc(var(--height-case-bin)-5);*/
    top: 0;
    width:var(--width-case-bin-pb);
    height:var(--height-case-bin-pb);
    display: none;
  }
  .loading {
    opacity: 0.1;
    height:var(--height-case-bin-pb);
  }
  .percent {
    background-color: #99ccff;
    height: auto;
    width: 0;
    height:var(--height-case-bin-pb);
    text-shadow: #fff 1px 1px 1px;

  }
</style>

<!--
contextMenu sample2
https://codepen.io/maheshambure21/pen/pbYxGK?page=1&
-->
<!--
contextMenu sample1
https://codepen.io/nomack/pen/hFbEm?page=1&
-->
<style>
/*.with-ctxmenu {
  width: 200px;
  margin: 80px auto;
  padding: 10px;
  text-align: center;
  border: 2px solid #333;
  border-radius: 10px;
  background: #789;
  font-size: 1.2em;
  font-weight: bold;
}

.hidden {
  display: none;
}

.ctxmenu {
  position: absolute;
  top: 0;
  left: 0;
  color: #333;
}
  .ctxmenu-menu {
    list-style: none;
    padding: 1px;
    margin: 0;
    border: 1px solid #888;
    background: #fefefe;
    border-radius: 2px;
    box-shadow: 2px 2px 3px #333;
  }
    .ctxmenu-menu li {
      position: relative;
    }
      .ctxmenu-menu a,
      .ctxmenu-menu a:visited {
        display: block;
        white-space: nowrap;
        padding: 3px 20px 3px 5px;
        border: 1px solid transparent;
        background: transparent;
        border-radius: 3px;
        color: #333;
        text-decoration: none;
      }
      .ctxmenu-menu a:hover {
        border-color: #0065a5;
        background: #7daac7;
      }
  .ctxmenu-menu .ctxmenu-menu {
    position: absolute;
    top: 0;
    left: 100%;
    display: none;
  }
    .ctxmenu-menu li:hover > .ctxmenu-menu {
      display: block;
    }*/

</style>



<!-- <div class="with-ctxmenu">
  Right click me !
</div>

<div class="with-ctxmenu">
  Right click me !
</div>

<div class="hidden">
  <div id="ctxmenu-tpl">
    <ul class="ctxmenu-menu">
      <li>
        <a href="">Link with menu</a>

        <ul class="ctxmenu-menu">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link again</a></li>
          <li><a href="#">And again</a></li>
          <li><a href="#">The last one</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Link with menu</a>

        <ul class="ctxmenu-menu">
          <li><a href="#">First link</a></li>
          <li><a href="#">Second link</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Link without menu</a>
      </li>

      <li>
        <a href="">Link without menu</a>
      </li>
    </ul>
  </div>
</div> -->
<!-- fin sample1 -->


<!-- <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script> -->
    <!-- <script src="js/contextMenu-bin.min.js"></script>
    <link rel="stylesheet" href="css/contextMenu-bin.min.css">
    <script>
      $(function() {
        $('#mythingy').contextPopup({
          title: 'My Popup Menu',
          items: [
            {label:'Some Item',     icon:'icons/shopping-basket.png',             action:function() { alert('clicked 1') } },
            {label:'Another Thing', icon:'icons/receipt-text.png',                action:function() { alert('clicked 2') } },
            {label:'Blah Blah',     icon:'icons/book-open-list.png',              action:function() { alert('clicked 3') } },
            null, // divider
            {label:'Sheep',         icon:'icons/application-monitor.png',         action:function() { alert('clicked 4') } },
            {label:'Cheese',        icon:'icons/bin-metal.png',                   action:function() { alert('clicked 5') } },
            {label:'Bacon',         icon:'icons/magnifier-zoom-actual-equal.png', action:function() { alert('clicked 6') } },
            null, // divider
            {label:'Onwards',       icon:'icons/application-table.png',           action:function() { alert('clicked 7') } },
            {label:'Flutters',      icon:'icons/cassette.png',                    action:function() { alert('clicked 8') } }
          ]
        });
      });
    </script> -->



    <!-- <div id="mythingy" class="" style="border:2px solid #666666;">
      right click in this box to show custom context menu
    </div>
<br><br>
    <div id="mythingy2" class="" style="border:2px solid #666666;">
      right click in this box to show custom context menu
    </div>
<br><br> -->











<!-- view-source:https://swisnl.github.io/jQuery-contextMenu/demo.html -->

    <!-- <link rel="stylesheet" href="https://swisnl.github.io/jQuery-contextMenu/css/screen.css" type="text/css"/>
    <link rel="stylesheet" href="https://swisnl.github.io/jQuery-contextMenu/css/theme.css" type="text/css"/>
    <link rel="stylesheet" href="https://swisnl.github.io/jQuery-contextMenu/css/theme-fixes.css" type="text/css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css">
    <link href="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
     -->
    <!-- <link href="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.css" rel="stylesheet" type="text/css" /> -->
    <link href="css/contextMenuBinCases.css" rel="stylesheet" type="text/css" />

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- <script src="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.js" type="text/javascript"></script> -->

    <script src="js/contextMenuBinCases.js" type="text/javascript"></script>

    <!-- <script src="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.ui.position.min.js" type="text/javascript"></script> -->
    <script src="js/jquery.ui.position.min.js" type="text/javascript"></script>


    <!-- <script src="https://swisnl.github.io/jQuery-contextMenu/js/main.js" type="text/javascript"></script> -->
<style>
/*.contextMenuCase{
    background-color: red;
    z-index: 9999;
}*/
</style>
<script>
    $(function() {
        $.contextMenu({
            selector: '.contextMenuCase',
            callback: function(key, options) {
                var m = "clicked: " + key;
                window.console && console.log(m) || alert(m);
            },
            items: {
                "edit": {name: "Edit", icon: "edit"},
                "cut": {name: "Cut", icon: "cut"},
               copy: {name: "Copy", icon: "copy"},
                "paste": {name: "Paste", icon: "paste"},
                "delete": {name: "Delete", icon: "delete"},
                "sep1": "---------",
                "quit": {name: "Quit", icon: function(){
                    return 'context-menu-icon context-menu-icon-quit';
                }}
            }
        });

        $('.contextMenuCase').on('click', function(e){
            console.log('clicked', this);
        })
    });

</script>

<!-- <span class="contextMenuCase btn btn-neutral">right click me</span>
<br><br>
<span class="contextMenuCase">right click me</span>




<br><br>


 -->


















<div id="div_case_0001" class="div_case contextMenuCase" droppable="true">
    <div class="div_input">
        <input type='file' class="input_case" name="case_0001_bg" onchange="uploadIMG(this);" />
    </div>
    <div class="div_img_case">
        <!-- grey img -->
        <img id="case_0001_bg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
        <div id="case_0001_progressBar" class="progressBar"><div id="case_0001_progressPercent" class="percent">0%</div></div>
    </div>

</div>

<br><br>

<div id="div_case_0002" class="div_case contextMenuCase" droppable="true">
    <div class="div_input">
        <input type='file'  class="input_case" name="case_0002_bg" onchange="uploadIMG(this);"/>
    </div>
    <div class="div_img_case">
        <img id="case_0002_bg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" />
        <div id="case_0002_progressBar" class="progressBar"><div id="case_0002_progressPercent" class="percent">0%</div></div>
    </div>
</div>




<script>




$('[droppable="true"]').on('dragenter', function (event) {
        if($(this).hasClass("div_case")){
            // IE needs this event.
            $(this).addClass('over');
            //event.preventDefault();
        }
        event.defaultPrevented;
        return false;
    });

    $('[droppable="true"]').on('dragover', function (event) {
        if($(this).hasClass("div_case")){
            $(this).addClass('over');
            //event.preventDefault();
        }
        event.defaultPrevented;
        return false;
    });

    $('[droppable="true"]').on('dragleave', function (event) {
        if($(this).hasClass("div_case")){
            $(this).removeClass('over');
        }
    });

    $('[droppable="true"]').on('drop', function (event) {
        if($(this).hasClass("div_case")){
            $(this).removeClass('over');
        }
    });









// var progress = document.querySelector('.percent');
// var progressBar = document.querySelector('.progressBar');


  //
  // function errorHandler(evt) {
  //   switch(evt.target.error.code) {
  //     case evt.target.error.NOT_FOUND_ERR:
  //       alert('File Not Found!');
  //       break;
  //     case evt.target.error.NOT_READABLE_ERR:
  //       alert('File is not readable');
  //       break;
  //     case evt.target.error.ABORT_ERR:
  //       break; // noop
  //     default:
  //       alert('An error occurred reading this file.');
  //   };
  // }




function progressHandler(event, progressPercent,progressBar,name) {
    var percentLoaded = Math.round((event.loaded / event.total) * 100);

    var caseName =  name.split("_")[0]+"_"+name.split("_")[1];

console.log(progressPercent);
console.log(progressBar);
console.log(name);
console.log('-------CN----------');
console.log(caseName);
console.log('-----------------');


var progressPercent = document.querySelector('.percent');
var progressBar = document.querySelector('.progressBar');

console.log('-----------------');
console.log(progressPercent);
console.log(progressBar);
console.log('-----------------');
    // var progressPercent = document.querySelector('div.case_0002_progressPercent');
    // var progressBar = document.querySelector('div.case_0002_progressBar');

//     var progressPercent = document.getElementById('case_0002_progressPercent');
//     var progressBar = document.getElementById('case_0002_progressBar');
//
//
//
// console.log(progressPercent);
// console.log(progressBar);

console.log(caseName+"_progressPercent");
      if (percentLoaded <= 100) {
        // progressPercent.style.width = percentLoaded + '%';
        // progressPercent.textContent = percentLoaded + '%';

document.getElementById(caseName+"_progressBar").style.display='block';
document.getElementById(caseName+"_progressPercent").style.width=percentLoaded + '%';
document.getElementById(caseName+"_progressPercent").textContent=percentLoaded + '%';
      }

}

// upload JPEG files
function UploadFile(file,name,size,type,server,progressPercent,progressBar,url_upload) {
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

function uploadIMG(input) {

            // $(this).addClass('div_case_hover');

            if (input.files && input.files[0]) {
                var file        = input.files[0];
                var name        = input.name;
                var size        = file.size;
                var type        = file.type;

                var url_upload  = 'tmp/cases/';
                var server      = 'upload_case_bg.php?url_upload='+url_upload;

                var progressPercent = document.querySelector('.percent');
                var progressBar = document.querySelector('.progressBar');

                if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {

                var reader  = new FileReader();

                        reader.onload = function (e) {


                            console.log(size + "is my file's size");

                            preview = "#"+input.name;
                            $(preview).attr('src', e.target.result);
                            UploadFile(file,name,size,type,server,progressPercent,progressBar,url_upload);

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
                    else{alert('only jpg|jpeg|png|gif')}

            }
        }

</script>


<script>
//
// var ctxmenu = {
//   container: null
//
//   // Initialize and add the div#ctxmenu container in the body
//   ,init: function() {
//     // hide the old ctxmenu
//     this.hide();
//
//     this.container = document.createElement('div');
//     this.container.setAttribute('id', 'ctxmenu');
//     // autohide
//     this.container.className = 'ctxmenu hidden';
//
//     document.body.appendChild(this.container);
//   }
//
//   // Setting the configuration of the ctxmenu
//   ,set: function() {
//     this.init();
//
//     // override the default settings
//     var settings = _.extend({
//       content: null
//       ,posX: 0
//       ,posY: 0
//     }, arguments[0] || {});
//
//     // adding the content
//     this.container.innerHTML = settings.content;
//
//     // positionning
//     this.container.style.left = settings.posX + 'px';
//     this.container.style.top = settings.posY + 'px';
//   }
//
//   // Showing the ctxmenu
//   ,show: function() {
//     if(undefined !== arguments[0]) {
//        this.set(arguments[0]);
//     }
//
//     this.container.className = 'ctxmenu';
//   }
//
//   // Hide the ctxmenu
//   ,hide: function() {
//     if(this.container) {
//       this.container.remove();
//       this.container = null;
//     }
//   }
// };
//
// [].forEach.call(document.querySelectorAll('.with-ctxmenu'), function(el) {
//   el.addEventListener('contextmenu', function(e) {
//     // prevent the right click default action
//     e.preventDefault();
//     // prevent the auto kill
//     e.stopPropagation();
//
//     ctxmenu.show({
//       content: document.getElementById('ctxmenu-tpl').innerHTML
//       ,posX: e.clientX
//       ,posY: e.clientY
//     });
//   });
// });
//
// // hide the contextmenu on left/right click
// document.addEventListener('click', function() { ctxmenu.hide(); }, false);
// document.addEventListener('contextmenu', function() { ctxmenu.hide(); }, false);

</script>
