<?php
session_start();
include_once "conexion.php";
$database = new Connection();
$db = $database->open();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contra = $_POST['contra'];

if(!empty($nombre) && !empty($apellido) && !empty($email) && !empty($contra)){

 if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //si el correo es válido
  try {
   //cifrar contraseña antes de guardar
   $contra = password_hash($contra, PASSWORD_DEFAULT);

   //validaciones
   //Verificar existencia en la base de datos
   $query = $db->prepare("SELECT email FROM usuarios WHERE email = :email");
   $query->bindParam(':email', $email);
   $query->execute();
   $row = $query->rowCount();

   if($row > 0){
    echo "{$email} ya se encuentra registrado!";
    exit();
   } else {
    //Validar si el usuario ya subió una imágen
    if(isset($_FILES['imagen'])){ //si lo hizo
     $nombre_imagen = $_FILES['imagen']['name']; //obtener nombre del archivo cargado
     $tmp_name = $_FILES['imagen']['tmp_name']; //el nombre temporal es para guardar/mover a nuestra carpeta

     if (exif_imagetype($tmp_name)) { 
      //obtenemos la extensión del archivo
     $img_explode = explode('.', $nombre_imagen);
     $extension = end($img_explode); //guardamos la extension en la variable
     $arrayEx = ['png', 'jpeg', 'jpg']; //array con extensiones válidas que el usuario puede cargar
     if(in_array($extension, $arrayEx) === true){ //si la extension del archivo coincide con alguna dentro de nuestro array
      $time = time(); //Esto para obtener la hora actual, la cual concatenaremos al nombre del archivo para dar un nombre único a cada imagen
      //trasladamos la imagen que el usuario envía a nuestro folder particular
      $nombre_nuevo_img = $time.$nombre_imagen;
      if(move_uploaded_file($tmp_name, to: "../imagenes/{$nombre_nuevo_img}")){
       $estado = 1;
       $id_aleatorio = rand(time(), 10000000); //crear id aleatorio para el usuario

       //Insertar datos en la tabla
       $sql = $db->prepare("INSERT INTO usuarios (unique_id, fname, lname, email, password, img, status) VALUES (:id, :nombre, :apellido, :email, :contra, :img, :est)");
       $sql->bindParam(':id', $id_aleatorio);
       $sql->bindParam(':nombre', $nombre);
       $sql->bindParam(':apellido', $apellido);
       $sql->bindParam(':email', $email);
       $sql->bindParam(':contra', $contra);
       $sql->bindParam(':img', $nombre_nuevo_img);
       $sql->bindParam(':est', $estado);
       if($sql->execute())
       $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
       $stmt->bindParam(':email', $email);
       $stmt->execute();
       $find = $stmt->rowCount();
       if($find > 0){
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id_unico'] = $result['unique_id']; //Generamos una variable de sesión con el id asignado al usuario para acceder a su muro
        echo "exito";
        exit();
       }
      }
     } else {
      echo "Por favor selecciona una imágen jpg, jpeg o png!";
      exit();
     }
     } else {
      echo "El archivo debe ser una imágen";
      exit();
     }
    } else {
     echo "Por favor selecciona una imágen de perfil";
     exit();
    }
   }
  } catch (PDOException $e) {
   echo "Algo salió mal! - {$e->getMessage()}";
   exit();
  }
 } else {
  echo  $email ." No es un correo válido!";
  exit();
 }
} else {
 echo "Completar todos los campos!";
 exit();
}
$database->close();