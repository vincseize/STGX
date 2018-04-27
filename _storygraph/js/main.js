
// Cytoscape Init starts
var cy = cytoscape({

	container: $('#container'),
	wheelSensitivity: 0.2,
	zoom: 1.5,
	// zoom: 0.5,


	elements: [],

	style: [
		{
			selector: 'node',
			style: {
				'content': 'data(label)',
				'shape': 'rectangle',
				'width': '50',
				'height': '50',
				'padding-left': '10px', 'padding-right': '10px',
				'padding-top': '10px', 'padding-bottom': '10px',
				'background-color': '#DDD',
				'border-color': '#999',
				'border-width': '2px',
				'font-size': '11px',
				'color': '#333',
				'text-outline-color': '#DDD',
				'text-outline-width': '3px',
				// 'content': 'data(name)',
				'text-valign': 'center',
				'min-zoomed-font-size': '10px'
			}
		},

		// {
		// 	selector: 'node.cases',
		// 	style: {
		// 		'background-image': 'url(__projects/1_aufildeleau/cases/case_1/case_1_bg.jpg)',
		// 		'background-fit': 'cover'
		// 	}
		// },

		// {
		// 	selector: "node[id='11']",
		// 	style: {
		// 		    // $src_img = $path_assets."/".$asset."_".$number."/".$asset."_".$number."_bg.jpg";
		// 		    // $bg_img = $src_img."?". filemtime($path_assets."/".$asset."_".$number."/".$asset."_".$number."_bg.jpg");
		// 		'background-image': 'url(__projects/1_aufildeleau/cases/case_11/thumbs/case_11_bg.jpg)',
		// 		//'background-image': 'https://farm4.staticflickr.com/3063/2751740612_af11fb090b_b.jpg',
		// 		'background-fit': 'cover'
		// 		// 'border-width': 10,
  //       		// 'border-color': 'green'
		// 	}


		// },



		{
			selector: 'node.scenes',
			style: {
				'shape': 'rectangle',
				'width': 'label',
				'height': 'label',
				'background-color': '#585858',
				// 'background-image': 'url(../upload/_medias/cases/vignette.jpg)',

				'border-color': '#FFF',
				'color': '#fff',
				'text-outline-color': '#585858'
			}
		},
		{
			selector: 'node.master',
			style: {
				'background-color': '#000',
				'text-outline-color': '#000'
			}
		},
		{
			selector: 'node.scenes:selected',
			style: {
				// 'background-color': '#FA0'
			}
		},
		{
			selector: 'node.cases',
			style: {
				'shape': 'rectangle'
			}
		},
		{
			selector: 'node.cases:selected',
			style: {
				// 'background-color': '#BD0'
			}
		},
		{
			selector: 'node.sequences',
			style: {
				//'shape': 'hexagon'
				//'shape': 'ellipse'
				'shape': 'roundrectangle'
			}
		},
		{
			selector: 'node.sequences:selected',
			style: {
				// 'background-color': '#0AF'
			}
		},




{
    selector: '.sequences',
    style: {
        "width": '250px',
        "height": '120px',
		"border-radius": "4px"
    }
},




		{
			selector: 'node.highlight',
			style: {
				'background-color': '#FC0',
				'color': '#111',
				'border-color': '#FFF',
				'border-width': '2px',
				'text-outline-color': '#FC0'
			}
		},
		{
			selector: 'node.conxlight',
			style: {
				'color': '#000',
				'border-color': '#3F0',
				'border-width': '4px'
			}
		},
		{
			selector: 'node:selected',
			style: {
				'background-color': '#06C',
				'color': '#111',
				'border-color': '#FFF',
				'border-width': '2px',
				'text-outline-color': '#06C'
			}
		},
		{
			selector: 'edge',
			style: {
				'width': 1,
				// 'curve-style': 'unbundled-bezier',
				'curve-style': 'bezier',
				'mid-target-arrow-shape': 'none',
				'mid-target-arrow-fill': 'filled',
				'target-arrow-shape': 'triangle',
				'target-arrow-fill': 'filled'
			}
		},
		{
			selector: 'edge.scenesLine',
			style: {
				// 'line-color': '#A50',
				// 'mid-target-arrow-color': '#B60',
				// 'target-arrow-color': '#B60'
			}
		},
		{
			selector: 'edge.casesLine',
			style: {
				// 'line-color': '#680',
				// 'mid-target-arrow-color': '#790',
				// 'target-arrow-color': '#790'
			}
		},
		{
			selector: 'edge.shotsLine',
			style: {
				// 'line-color': '#05A',
				// 'mid-target-arrow-color': '#06B',
				// 'target-arrow-color': '#06B'
			}
		},
		{
			selector: 'edge:selected',
			style: {
				'line-color': '#FC0',
				'target-arrow-color': '#FC0'
			}
		},
		{
			selector: 'edge.highlight',
			style: {
				'mid-target-arrow-shape': 'triangle',
				'mid-target-arrow-color': '#FC0',
				'target-arrow-color': '#FC0'
			}
		}
	],


	// autounselectify: true, // magnet


	layout: {
		name: 'dagre',
		animate: true,
		fit: true,
        padding: 300
	}

    // layout: {

    // },

});

