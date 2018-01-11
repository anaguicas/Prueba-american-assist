<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../media/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../media/css/estilos.css">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="../media/css/bootstrap-theme.min.css">
  <script src="../media/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  include("menu.html");
  ?>
  <?php

  if(!empty($_GET)){
    $host="localhost";
    $user="root";
    $password="";
    $db="biblioteca";
    $con = new mysqli($host,$user,$password,$db);
    $value = "prestado";
    $sql = "UPDATE libros INNER JOIN prestamos on prestamos.libro_id=libros.id_libro SET estado=\"prestado\" WHERE prestamos.id_prestamo=".$_GET["id"];
    $sql2 = "UPDATE prestamos SET prestamos.fecha_prestamos=NOW(), prestamos.fecha_devolucion=DATE_ADD(NOW(), INTERVAL 3 DAY) WHERE id_prestamo=".$_GET["id"];
    $query = $con->query($sql);
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>VER LIBROS</h2>

        <?php 
        include "../php/admin.php"; 
        ?>
      </div>
    </div>
  </div>
</body>
</html>