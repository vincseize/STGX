	<div class="containerMenuAssets flex_wrap">

        <!-- // https://codepen.io/elmahdim/pen/hlmri   todo better -->
        <div>
            <div class="col-lg-12">
                 <div class="button-group">
                    <button id="bt_filters" type="button" class="btn btn-default btn-sm dropdown-toggle btn_menu_assets secondary" data-toggle="dropdown" style="background-color:var(--menu-bin-color-blue1);border:0;">
                        <!-- <span class="fa fa-filter" style="color:white;"></span>&nbsp;<span class="fa fa-chevron-down"></span> -->
                        <i class="fa fa-filter" style="color:white"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="small" data-value="blue" tabIndex="-1"><input type="checkbox"/>&nbsp;Blue</a></li>
                        <li><a href="#" class="small" data-value="red" tabIndex="-1"><input type="checkbox"/>&nbsp;Red</a></li>
                        <li><a href="#" class="small" data-value="Sequence 0001" tabIndex="-1"><input type="checkbox"/>&nbsp;Sequence 0001</a></li>
                        <li><a href="#" class="small" data-value="Sequence 0002" tabIndex="-1"><input type="checkbox"/>&nbsp;Sequence 0002</a></li>
                    </ul>
                </div>
            </div>
        </div>

		<select id="b-select" assets="<?php echo $assets;?>" class="select_containerMenuAssets b-select">
		    <option disabled selected>Sort By</option>
		    <option data-sort="price:asc">Note Ascending</option>
		    <option data-sort="price:desc">Note Descending</option>
		    <!-- <option data-sort="length:asc">Length Ascending</option>
		    <option data-sort="length:desc">Length Descending</option>
		    <option data-sort="asset:asc">Case Ascending</option>
		    <option data-sort="asset:desc">Case Descending</option>
		    <option data-sort="date:asc">Date Ascending</option>
		    <option data-sort="date:desc">Date Descending</option> -->
		</select>

	    <!-- <button id="bt_img" class="btn_menu_assets secondary"><i class="fa fa-address-card-o"></i></button> -->
	    <button id="bt_grid_list" assets="<?php echo $assets;?>" class="btn_menu_assets secondary">
	    	<i class="fa fa-align-justify"></i>
	    </button>
	    <button id="bt_sort" assets="<?php echo $assets;?>" class="btn_menu_assets secondary">
	    	<i class="fa fa-sort-alpha-asc"></i></button>
	    <button id="bt_date" assets="<?php echo $assets;?>" class="btn_menu_assets secondary">
	    	<i class="fa fa-calendar"></i></button>
	    <button id="bt_folder_tree" assets="<?php echo $assets;?>" class="btn_menu_assets btn_menu_assets secondary" style="margin-right: 5px;">
	    	<i class="fa fa-sitemap"></i>
	    </button>

		<div id="search__div" assets="<?php echo $assets;?>" class="search__div">
		  <span class="fa fa-search"></span>
		  <input placeholder="search" id="input__searchAssets" type="text"/>
		</div>

</div>