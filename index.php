<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vessel</title>
    <link rel="stylesheet" href="estilos/style.css" />
    <link rel="icon" href="images/logo.png" />
    <!-- Fuente -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
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
          <img src="images/logo.png" alt="Vessel-logo" class="header-logo" />
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
                <span class="material-symbols-rounded">Map</span>
                <span class="menu-label">Mapa de sitio</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <span class="material-symbols-rounded">notifications</span>
                <span class="menu-label">Notificaciones</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link active">
                <span class="material-symbols-rounded">phone</span>
                <span class="menu-label">Contáctanos</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <span class="material-symbols-rounded">settings</span>
                <span class="menu-label">Configuración</span>
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
      </div>
    </div>
    <script src="javascript/script.js"></script>
  </body>
</html>