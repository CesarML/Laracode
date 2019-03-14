<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Principal</title>
</head>
<body style="background: linear-gradient(to right, rgba(0,255,0,0), rgba(0,255,200,1));">
	<h1 style="color: #888;">LaraCode</h1>
	<p><h4>Bienvenido</h4></p>
	
	<div class="container">

		<!--trigger the modal with a button-->
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				
				<!-- Modal Content -->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-tittle">Este es su nuevo proyecto creado en Laracode</h4>
					</div>
					<div class="modal-body">
						<?php 
							inlude("Home.php");
							$proyecto = new Home();
							$bd = new Home();
							$proyecto->project();
							$bd->bd();

						 ?>
						 <p><?php echo 'Nombre del proyecto: ' . $proyecto ?></p>
						 <p><?php echo 'Nombre de la base de datos: ' . $bd ?></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-defaul" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>