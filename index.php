<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buscador de trabajadores</title>
	<link rel="stylesheet" href="css/estilos.css/estilos.css">
</head>
<body>
	<main class="contenedor">
		<section class="panel">
			<p class="etiqueta">Ejercicio 04</p>
			<h1>Buscador de trabajadores</h1>
			<p class="descripcion">Ingresa el c&oacute;digo del trabajador para consultar sus datos.</p>

			<form action="resultado.php" method="GET" class="formulario">
				<label for="codigo">C&oacute;digo del trabajador</label>
				<input type="text" id="codigo" name="codigo" placeholder="Ejemplo: T002" required>
				<button type="submit">Buscar trabajador</button>
			</form>
		</section>
	</main>
</body>
</html>