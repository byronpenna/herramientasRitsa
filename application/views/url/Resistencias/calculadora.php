<?php 
	$options = "";
	foreach ($colores as $key => $value) {
		$options .= "<option value='".$key."'> ".$value."</option>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de resistencias</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/resistencias/calculadora/style.css") ?> >
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("content/css/paginas/resistencias/calculadora/media.css") ?> >
</head>
<body>
	<div class="container">
		<h2>Calculadora de resistencias</h2>
		<div class="row">
			<div class="col-lg-4">
				<div class="row">
					<label>Banda 1</label>
					<select class="form-control" name="cbBanda1">
					<?php
						echo $options;
					?>
					</select>
				</div>		
				<div class="row">
					<label>Banda 2</label>
					<select class="form-control" name="cbBanda2">	
						<?php
							echo $options;
						?>	
					</select>
					
				</div>		
				<div class="row">
					<label>Banda 3</label>
					<select class="form-control" name="cbBanda3">	
						<?php
							echo $options;
						?>	
					</select>
				</div>		
				<div class="row">
					<label>Banda 4</label>
					<select class="form-control" name="cbBanda4">	
						<?php
							echo $options;
						?>	
					</select>
				</div>		
				<div class="row divResultado">
					<label>Resultado: </label>
					<span>10 ohmios</span>
				</div>		
			</div>
		</div>
		
		
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>