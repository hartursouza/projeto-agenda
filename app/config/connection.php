<?php 

    $host = 'localhost';
    $dbname = 'cursophp';
    $user = 'root';
    $pass = '';

    try {

        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

        //Activate error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
    } catch (PDOException $e) {
        // Error on conection
        $error = $e->getMessage();
        
        echo "Erro; $error";
    }

?>