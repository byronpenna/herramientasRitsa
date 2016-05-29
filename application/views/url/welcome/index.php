<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/welcome/style.css") ?> >
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/welcome/media.css") ?> >
</head>
<body>
	<h2> Herramientas RITSA </h2>
	<div class="col-lg-12">
		<a href=<?php echo site_url("Resistencias/calculadora") ?> >Calculadora de resistencias</a>
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>

</body>

</html>