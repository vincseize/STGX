<?php

// $json = {
// 	"7":"jpg",
// 	"6":"jpg",
// 	"9":"jpg",
// 	"3":"jpg",
// 	"2":"jpg"
// };


$json = array('7' => 1, '6' => 2, '9' => 3, '3' => 4, '2' => 5);

$json = '[{"Language":"jQuery","ID":"1"},{"Language":"C#","ID":"2"},
                           {"Language":"PHP","ID":"3"},{"Language":"Java","ID":"4"},
                           {"Language":"Python","ID":"5"},{"Language":"Perl","ID":"6"},
                           {"Language":"C++","ID":"7"},{"Language":"ASP","ID":"8"},
                           {"Language":"Ruby","ID":"9"}]';

// $json = array(
//     "7" => "jpg",
//     "6" => "jpg",
//     "9" => "XXXPHP",
//     "3" => "jpg",
//     "2" => "jpg"
// );

// echo $json;
echo json_encode($json);

?>