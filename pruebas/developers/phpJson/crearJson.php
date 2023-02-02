<?php 
//file_get_contents($pathOfFile, $info, $customContext, $mode);

// data strored in array
$array = Array (
    "0" => Array (
        "id" => "01",
        "name" => "Olivia Mason",
        "designation" => "System Architect"
    ),
    "1" => Array (
        "id" => "02",
        "name" => "Jennifer Laurence",
        "designation" => "Senior Programmer"
    ),
    "2" => Array (
        "id" => "03",
        "name" => "Pepita Oliver",
        "designation" => "Office Manager"
    ),
    
    "3" => Array (
        "id" => "04",
        "name" => "NUevo Oliver",
        "designation" => "Office"
    )
);

// convierto array en un nuevo archivo myfile.json
$json = json_encode($array,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);

$bytes = file_put_contents("myfile.json", $json);

echo "The number of bytes written are $bytes.";

echo "<pre>".$json."</pre>";

?>