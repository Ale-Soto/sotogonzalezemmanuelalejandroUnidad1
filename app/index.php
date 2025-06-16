<?php
 ob_start();
 session_start();

 if(!isset($_SESSION['id_unico'])){
  header("location: ../signin-form.php");
  exit();
 }
 
?>
<?php include_once "header.php"; ?>

   <?php
   include_once "../php/conexion.php";
   $database = new Connection();
   $db = $database->open();

   $query = $db->prepare("SELECT * FROM usuarios WHERE unique_id = :id");
   $query->bindParam(":id", $_SESSION['id_unico']);
   $query->execute();
   $find = $query->rowCount();
   $row = $query->fetch(PDO::FETCH_ASSOC);

   ?>
  <body>
    <!-- Navbar -->
    <nav class="site-nav">
      <button class="sidebar-toggle">
        <span class="material-symbols-rounded">menu</span>
      </button>
    </nav>
    <div class="container">
      <!-- Sidebar -->
      <aside class="sidebar collapsed">
        <!-- cabezera sidebar -->
        <div class="sidebar-header">
         <div class="content">
          <img src="../imagenes/<?php if($find > 0){ echo $row['img'];} else { echo "unknown.png";} ?>" alt="foto-usuario" class="header-logo" />
          <div class="details">
           <h3> <?php if($find > 0){ echo $row['fname']." ".$row["lname"];} else { echo "Nombre de usuario". " ". "Apellido de usuario";} ?> </h3>
          </div>

         </div>
          <button class="sidebar-toggle">
            <span class="material-symbols-rounded">chevron_left</span>
          </button>
        </div>
        <div class="sidebar-content">
          <!-- Barra de búsqueda -->
          <form action="#" class="search-form">
            <span class="material-symbols-rounded">search</span>
            <input type="search" placeholder="Buscar..." required />
          </form>
          <!-- Menú -->
          <ul class="menu-list">
            <li class="menu-item">
              <a href="#" class="menu-link">
                <span class="material-symbols-rounded">notifications</span>
                <span class="menu-label">Notificaciones</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <span class="material-symbols-rounded">chat</span>
                <span class="menu-label">Chat</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <span class="material-symbols-rounded">settings</span>
                <span class="menu-label">Configuración</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="../php/logout.php?user_id=<?php echo $_SESSION['id_unico']; ?>" class="menu-link">
                <span class="material-symbols-rounded">logout</span>
                <span class="menu-label">Salir</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- pie del sidebar -->
        <div class="sidebar-footer">
          <button class="theme-toggle">
            <div class="theme-label">
              <span class="theme-icon material-symbols-rounded">dark_mode</span>
              <span class="theme-text">Modo Oscuro</span>
            </div>
            <div class="theme-toggle-track">
              <div class="theme-toggle-indicator"></div>
            </div>
          </button>
        </div>
      </aside>
      <!-- contenido principal -->
      <div class="main-content">
        <h1 class="page-title">Bienvenido a Vessel.com</h1>
        <p class="card">Donde te ofrecemos información para que prepares tu viaje sabiamente. Comienza elijiendo una ciudad de nuestra barra de viaje!</p>
        <div class="user-content">
         
        </div>
      </div>
    </div>
    <script src="../javascript/script.js"></script>
    <script src="../javascript/usuarios.js"></script>
  </body>
</html>
<?php
 ob_end_flush();
?>