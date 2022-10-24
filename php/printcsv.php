<?php
$file=fopen("../storage/users.csv","r");
while (($list=fgetcsv($file))!==FALSE) {
    foreach($list as $fact){
        $bur[]=$fact;
    print_r($fact);
}
}
fclose($file);
?>