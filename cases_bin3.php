<!-- <link rel="stylesheet" type="text/css" href="styles_switcherView.css"> -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->

<!-- <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->

<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/script_switcherView.js"></script>


<style>

:root {
  --width-case-bin  : 80px;
  --height-case-bin : 80px;



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
    border: 1px solid transparent;
    /*margin: 10px 0;
    text-align: center;
    font-weight: bold;
    padding-top: 80px;*/
}

[droppable].over {
    /*border-color: blue;*/
    border: 1px solid green;
}

</style>



<style type="text/css">
:root {


    --height-submenu: 20px;

    --seq-color-dark-black:#171714;
    --seq-color-grey1:#222;
    --seq-color-grey2:#333;
    --seq-color-grey3:#444;
    --seq-color-grey4:#575757;
    --seq-color-grey5:#858484;
    --seq-color-grey6:#B7B6B6;

    --seq-color-blue1:#0D3246;
    --seq-color-blue2:#061120;

  /*--seq-main-bg-color: var(--color-dark-black);*/
}

html, body{
        margin: 0px;
        padding: 0px;
		/*overflow: hidden;*/
		border: 0 none !important;
    }



* { margin: 0; padding: 0; }



img { border:0; }

p { font-size: 0.8em; line-height: 1.3em; margin-bottom: 0px; }

h1 { font-weight: normal; font-size: 0.8em; line-height: 2.0em; color: #545454; letter-spacing: -0.04em; }

/** containers **/
#wrap { width: 100%;
    margin: 0px;
    margin-left: 5px;
    background: var(--seq-color-blue1);
    /*border-radius: 7px; */
    margin-top: 0px; }
#wrap header { border-bottom: 1px solid #b6bdbe; margin: 0px; margin-bottom: 0px; padding-top: 0px; position: relative;  }

/*#wrap footer { border-top: 1px solid #b6bdbe; padding-bottom: 40px; margin: 15px 22px;  }*/

#wrap header .list-style-buttons { position: absolute; right: 0; }

/** list view **/
ul.list { list-style: none; width: 100%; }
ul.list li { display: block;
    background: var(--seq-color-blue2);
    padding: 10px 15px;
    width: 100%;
}

ul.list li.alt {
    background: var(--seq-color-blue1);
}

ul.list li section.left { display: block; float: left;
    width: 100vw;
    position: relative; padding-left: 20px; }
ul.list li section.right { display: block; float: right; margin-right: 10px;
    width: 100vw;
    text-align: right; }

ul.list li section.left img.thumb { float: left; margin-right: 10px; }
ul.list li section.left img.featured-banner { position: absolute; left: -18px; top: 35px; }

ul.list li section.left h3 {
    font-family: Arial, sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    color: var(--seq-color-grey4);
    font-size: 0.5em;
    line-height: 1.6em;
}
ul.list li section.left span.meta { color: #93989b; font-weight: normal; font-size: 0.8em; }


ul.list li section.right span.price { font-weight: bold; display: block; margin-bottom: 15px; color: red; font-size: 0.6em; text-align: left; }

ul.list li section.right a.firstbtn { margin-right: 7px; }

/** grid view **/
ul.grid { list-style: none; margin: 0 auto; padding-left: 25px; }
ul.grid li { position: relative; display: block; float: left; width: 220px; height: 200px;
    /*border-right: 1px solid #b6bdbe; */
    padding: 5px 22px; margin-bottom: 20px; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; }
ul.grid li.third { border: 0; }

ul.grid li section.left { position: relative; }
ul.grid li section.right { /* nothing */ }

ul.grid li section.left img.featured-banner { position: absolute; top: 0; }

ul.grid li section.left h3 { font-family: Arial, sans-serif; font-weight: bold; text-transform: uppercase;
color: var(--seq-color-grey1);
font-size: 0.8em; line-height: 1.5em; }
ul.grid li section.left span.meta { display: block; color: #93989b; font-weight: normal; font-size: 0.8em; margin-bottom: 7px; }

ul.grid li section.right span.price { font-weight: bold; display: block; margin-bottom: 5px; color: red; font-size: 0.6em; }


ul.grid li section.right span.darkview {
opacity: 0;
margin: 0;
/*position: relative;*/
top: 0;
left: 0;
width: 200px;
height: 200px;
margin: 0 15px;
/*border-radius: 6px;*/
background: rgba(40, 45, 55, 0.75);
overflow: hidden;
/*text-align: center;*/
padding-top: 0px;
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
transition: opacity 0.2s linear 0s;
-webkit-transition: opacity 0.2s linear 0s;
-moz-transition: opacity 0.25s linear 0s;
-o-transition: opacity 0.25s linear 0s;
}
ul.grid li:hover section.right span.darkview { opacity: 1; }

ul.grid li section.right span.darkview a.firstbtn { display: block; margin-bottom: 10px; }

/** clearfix **/
.clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.clearfix { display: inline-block; }

html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%; }


span.n_assets { font-weight: bold; display: block; margin-bottom: 5px; color: red; font-size: 0.6em; }


button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}



