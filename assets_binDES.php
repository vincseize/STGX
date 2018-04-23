
<style type="text/css">
	.menu_top_asset_bin {
  	background-color: var(--color-blue6);
	}

	.btn_assets_bin {
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
	}

	.btn_assets_bin_active {
	  background: var(--color-blue2);
	  text-decoration: none;
	  color: #fff;
	}























#menu_medias nav {
  background: #f0f0f0;
  border: 1px solid #ccc;
  border-right: none;
  width: 100%;
  margin-bottom: 20px;
}

#menu_medias nav ul {
  margin: 0;
  padding: 0;
}

#menu_medias nav ul li {
  list-style: none;
  text-align: center;
  border-left: 1px solid #fff;
  border-right: 1px solid #ccc;
}

#menu_medias nav ul li:first-child {
  border-left: none;
}

#menu_medias nav ul li a {
  display: block;
  text-decoration: none;
  color: #616161;
  padding: 10px 0;
}

#menu_medias nav {
  display: table;
  table-layout: fixed;
}

#menu_medias ul {
  display: flex;
  flex-direction: row;
}

#menu_medias ul li {
	flex-grow: 1;
}



/*@media (max-width: 430px) {

  #menu_medias ul {
    display: block;
  }

  #menu_medias nav {
    font-size: .8em;
  }

  #menu_medias nav ul li {
    display: block;
    border-bottom: 1px solid #ccc;
  }

}*/











</style>



<div id="menu_medias">
<nav>
  <ul>
    <li><a href="#">sequences</a></li>
    <li><a href="#">medias</a></li>
	<li><a href="#">af list</a></li>
    <li><a href="#">af grid</a></li>
    <li><a href="#">search</a></li>
    <!--     <li><a href="#">Contact2</a></li>
     <li><a href="#">Contact</a></li> -->
  </ul>
</nav>
</div>






















<div id="menu_top_asset_bin" class="menu_top_asset_bin">

		<div style="color:var(--color-grey6);">
				<button id="btn_assets_sequences_bin" class="btn_assets_bin">sequences XXX</button>
				<button id="btn_assets_bin" class="btn_assets_bin">assets XXX</button>

				 <!-- affichage | sort by -->
		 </div>
</div>



		<div style="color:white;">filters</div>
		<div style="color:white;">search</div>

		<div style="color:white;">

		bin

				<div style="color:white;">assets aff</div>
				<div style="color:white;">sequences aff</div>



		</div>

<script>


$(document).ready(function(){

	$('#btn_assets_bin').addClass('btn_assets_bin_active');




	$('#btn_assets_bin').on("click", function(){

			$('#btn_assets_bin').removeClass('btn_assets_bin_active');
			$('#btn_assets_sequences_bin').removeClass('btn_assets_bin_active');

		    $(this).addClass('btn_assets_bin_active');
			$('#bottom').load('assets_grid.php');
	});

	$('#btn_assets_sequences_bin').on("click", function(){


			$('#btn_assets_bin').removeClass('btn_assets_bin_active');
			$('#btn_assets_sequences_bin').removeClass('btn_assets_bin_active');

		    $(this).addClass('btn_assets_bin_active');
			$('#bottom').load('assets_sequences_grid.php');
	});

});
</script>
