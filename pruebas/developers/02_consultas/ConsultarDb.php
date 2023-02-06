<?php

class ConsultarDb{

    public $username = "sgil";
    
    public $dataUser; 
    public $user; 
    public $gate = 0; 
    public $contador = -1;
    public $result; 



    function consultar($userName){
        
    $users_json = file_get_contents('bbdd_new.json');
    $decoded_json = json_decode($users_json, true);
    
    echo '<br><br>';
    print_r($decoded_json);
    echo '<br><br>';

    $array = $decoded_json;

    foreach ($array as $posicion) {
        $userName = $posicion['userName'];
        var_dump($userName);



            
        }

    }



}

?>