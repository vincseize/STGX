<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flexbox Card Grid</title>

<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<link rel="stylesheet" href="../css/jquery-ui.css">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>





<style>
*,
*::before,
*::after {
  box-sizing: border-box;
}
html {
  background-color: #f0f0f0;
}
body {
  color: #999999;
  font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-font-feature-settings: "liga" on;
}
img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}
/*.btn {
  background-color: white;
  border: 1px solid #cccccc;
  color: #696969;
  padding: 0.5rem;
  text-transform: lowercase;
}*/

.btn-editCard{
    /*width:25%;
    max-width:25%;*/
    background: none;
    border: 0 none;
    opacity:0.4;
}

.cards {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}
.LI-cards__item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 1rem;
  max-width:25%;
  /*background-color: orange;*/
}


.LI-cards__item--row {
  padding: 1rem;
  /*width: 100%;*/
display: -webkit-flex;
display:flex;

  width:100%;
  background-color:orange;

}

.column {
  flex-basis: 100%;
  padding:0;
}

@media (min-width: 40rem) {
  .LI-cards__item {
    width: 50%;
  }
}
@media (min-width: 56rem) {
  .LI-cards__item {
    /*width: 33.3333%;*/
	width: 25%;
  }
}
.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  overflow: hidden;

}
.card:hover .card__image {
  -webkit-filter: contrast(100%);
          filter: contrast(100%);
}
.card__content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding: 1rem;
  /*background-color: yellow;*/

    height:100px;
    /*max-height:100px;*/

  display: none;
}

/*.card__content li {background-color: orange;}
.card__content li:nth-child(2n) {background-color: yellow;}*/

/*#cards li {background-color: orange;}
#cards li:nth-child(2n) {background-color: yellow;}*/

.card__content--row {
    -webkit-flex: 1;
    flex:1;
    height:100%;

}

.card__row {
    display: -webkit-flex;
    display:flex;
    border-bottom: #ccc solid 1px;
}
.div__cardImage--row {
    width:25vh;

}
.card__image_row {
  /*width:25%;
  height:25%;*/
  background-color:black;
}

