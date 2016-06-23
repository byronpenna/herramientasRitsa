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
	<h2 class=""> Herramientas RITSA </h2>
	<?php 
		foreach ($categorias as $key => $padre) {
	?>
		<div class='col-lg-4'>
			<h3><?php echo $padre->nombre ?></h3>
			<?php 
				foreach ($padre->elementos as $key => $categoria) {
			?>
				<div class='row'>
					<a href=<?php echo site_url("Categoria/index/".$categoria->idCategoria) ?> >
						<?php echo $categoria->categoria ?>	
					</a>					
				</div>
			<?php 
				}
			?>
		</div>
	<?php
		}
	?>
	<!-- <div class="col-lg-12">
		<a href=<?php echo site_url("Resistencias/calculadora") ?> >Calculadora de resistencias</a>
	</div> -->
	<?php
		$this->load->view("parts/scripts.php");
	?>

</body>

</html>