var layoutChoosen = "dagre";

// Cytoscape Init ends

cy.fit();

cy.bind("tapend", "node", function(evt) {
    i = 0;
});


// cy.unselect();
// 			cy.nodes().each(function(i) {

// 					console.log('-----------------------------------------------------------------this');
// 					if (this.hasClass('highlight')){
// 						console.log(this);
// 					}


// 				// var node = this;
// 				// this.unselect();
// 				// this.removeClass('highlighted')	;
// 				// // this.removeClass('highlight conxlight').outgoers().removeClass('highlight');
// 				// // cy.elements().difference(this.outgoers()).not(sel).addClass('semitransp');
// 				// // this.removeClass('highlighted').outgoers().removeClass('highlighted');
// 				// this.removeClass('highlight conxlight').outgoers().removeClass('highlight');

// // overlay-opacity class

// 			});

// cy.elements().removeClass('highlighted');

// cy.nodes().removeClass('highlighted');
// cy.edges().removeClass('highlighted');


// cy.unbind('click');
//  cy.unbind('tapstart');
//  cy.unbind('tapend');
//  cy.bind('click ', 'node', function (evt) {
//     onTap(evt);
//  });

// // cy.removeClass('highlight conxlight').outgoers().removeClass('highlight');

// cy.nodes().removeClass('highlighted');



