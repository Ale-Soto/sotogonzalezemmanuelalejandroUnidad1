<?php include_once "index-header.php";?>
<body>
  <nav>
    <div class="menu-icon">
      <span class="fas fa-bars"></span>
    </div>
    <div class="logo">
      Vessel
    </div>
    <div class="nav-items">
      <li><a href="#">Inicio</a></li>
      <li><a href="#contact">Contáctanos</a></li>
      <li><a href="#SiteMap">Mapa de sitio</a></li>
      <li><a href="signup-form.php">Regístrate</a></li>
      <li><a href="signin-form.php">Iniciar Sesión</a></li>
    </div>
    <div class="search-icon">
      <span class="fas fa-search"></span>
    </div>
    <div class="cancel-icon">
      <span class="fas fa-times"></span>
    </div>
    <form action="#">
      <input type="search" class="search-data" placeholder="Search" required>
      <button type="submit" class="fas fa-search"></button>
    </form>
  </nav>
<section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h1>Bienvenido a Vessel</h1>
          <p>
            Donde te ofrecemos información para que prepares tu viaje sabiamente. Comienza elijiendo una ciudad de nuestra barra de viaje!</p>
        </div>
        <a class="btn" href="#services">Nuestros viajes</a>
      </div>
    </section>
<div class="main-container">
    <section class="services" id="services">
      <h2>Nuestros viajes</h2>
      <p>Explora nuestra gama de servicios de viaje turístico.</p>
      <ul class="cards">
        <li class="card">
          <img src="images/ch.jpg" alt="img">
          <h3>Tents</h3>
          <p>Experience comfort and protection with our high-quality camping tents.</p>
        </li>
        <li class="card">
          <img src="images/vn.jpeg" alt="img">
          <h3>Sleeping Bags</h3>
          <p>Stay cozy and warm during your camping trips with our premium sleeping bags.</p>
        </li>
        <li class="card">
          <img src="images/it.jpg" alt="img">
          <h3>Camp Stoves</h3>
          <p>Cook delicious meals in the great outdoors with our reliable camp stoves.</p>
        </li>
        <li class="card">
          <img src="images/ft.jpg" alt="img">
          <h3>Backpacks</h3>
          <p>Carry your essentials comfortably with our durable and functional camping backpacks.</p>
        </li>
        <li class="card">
          <img src="images/mx.jpg" alt="img">
          <h3>Camp Chairs</h3>
          <p>Relax and unwind in style with our comfortable and portable camping chairs.</p>
        </li>
        <li class="card">
          <img src="images/it.jpg" alt="img">
          <h3>Camp Lights</h3>
          <p>Illuminate your campsite with our reliable and energy-efficient camping lights.</p>
        </li>
      </ul>
    </section>
    <section class="portfolio" id="portfolio">
      <h2>Our Portfolio</h2>
      <p>Take a look at some of our memorable camping adventures.</p>
      <ul class="cards">
        <li class="card">
          <img src="images/mx.jpg" alt="img">
          <h3>Mountain Hiking</h3>
          <p>Embark on an exhilarating hiking adventure in the breathtaking mountain ranges.</p>
        </li>
        <li class="card">
          <img src="images/ft.jpg" alt="img">
          <h3>Lakeside Camping</h3>
          <p>Enjoy a tranquil camping experience by the serene shores of picturesque lakes.</p>
        </li>
        <li class="card">
          <img src="images/jp.jpg" alt="img">
          <h3>Beach Camping</h3>
          <p>Escape to sandy beaches and camp under the starry sky by the crashing waves.</p>
        </li>
        <li class="card">
          <img src="images/ch.jpg" alt="img">
          <h3>Forest Exploration</h3>
          <p>Discover the wonders of lush forests and immerse yourself in nature's beauty.</p>
        </li>
        <li class="card">
          <img src="images/it.jpg" alt="img">
          <h3>RV Camping</h3>
          <p>Experience the freedom of road trips and camping adventures with our RV rentals.</p>
        </li>
        <li class="card">
          <img src="images/vn.jpeg" alt="img">
          <h3>Desert Camping</h3>
          <p>Embark on a unique desert camping experience and witness stunning landscapes.</p>
        </li>
      </ul>
    </section>
    <section class="contact" id="contact">
      <h2>Contáctanos</h2>
      <p>Háznos llegar tus inquietudes y comentarios</p>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> 123 Campsite Avenue, Wilderness, CA 98765</p>
            <p><i class="fas fa-envelope"></i> info@vessel.com</p>
            <p><i class="fas fa-phone"></i> (123) 456-7890</p>
            <p><i class="fas fa-clock"></i> Lun - Vie: 9:00 AM - 5:00 PM</p>
            <p><i class="fas fa-clock"></i> Sáb: 10:00 AM - 3:00 PM</p>
            <p><i class="fas fa-clock"></i> Dom: Cerrado</p>
          </div>          
        </div>
        <div class="col form">
          <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre*" required>
            <input type="email" name="email" placeholder="Correo*" required>
            <textarea placeholder="Mensaje*" name="msg" required></textarea>
            <button id="submit" name="enviar" type="submit">Enviar</button>
          </forml>
        </div>
      </div>
    </section>
</div>

  <footer>
    <div class="footer-content" id="SiteMap">
      
      <div class="footer-box">
        <div class="topic">Mapa de sitio</div>
        <a href="#">Inicio</a>
        <a href="#contact">contáctanos</a>
        <a href="signup-form.php">Registrate</a>
        <a href="signin-form.php">Iniciar Sesión</a>
      </div>
      
      <div class="footer-box">
        <div class="topic">Suscribete</div>
        <form action="#">
          <input type="text" placeholder="Ingresa tu dirección de Email" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #333; background: #1e232b; color: white;">
          <input type="submit" value="Send" style="width: 100%; padding: 10px; background: #ff3d00; color: white; border: none; border-radius: 4px; cursor: pointer;">
        </form>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <p>Copyright © 2025 <a href="#" style="color: #ff3d00;">Vessel</a> All rights reserved</p>
    </div>
  </footer>

  <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>
</body>
</html>