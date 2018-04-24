<?php
// Start the session
session_start();


function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    // @mkdir($dst); 
    mkdir($dst, 0777, true);
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 



// sudo apt-get install php7.0-zip

function Get_project_zip($source, $destination)
{
    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }

    $source = str_replace('\\', '/', realpath($source));

    if (is_dir($source) === true)
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($files as $file)
        {
            $file = str_replace('\\', '/', $file);

            // Ignore "." and ".." folders
            if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                continue;

            $file = realpath($file);

            if (is_dir($file) === true)
            {
                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            }
            else if (is_file($file) === true)
            {
                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
        }
    }
    else if (is_file($source) === true)
    {
        $zip->addFromString(basename($source), file_get_contents($source));
    }

    return $zip->close();
}

function copy_directory( $source, $destination ) {
    if ( is_dir( $source ) ) {
    @mkdir( $destination );
    $directory = dir( $source );
    while ( FALSE !== ( $readdirectory = $directory->read() ) ) {
        if ( $readdirectory == '.' || $readdirectory == '..') {
            continue;
        }
        $PathDir = $source . '/' . $readdirectory; 
        if ( is_dir( $PathDir ) ) {
            copy_directory( $PathDir, $destination . '/' . $readdirectory );
            continue;
        }
        copy( $PathDir, $destination . '/' . $readdirectory );
    }

    $directory->close();
    }else {
    copy( $source, $destination );
    }
}

function rrmdir($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (is_dir($dir."/".$object))
           rrmdir($dir."/".$object);
         else
           unlink($dir."/".$object); 
       } 
     }
     rmdir($dir); 
   } 
 }

function recurseRmdir($dir) {
  $files = array_diff(scandir($dir), array('.','..'));
  foreach ($files as $file) {
    (is_dir("$dir/$file")) ? recurseRmdir("$dir/$file") : unlink("$dir/$file");
  }
  return rmdir($dir);
}

function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last)
    {
        case 'g':
        $val *= 1024;
        case 'm':
        $val *= 1024;
        case 'k':
        $val *= 1024;
    }
    return $val;
}

function max_file_upload_in_bytes() {
    //select maximum upload size
    $max_upload = return_bytes(ini_get('upload_max_filesize'));
    //select post limit
    $max_post = return_bytes(ini_get('post_max_size'));
    //select memory limit
    $memory_limit = return_bytes(ini_get('memory_limit'));
    // return the smallest of them, this defines the real limit
    return min($max_upload, $max_post, $memory_limit);
}

$max_filesize_octets = max_file_upload_in_bytes();
//$max_filesize_octets = "4000000";
$max_filesize_mo = intval($max_filesize_octets / 1000000 );

function getAssetsList($dir){
    $retval=array();
    $iterator = new DirectoryIterator($dir);
    foreach ($iterator as $fileinfo) {
        if ($fileinfo->isDir() && !$fileinfo->isDot()) {
            array_push($retval,$fileinfo->getFilename());
        }
    }
    asort($retval);
    return $retval;
}

function localstorage_graph_read($project){
    $path = dirname(__FILE__);

    $folder_name = basename(__DIR__);

    $path__file__ = str_replace($folder_name, "", $path);

    $path_dir = $path__file__ . DIRECTORY_SEPARATOR . '__projects' . DIRECTORY_SEPARATOR . $project . DIRECTORY_SEPARATOR;

    $localstorage_graph = file_get_contents($path_dir."localstorage_graph.txt");
    $json = json_decode($localstorage_graph, true);
    return $json;
}

function localstorage_graph_id_name($project){
        // echo "<br>\n";
        // echo "<br>\n";
        // print_r('$id_name');
    // $path_dir = '__projects' . DIRECTORY_SEPARATOR . $project . DIRECTORY_SEPARATOR;
    // $localstorage_graph = file_get_contents($path_dir."localstorage_graph.txt");
    // $json = json_decode($localstorage_graph, true);
    $json = localstorage_graph_read($_SESSION["PROJECT"]);

    $id_name = array();

    foreach ($json as $key) {
        $classe = $key['classes'];
        // print_r($classe);
        // echo "<br>\n";
        //if($classe == "cases" or $classe == "sequences"){
        if (strpos($classe, 'cases') !== false or strpos($classe, 'sequences') !== false) {
            $id_name[$key['data']['id']] = $key['data']['name'];
        }
    }

    // echo "<br>\n";
    // echo "<br>\n";
    // print_r($id_name);

    return $id_name;

    // $name = $id_name['1'];
    // echo "<br>\n";
    // echo "<br>\n";
    // print_r($name);
    //
}

function compress_img($source, $destination, $quality) {

    $info = getimagesize($source);
    // print_r($info);
    // Output:
    // Array ( [0] => 1280 [1] => 768 [2] => 2 [3] => width="1280" height="768" [bits] => 8 [channels] => 3 [mime] => image/jpeg )

    if ($info['mime'] == 'image/jpeg'){
        $image = imagecreatefromjpeg($source);
    }
    elseif ($info['mime'] == 'image/gif'){
        $image = imagecreatefromgif($source);
    }
    elseif ($info['mime'] == 'image/png'){
        $image = imagecreatefrompng($source);
    }
    imagejpeg($image, $destination, $quality);

    return $destination;

}