.fa-list {
  color: white;
}
.fa-th {
  color: white;
}
.fa-calendar {
  color: white;
}
.fa-sort-alpha-asc {
  color: white;
}

#search_bin_icon {
    position: relative;
    z-index: 1;
    left: -25px;
    top: 1px;
    color: #7B7B7B;
    cursor:pointer;
    width: 0;
}

#search_bin_input {
    width: 20%;
	background: none;
	border: 0 none;
	color: white;
    border-right: solid 2px var(--seq-color-grey2);
}

#filters_bin_select {
    width: 35%;
	background: none;
	border: 0 none;
	color: white;
    border-right: solid 2px var(--seq-color-grey2);
}

#submenu_sequences {
    position: fixed;
    height:var(--height-submenu);
    z-index:9000;
    background-color: var(--seq-color-blue1);
    border-bottom: solid 2px var(--seq-color-grey2);
    width:100%;
    right:1px;
    /*margin-right: 25px;*/
}

#div_products {
    position: absolute;
    top:var(--height-submenu);
    /*top: var(--top-bottom-submenu);*/
}
</style>


<div id="wrap" width="100%">

    <div id="submenu_sequences" align="right">
		<span class="list-style-buttons">

            <input id="search_bin_input" type="text" placeholder="Search" />

            <select id="filters_bin_select">
                <option value="0" selected default>Filters all</option>
                <option value=1>notes</option>
                <option value=2>maritimes</option>
                <option value=3>nuit</option>
                <option value=4>jour</option>
            </select>

			<a href="#" id="listview" class="switcher active"><button class="fa fa-list"></button></a>
			<a href="#" id="gridview" class="switcher"><button class="fa fa-th"></button></a>
			<a href="#" id="dateview" class=""><button class="fa fa-calendar"></button></a>
			<a href="#" id="alphaview" class=""><button class="fa fa-sort-alpha-asc"></button></a>

		</span>
    </div>

    <div id="div_products" width="100%">
    	<ul id="products" class="list clearfix" width="100%">
    		<!-- row 1 -->
    		<li class="clearfix" width="100%">
    			<section class="left" width="100%">


<div id="div_case_001" class="div_case" droppable="true">
    <div class="div_input">
        <input type='file' class="input_case" name="case_0001_bg" onchange="readURL(this);" />
    </div>
    <div class="div_img_case">
        <img id="case_0001_bg" src="images/products/list-default-thumb.png" alt="default thumb" class="thumb" />
        <span style="position:relative;z-index:101;background-color:black;color:white;font-size:0.8em;top:90px;left:12px;">CASE 0001</span>
    </div>

</div>


    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 2 -->
    		<li class="clearfix alt">
    			<section class="left">
<div id="div_case_001" class="div_case" droppable="true">
    <div class="div_input">
        <input type='file' class="input_case" name="case_0002_bg" onchange="readURL(this);" />
    </div>
    <div class="div_img_case">
        <img id="case_0002_bg" src="images/products/list-default-thumb.png" alt="default thumb" class="thumb" />
        <span style="position:relative;z-index:101;">CASE 0002</span>
    </div>

</div>
    				<h3>CASE 0002</h3>
    				<span class="meta">Seq ID: 40</span>
                    <span class="n_assets">n cases : 20</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 3 -->
    		<li class="clearfix third">
    			<section class="left">
