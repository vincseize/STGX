<?php
session_start();

// function delete_dir($dir){
//     //echo "$dir \n";
//     //$dir = 'samples' . DIRECTORY_SEPARATOR . 'sampledirtree';
//     $cases = "/cases/";
//     $sequences = "/sequences/";
//     // $file01 = "D:\wamp\www\wp-content/themes/index.php";
//     // $file02 = "D:\wamp\www\wp-content/wp-themes/index.php";

//     $is_case = stripos($dir, $cases ); // returns true
//     $is_sequence = stripos($dir, $sequences ); // returns false
//     if($is_case==true OR $is_sequence==true){
//         $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
//         $files = new RecursiveIteratorIterator($it,
//                      RecursiveIteratorIterator::CHILD_FIRST);
//         foreach($files as $file) {
//             if ($file->isDir()){
//                 rmdir($file->getRealPath());
//             } else {
//                 unlink($file->getRealPath());
//             }
//         }
//         rmdir($dir);
//         echo "$dir deleted \n";
//     }
// }

 if(isset($_POST['nodes'])) {

    $json = $_POST['nodes'];
    $nodes = json_decode($json, true);

    // $del_dir = "false";
    // if(isset($_POST['del_dir'])) { $del_dir = $_POST['del_dir'];}



    $path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . $_SESSION["PROJECT"] . DIRECTORY_SEPARATOR;
    // $path_dir_cases = $path_dir . 'cases';
    // $path_dir_sequences = $path_dir . 'sequences';





// $del_dir_txt = fopen($path_dir . 'del_dir.txt', 'w+') or die("Unable to open file!");
// fwrite($del_dir_txt, $del_dir);
// fclose($del_dir_txt);




    // $div_to_refresh = $_POST['div_to_refresh'];
    // echo "$div_to_refresh \n";

    // $cases_in_graph = array();
    // $sequences_in_graph = array();

    // $cases_in_dir = array();
    // $sequences_in_dir = array();

// 
    $file = $path_dir . 'localstorage_graph.txt';
    if (file_exists($file)) {
        unlink($file);
    }

    $localstorage_graph_txt = fopen($path_dir . 'localstorage_graph.txt', 'w+') or die("Unable to open file!");

    fwrite($localstorage_graph_txt, $json);
    fclose($localstorage_graph_txt);


    // foreach(glob($path_dir_cases.'/*', GLOB_ONLYDIR) as $dir) {
    //     $dirname = basename($dir);
    //     //secho "$dirname \n";
    //     $cases_in_dir[] = $dirname;
    // }

    // foreach(glob($path_dir_sequences . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR) as $dir) {
    //     $dirname = basename($dir);
    //     //echo "$dirname \n";
    //     $sequences_in_dir[] = $dirname;
    // }

    // $jsonIterator = new RecursiveIteratorIterator(
    // new RecursiveArrayIterator(json_decode($json, TRUE)),
    // RecursiveIteratorIterator::SELF_FIRST);

	// foreach ($jsonIterator as $key => $val) {
 //        //print_r($val);
 //        //$id = "";
 //        //$classes = $val['classes'];
 //        $classes = "";

 //        try
 //          {
 //              $classes = $val['classes'];
 //              // echo  $classes."\n";
 //          }
 //          catch (Exception $e)
 //          {
 //              // do nothing... php will ignore and continue
 //          }


 //        //echo  $classes."\n";
 //        // if($classes == "cases" OR $classes == "sequences"){
 //        if (strpos($classes, 'highlight') === false) {  
 //                if (strpos($classes, 'cases') !== false or strpos($classes, 'sequences') !== false) {
 //                    echo  $classes."\n";
 //                    $id = $val['data']['id'];
 //                    // echo  $id."\n";
 //                    $type = substr($classes, 0, -1);
 //                    $name = $type."_".$id;
 //                    //$path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . '1_aufildeleau' . DIRECTORY_SEPARATOR . $classes . DIRECTORY_SEPARATOR . $name;
 //                    $path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . $_SESSION["PROJECT"] . DIRECTORY_SEPARATOR . $classes . DIRECTORY_SEPARATOR . $name;
 //                    //echo "$path_dir \n";
 //                    if (!file_exists($path_dir)) {
 //                        mkdir($path_dir, 0777, true);
 //                        foreach ($_SESSION["array_folders_case"] as $folder) {
 //                            mkdir($path_dir. DIRECTORY_SEPARATOR . $folder, 0777, true);
 //                        }
 //                        echo  $path_dir." folder created \n";
 //                        echo  $name." folder created \n";
 //                    }
 //                    if($classes == "cases"){
 //                        $cases_in_graph[] = $name;
 //                    }
 //                    if($classes == "sequences"){
 //                        $sequences_in_graph[] = $name;
 //                    }
 //                }
 //        }
        

	// }

  //       // echo "_in_dir \n";
  //       //         print_r($cases_in_dir);
  //       //         print_r($sequences_in_dir);
  //       print_r('_in_graph');
  //       print_r($cases_in_graph);
  //       print_r($sequences_in_graph);

  //       $result_cases_toDelete=array_diff($cases_in_dir,$cases_in_graph);

  //       $result_sequences_toDelete=array_diff($sequences_in_dir,$sequences_in_graph);

  //       echo " _to delete cases\n";
  //       print_r($result_cases_toDelete);
		// echo " _to delete sequences\n";
  //       print_r($result_sequences_toDelete);


// if($del_dir == "true") { 

//         // delete cases
//         foreach ($result_cases_toDelete as $name) {
//             $classes = explode("_",$name)[0]."s";
//             //$path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . '1_aufildeleau' . DIRECTORY_SEPARATOR . $classes . DIRECTORY_SEPARATOR . $name;
//             $path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . $_SESSION["PROJECT"] . DIRECTORY_SEPARATOR . $classes . DIRECTORY_SEPARATOR . $name;
//             //echo "$path_dir \n";
// //delete_dir($path_dir);
//         }
//         // delete sequences
//         foreach ($result_sequences_toDelete as $name) {
//             $classes = explode("_",$name)[0]."s";
//             //$path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . '1_aufildeleau' . DIRECTORY_SEPARATOR . $classes . DIRECTORY_SEPARATOR . $name;
//             $path_dir = '..' . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . $_SESSION["PROJECT"] . DIRECTORY_SEPARATOR . $classes . DIRECTORY_SEPARATOR . $name;
//             //echo "$path_dir \n";
// //delete_dir($path_dir);
//         }

// }




    echo "ok";

 }
  else {
      echo "Error";
  }

?>