.card__image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  -webkit-filter: contrast(70%);
          filter: contrast(70%);
  overflow: hidden;
  position: relative;
  -webkit-transition: -webkit-filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91);
  transition: -webkit-filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91);
  transition: filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91);
  transition: filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91), -webkit-filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91);

}
.card__image::before {
  content: "";
  display: block;
  padding-top: 56.25%;
}
@media (min-width: 40rem) {
  .card__image::before {
    padding-top: 66.6%;
  }
}
/*.card__image--flowers {
    background-image: url(https://unsplash.it/800/600?image=82);
}
.card__image--river {
    background-image: url(https://unsplash.it/800/600?image=11);
}
.card__image--record {
    background-image: url(https://unsplash.it/800/600?image=39);
}
.card__image--fence {
    background-image: url(https://unsplash.it/800/600?image=59);
}*/
.card__title {
    color: #696969;
    font-size: 1.25rem;
    font-weight: 300;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.card__text {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    font-size: 0.875rem;
    line-height: 1.5;
    margin-bottom: 1.25rem;
}

.card__li--hide{
      display:none;
}

.containerMenuAssets {
      display: flex;

      display: -webkit-flex;
	  flex-wrap: wrap;

      align-items: center;
      -webkit-align-items: center;
      justify-content: center;
      -webkit-justify-content: center;
      height: 5vh;
      /*width: 100%;*/
      background-color: red;
}



.btn_menu_assets {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      height: 5vh;
      width: 5vh;
      /*width: 100%;*/

      > .fa {
        font-size: 1.5rem;
      }
}

.btn_menu_assets:active {
      background-color: blue;
}
.btn_menu_assets:hover {
      background-color: blue;
}
.btn_menu_assets_clicked {
  		background-color: blue;
}

.container_cards{
      /*width:100%;*/
	  min-width:100%;
      /*padding-right:5px;
      padding-left:5px;*/
      background-color: blue;
      padding: 0;
}

.search__div {
      position: relative;
      color: #aaa;
      font-size: 16px;
      height:100%;
	  flex-grow: 1; /* default 0 */
	  min-width: 100%;
}
.search__div input {
      /*min-width: 150px;*/
      /*min-width: 100%;*/
      /*width:33vh;*/
      /*height:100%;*/
	  min-width: 100%;
	  flex-grow: 1; /* default 0 */

      height:5vh;
      background: #fcfcfc;
      border: 1px solid #aaa;
      border-radius: 5px;
      box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;
}

.search__div input { text-indent: 32px;}

.search__div .fa-search {
    position: absolute;
    top: 10px;
    left: 10px;
	flex-grow: 1; /* default 0 */
}

.title-case {
    width:100%;
    background-color:black;
    color:white;
    font-size:0.8em;
}

.select_containerMenuAssets{
    min-width: 33vh;
    /*width:33vh;*/
    height:5vh;
	flex-grow: 1; /* default 0 */
}

.container_MenuAssetscardsAndCards{
	background-color: black;
	border: 5px solid black;
	min-height: 10vh;
}

.flex_wrap    {
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}

</style>


</head>

<body>

<div class="container_MenuAssetscardsAndCards" styleX="display:inline-block;">


	<div class="containerMenuAssets flex_wrap" style="width:100%;">

	    <button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button>
	    <button id="bt_grid_list" class="btn_menu_assets secondary"><i class="fa fa-align-justify"></i></button>
	    <button id="bt_sort" class="btn_menu_assets secondary"><i class="fa fa-sort-alpha-asc"></i></button>
	    <button id="bt_date" class="btn_menu_assets secondary"><i class="fa fa-calendar"></i></button>
	    <button id="bt_folder_tree" class="btn_menu_assets secondary"><i class="fa fa-sitemap"></i></button>


		<!-- <select class="select_containerMenuAssets f-select" style="min-width:100px;">
		    <option disabled selected>Filters</option>
		    <option >Blue</option>
		    <option >Red</option>
		    <option >Yellow</option>
		    <option >Green</option>
		</select> -->


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->


<!-- // https://codepen.io/elmahdim/pen/hlmri   todo better -->
<div class="row">
       <div class="col-lg-12">
     <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle btn_menu_assets secondary" data-toggle="dropdown"><span class="fa fa-filter"></span>&nbsp;<span class="fa fa-chevron-down"></span></button>
<ul class="dropdown-menu">
  <li><a href="#" class="small" data-value="blue" tabIndex="-1"><input type="checkbox"/>&nbsp;Blue</a></li>
  <li><a href="#" class="small" data-value="red" tabIndex="-1"><input type="checkbox"/>&nbsp;Red</a></li>
  <li><a href="#" class="small" data-value="yellow" tabIndex="-1"><input type="checkbox"/>&nbsp;Yellow</a></li>
  <li><a href="#" class="small" data-value="green" tabIndex="-1"><input type="checkbox"/>&nbsp;Green</a></li>

</ul>
  </div>
</div>
  </div>

<script>
var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();

   console.log( options );
   return false;
});
</script>

		<select id="b-select" class="select_containerMenuAssets b-select" style="min-width:150px;">
		    <option disabled selected>Sort By</option>
		    <option data-sort="price:asc">Price Ascending</option>
		    <option data-sort="price:desc">Price Descending</option>
		    <option data-sort="length:asc">Length Ascending</option>
		    <option data-sort="length:desc">Length Descending</option>
		    <option data-sort="case:asc">Case Ascending</option>
		    <option data-sort="case:desc">Case Descending</option>
		    <option data-sort="date:asc">Date Ascending</option>
		    <option data-sort="date:desc">Date Descending</option>
		  </select>

		<div class="select_containerMenuAssetsX search__div">
		  <span class="fa fa-search"></span>
		  <input placeholder="search" id="input__searchAssets" type="text"/>
		</div>

<style>
/*#cards li {background-color: orange;}
#cards li:nth-child(2n) {background-color: yellow;}*/
</style>

