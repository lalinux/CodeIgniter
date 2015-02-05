<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Prueba</title>

	<style type="text/css">
	</style>
</head>
<body>

<div id="container">
	<h1>Hola mundo desde codeigniter</h1>
	
</div>
<?php
	echo form_open("personas/add");

	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu nombre'

	);
	$edad = array(
		'name' => 'edad',
		'placeholder' => 'Escribe tu Edad'

	);

	echo form_label('Nombre: ','nombre');
	echo form_input($nombre);
	echo form_label('Edad:  ','edad');
	echo form_input($edad);
	echo form_submit('','Guardar');
	echo form_close();
?>
</body>
</html>

