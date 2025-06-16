<?php
 session_start();
 include_once "conexion.php";
$database = new Connection();
$db = $database->open();

$query = $db->prepare("SELECT * FROM usuarios WHERE unique_id <> :id");
$query->bindParam(":id", $_SESSION["id_unico"]);
$query->execute();
$count = $query->rowCount();
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
$output = "";

if($count == 1){
 $output.= "No hay usuarios disponibles";
} elseif($count > 1) {

 foreach($rows as $row){

  if($row["status"] > 0){
   $est = "En Línea";
  } else {
   $est = "Desconectado";
  }
  if($row["img"] > 0){ $img = "../imagenes/" . $row['img'];} else { $img = "../imagenes/unknown.png";}

  $output.= "<a href=\"chat.php?user_id={$row['unique_id']}\" style=\"text-style: none;\">
              <div class=\"user-card\">
               <div class=\"content\">
                <img src=\"{$img}\" alt=\"imagen-usuario\">
                <div class=\"details\">
                 <span>{$row['fname']} {$row['lname']}</span>
                 <p>{$est}</p>
                </div>
               </div>
              </div>
              <div class=\"status-dot\"><i class=\"fas fa-circle\"></i></div>
             </a>";
 }
}
echo $output;