<?php

    $theVar = array('customInt' => 5);
   
    header('Content-Type: application/json');
    
    //Encode the variable, and save the encoded string
    $encoded = json_encode($theVar);

    //Output it
    echo $encoded;


?>