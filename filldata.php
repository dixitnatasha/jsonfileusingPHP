<?php

$str = file_get_contents('results.json');
$array = json_decode($str, true);

$data = array('name' => $_POST["name"],
			  'city' => $_POST["city"],
			  'occupation' => $_POST["occupation"]
			 );

$array[]= $data;

$json_data = json_encode($array);

$str = file_put_contents('results.json',$json_data);

header('Location: index.php');