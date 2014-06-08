<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listado de articulo</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style>
	th {
			background-color:#00B841;
			color:#FFFFFF;
		}
	</style>
</head>
<body>
	<main class="container">
		<header>
		</header>
		<article>
			<h2 class="text-success">Articulos (Ingresados)</h2>
			<table class="table table-hover table-bordered">
				<tr>
					<th>Usuario</th>
					<th>Titulo</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Tags</th>
					<th>Ver Comentario</th>
				</tr>
			<? foreach($datos as $dato): ?>
				<tr>
				<td><?= $dato['login'] ?></td>
				<td><?= $dato['title'] ?></td>
				<td><?= $dato['date'] ?></td>
				<td><?= $dato['time'] ?></td>
				<td><?= $dato['tag'] ?></td>
				<td><a href="articulo.php?id=<?= $dato['id_article'] ?>">Ver</a></td>
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