function resize_thumb_case($width, $height, $type, $attr, $destination) {
    $maxDim = $_SESSION["max_thumb_case_width_height"];
    // $file_name = $_FILES['myFile']['tmp_name'];
    //list($width, $height, $type, $attr) = getimagesize( $source );
    if ( $width > $maxDim || $height > $maxDim ) {
        // $target_filename = $file_name;
        $ratio = $width/$height;
        if( $ratio > 1) {
            $new_width = $maxDim;
            $new_height = $maxDim/$ratio;
        } else {
            $new_width = $maxDim*$ratio;
            $new_height = $maxDim;
        }

        $target_filename = $destination;

        $thb = imagecreatetruecolor( $new_width, $new_height );
        imagecopyresampled( $thb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
        // imagedestroy( $destination );
        imagejpeg( $thb, $target_filename ); // adjust format as needed
        imagedestroy( $thb );
    }

}


function make_thumb_case($source, $destination, $quality) {

    $info = getimagesize($source);
    // print_r($info);
    // Output:
    // Array ( [0] => 1280 [1] => 768 [2] => 2 [3] => width="1280" height="768" [bits] => 8 [channels] => 3 [mime] => image/jpeg )


    if ($info['mime'] == 'image/jpeg'){
        $image = imagecreatefromjpeg($source);
    }
    elseif ($info['mime'] == 'image/gif'){
        $image = imagecreatefromgif($source);
    }
    elseif ($info['mime'] == 'image/png'){
        $image = imagecreatefrompng($source); // todo test png 
    }

    // create thumb
    imagejpeg($image, $destination, $quality);

    // resize thumb
    $maxDim = $_SESSION["max_thumb_case_width_height"];
    list($width, $height, $type, $attr) = getimagesize( $source );
    if ( $width > $maxDim || $height > $maxDim ) {
        $target_filename = $file_name;
        $ratio = $width/$height;
        if( $ratio > 1) {
            $new_width = $maxDim;
            $new_height = $maxDim/$ratio;
        } else {
            $new_width = $maxDim*$ratio;
            $new_height = $maxDim;
        }

        $target_filename = $destination;

        $thb = imagecreatetruecolor( $new_width, $new_height );
        imagecopyresampled( $thb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
        imagejpeg( $thb, $target_filename ); // adjust format as needed
        imagedestroy( $thb );

    }

    // resize_thumb_case($width, $height, $type, $attr, $destination); // todo

}


function make_comp_case($source, $destination, $quality) {

    $info = getimagesize($source);
    // print_r($info);
    // Output:
    // Array ( [0] => 1280 [1] => 768 [2] => 2 [3] => width="1280" height="768" [bits] => 8 [channels] => 3 [mime] => image/jpeg )


    if ($info['mime'] == 'image/jpeg'){
        $image = imagecreatefromjpeg($source);
    }
    elseif ($info['mime'] == 'image/gif'){
        $image = imagecreatefromgif($source);
    }
    elseif ($info['mime'] == 'image/png'){
        $image = imagecreatefrompng($source); // todo test png 
    }

    // create thumb
    imagejpeg($image, $destination, $quality);

    // resize to screen ? todo better
    // $maxDim = $_SESSION["max_thumb_case_width_height"];
    // list($width, $height, $type, $attr) = getimagesize( $source );
    // if ( $width > $maxDim || $height > $maxDim ) {
    //     $target_filename = $file_name;
    //     $ratio = $width/$height;
    //     if( $ratio > 1) {
    //         $new_width = $maxDim;
    //         $new_height = $maxDim/$ratio;
    //     } else {
    //         $new_width = $maxDim*$ratio;
    //         $new_height = $maxDim;
    //     }

    //     $target_filename = $destination;

    //     $thb = imagecreatetruecolor( $new_width, $new_height );
    //     imagecopyresampled( $thb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
    //     imagejpeg( $thb, $target_filename ); // adjust format as needed
    //     imagedestroy( $thb );

    // }

    // resize_thumb_case($width, $height, $type, $attr, $destination); // todo

}


function getCasesThumb($pattern) {

    $subPatterns = explode('/**/', $pattern);

    // Get sub dirs
    $dirs = glob(array_shift($subPatterns) . '/*', GLOB_ONLYDIR);

    // Get files in the current dir
    $files = glob($pattern);
    
    foreach ($dirs as $dir) {
        // echo $dir;
        $subDirList = getCasesThumb($dir . '/**/' . implode('/**/', $subPatterns));
        //$file = basename($subDirList);
        // $chunks = explode('/', $subDirList);
        // $file = end($chunks);
        // echo $file."<br>";
        //$files = array_merge($files, $subDirList);
        $files = array_merge($files, $subDirList);
    }

    $array_thumbs= array();
    foreach ($files as $file) {
        // $value = $value * 2;
        //echo $file."<br>";
        $chunks = explode('/', $file);
        $filename = end($chunks);
        //$filemtime = filemtime($file);
        //."?". filemtime($path_case."/thumbs/".$asset."_".$number."_bg.".$ext);
        $number = explode('_', $filename)[1];
        $array_thumbs[$number] = $filename."?".filemtime($file);
    }

    // return $files;
    // $json = json_encode($array_thumbs);
    // print_r($json);
    return $array_thumbs;
}






?>
