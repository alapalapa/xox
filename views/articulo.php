<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Detalle de Articulos</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style>
		th {
			background-color:#13C4E9;
			color:#FFFFFF;
		}
	</style>
</head>
<body>
	<main class="container">
		<header>
		</header>
		<article>
			<h2 class="text-success">Detalle de Articulo</h2>
			<table class="table">
				<tr>
					<th>Usuario		</th>
					<th>Titulo		</th>
					<th>Contenido	</th>
				</tr>
			<? foreach($datos as $dato): ?>
				<tr>
				<td><?= $dato['login'] ?></td>
				<td><?= $dato['title'] ?></td>
				<td><?= $dato['body'] ?></td>
				</tr>
			<? endforeach; ?>
			</table>
		</article>
		<section>
			<a href="articulos.php" class="btn btn-info">Return</a>
		</section>
		<footer>
			
		</footer>
	</main>
</body>
</html>
