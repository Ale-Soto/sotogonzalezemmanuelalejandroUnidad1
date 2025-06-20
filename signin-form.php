<?php 
include_once "signup-header.php";
?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Ingresa ahora</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo electrónico</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="contra" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Entrar">
        </div>
      </form>
      <div class="link">Aún no te registras? <a href="signup-form.php">Regístrate aquí</a></div>
    </section>
  </div>
  
  <script src="javascript/mostrar_pass.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
