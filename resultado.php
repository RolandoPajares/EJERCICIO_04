<?php
$trabajadores = [
	"T001" => [
		"nombre" => "Ana Torres",
		"cargo" => "Administradora",
		"sueldo" => 2500
	],
	"T002" => [
		"nombre" => "Luis Perez",
		"cargo" => "Programador",
		"sueldo" => 3200
	],
	"T003" => [
		"nombre" => "Maria Diaz",
		"cargo" => "Disenador",
		"sueldo" => 2800
	]
];

$codigo = strtoupper(trim($_GET["codigo"] ?? ""));
$trabajador = $trabajadores[$codigo] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado de b&uacute;squeda</title>
	<link rel="stylesheet" href="css/estilos.css/estilos.css">
</head>
<body>
	<main class="contenedor">
		<section class="panel">
			<p class="etiqueta">Resultado de b&uacute;squeda</p>
			<h1>Consulta de trabajador</h1>

			<?php if ($trabajador !== null): ?>
				<p class="estado estado-exito">Trabajador encontrado</p>
				<dl class="datos-trabajador">
					<div>
						<dt>C&oacute;digo</dt>
						<dd><?= htmlspecialchars($codigo, ENT_QUOTES, "UTF-8") ?></dd>
					</div>
					<div>
						<dt>Nombre</dt>
						<dd><?= htmlspecialchars($trabajador["nombre"], ENT_QUOTES, "UTF-8") ?></dd>
					</div>
					<div>
						<dt>Cargo</dt>
						<dd><?= htmlspecialchars($trabajador["cargo"], ENT_QUOTES, "UTF-8") ?></dd>
					</div>
					<div>
						<dt>Sueldo</dt>
						<dd>$<?= number_format($trabajador["sueldo"], 0, ",", ".") ?></dd>
					</div>
				</dl>
			<?php else: ?>
				<p class="estado estado-error">
					<?= $codigo === "" ? "Debes ingresar un codigo de trabajador." : "No se encontro al trabajador con el codigo " . htmlspecialchars($codigo, ENT_QUOTES, "UTF-8") . "." ?>
				</p>
			<?php endif; ?>

			<a class="enlace" href="index.php">Realizar otra b&uacute;squeda</a>
		</section>
	</main>
</body>
</html>
