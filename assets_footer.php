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
