<?php

// $opened=fopen("../storage/users.csv", "a");
if (($open = fopen("../storage/users.csv", "r")) !== FALSE)
{

	while (($data = fgetcsv($open, 1000, ",")) !== FALSE)
	{		
	$array[] = $data;
	}

	fclose($open);
}
// echo "<pre>";
// To display array data
// var_dump($array);


$words="As u can see";
$here= $array[2][1];
$replace=array($here=>$words);
$new=array_replace($array,$replace);
print_r($new[2]);

?>