<?php

include 'class.IPInfoDB.php';

$ip = $_POST['ip'];
$apiKey = $_POST['apiKey'];


// Load the class
$ipinfodb = new IPInfoDB($apiKey);

$results = $ipinfodb->getCity($ip);

$data = [];

if (!empty($results) && is_array($results)) {
	foreach ($results as $key => $value) {
		$data[$key] = $value;
    }
    echo json_encode($data);
}

