<?php 
	session_start();
	$rut='../';
	require_once($rut.'Const.php');
	$_SESSION['user_id'] = 1;
	/**
	 * API to call reniec por Franl Moreno Alburqueque
	 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>API Reniec | Frank Martion Moreno Alburqueque | WebMaster - Programador Web</title>
	<meta name="description" content="Copyright © 2020 Desarrollado por: Frank Moreno Alburqueque Todos los derechos reservados.
	    Tipo de Licencia: Solo uso personal
	    Desarrollado por: Moreno Alburqueque Frank Martin
	    Página web:       https://frankmorenoalburqueque.com
	    Tema:	  		  API Reniec">
	<meta name="author" content="Moreno Alburqueque Frank Martin, admin@frankmorenoalburqueque.com">
	<meta name="urlauthor" content="https://frankmorenoalburqueque.com">
	<meta name="copyright" content="Copyright © 2020 Frank Martin Moreno Alburqueque">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="og:title" content="API Reniec | Frank Martion Moreno Alburqueque | WebMaster - Programador Web">
	<meta name="og:image" content="https://frankmorenoalburqueque.com/images/logo.png">
	<meta name="og:site_name" content="Sistema S0NG0Kú">
	<meta name="og:description" content="Copyright © 2020 Desarrollado por: Frank Moreno Alburqueque Todos los derechos reservados.
	    Tipo de Licencia: Solo uso personal
	    Desarrollado por: Moreno Alburqueque Frank Martin
	    Página web:       https://frankmorenoalburqueque.com
	    Tema:	  		  API Reniec">
	<link type="text/css" rel="stylesheet" href="https://cdn.embedly.com/css/social.e025eaf3.css"><link rel="icon" href="https://frankmorenoalburqueque.com/images/user.ico" sizes="32x32">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body style="background-color: #000000;">
	<hr>
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 text-center">
					<img width="150px" src="<?= FMMA; ?>images/logo.png" >
				</div>
				<div class="col-sm-6 text-center">
					<h1 class="text-white">API Reniec</h1>
				</div>
				<div class="col-sm-3 text-center">
					<img width="150px" src="<?= FMMA; ?>images/logo.png" >
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form method="GET">
					<input type="number" class="form-control" placeholder="Ingresa tu DNI" id="dni" name="dni">
					
					<button id="buscarDNI" class="btn btn-primary btn-block">Buscar</button>
				</form>		
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<label class="form-label">Apellido paterno:</label>
							<input type="text" id="paterno" class="form-control" readonly="readonly" placeholder="Apellido paterno">
						</div>
						<div class="form-group">
							<label class="form-label">Apellido materno:</label>
							<input type="text" id="materno" class="form-control" readonly="readonly" placeholder="Apellido materno">
						</div>
						<div class="form-group">
							<label class="form-label">Nombres:</label>
							<input type="text" id="nombres" class="form-control" readonly="readonly" placeholder="Nombres">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>

	<script>
		$(function(){
			$("#buscarDNI").on('click', function(){
				var numdni = $('#dni').val();
				$.ajax({
					url: "<?= $rut.DIRACT; ?>index.php",
					method: 'GET',
					data: { dni: numdni},
					dataType:'json',
					success:function(data){
						var resultados=data.dni;
						if (resultados.length > 7) {
							$('#paterno').val(data.apellido_paterno);
							$('#materno').val(data.apellido_materno);
							$('#nombres').val(data.nombres);
						}else{
							$('#paterno').val('No se encontró el registro');
							$('#materno').val('No se encontró el registro');
							$('#nombres').val('No se encontró el registro');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>