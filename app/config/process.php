<?php 
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $q = "SELECT * FROM contacts";

    $stmt = $conn->prepare($q);

    $stmt->execute();

    $contacts = $stmt->fetchAll();

?>