<div id="div_case_001" class="div_case" droppable="true">
    <div class="div_input">
        <input type='file' class="input_case" name="case_0003_bg" onchange="readURL(this);" />
    </div>
    <div class="div_img_case">
        <img id="case_0003_bg" src="images/products/list-default-thumb.png" alt="default thumb" class="thumb" />

    </div>

</div>
    				<h3>CASE 0003</h3>
    				<span class="meta">Seq ID: 44</span>

                    <span class="n_assets">n cases : 25</span>

    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 4 -->
    		<li class="clearfix alt">
    			<section class="left">
    				<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    				<h3>Sequence Name</h3>
    				<span class="meta">Seq ID: 16</span>
                    <br>
                    <span class="n_assets">n cases : 7</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 5 -->
    		<li class="clearfix">
    			<section class="left">
    				<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    				<h3>Sequence Name</h3>
    				<span class="meta">Seq ID: 77</span>
                    <br>
                    <span class="n_assets">n cases : 9</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 6 -->
    		<li class="clearfix alt third">
    			<section class="left">
    				<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    				<h3>Sequence Name</h3>
    				<span class="meta">Seq ID: 428</span>
                    <br>
                    <span class="n_assets">n cases : 23</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 7 -->
    		<li class="clearfix">
    			<section class="left">
    				<!-- <img src="images/new-product-banner.png" alt="new product" class="featured-banner"> -->
    				<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    				<h3>Sequence Name</h3>
    				<span class="meta">Seq ID: 29</span>
                    <br>
                    <span class="n_assets">n cases : 8</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 8 -->
    		<li class="clearfix alt">
    			<section class="left">
    				<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    				<h3>Sequence Name</h3>
    				<span class="meta">Seq ID: 430</span>
                    <br>
                    <span class="n_assets">n cases : 6</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>

    		<!-- row 9 -->
    		<li class="clearfix third">
    			<section class="left">
    				<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    				<h3>Sequence Name</h3>
    				<span class="meta">Seq ID: 543</span>
                    <br>
                    <span class="n_assets">n cases : 10</span>
    			</section>

    			<!-- <section class="left">
    				<span class="darkview">
    				<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Edit"></a>
    				</span>
    			</section> -->
    		</li>
    	</ul>
    </div>
</div>


<script>
$('#search_bin_icon').click(function() {
    alert('Searching for '+$('#search_bin_input').val());
});

</script>


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

















// upload JPEG files
function UploadFile(file,name,size,type,server) {



            //initiate request
            xhr = new XMLHttpRequest();
            xhr.open('post',server,true);

            //set headers
            xhr.setRequestHeader('Content-Type',"multipart/form-data");
            //xhr.setRequestHeader('X-File-Name',file.fileName);
            xhr.setRequestHeader('X-File-Name',name);
            xhr.setRequestHeader('X-File-Size',size);
            xhr.setRequestHeader('X-File-Type',type);

            //send the file
            xhr.send(file);

  // xhr.upload.onprogress = function(e) {
  //   if (e.lengthComputable) {
  //     var percentComplete = (e.loaded / e.total) * 100;
  //     console.log(percentComplete + '% uploaded');
  //   }
  // };
  // xhr.onload = function() {
  //   if (this.status == 200) {
  //     var resp = JSON.parse(this.response);
  //     console.log('Server got:', resp);
  //     var image = document.createElement('img');
  //     image.src = resp.dataUrl;
  //     document.body.appendChild(image);
  //   };
  // };
  // xhr.send(fd);

}

function readURL(input) {

            // $(this).addClass('div_case_hover');

            if (input.files && input.files[0]) {
                var file    = input.files[0];
                var name    = input.name;
                var size    = file.size;
                var type    = file.type;
                var server  = 'upload_case_bg.php';
                var reader  = new FileReader();
                reader.onload = function (e) {

  e.stopPropagation(); // Stops some browsers from redirecting.
  e.preventDefault();

                    preview = "#"+input.name;
                    $(preview).attr('src', e.target.result);
                    UploadFile(file,name,size,type,server);
                };
                reader.readAsDataURL(file);
            }
        }

</script>