// Document Ready starts
$(function(){







// check localStorage



console.log('--------------------------------- localStorage_txt_check -------------------: ' + localStorage_txt_check);




var lastClickCoords  = [0,0];	// Pour sauver la position du clic-droit
var contextSelection = false;	// Pour garder en mémoire le node du clic-droit

// localStorage.graph
if (!window.localStorage[session_project] && localStorage_txt_check == 'false') {  // AND NO localStorage.txt
	window.localStorage[session_project] = "";
}

if (localStorage_txt_check == 'true') {
	load_localStorage_txt();
}

else if (window.localStorage[session_project] !== "") {

	load_localStorage();
}

// cy.fit();
// create_assets_folders();

//save
$('#save_ST').trigger('click');


// create_assets_folders(); // 

// Functionsssssss




// function addCircle(nodeId, circleText){
//     var parentNode = cy.$('#' + nodeId);
//     // if (parentNode.data('isCircle') || parentNode.data('circleId'))
//     //     return;
//     parentNode.lock();
//     var px = parentNode.position('x') + 10;
//     var py = parentNode.position('y') - 10;    
//     var circleId = (cy.nodes().size() + 1).toString();
//     parentNode.data('circleId', circleId);
//     cy.add({
//         group: 'nodes',
//         data: { weight: 75, id: circleId, name: circleText, isCircle: true },
//         position: { x: px, y: py },
//         locked: true
//     }).css({
//         'background-color': 'yellow',
//         'shape': 'ellipse',
//         'background-opacity': 0.5
//     }).unselectify();
// }

// addCircle('2', 'Bubble A');










function load_localStorage($project=false){
	if (window.localStorage[session_project] !== "") {
		var elems = JSON.parse(window.localStorage[session_project]);
		if (elems.length) {
			cy.add(elems);
			// cy.layout({'name': layoutChoosen, animate: true});
		}
		cy.fit();

		// var allJson = cy.elements().jsons(); // todo better in a function 
		// window.localStorage[session_project] = JSON.stringify(allJson);

	return elems;
	}
}

function load_localStorage_txt($project=false){
	console.clear();
		console.log("load_localStorage_txt " + session_project);

		var url_localstorage_graph_txt = '__projects/'+session_project+'/localstorage_graph.txt';
	    $.get( url_localstorage_graph_txt , function( data ) {
	    	console.log(data);
	        var elems = JSON.parse(data); // can be a global variable too...
	        // process the content...
	        console.log(elems);

	        if (elems.length) {
				cy.add(elems);
				// cy.layout({'name': layoutChoosen, animate: true});

			}
			cy.fit();

		// var allJson = cy.elements().jsons(); // todo better in a function 
		// window.localStorage[session_project] = JSON.stringify(allJson);

			// window.localStorage[session_project] = JSON.parse(window.localStorage[session_project]);
			return elems;
			
	    });

	// return elems;
}


// load_localStorage();



function localstorage_check_txt($project=false){
	$.ajax({
	  type: "POST",
	  url: "_storygraph/localstorage_check_txt.php",
	  // datatype: "html",
	  // data: dataString,
	  // dataType : "json",
	  	success: function(msg) {
	    	//do something;
	    	// console.log('geeeeeeeeeeeeeet');
	    	console.log('localstorage_check_txt : '+msg);
	    	load_localStorage_txt();
	    },
	  	error: function(msg) {
		    // console.log('NOOOOO geeeeeeeeeeeeeet');
		    console.log('localstorage_check_txt : '+msg);
		    // load_localStorage();
		}
	});
}





function create_assets_folders(){
	console.log("create_assets_folders");
// create  folders
				var array_ids_CASE = [];
				var array_ids_SEQ = [];
				cy.nodes().each(function(i) {

					var id = this.id();
					var data = this.data();
					var name = this.data('name');
					var group = this.group(); // nodes , edges etc
					// cases , shots, sequences etc
					var type = "";
					if (this.hasClass('cases')){
						var type = "cases";
					}
					if (this.hasClass('sequences')){
						var type = "sequences";
					}
					var position = this.position();
					var positionX = this.position("x");
					var positionY = this.position("x");


					console.log("id : "+id);
					console.log("data id : "+this.data('id'));
					console.log("data : "+this.data());
					console.log("name : "+name);
					console.log("group : "+group);
					console.log("type : "+type);
					console.log("position : "+position);
					console.log("positionX : "+positionX);
					console.log("positionY : "+positionY);



				if (type=="cases"){
					array_ids_CASE.push(parseInt(id));		    
				}				 
				if (type=="sequences"){
					array_ids_SEQ.push(parseInt(id));		    
				}

				});
	console.log(array_ids_CASE);
	console.log(array_ids_SEQ);

	$.ajax({
	       type: "POST",
	       url: "_storygraph/create_assets_folders.php",
	       data: { array_ids_CASE: array_ids_CASE,  array_ids_SEQ: array_ids_SEQ},
	       success: function() {
	            // $("#lengthQuestion").fadeOut('slow');
	            console.log("case-seq(s) folder(s) updated");
	       }
	    });


}



function get_lastNodes_id(){
			// get last nodes id
			var last_nodes_ID = 0;
			var array_ids = [];
			cy.nodes().each(function(i) {
				var id = this.id();
				array_ids.push(parseInt(id));		    
			});

			if(array_ids.length > 0) {
				array_ids = array_ids.sort((a, b) => a - b);
				var last_nodes_ID = array_ids[array_ids.length - 1];
			}
			return last_nodes_ID;
}




function get_cases_sequence(nodes_selected,action='add'){

	var parents = nodes_selected;
	if (!parents.length)
			return;

		var seq_id = [];
		var cases_id = [];
		for (i=0; i<parents.length; i++) {
			var srce 	= parents.eq(i);
			var srceID 	= srce.data('id');
			if (srce.hasClass('cases')) {
				cases_id.push(srceID);
			}

			if (srce.hasClass('sequences')) {
				seq_id.push(srceID);
			}

		}

if (action=='add') {		
		if (!seq_id.length || seq_id.length>1 || !cases_id.length) {
			alert('U Need to Select 1 Sequence MAX with 1 Asset(s) at least !!!')
			console.log('cases FALSE : ' + cases_id);
			console.log('sequence FALSE : ' + seq_id);			
			return;
		}
}
		console.log('cases ok : ' + cases_id);
		console.log('sequence ok : ' + seq_id);

		return {cases:cases_id,sequence:seq_id}
}



function callback_ok(msg){

	$('#nbNodes_menuSTG').html("").hide();
	$('#nbNodes_menuSTG').html(msg).show();
    // $('#nbNodes_menuSTG').fadeOut('slow', function(){
    //     // $('#nbNodes_menuSTG').fadeIn('slow');
    // });
    // $("#nbNodes_menuSTG").fadeIn(3000).delay(1000).fadeOut("slow");
    $("#nbNodes_menuSTG").delay(200).fadeOut(500);

    console.clear();
    console.log('saveST');
    console.log(window.localStorage[session_project]);

}


function checkConnectable(srce, dest) {
	if (srce.hasClass('shots'))
		return false;
	if (srce.hasClass('assets') && !dest.hasClass('scenes master'))
		return false;
	if (srce.hasClass('scenes') && dest.hasClass('assets'))
		return false;
	if (srce.hasClass('cases') && dest.hasClass('sequences'))
		return false;

	return true;
}


















function pos_seq_id(){
	var result = 500;

			console.log("-------------------------pos_seq_id seq -------------------------");
			console.log(result);
			console.log("-------------------------pos_seq_id seq -------------------------");

	return result;
}









function delete_zip(){
		console.log('delete zip files');

				$.ajax({
				  type: "POST",
				  url: "_storygraph/zip_project.php",
				  // datatype: "html",
				  // data: dataString,
				  // dataType : "json",
				  data: {'delete': 'delete' },
				  	success: function(msg) {
				  		console.clear();
				    	console.log('delete tmp zip files ok');
				    },
				  	error: function(msg) {
					    console.log('delete tmp zip files NO');
					}
				});
}
// delete_zip();

function save_to_localstorage(){

		var allJson = cy.elements().jsons(); // todo better in a function 
		window.localStorage[session_project] = JSON.stringify(allJson);

}


	$('#get_project_data').on("click", function(){
		console.log('zip project');

				$.ajax({
				  type: "POST",
				  url: "_storygraph/zip_project.php",
				  // datatype: "html",
				  // data: dataString,
				  // dataType : "json",
				  data: {'create': 'create' },
				  	success: function(msg) {
				  		console.clear();
				    	console.log('zip ok');
				    	window.location.href = "__projects/STORYGRAPH_"+session_project+".zip";
				    	// delete_zip();
				    },
				  	error: function(msg) {
					    console.log('zip NO');
					}
				});

	});








	// Cases addToSequence
	$('#addToSequence').click(function(){
		
		var nodes_selected = cy.$(":selected");	
		var result = get_cases_sequence(nodes_selected,'add');
		var cases =result.cases;
		var sequence_id =result.sequence[0];
		console.log(cases);
		console.log(sequence_id);


		

		for (i=0; i<cases.length; i++) {

			var node_case_TOcopy = [];

			// caseID = cases[i]+"_copied"; // IMPORTANT must be different as Original, or delete Original first see #CASEID
			caseID = cases[i]; // IMPORTANT must be different as Original, or delete Original first
			console.log(caseID);



			var node_to_copy = cy.getElementById( caseID);


			var parentID = sequence_id;
			console.log(parentID);
			var caseName = node_to_copy.data('name');
			console.log(caseName);
			var caseLabel = node_to_copy.data('label');
			console.log(caseLabel);		
			var caseType = node_to_copy.data('type');
			console.log(caseType);		
			var group = node_to_copy.group();
			console.log(group);
			var cl_classes = "cases";
			console.log(cl_classes);




			node_case_TOcopy.push({
				group: "nodes",
				// data: {id: "c1" + i, parent: "n0"},
				data: {id: caseID, name: caseName, type: caseType, label: caseLabel, parent: parentID},
				// position: {x: list[i].position('x'), y: list[i].position('y')},
				group: group,
				classes: cl_classes
			});

			// delete old original nodes
			// var node_to_del = cy.getElementById( caseID ); // see #CASEID
			cy.remove('#'+caseID); // delete

			// add elem cases selected to copy
			cy.add(node_case_TOcopy);




		}


			//save
			$('#save_ST').trigger('click');

		return;


	});




	// Cases removeFromSequence
	$('#removeFromSequence').click(function(){
		
		var nodes_selected = cy.$(":selected");	
		var result = get_cases_sequence(nodes_selected,'removed');
		var cases =result.cases;

		var dec_y = 50; // to do better , from height case

		for (i=0; i<cases.length; i++) {

















			var node_case_TOcopy = [];

			// caseID = cases[i]+"_copied"; // IMPORTANT must be different as Original, or delete Original first see #CASEID
			caseID = cases[i]; // IMPORTANT must be different as Original, or delete Original first
			console.log(caseID);



			var node_to_copy = cy.getElementById( caseID);


			var parentID = node_to_copy.data('parent');
			console.log(parentID);





		var sequence_id = parentID;
		console.log("------------------------- cases -------------------------");
		console.log(cases);
		console.log("------------------------- sequence_id -------------------------");
		console.log(sequence_id);


			var seq = cy.getElementById(sequence_id);
			var position_seq = seq.position();
			console.log("-------------------------position seq-------------------------");
			console.log(position_seq);
			console.log("-------------------------position seq-------------------------");	

var position_seq_x = seq.position('x');
			console.log("-------------------------position seq x-------------------------");
			console.log(position_seq_x);
			console.log("-------------------------position seq x-------------------------");
var position_seq_y = seq.position('y');
			console.log("-------------------------position seq y-------------------------");
			console.log(position_seq_y);
			console.log("-------------------------position seq y-------------------------");






var r = pos_seq_id(sequence_id);
			console.log("------------------------- pos_seq_id -------------------------");
			console.log(r);
			console.log("------------------------- pos_seq_id -------------------------");






var new_pos_y = dec_y + r;


















			var caseName = node_to_copy.data('name');
			console.log(caseName);
			var caseLabel = node_to_copy.data('label');
			console.log(caseLabel);		
			var caseType = node_to_copy.data('type');
			console.log(caseType);		
			var group = node_to_copy.group();
			console.log(group);
			var cl_classes = "cases";
			console.log(cl_classes);
var position_x = node_to_copy.position('x');
console.log(position_x);
var position_y = node_to_copy.position('y');
console.log(position_y);

			var position = node_to_copy.position();
			console.log("-------------------------position-------------------------");
			console.log(position);
			console.log("-------------------------position-------------------------");


			node_case_TOcopy.push({
				group: "nodes",
				// data: {id: "c1" + i, parent: "n0"},
				data: {id: caseID, name: caseName, type: caseType, label: caseLabel},
				position: {x: position_x, y: new_pos_y},
				group: group,
				classes: cl_classes
			});

			// delete old original nodes
			// var node_to_del = cy.getElementById( caseID ); // see #CASEID
			cy.remove('#'+caseID); // delete

			// add elem cases selected to copy
			cy.add(node_case_TOcopy);




		}

			//save
			$('#save_ST').trigger('click');


		return;



	});
///////////////////////////////////////////




console.log(window.localStorage[session_project]);




// create_assets_folders();
// localstorage_check_txt();
// load_localStorage();


// create_assets_folders();





	

	// Highlight children on hover
	cy.on('mouseover', 'node', function(e){
		e.cyTarget.addClass('highlight').outgoers().addClass('highlight');
		if (e.originalEvent.ctrlKey && cy.$(":selected").length)
			e.cyTarget.addClass('conxlight');
	});
	cy.on('mouseout', 'node', function(e){
		e.cyTarget.removeClass('highlight conxlight').outgoers().removeClass('highlight');
	});


	///////////// Menu principal //////////////

	// Choix du layout
	$('#layoutCh').on('change', function(){
		layoutChoosen = $(this).val();
		cy.layout({'name': layoutChoosen, animate: true});
	});

	// Bouton FIT
	$('#fit, #fitM').click(function(){
		cy.fit();
		console.log("fit fitM from main.js");
	});

	// Bouton REDRAW
	$('#redraw').click(function(){
		cy.layout({'name': layoutChoosen, animate: true});
	});

	// Bouton CLEAR
	$('#clear, #clearM').click(function(){
		if (!confirm("Vider le graph ? Sûr ?")) return;
		cy.remove('*');
	});


	$('#help_ST').on("click", function(){
		console.log('help click from main.js');
		$('#menuLeft_ST_memo').toggle();
	});


	// Comportement à la sélection
	cy.on('select', function(e){
		$('#deleteNodes').removeClass('disabled');
	});
	cy.on('unselect', function(e){
		if (! cy.$(':selected').length)
			$('#deleteNodes').addClass('disabled');
	});

	// Connexions manuelles
	cy.on('tapstart', 'node', function(e){
		if (!e.originalEvent.ctrlKey)
			return;
		var parents = cy.$(":selected");
		if (!parents.length)
			return;
		for (i=0; i<parents.length; i++) {
			var srce 	= parents.eq(i);
			var srceID 	= srce.data('id');
			var srceName 	= srce.data('name');
			var dest 	= e.cyTarget;
			var destID 	= dest.data('id');
			var destName 	= dest.data('name');
			if (!checkConnectable(srce, dest))
				return true;
			var edge = {
				data: {
					id: "E"+srceID+destID,
					source: srceID,
					target: destID
				},
				group: "edges"
			}
			cy.add(edge);
			console.log(srceName + " connection to '"+destName+"' OK.");

			//save
			$('#save_ST').trigger('click');

		}
	});
	cy.on('tapend', 'node', function(e){
		if (e.originalEvent.ctrlKey) {
			console.log("Unselect '"+e.cyTarget.data('name')+"'...");
			setTimeout(function(){ e.cyTarget.unselect(); }, 50);
		}
	});
	
	// Bouton DELETE sélection
	$('#deleteNodes').click(function(){
		console.log("del sel from main");
		cy.remove(":selected");
		$('#deleteNodes').addClass('disabled');
	});

	$('#deleteNodes_ST').click(function(){
		console.log("del sel from main");
		cy.remove(":selected");
		// $('#deleteNodes').addClass('disabled');
	});

	// Bouton LOAD
	$('#load').click(function(){
		cy.remove('*');
		$('#deleteNodes').addClass('disabled');
		if (window.localStorage[session_project] !== "") {
			var elems = JSON.parse(window.localStorage[session_project]);
			if (elems.length) {
				cy.add(elems);
				cy.layout({'name': layoutChoosen, animate: true});
				return;
			}
		}
		var version = Date.now();
		$.getJSON('./elements.json?v='+version, function(elems){
			cy.add(elems).layout({'name': layoutChoosen, animate: true});
		});
	});

	// Bouton SAVE
	$('#saveTOP_des').click(function(){
		console.log("save graph from to menu debug");
		// if (!cy.elements().length)
		// 	return;

		// var allJson = cy.elements().jsons();
		// window.localStorage[session_project] = JSON.stringify(allJson);
		save_to_localstorage();

		$('#nbNodes').html("OK, "+cy.nodes().length+" éléments en mémoire.").show();

		var msg = "OK, "+cy.nodes().length+" asset(s) saved.";
		callback_ok(msg);
	});




	$('#save_ST').click(function(event, check_arrays='true'){
		console.log("saveST graph from main.js");
		// if (!cy.elements().length)
		// 	return;
		// var allJson = cy.elements().jsons();
		// window.localStorage[session_project] = JSON.stringify(allJson);
		// $('#nbNodes_menuSTG').html("OK, "+cy.nodes().length+" éléments en mémoire.").show();
		// console.log(window.localStorage[session_project]);

		console.log("trigger : "+check_arrays);
		
		console.log(localStorage.uiMenuBin);
		console.log(cy.elements().length);
		// if (!cy.elements().length)
		// 	return;

		// var allJson = cy.elements().jsons(); // todo better in a function 
		// window.localStorage[session_project] = JSON.stringify(allJson);
		save_to_localstorage();

		
		console.log(window.localStorage[session_project]);
		  $.ajax({ // todo better in a function
		    type: 'POST',
		    url: '_storygraph/save_graphNodes.php', // create_assets_folders TO DO BETTER
		    // data: {'nodes': window.localStorage[session_project] , 'del_dir': check_arrays},
		    data: {'nodes': window.localStorage[session_project] },
		    success: function(msg) {
		      console.log(msg);

				  if(localStorage.uiMenuBin=='bt_sequences_clicked'){
					  var url = 'sequences_bin.php';
					  //$("#iframe-right-component").attr("src", url);
				  }

				  if(localStorage.uiMenuBin=='bt_cases_clicked'){
					  var url = 'cases_bin.php';
					  //$("#iframe-right-component").attr("src", url);
				  }

				  if(localStorage.uiMenuBin=='bt_medias_clicked'){
					  var url = 'medias_bin.php';
					  //$("#iframe-right-component").attr("src", url);
				  }

				  $("#iframe-right-component").attr("src", url);

				// $('#nbNodes_menuSTG').html("").hide();
				// $('#nbNodes_menuSTG').html("OK, "+cy.nodes().length+" asset(s) saved.").show();
			 //    // $('#nbNodes_menuSTG').fadeOut('slow', function(){
			 //    //     // $('#nbNodes_menuSTG').fadeIn('slow');
			 //    // });
			 //    // $("#nbNodes_menuSTG").fadeIn(3000).delay(1000).fadeOut("slow");
			 //    $("#nbNodes_menuSTG").delay(200).fadeOut(500);




				  create_assets_folders();
				  var msg = "OK, "+cy.nodes().length+" asset(s) saved.";
				  callback_ok(msg);
				  
		    },
	        error: function() {
	          alert("There was an error. Try again please!");
	          console.log('ERROR saveST');
	        }
		  });
		  
		  return false;

	});	

	


	// Bouton OUBLIER LocalStorage
	$('#emptyLS').click(function(){
		window.localStorage[session_project] = "";
		$('#nbNodes').html("OK, plus rien en mémoire.").show();
		var msg = "Nothing in memory anymore.";
		callback_ok(msg);
	});

	// Affichage du nombre de nodes loaded
	cy.on('layoutready', function(){
		if (cy.nodes().length) {
			$('#nbNodes').html("Ok ! "+ cy.nodes().length +' nodes loaded.').show();
			setTimeout(function(){ $('#nbNodes').fadeOut() }, 4000);

			var msg = "Ok ! "+ cy.nodes().length +' nodes loaded.';
			callback_ok(msg);
		}
		else
			$('#nbNodes').html("Rien à afficher.").show();

			var msg = "Nothing loaded.";
			callback_ok(msg);
	});


	///////////// Menu de droite //////////////

	$('.nodeModel').draggable({
		helper: "clone",
		cursor: "pointer"
	});
	$('#container').droppable({
		accept: ".nodeModel",
		drop: function (e, ui) {
			var nodeModel = ui.draggable.get(0);
			var offset = $('#container').offset();
			var idE	 = cy.nodes().length + 1;

			// get last nodes id
			var last_nodes_ID = get_lastNodes_id();

			var idE = last_nodes_ID + 1;
			// console.log(idE);

			var type = $(nodeModel).data('type');
			var name = type+"_"+idE;


			var elem = {
				data: {
					id: idE,
					// name: "test "+type
					name: name,
					type: type+"s",
					label: "#"+idE+ " | " + name
				},
				renderedPosition: {
					x: e.pageX - offset.left,
					y: e.pageY - offset.top
				},
				group: "nodes",
				classes: type+"s"
			};
			cy.add(elem);
			// cy.layout({'name': layoutChoosen, animate: true});

			//save
			$('#save_ST').trigger('click');

			//
			cy.layout();
		}
	});

	///////////// Menu contextuel //////////////

	// Init
	cy.on('cxttap', 'node', function(e){

		var type = e.cyTarget.data('type');
// var type = '';
// if (e.cyTarget.hasClass('sequences')=="sequences") { type = 'sequences';}	
// if (e.cyTarget.hasClass('cases')=="cases") { type = 'sequences';}	

		$('.ctxNodeTitle').html(e.cyTarget.data('name'));
		var offset = $('#container').offset();
		lastClickCoords = [e.originalEvent.pageX -offset.left, e.originalEvent.pageY -offset.top];
		contextSelection = e.cyTarget.data('id');
		$('.overNode, .nodeAction').show();

		// if (type=="sequences") { $('.nodeActionCase').hide();}


		$("#contextMenu").css({'top': (e.originalEvent.pageY-5)+'px', 'left': (e.originalEvent.pageX-10)+'px'}).show();
		e.originalEvent.preventDefault();
		e.originalEvent.stopPropagation();
		return false;
	});
	cy.on('cxttap', function(e){
		if (e.cyTarget.length) return false;
		lastClickCoords = [e.originalEvent.pageX -30, e.originalEvent.pageY -120];
		$('.overNode, .nodeAction').hide();
		$("#contextMenu").css({'top': (e.originalEvent.pageY-5)+'px', 'left': (e.originalEvent.pageX-10)+'px'}).show();
		e.originalEvent.preventDefault();
		e.originalEvent.stopPropagation();
		return false;
	});
	$('#contextMenu').on('mouseleave click', function(){
		$(this).hide();
	});

	// Ajout de node
	$('.addNode').click(function(e){

		// get last nodes id
		var last_nodes_ID = get_lastNodes_id();

		var type = $(this).data('type');
		// var idE	 = cy.nodes().length + 1;
		var idE = last_nodes_ID + 1;
		var name = type+"_"+idE;
		var elem = {
			data: {
				id: idE,
				// name: "test "+type
				name: name,
				type: type+"s",
				label: "#"+idE+ " | " + name
			},
			renderedPosition: {
				x: lastClickCoords[0],
				y: lastClickCoords[1]
			},
			group: "nodes",
			classes: type+"s"
		};
		cy.add(elem);

	    //save
	    $('#save_ST').trigger('click');	

	});

	// Suppression de node
	$('#deleteNode').click(function(){
		cy.remove('#'+contextSelection);
	});

	// Renommage de node
	$('#renameNode').click(function(){
		var Id = cy.$('#'+contextSelection).data('id');
		var curName = cy.$('#'+contextSelection).data('name');
		// var newName = prompt('Nouveau nom');
		console.clear();
		var newName = prompt('New Name',curName);

	
		if(!newName || curName == newName)return false;
		if (newName === null || newName === curName) {
		    // cancel button was hit
		    // or the same value was entered
		    return false;
		}


		if (newName === "") {
		    // user pressed OK, but the input field was empty
		    console.log('false');
		    return false;
		} else if (newName) {
		    // user typed something and hit OK
		    console.log('true');
		    cy.$('#'+contextSelection).data('name', newName);
		    cy.$('#'+contextSelection).data('label', '#'+Id + ' | ' + newName);
		    //save
		    $('#save_ST').trigger('click');		
		} else {
		    // user hit cancel
		    console.log('false');
		    return false;
		}



	});







// 	cy.on('layoutready', function(){
// 			//cy.nodes().each(function(i) {

// 					console.log('--XXXXXXXXXXXXXXXXX--------------this');
// 					// if (this.hasClass('highlight')){
// 					// 	console.log(this);
// 					// }


// 				// var node = this;
// 				// this.unselect();
// 				// this.removeClass('highlighted')	;
// 				// // this.removeClass('highlight conxlight').outgoers().removeClass('highlight');
// 				// // cy.elements().difference(this.outgoers()).not(sel).addClass('semitransp');
// 				// // this.removeClass('highlighted').outgoers().removeClass('highlighted');
// 				// this.removeClass('highlight conxlight').outgoers().removeClass('highlight');

// // overlay-opacity class

// 			// });
// 	});






















	// Connexion des nodes en drag & drop
	//
	// cy.edgehandles({
	// 	enabled: false,
	// 	handleColor: '#FFF',
	// 	hoverDelay: 200,
	// 	toggleOffOnLeave: true,
	// 	edgeType: function( sourceNode, targetNode ) {
	// 		if (sourceNode.hasClass('shots'))
	// 			return null;
	// 		if (sourceNode.hasClass('assets') && targetNode.hasClass('shots'))
	// 			return null;
	// 		if (sourceNode.hasClass('scene') && targetNode.hasClass('assets'))
	// 			return null;
	// 		if (cy.$('#E'+sourceNode.data('id')+targetNode.data('id')).isEdge())
	// 			return null;
	// 		return 'flat';
	// 	},
	// 	edgeParams: function(sourceNode, targetNode, i) {
	// 		var edgeClass = "";
	// 		if (sourceNode.hasClass('assets') && !targetNode.hasClass('shots'))
	// 			edgeClass = "assetsLine";
	// 		if (sourceNode.hasClass('scenes') && !targetNode.hasClass('assets'))
	// 			edgeClass = "scenesLine";
	// 		if (targetNode.hasClass('shots') && !sourceNode.hasClass('assets'))
	// 			edgeClass = "shotsLine";
	// 		return {
	// 			data: {
	// 				id: "E"+sourceNode.data('id')+targetNode.data('id'),
	// 				source: sourceNode.data('id'),
	// 				target: targetNode.data('id')
	// 			},
	// 			group: "edges",
	// 			classes: edgeClass
	// 		}
	// 	}
	// });
	// $('.switchMode').click(function(){
	// 	if (!$(this).hasClass('switchOn')) {
	// 		$(this).addClass('switchOn').find('span').html("ON");
	// 		cy.edgehandles('enable');
	// 	}
	// 	else {
	// 		$(this).removeClass('switchOn').find('span').html("(off)");
	// 		cy.panBy({x:1, y:0});
	// 		cy.edgehandles('disable');
	// 	}
	// });

});
// Document Ready Ends