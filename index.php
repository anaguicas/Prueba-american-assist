<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema administración biblioteca</title>
	<link rel="stylesheet" type="text/css" href="media/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
    <link rel="stylesheet" href="../media/css/bootstrap-theme.min.css">
  	<script src="media/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Administrador de biblioteca</h2>

				<form class="form-signin" method="POST" action="php/login.php">
					<h2 class="form-signin-heading">Login</h2>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Usuario</span>
						<input type="text" name="usuario" class="form-control" placeholder="usuario" required>
					</div>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				</form>
				</div>
			</div>
		</div>
	</body>
	</html>