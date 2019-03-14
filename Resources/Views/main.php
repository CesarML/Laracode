<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com
	/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1
	/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7
	/js/bootstrap.min.js"></script>

	<title>Principal</title>
</head>
<body style="background: linear-gradient(to right, rgba(0,255,0,0), rgba(0,255,200,1));">
	<h1 style="color: #888;">LaraCode</h1>
	<p><h4>Bienvenido</h4></p>
	
	<div class="container">

		<!--trigger the modal with a button-->
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				
				<!-- Modal Content -->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-tittle" id="exampleModalLabel">Este es su nuevo proyecto creado en Laracode</h4>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
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
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>