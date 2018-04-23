<?php 
require_once('inc/define.php');
?>



<div id="menu_top_navbar_wrap" style="overflow:hidden;padding:0px;margin:0px;">

    <ul id="menu_top_navbar">
        <li id="bt-param" class="bt-navbar bt-param bt-navbar-active" >
        	<a id="a_bt-param" href="#"><!-- <i class="fa fa-cog"></i> --></a>
        </li>
        <li id="bt-st" class="bt-navbar bt-st bt-navbar-active"><a href="#" style="text-indent: 40px;"><?php echo TITLE_APP;?></a></li>
        <li id="bt-pg" class="bt-navbar bt-pg" href="__projects/<?php echo $_SESSION["PROJECT"];?>/index.php">      
            <a href="#">       
                <i id="play_icon" class="fa fa-play-circle-o fa-1x play_icon" aria-hidden="true" style="">
                    <span id="play_icon_txt" class="play_icon_txt">Play Graph <?php echo strtoupper($_SESSION["NAME_PROJECT"]);?></span>
                </i>
            </a>
        </li>
        <li id="bt-as" class="bt-navbar bt-as"><a href="#">Assets</a></li>
    </ul>

</div>


<script type="text/javascript">

	$(document).ready(function () {


    url = "todo/index.html";
    // $('#iframe_todo').load(url);
    $("#iframe_todo").attr("src", url);
 


    $('#todo_ST').on("click", function(){
        $("#iframe_todo").css('z-index', '9999999');
        $("#close-pg").css('z-index', '9999999');
        $('#close-pg').fadeIn('slow');
        console.log('my todo from menu_top clicked');
    });   




    $('ul[role="menu"]')
        .on('show.bs.collapse', function (e) {
        $(e.target).prev('a[role="menuitem"]').addClass('active');
    })
        .on('hide.bs.collapse', function (e) {
        $(e.target).prev('a[role="menuitem"]').removeClass('active');
    });

    $('a[data-toggle="collapse"]').click(function (event) {

        event.stopPropagation();
        event.preventDefault();

        var drop = $(this).closest(".dropdown");
        $(drop).addClass("open");

        $('.collapse.in').collapse('hide');
        var col_id = $(this).attr("href");
        $(col_id).collapse('toggle');

    });
});
</script>