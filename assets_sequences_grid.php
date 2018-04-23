  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>

  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>

<style>
/*.grid-itemSequence { width: 25%; }
.grid-itemSequence--width2 { width: 50%; }*/




#containerSequences {
  border: 0 none;
  padding: 5px;
  height:100%;
}

.itemSequence {
    border-radius: 50%;
    behavior: url(PIE.htc); /* remove if you don't care about IE8 */
  margin: 3px;
  float: left;
}



.itemSequence_s1 {
	width: 100px;
	height: 100px;
	background: #ccc;
	border: 3px solid #000;
	margin: 3px;
	float: left;
}

.itemSequence_s2 {
	width: 150px;
	height: 150px;
	background: #ccc;
	border: 3px solid #000;
	margin: 3px;
	float: left;
}

.itemSequence_s3 {
	width: 200px;
	height: 200px;
	background: #ccc;
	border: 3px solid #000;
	margin: 3px;
	float: left;
}

.itemSequence_s4 {
	width: 250px;
	height: 250px;
	background: #ccc;
	border: 3px solid #000;
	margin: 3px;
	float: left;
}

.itemSequence.next {
  width: 60px;
  height: 60px;
  border: 5px solid black;
  border-radius: 35px;
}

.red { background: red; }
.blue { background: blue; }
.green { background: green; }
.yellow { background: yellow; }

/* Start: Recommended Isotope styles */

/**** Isotope Filtering ****/

.isotope-itemSequence {
  z-index: 2;
}

.isotope-hidden.isotope-itemSequence {
  pointer-events: none;
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/

.isotope,
.isotope .isotope-itemSequence {
  -webkit-transition-duration: 0.3s;
     -moz-transition-duration: 0.3s;
          transition-duration: 0.3s;
}

.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
          transition-property: height, width;
}

.isotope .isotope-itemSequence {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
          transition-property:         transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-itemSequence,
.isotope .isotope-itemSequence.no-transition {
  -webkit-transition-duration: 0s;
     -moz-transition-duration: 0s;
          transition-duration: 0s;
}

/* End: Recommended Isotope styles */





</style>


<div style="color:white;">

		

		sequences grid



</div>


<div style="color:white;" id="filters">
  <input type="checkbox" name="red" value=".red" id="red"><label for="red">red</label>
  <input type="checkbox" name="blue" value=".blue" id="blue"><label for="blue">blue</label>
  <input type="checkbox" name="green" value=".green" id="green"><label for="green">green</label>
  <input type="checkbox" name="yellow" value=".yellow" id="yellow"><label for="yellow">yellow</label>
</div>

<p><button id="shuffle">Shuffle</button></p>

<div id="containerSequences">
  <div class="itemSequence itemSequence_s4 red"></div>
  <div class="itemSequence itemSequence_s1 blue"></div>
  <div class="itemSequence itemSequence_s3 green"></div>
  <div class="itemSequence itemSequence_s1 yellow"></div>
  <div class="itemSequence itemSequence_s1 red"></div>
  <div class="itemSequence itemSequence_s2 blue"></div>
  <div class="itemSequence itemSequence_s1 green"></div>
  <div class="itemSequence itemSequence_s1 yellow"></div>
  <div class="itemSequence itemSequence_s3 red"></div>
  <div class="itemSequence itemSequence_s1 blue"></div>
  <div class="itemSequence itemSequence_s1 green"></div>
  <div class="itemSequence itemSequence_s1 yellow"></div>
  <div class="itemSequence itemSequence_s2 red"></div>
  <div class="itemSequence itemSequence_s1 blue"></div>
  <div class="itemSequence itemSequence_s2 green"></div>
  <div class="itemSequence itemSequence_s1 yellow"></div>
  <div class="itemSequence itemSequence_s3 red"></div>
  <div class="itemSequence itemSequence_s1 blue"></div>
  <div class="itemSequence itemSequence_s1 green"></div>
  <div class="itemSequence itemSequence_s4 yellow"></div>
</div>



<script>
	$(function(){

  var $containerSequences = $('#containerSequences'),
      $checkboxes = $('#filters input');

  $containerSequences.isotope({
    itemSequenceSelector: '.itemSequence',
    layoutMode: 'cellsByRow',
    cellsByRow: {
		  columnWidth: 270,
		  rowHeight: 270
	}
  });
  // get Isotope instance
  var isotope = $containerSequences.data('isotope');
  // add even classes to every other visible itemSequence, in current order
  function addEvenClasses() {
    isotope.$filteredAtoms.each( function( i, elem ) {
      $(elem)[ ( i % 2 ? 'addClass' : 'removeClass' ) ]('even')
    });
  }

  $checkboxes.change(function(){
    var filters = [];
    // get checked checkboxes values
    $checkboxes.filter(':checked').each(function(){
      filters.push( this.value );
    });
    // ['.red', '.blue'] -> '.red, .blue'
    filters = filters.join(', ');
    $containerSequences.isotope({ filter: filters });
    addEvenClasses();
  });

  $('#shuffle').click(function(){
    $containerSequences.isotope('shuffle');
    addEvenClasses();
  });

});
</script>