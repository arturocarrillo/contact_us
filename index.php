<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Form recptcha</title>
	<link rel="stylesheet" href="./css/bootstrap.css" crossorigin="anonymous">
	<script src="./js/jquery-3.4.1.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div class="container-fluid m-auto">
		<div class="row mt-3">
			<div class="col-xl-10 m-auto">
				<h3 class="title">Contactanos</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-10 m-auto">
				<form role="form" class="needs-validation" id="frmcaptcha" action="./validation_form.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate="novalidate">
					  <div class="form-row">
					    <div class="col-md-6 mb-3">
					      <label for="first_name">Nombre(s)</label>
					      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Juan" value="" required>
					      <div class="valid-feedback">
					        Campo correcto
					      </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="last_name">Apellido(s)</label>
					      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Pech" value="" required>
					      <div class="valid-feedback">
					       Campo correcto
					      </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="email">Correo Electronico</label>
					        <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@ejemplo.com" required>
					        <div class="invalid-feedback">
					          Por favor introduce un correo
					      	</div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="phone">Teléfono</label>
					      <input type="phone" class="form-control" name="phone" id="phone" placeholder="9999010203" value="" required>
					      <div class="invalid-feedback">
					       Campo incorrecto
					      </div>
					    </div>
					  </div>
					  <div class="form-row">
					  		<div class="col-md-12 mb-3">
							    <label for="messenger">Platicanos qué pasa</label>
							    <textarea class="form-control" name="messenger" id="messenger" placeholder="Comentarios" required></textarea>
							    <div class="invalid-feedback">
							      Por favor pon tus comentarios
							    </div>
						  	</div>
					  </div>
					  <div class="form-row">
					  		<div class="col-md-12 mb-3">
					  			<div class="g-recaptcha" data-sitekey="6LdB8LgUAAAAAGoYNXWFhTSi7WIFA7I9bMQxnPrX"></div>
					  		</div>
					  </div>
					  <button class="col-xl-4 btn btn-primary" type="submit">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	<script src="./js/fn-validform.js" async defer></script>
	<script src="./js/fn-recaptcha.js" async defer></script>
</body>
</html>