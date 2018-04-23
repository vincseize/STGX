
<style type="text/css">

:root {

    --menu-bin-color-blue1:#0D3246;
    --menu-bin-color-blue2:#061120;
    --menu-bin-color-blue3:#069;
    --menu-bin-color-blue4:#0D3246;
  /*--seq-main-bg-color: var(--color-dark-black);*/
}


html, body{
        margin: 0px;
        padding: 0px;
		overflow: hidden;
		border: 0 none !important;
    }


	/*.menu_top_asset_bin {
  	background-color: var(--color-blue6);
	}*/

	/*.btn_assets_bin {
	  background: var(--color-blue6);

	  -webkit-border-radius: 3;
	  -moz-border-radius: 3;
	  border-radius: 3px;
	  font-family: Arial;
	  color: var(--color-grey6);
	  font-size: 12px;
	  font-size: 12px;
	  padding: 5px 5px 5px 5px;
	  text-decoration: none;
	  border:none 0px;
	}

	.btn_assets_bin:hover {
	  background: var(--color-blue2);
	  text-decoration: none;
	  color: #fff;
	  border:none 0px;
	}*/

	.btn_bin_active {
  background: var(--menu-bin-color-blue3);
  color: red;
	}























#menu_bin nav {
  background: var(--menu-bin-color-blue4);
  /*border: 1px solid #ccc;*/
  border-right: none;
  width: 100%;
  /*margin-bottom: 20px;*/
  margin: 0px;
  color: white;
}



#menu_bin nav ul {
  margin: 0;
  padding: 0;
  color: white;
}

#menu_bin nav ul li {
  list-style: none;
  text-align: center;
  border-left: 1px solid var(--menu-bin-color-blue3);
  /*border-left: 1px solid #fff;
  border-right: 1px solid #ccc;*/
  color: white;
}



#menu_bin nav ul li:first-child {
  border-left: none;
}

#menu_bin nav ul li a {
  display: block;
  text-decoration: none;
  color: white;
  /*padding: 10px 0;*/
}

#menu_bin nav ul li a:hover {
  background: var(--menu-bin-color-blue3);
  color: white;
}

#menu_bin nav {
  display: table;
  table-layout: fixed;
}

#menu_bin ul {
  display: flex;
  flex-direction: row;
}

#menu_bin ul li {
	flex-grow: 1;
}


</style>



<div id="menu_bin" style="overflow:hidden;padding:0px;margin:0px;height:25px;">
<nav style="color:#000000;">
  <ul  >
    <li class="btn_menu_sequences_bin" id="btn_menu_sequences_bin"><a href="#">sequences</a></li>
    <li class="btn_menu_cases_bin" id="btn_menu_cases_bin"><a href="#">cases</a></li>
	<li class="btn_menu_medias_bin" id="btn_menu_medias_bin"><a href="#">medias</a></li>

    <!-- <li><a href="#">af grid</a></li>
    <li><a href="#">search</a></li> -->
    <!--     <li><a href="#">Contact2</a></li>
     <li><a href="#">Contact</a></li> -->
  </ul>
</nav>
</div>


<script>


$(document).ready(function(){
    removeClass_btn_active_menuBin();
    $('#btn_menu_sequences_bin').addClass('btn_bin_active');

	$('#btn_menu_sequences_bin').on("click", function(){
        removeClass_btn_active_menuBin();
	  	var url = 'sequences_bin.php';
        window.parent.$('#iframe-right-component').attr("src", url);
        $(this).addClass('btn_bin_active');
		localStorage.uiMenuBin = 'bt_sequences_clicked';
		console.log('bt_sequences_clicked');
    });

	$('#btn_menu_cases_bin').on("click", function(){
        removeClass_btn_active_menuBin();
	  	var url = 'cases_bin.php';
        window.parent.$('#iframe-right-component').attr("src", url);
        $(this).addClass('btn_bin_active');
		localStorage.uiMenuBin = 'bt_cases_clicked';
		console.log('bt_cases_clicked');
    });

	$('#btn_menu_medias_bin').on("click", function(){
        removeClass_btn_active_menuBin();
	  	var url = 'medias_bin.php';
        window.parent.$('#iframe-right-component').attr("src", url);
        $(this).addClass('btn_bin_active');
		localStorage.uiMenuBin = 'bt_medias_clicked';
		console.log('bt_medias_clicked');
    });

    function removeClass_btn_active_menuBin() {
        $('#btn_menu_sequences_bin').removeClass('btn_bin_active');
        $('#btn_menu_cases_bin').removeClass('btn_bin_active');
        $('#btn_menu_medias_bin').removeClass('btn_bin_active');
    }

});

</script>
