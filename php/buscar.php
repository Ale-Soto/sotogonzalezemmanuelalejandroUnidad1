<?php
    session_start();
    include_once "conexion.php";
    $database = new Connection();
    $db = $database->open();

    $outgoing_id = $_SESSION['id_unico'];
    $searchTerm = trim($_POST['searchTerm']);
    $sql = "SELECT * FROM usuarios WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $query = $db->prepare($sql);
    $query->execute();
    $count = $query->rowCount();
    $output = "";
    if($count > 0){
        include_once "datos.php";
    }else{
        $output .= 'No se encontraron resultados :c';
    }
    echo $output;