<ul id="cards" class="cards flex_wrapX">
  <li class="LI-cards__item fiche" data-length="100" data-price="16" data-case="0001"  data-date="20171216">
	<div class="card fiche_card">
			<div class="div__cardImage">
				  <img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=82"></img>
				  <div class="title-case">Case 0001</div>
			</div>
			  <div class="card__content">
				<div class="card__title">yellow</div>
						<div class="details">
						  <span class="length">100M</span>
						  <span class="price">16€</span>
						  <span class="date">2017-12-16</span>
						</div>
				<p class="card__text">This is the shorthand for fe second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
				<button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
			  </div>

	</div>
  </li>
  <li class="LI-cards__item fiche" data-length="3" data-price="50"  data-case="0010" data-date="19990216">
	<div class="card fiche_card">
		<div class="div__cardImage">
			<img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=11"></img>
			<div class="title-case">Case 0010</div>
		</div>

	  <div class="card__content">
		<div class="card__title">GREEN</div>
				<div class="details">
				  <span class="length">3M</span>
				  <span class="price">50€</span>
				  <span class="date">1999-02-16</span>
				</div>
		<p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
		<button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
	  </div>
	</div>
  </li>
  <li class="LI-cards__item fiche" data-length="123" data-price="70"  data-case="0005" data-date="20180216">
	<div class="card fiche_card">
		<div class="div__cardImage">
			<img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=39"></img>
			<div class="title-case">Case 0005</div>
		</div>
	  <div class="card__content">
		<div class="card__title">BLUE</div>
				<div class="details">
				  <span class="length">123M</span>
				  <span class="price">70€</span>
				  <span class="date">2018-02-16</span>
				</div>
		<p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
		<button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
	  </div>
	</div>
  </li>
  <li class="LI-cards__item fiche" data-length="130" data-price="6700" data-case="0120" data-date="20170216">
	<div class="card fiche_card">
		<div class="div__cardImage">
			<img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=59"></img>
			<div class="title-case">Case 0120</div>
		</div>
	  <div class="card__content">
		<div class="card__title">RED</div>
				<div class="details">
				  <span class="length">130M</span>
				  <span class="price">6700€</span>
				  <span class="date">2017-02-16</span>
				</div>
		<p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
		<button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
	  </div>
	</div>
  </li>
</ul>


    <div id="treeview" class="treeview" style="width:100%;padding-top:1px;display:none;"></div>



</div>



<script>



