<?php
  if(isset($_POST['nodes'])) {
    $json = $_POST['nodes'];
    //var_dump(json_decode($json, true));
    // $nodes = var_dump(json_decode($json, true));
    // $nodes = json_decode($json, true);
    //echo $nodes;
    // echo basename(__DIR__);


// echo $nodes;
$id_name = array();


$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {

$classe == "";

    // if(is_array($val)) {
    //     echo "$key:\n";
    // } else {
    //     echo "$key => $val\n";
    // }
    // if(!is_array($val)) {
    //     if($key == "id") {
    //         echo "$key => $val\n";
    //         $catList[$key["id"]] = $key["name"];
    //     }
    //     if($key == "name") {
    //         echo "$key => $val\n";
    //     }
    // }

    if(!is_array($val)) {
                //echo "$key => $val\n";
                if($key == "id") {
                    //echo $key["id"];
                    //echo "$key => $val\n";
                    $id = $val;
                }
                if($key == "name") {
                    // echo "$key => $val\n";
                    $name = $val;
                }
                if($key == "classes") {
                    //echo "$key => $val\n";
                    $classe = $val;
                }
                //if($classe == "cases" or $classe == "sequences"){
                if (strpos($classe, 'cases') !== false or strpos($classe, 'sequences') !== false) {
                    $id_name[$id] = $name;
                    $classe == "";
                }
    }




}















  }
  else {
    echo "Error";
  }


print_r($id_name);

?>
