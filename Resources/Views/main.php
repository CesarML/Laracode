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

	<link rel="stylesheet" href="./Resources/CSS/normalize.css">
	<link rel="stylesheet" href="./Resources/CSS/estilos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Principal</title>
</head>
<body >
	<!-- <h1 style="color: #888;">LaraCode</h1> -->
	
	<div class="container">

		<!--trigger the modal with a button-->
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal</button>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				
				<!-- Modal Content -->
				<div class="modal-content">
					<div class="modal-header">
						
						<h4 class="modal-tittle" id="exampleModalLabel">Este es su nuevo proyecto creado en Laracode</h4>			
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>					
					</div>
					<div class="modal-body">
						<h3>Gracias por usar el framework Laracode</h3>
							<div class="horizontal divPadre">
								<div class="vertical">
									<img src="./Resources/Images/like.jpg" alt="like" class="like">
								</div>
							</div>	
								<!-- <?php 
								/*
								 	include 'Controllers/Home.php';
								 	$proyecto = new Home();
								 	$bdname = new Home();
								 	$proyecto->project();
								 	$bdname->bd();
								 
								 	echo "<p>";
								 	echo 'Nombre del proyecto: ' . $proyecto;
								 	echo "</p>";

								 	echo "<p>";
								 	echo 'Nombre de la base de datos: ' . $bdname;
								 	echo "</p>";*/
								?> -->

								 	<!-- <p><?php //echo 'Nombre del proyecto: ' . $proyecto; ?></p>
								 	<p><?php //echo 'Nombre de la base de datos: ' . $bdname; ?></p>	 -->		
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>


	</div>

	
	<div class="horizontal divPadre">
		<div class="vertical">
			<img src="./Resources/Images/Logo.png" alt="logo" class="logo img-rounded">
		</div>
	</div>

</body>
</html>

<!-- color de la pagina
style="background: linear-gradient(to right, rgba(0,255,0,0), rgba(0,255,200,1));" -->