$( document ).ready(function() {

    document.getElementById("input__searchAssets").value = "";



	$(".btn_menu_assets").click(function() {
		$(".btn_menu_assets").removeClass('btn_menu_assets_clicked');
	  	$(this).addClass('btn_menu_assets_clicked');
		// $('#cards li:nth-child(2n)').css("background", "none");

	  	//console.log('click');
	});

    function cards_show() {
      $("#treeview").hide();
      $("#cards").show();
    }

	function modulo_list_cards(){
		$('.cards > li').css("background-color", "yellow");
		$('#cards li:nth-child(2n)').css("background-color", "orange");
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


    function a(){ console.log("a"); $(".cards li").sort(sort_case_asc_alphabetical).appendTo('.cards');}
    function z(){ console.log("b"); $(".cards li").sort(sort_case_desc_alphabetical).appendTo('.cards');}

    function sort_case_asc_alphabetical(a, b) {
      console.log('sort_case_asc_alphabetical');
      return ($(b).data('case')) < ($(a).data('case')) ? 1 : -1 ;
    }
    function sort_case_desc_alphabetical(a, b) {
      console.log('sort_case_desc_alphabetical');
      return ($(b).data('case')) < ($(a).data('case')) ? -1 : 1 ;
    }

    var az = [a,z];
    $( "#bt_sort" ).click(function(e) {
        cards_show();
        $(this).find('.fa').toggleClass('fa-sort-alpha-asc fa-sort-alpha-desc');
        az.reverse()[1]();
        e.stopPropagation();
        e.preventDefault();
    });





    // function sort_case_alphabetical(order){
    //     console.log(order);
    //     $(".cards li").sort(sort_case_desc_alphabetical).appendTo('.cards');
    // }



    function da(){ console.log("a"); $(".cards li").sort(sort_date_asc_alphabetical).appendTo('.cards');}
    function dz(){ console.log("b"); $(".cards li").sort(sort_date_desc_alphabetical).appendTo('.cards');}

    function sort_date_asc_alphabetical(a, b) {
      console.log('sort_date_asc_alphabetical');
      return ($(b).data('date')) < ($(a).data('date')) ? 1 : -1 ;
    }
    function sort_date_desc_alphabetical(a, b) {
      console.log('sort_date_desc_alphabetical');
      return ($(b).data('date')) < ($(a).data('date')) ? -1 : 1 ;
    }

    var daz = [da,dz];
    $( "#bt_date" ).click(function(e) {
        // $(this).find('.fa').toggleClass('fa-calendar fa-calendar-times-o');
		//$(this).find('.fa').toggleClass('fa-calendar fa-calendar');
        cards_show();
        daz.reverse()[1]();
        e.stopPropagation();
        e.preventDefault();
    });


    $.btgl = {};
    $.btgl.switch = 2;
    $( "#bt_grid_list" ).click(function(e) {
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
        $("#treeview").load("treeview.php");
        console.log('treeview');
        e.stopPropagation();
        e.preventDefault();
    });


  $( function() {
    var availableTagsSearchAssets = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Length",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "up"
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
        cards_show();
    //$('#input__searchAssets').on('click focusin', function() {
        this.value = '';
        input__searchAssets('');
    });

});


    $( "#b-select" ).change(function(){
        cards_show();
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
	  // modulo_list_cards_remove();
			// 		$('.cards > li').css("background", "none");
			// 		$('.cards > li').css("background-color", "yellow");
			// 		$('#cards li:nth-child(2n)').css("background-color", "orange");

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
          $("#treeview").hide();
          $("#cards").show();



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




<br>

<style>
.flex-container {
  padding: 0;
  margin: 0;
  list-style: none;
  border: 1px solid silver;
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
  clear: both !important;
}
.wrap    {
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}
.wrap li {
  background: gold;
  clear: both !important;
}

.flex-item {
flex-grow: 1; /* default 0 */
flex-shrink: 1; /* default 1 */
display:inline-block;
clear: both !important;
}

.flex-itemOLD {
  background: tomato;
  padding: 5px;
  width: 100px;
  height: 100px;
  margin: 10px;

  line-height: 100px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center;
}

#flexShell {
  display: inline-flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-items: stretch;
  align-content: stretch;
}
.select-wrapper {
    background-color: #eee;
    border: 1px solid #aaa;
    color: #aaa;
    cursor: pointer;
    float: left;
    overflow: hidden;
    padding-right: 3em;
    position: relative;
    width: 100%;
}
.f-select2 {
    /*-webkit-appearance: none;*/
    background-color: #eee;
    border-width: 0;
    box-sizing: border-box;
    cursor: pointer;
    float: left;

    width: 100%;
    width: calc(100% + 2em);
    &:focus {
        outline: none;
    }
}
</style>

<!--

<ul class="flex-container wrap" style="">
  <li class="flex-item"><button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button></li>
  <li class="flex-item"><button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button></li>
  <li class="flex-item"><button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button></li>
  <li class="flex-item"><button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button></li>
  <li class="flex-item"><button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button></li>
  <li class="flex-item"  style="">
	  <div class="select-wrapper">
	  <select class="select_containerMenuAssets f-selectX f-select2" style="">
  		    <option disabled selected>Filters</option>
  		    <option >Blue</option>
  		    <option >Red</option>
  		    <option >Yellow</option>
  		    <option >Green</option>
  		</select>
		<div>
	</li>
  	<li class="flex-item">
		<div class="select-wrapper">
		<select class="select_containerMenuAssets b-selectX f-select2" style="">
		    <option disabled selected>Sort By</option>
		    <option data-sort="price:asc">Price Ascending</option>
		    <option data-sort="price:desc">Price Descending</option>
		    <option data-sort="length:asc">Length Ascending</option>
		    <option data-sort="length:desc">Length Descending</option>
		    <option data-sort="case:asc">Case Ascending</option>
		    <option data-sort="case:desc">Case Descending</option>
		    <option data-sort="date:asc">Date Ascending</option>
		    <option data-sort="date:desc">Date Descending</option>
		  </select>
	  </div>
	</li>
  	<li class="flex-item f-select2" style="">
	  <div class="select_containerMenuAssets search__div">
  		  <span class="fa fa-search"></span>
  		  <input placeholder="search" id="input__searchAssets" type="text" style="" />
  	  </div>
	</li>

</ul>

 -->




<style>
.outer1 {
    background-color: orange;
    padding: 0px;
	margin: 0px;
}

.outer0 {
    background-color: green;
    overflow: hidden;
    padding: 0px;
    margin: 0px;
}

.container
{
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    background-color: rgba(0, 0, 255, 0.5);
    margin: 0px;

}

.item
{
    flex-grow: 1;
    -webkit-flex-grow: 1;
    background-color: rgba(255, 0, 0, 0.5);
    widthX: 100px;
    padding: 0px;
    margin: 0px;

    text-align: center;
    color: white;
}


</style>




<!--

<div class="outer1">
    <div class="outer0">
        <div class="container">

            <div class="item"><button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button></div>
            <div class="item"><button id="bt_grid_list" class="btn_menu_assets secondary"><i class="fa fa-align-justify"></i></button></div>
            <div class="item"><button id="bt_sort" class="btn_menu_assets secondary"><i class="fa fa-sort-alpha-asc"></i></button></div>
            <div class="item"><button id="bt_date" class="btn_menu_assets secondary"><i class="fa fa-calendar"></i></button></div>
            <div class="item"><button id="bt_folder_tree" class="btn_menu_assets secondary"><i class="fa fa-sitemap"></i></button></div>

            <div class="item" style="width:30%;">
				<select  class="select_containerMenuAssets f-select" style="width:100%;">
		  		    <option disabled selected>Filters</option>
		  		    <option >Blue</option>
		  		    <option >Red</option>
		  		    <option >Yellow</option>
		  		    <option >Green</option>
  				</select>
			</div>
            <div class="item"style="width:30%;">
					<select class="select_containerMenuAssets b-select" style="100%">
					    <option disabled selected>Sort By</option>
					    <option data-sort="price:asc">Price Ascending</option>
					    <option data-sort="price:desc">Price Descending</option>
					    <option data-sort="length:asc">Length Ascending</option>
					    <option data-sort="length:desc">Length Descending</option>
					    <option data-sort="case:asc">Case Ascending</option>
					    <option data-sort="case:desc">Case Descending</option>
					    <option data-sort="date:asc">Date Ascending</option>
					    <option data-sort="date:desc">Date Descending</option>
					  </select>
			</div>
            <div class="item" style="width:30%;">
				  <div class="select_containerMenuAssetsX search__divX">
			  		  <span class="fa fa-search"></span>
			  		  <input placeholder="search" id="input__searchAssets" type="text" style="" />
			  	  </div>
			</div>
        </div>
    </div>
</div>















			<ul id="cards" class="cards">
			  <li class="LI-cards__item fiche flex-item" data-length="100" data-price="16" data-case="0001"  data-date="20171216">
			    <div class="card fiche_card"i>
			            <div class="div__cardImage">
			                  <img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=82"></img>
			                  <div class="title-case">Case 0001</div>
			            </div>
			              <div class="card__content">
			                <div class="card__title">yellow</div>
			                        <div class="details">
			                          <span class="length">100M</span>
			                          <span class="price">16€</span>
			                          <span class="date">2017-12-16</span>
			                        </div>
			                <p class="card__text">This is the shorthand for fe second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
			                <button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
			              </div>

			    </div>
			  </li>
			  <li class="LI-cards__item fiche flex-item" data-length="3" data-price="50"  data-case="0010" data-date="19990216">
			    <div class="card fiche_card">
			        <div class="div__cardImage">
			            <img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=11"></img>
			            <div class="title-case">Case 0010</div>
			        </div>

			      <div class="card__content">
			        <div class="card__title">GREEN</div>
			                <div class="details">
			                  <span class="length">3M</span>
			                  <span class="price">50€</span>
			                  <span class="date">1999-02-16</span>
			                </div>
			        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
			        <button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
			      </div>
			    </div>
			  </li>
			  <li class="LI-cards__item fiche flex-item" data-length="123" data-price="70"  data-case="0005" data-date="20180216">
			    <div class="card fiche_card">
			        <div class="div__cardImage">
			            <img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=39"></img>
			            <div class="title-case">Case 0005</div>
			        </div>
			      <div class="card__content">
			        <div class="card__title">BLUE</div>
			                <div class="details">
			                  <span class="length">123M</span>
			                  <span class="price">70€</span>
			                  <span class="date">2018-02-16</span>
			                </div>
			        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
			        <button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
			      </div>
			    </div>
			  </li>
			  <li class="LI-cards__item fiche flex-item" data-length="130" data-price="6700" data-case="0120" data-date="20170216">
			    <div class="card fiche_card">
			        <div class="div__cardImage">
			            <img class="card__image card__image--fence image_fiche" src="https://unsplash.it/800/600?image=59"></img>
			            <div class="title-case">Case 0120</div>
			        </div>
			      <div class="card__content">
			        <div class="card__title">RED</div>
			                <div class="details">
			                  <span class="length">130M</span>
			                  <span class="price">6700€</span>
			                  <span class="date">2017-02-16</span>
			                </div>
			        <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
			        <button class="btn-editCard"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
			      </div>
			    </div>
			  </li>
			</ul>


 -->












































</body>
</html>
