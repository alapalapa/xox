<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ingreso de usuarios</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style>
		#buttons {
			padding-top:15px;
		}
	</style>
</head>
<body>
	<main class="container">
		<header>
		</header>
		<section class="row">
			<section class="col-lg-4">
			
			</section>
			<article class="col-lg-4">
				<h2 class="text-info">Ingreso de usuarios</h2>
				<form action="insertar.php" method="post">

					<label class="text-info">Login</label>
					<section class="input-group">
						<input type="text" name="login" required="required">
					<section>

					<label class="text-info">Password</label>
					<section class="input-group">
						<input type="password" name="password" required="required">
					</section>

					<label class="text-info">Nombre</label>
					<section class="input-group">
						<input type="text" name="nombre" required="required">
					</section>

					<label class="text-info">Apellidos</label>
					<section class="input-group">
						<input type="text" name="apellidos" required="required">
					</section>

					<label class="text-info">E-mail</label>
					<section class="input-group">
						<input type="email" name="email" required="required">
					<section class="input-group">

					<label class="text-info">Cumpleaños</label>
					<section class="input-group">
						<input type="date" name="cumple" required="required">
					</section>

					<section id="buttons">
						<input type="submit" name="enviar" value="Enviar" class="btn btn-info">
						<a href="../index.php" class="btn btn-info">Inicio</a>
					</section>
				</form>
			</article>
			<section class="col-lg-4"></section>
		</section>
		<footer>
			
		</footer>
	</main>
</body>
</html>