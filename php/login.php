<?php
include_once "conexion.php";
$database = new Connection();
$db = $database->open();

$email = $_POST['email'];
$contra = $_POST['contra'];

if (!empty($email) && !empty($contra)){
 try {
    // Preparar la consulta SQL para consultar el usuario y contraseña proporcionados
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email"); // Asignar valores a los parámetros de la consulta
    $stmt->bindParam(':email', $email);
    $stmt->execute(); // Ejecutar la consulta
    $count = $stmt->rowCount(); // Contar el número de filas devueltas
    
    // Verificar si se encontró algún usuario
    if ($count) {
        // Obtener los datos del usuario
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $pass = $user['password'];

        //verificar contraseña
        if(password_verify($contra, $pass)) { //si coincide
         //Establecer estado a activo (1)
         $est = 1;
         $query = $db->prepare("UPDATE usuarios SET status = :est WHERE unique_id = :id"); //actualizar estado
         $query->bindParam(':est', $est);
         $query->bindParam(':id', $user['unique_id']);
         $query->execute();
         // Iniciar sesión y almacenar datos del usuario en variables de sesión para acceder a otros archivos php
         session_start();
         $_SESSION['id_unico'] = $user['unique_id'];
         // Mensaje de éxito
         echo 'exito';
         exit();
        } else {
         // Si no se encontró el usuario, establecer un error en la respuesta
         echo "Correo o contraseña incorrectos";
         exit();
        }
    } else {
        // Si no se encontró el usuario, establecer un error en la respuesta
        echo "Correo o contraseña incorrectos";
        exit();
    } 
} catch(PDOException $e) {
    // Manejo de errores y establecer el mensaje de error en la respuesta
    echo "Algo salió mal {$e->getMessage()}";
}
} else {
 echo "Favor de ingresar credenciales";
 exit();
}
// Cerrar la conexión a la base de datos
$database->close();