<?php 
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $contacts = [];

    $q = "SELECT * FROM contacts";

    $stmt = $conn->prepare($q);

    $stmt->execute();

    $contacts = $stmt->fetchAll();

?>