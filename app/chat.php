<?php 
  session_start();
  include_once "../php/conexion.php";
  $database = new Connection();
  $db = $database->open();

  if(!isset($_SESSION['id_unico'])){
    header("location: ../signin-form.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
          $user_id = trim($_GET['user_id']);
          $query = $db->prepare("SELECT * FROM usuarios WHERE unique_id = '%{$user_id}%'");
          $query->execute();
          $count = $query->rowCount();
          if($count > 0){
           $row = $query->fetch(PDO::FETCH_ASSOC);
          }else{
            header("location: index.php");
          }
        ?>
        <a href="usuarios.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../imagenes/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
