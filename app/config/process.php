<?php 
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $id;

    if(!empty($_GET)){
        $id = $_GET['id'];
    }

    //Selecionar um contato

    if(!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {
        //Selecionar todos os contatos

        $contacts = [];

        $q = "SELECT * FROM contacts";

        $stmt = $conn->prepare($q);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }

    

?>