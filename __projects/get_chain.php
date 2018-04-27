<?php

// echo 'toto';

// Si les données json sont dans un fichier distant:
$json = file_get_contents('localstorage_graph.txt');

// Décode le JSON
$json_data = json_decode($json,true);


$arrayID = array();
foreach($json_data as $v){

    $classes = $v['classes'];

    if($classes == 'cases'){
      
      $id_case = $v['data']['id'];
      // echo $id_case;
      $arrayID[] = $id_case;

    }
    
}

// print_r($arrayID) ;
// $txt = fopen('arrayID.txt', 'w+') or die("Unable to open file!");
// fwrite($txt, $arrayID);
// fclose($txt);



$arrayTarget = array();
foreach($json_data as $v){

  $s = $v['data']['source'];
  $t = $v['data']['target'];

  if(!empty($t) || $t === 0){
    $arrayTarget[$s] = $t;
  }
}





$arrayTarget = array_unique(array_filter($arrayTarget));
// echo "<br>";
// print_r($arrayTarget) ;


$arID=array_diff($arrayID,$arrayTarget);
// echo "<br>";
// print_r($arID) ;


$ID_first_case = array_values($arID)[0];

$_SESSION["CHAIN_ID"] = $ID_first_case; // todo better
$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($arrayTarget));
function get_target_ID($source,$iterator){

    foreach ($iterator as $key => $target) {
        if ($key === intval($source)) {


$_SESSION["CHAIN_ID"] = $_SESSION["CHAIN_ID"]. '-' . $target;


          get_target_ID($target,$iterator);

          
        }


    }

    
}



get_target_ID($ID_first_case,$iterator);


$_SESSION["CHAIN_ID"] = $_SESSION["CHAIN_ID"]; // todo better
$IDS_CHAINED_NODES = explode("-",$_SESSION["CHAIN_ID"]);
// echo '<pre>' . var_dump($IDS_CHAINED_NODES) . '</pre>';


?>