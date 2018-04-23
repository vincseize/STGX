
// SPLIT PANE RESIZE              
function split_pane_js($close=true){
    console.log("split_pane_js from gbl fcts");
    var w = $(document).width();
    var r = (w/100)*15;
    console.log(r);

    // init size
    $('div.split-pane').splitPane('lastComponentSize', 0);
     

      if($close==true){
        $('div.split-pane').splitPane('lastComponentSize', 0);
      }

      if($close==false){
        $('div.split-pane').splitPane('lastComponentSize', r);
      }

        $('div.split-pane').splitPane();

        $('button:first').on('click', function() {
          $('div.split-pane').splitPane('lastComponentSize', 10);
        });

        $('button:last').on('click', function() {
          $('div.split-pane').splitPane('firstComponentSize', 0);
        });

    // $('div.split-pane').splitPane('lastComponentSize', r); 
}



function global_fcts_footer_js($from=false){
    console.log("global_fcts_footer_js from "+$from);

}

  function toggle_pane_right(){
      console.log("toggle_pane_rightpressed");
// $("#right-component").hide();
$("#right-component").css({"display":"none"});

// if($('#right-component:visible').length){
//         $('#right-component').hide();
// }else{
//   $('#right-component').show();
// }


      // $("#right-component").toggle("slide", { direction: "right" }, 5000);
      // $("#right-component").toggle();


// $( "#myelement" ).click(function() {     
//     if($('#another-element:visible').length)
//         $('#another-element').hide("slide", { direction: "right" }, 1000);
//     else
//         $('#another-element').show("slide", { direction: "right" }, 1000);        
// });


// $( "#myelement" ).click(function() {     
//    $('#another-element').toggle("slide", { direction: "right" }, 1000);
// });


  }


// $("#left-component").toggle("slide", { direction: "left" }, 1000);
// $("#right-component").toggle();


// $("#right-component").toggle();

// if($('#right-component:visible').length){
//         $('#right-component').hide();
// }



// $("#right-component").toggle();


// toggle_pane_right();

// $("#right-component").css({"display":"none"});

// toggle_pane_right();


// window.addEventListener("keydown", function(e) {




  $(document).keydown(function(e){
      if(e.keyCode == 370){ // left arrow <-
        console.log('left arrow pressed');
          // resize_layout_content_left();
          event.preventDefault();
          return false;
        }
      if(e.keyCode == 38){ // up arrow ->
        console.log('up pressed');
          // resize_layout_content_right();
          event.preventDefault();
          return false;
        }
      if(e.keyCode == 390){ // right arrow ->
        console.log('right pressedX');
          // resize_layout_content_right();
          // toggle_pane_right();

$("#right-component").hide();
$("#right-component").css({"display":"none"});

// if($('#right-component:visible').length){
//         $('#right-component').hide();
// }else{
//   $('#right-component').show();
// }



          event.preventDefault();
          // return false;
        }
      if(e.keyCode == 40){ // down arrow ->
        console.log('down pressed');
          // resize_layout_content_right();
          event.preventDefault();
          return false;
        }
      
  });





window.split_pane_js2 = function() {
    console.log("split_pane_js from gbl fcts");
    var w = $(document).width();
    var r = (w/100)*15;
    console.log(r);

    // init size
    $('div.split-pane').splitPane('lastComponentSize', 0);
    // $('div.split-pane').splitPane('lastComponentSize', r);  


    //$(function() {
      if($close==true){
        $('div.split-pane').splitPane('lastComponentSize', 0);
      }

        $('div.split-pane').splitPane();

        $('button:first').on('click', function() {
          $('div.split-pane').splitPane('lastComponentSize', 10);
        });

        $('button:last').on('click', function() {
          $('div.split-pane').splitPane('firstComponentSize', 0);
        });

    //});
} 



$(document).ready(function () {
    // When the DOM is ready, attach the event handler.

    // var spl_true = split_pane_js(true);
    // getsize();

    $(document).keypress(function (event) {            
        enableEnter(event);
    });
});

// enableEnter is accessible in the whole page scope.
function enableEnter(event) {
    if (event.keyCode == 13) {
        event.preventDefault();
        // ezpConsole.partOverride.retrieveParts();
        console.log('test gbl');
        // split_pane_jsDES(event);
        // spl_false;
        // split_pane_js(false);
        // console.log(spl_false);
        split_pane_js2();
    }
}