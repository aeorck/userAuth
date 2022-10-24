<?php


function loadFIleContent($path){
    $content=file_get_contents($path);
    return $content;
}


function stringToCsv ($string){
    $result =array();
    $lines=explode("\n", trim($string));
    for($i=0;$i<count($lines); $i++){
        $current =$lines[$i];
        $result[]=str_getcsv(trim($current));
    }
    return $result;
}

error_reporting(E_ALL);
ini_set("display_errors", 1);

// include_once 'function.php';

$result=array();
$outputName="output.csv";
$fileInputName="./storage/users.csv";


$content=loadFIleContent($fileInputName);
$array=stringToCsv($content);
echo $result;
?>
