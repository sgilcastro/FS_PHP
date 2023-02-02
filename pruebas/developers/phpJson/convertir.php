<?php



$people_info = [
    "customers" => [
        ["name" => "Andrew", "score" => 62.5],
        ["name" => "Adam", "score" => 65.0],
        ["name" => "Sajal", "score" => 72.2],
        ["name" => "Monty", "score" => 57.8]
    ]
];
echo json_encode($people_info);
/* 
{"customers":[{"name":"Andrew","score":62.5},{"name":"Adam","score":65},{"name":"Sajal","score":72.2},{"name":"Monty","score":57.8}]} 
*/
?>

<br>
<br>
<br>

<?php
$people_info = [
    "customers" => [
        ["name" => "Andrew", "score" => 62.5],
        ["name" => "Adam", "score" => 65.0],
        ["name" => "Sajal", "score" => 72.2],
        ["name" => "Monty", "score" => 57.8]
    ]
];
// Agregamos banderas (constants) para obtener la cadena JSON en el formato deseado. https://www.php.net/manual/en/json.constants.php

echo json_encode($people_info, JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);

echo "<pre>".json_encode($people_info,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION)."<pre>";
/* 
{ 
"customers": [ 
{ 
"name": "Andrew", 
"score": 62.5 
}, 
{ 
"name": "Adam", 
"score": 65.0 
}, 
{ 
"name": "Sajal", 
"score": 72.2 
}, 
{ 
"name": "Monty", 
"score": 57.8 
} 
] 
} 
*/
?>