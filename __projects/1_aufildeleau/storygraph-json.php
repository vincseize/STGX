<?php
// Start the session
session_start();

require_once('../../inc/define.php');

$json = file_get_contents('localstorage_graph.txt');
// Décode le JSON
$json_data = json_decode($json,true);

function get_bg_ext($bg_path){
	$ext = "";
	$files = glob($bg_path); 
	if (count($files) > 0)
	foreach ($files as $file)
	 {
	    $info = pathinfo($file);
	    $ext = $info["extension"];
	 }
	return $ext;
}





// $arrayID = array();
// foreach($json_data as $v){
//     $classes = $v['classes'];
//     if($classes == 'cases'){
//       $id_case = $v['data']['id'];
//       $arrayID[] = $id_case;
//     }
// }

// $arrayTarget = array();
// foreach($json_data as $v){
//   $s = $v['data']['source'];
//   $t = $v['data']['target'];
//   if(!empty($t) || $t === 0){
//     $arrayTarget[$s] = $t;
//   }
// }

// $arrayTarget = array_unique(array_filter($arrayTarget));

// $arID=array_diff($arrayID,$arrayTarget);

// $ID_first_case = array_values($arID)[0];

// $_SESSION["CHAIN_ID"] = $ID_first_case; // todo better
// $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($arrayTarget));
// function get_target_ID($source,$iterator){
//     foreach ($iterator as $key => $target) {
//         if ($key === intval($source)) {
// 			$_SESSION["CHAIN_ID"] = $_SESSION["CHAIN_ID"]. '-' . $target;
//           	get_target_ID($target,$iterator);
//         }
//     }
// }
// get_target_ID($ID_first_case,$iterator);


// $_SESSION["CHAIN_ID"] = $_SESSION["CHAIN_ID"]; // todo better
$IDS_CHAINED_NODES = explode("-",$_SESSION["CHAIN_ID"]);
// echo '<pre>' . var_dump($IDS_CHAINED_NODES) . '</pre>';


// construct json
$json = array();
foreach ($IDS_CHAINED_NODES as $id) {
// echo '<pre>' . $id . '</pre>';
		foreach($json_data as $v){
			$i = $v['data']['id'];
			if($i == $id){
				// find classes, cases or sequences
				$classes = $v['classes'];
				//echo '<pre>' . $classes . '</pre>';
				// find extension
				$bg_path = "cases/case_".$id."/case_".$id."_bg.*";
				$ext = get_bg_ext($bg_path);
				//echo '<pre>' . $ext . '</pre>';
			}
		}
		$node = [];
		$node[] = $classes;
		$node[] = $id;
		$node[] = $ext;
		$json[] = $node;
}


// $json_string = '[
// 			{"classes":"cases","id":"7","ext":"jpg"},
// 			{"classes":"cases","id":"6","ext":"jpg"},
// 			{"classes":"cases","id":"9","ext":"jpg"},
// 			{"classes":"cases","id":"3","ext":"jpg"},
// 			{"classes":"cases","id":"2","ext":"jpg"}
//     	]';
// $json = $json_string;

$myFile = "storygraph-json.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = json_encode($json);
fwrite($fh, $stringData);
fclose($fh);

echo json_encode($json);

?>