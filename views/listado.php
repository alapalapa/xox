<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ingreso de usuarios</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<header>
			<h2 class="text-info">Ingreso de usuarios</h2>
			<p>Datos ingresados</p>
		</header>
		<article>
			<h2 class="text-success">Usuarios Registrados</h2>
			<table class="table table-hover">
				<tr>
					<th class="text-success">Nombre Login</th>
					<th class="text-success">Nombre</th>
					<th class="text-success">Apellido</th>
					<th class="text-success">Email</th>
					<th class="text-success">Cumpleaños</th>
				</tr>
				<? foreach($datos as $dato): ?>
					<tr>
					<td><?= $dato['login'] ?></td>
					<td><?= $dato['name'] ?></td>
					<td><?= $dato['last_name'] ?></td>
					<td><?= $dato['email'] ?></td>
					<td><?= $dato['birth_date'] ?></td>
					</tr>
				<? endforeach; ?>
			</table>
		</article>
		<section>
			<a href="../index.php" class="btn btn-info">Inicio</a>
		</section>
		<footer>
			
		</footer>
	</main>
</body>
</html>