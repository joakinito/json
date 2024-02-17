<?php


$record = array(
    "numero1" => 5,
    "numero2" => 10,
    "suma" => 15
);

$metadata = array(
    "id" => "65cfb9c9266cfc3fde8b3f32",
    "private" => false,
    "createdAt" => "2024-02-16T19:38:49.420Z"
);

$data = array(
    "record" => $record,
    "metadata" => $metadata
);


$json = json_encode($data);


header('Content-Type: application/json');


echo $json;

?>