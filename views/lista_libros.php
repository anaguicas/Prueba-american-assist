<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../media/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../media/css/estilos.css">
  <link rel="stylesheet" href="../media/css/bootstrap.min.css">
  <script src="../media/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  include("menu.html");
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