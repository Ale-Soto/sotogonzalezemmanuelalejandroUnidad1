<?php
 session_start();
 include_once "conexion.php";
$database = new Connection();
$db = $database->open();

 if(isset($_SESSION["id_unico"])){ //si el usuario está logueado
  $est = 0;
  try{
   $query = $db->prepare("UPDATE usuarios SET status = :est WHERE unique_id = :id");
   $query->bindParam(':est', $est);
   $query->bindParam(':id', $_SESSION['id_unico']);
   $query->execute(); // Ejecutar la consulta
   session_unset();
   session_destroy();

   header("location: ../index.php");

  } catch(PDOException $e) {
   echo "Algo salió mal - {$e->getMessage()}";
  }
 } else {
  header("location: ../index.php");
 }