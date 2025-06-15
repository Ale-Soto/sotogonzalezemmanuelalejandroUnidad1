<?php include_once "signup-header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Vessel necesita tu info para comenzar</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre(s)</label>
            <input type="text" name="nombre" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Apellido</label>
            <input type="text" name="apellido" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo electrónico</label>
          <input type="text" name="email" placeholder="Ingresa tu dirección email" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="contra" placeholder="Ingresa nueva contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecciona una imágen de perfil</label>
          <input type="file" name="imagen" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Enviar">
        </div>
      </form>
      <div class="link">Ya tienes cuenta? <a href="signin-form.php">Inicia Sesión</a></div>
    </section>
  </div>

  <script src="javascript/mostrar_pass.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
