<?php require 'shared/config.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<?php require 'shared/head.php'; ?>
	</head>

	<body class="<?php echo $bodyclass ?>">
		<?php 
			// warning modal
			require 'shared/warning-modal.php';

			// cookie alert
			require 'shared/cookie-alert.php';

			// navbar
			require 'shared/navbar.php';
		?>

		<!-- model scouting -->
		<div class="model-scouting">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h1 class="h1 text-white text-md-center text-patua-one">¡Se Nuestra Próxima Modelo!</h1>
						<p class="lead text-white text-justify text-md-center mb-0">Estamos bucando a las chicas más bonitass y hermosas que estén viviendo en México actualmente sin importar su nacionalidad para que se unan a nuestro increíble equipo de trabajo.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>

		<!-- instructions -->
		<div class="instructions py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h2 class="h1 text-primary text-md-center text-patua-one">Queremos conocerte y ver tu belleza</h2>
						<p class="text-justify text-md-center">El proyecto es sobre fotografia y videos modelando sensualmente ropa muy coqueta como: micro shorts, leggings, mini faldas, tangas, lencería muy sensual, etc; la dinámica es desvestirse hasta exponer al menos los senos. Si no tienes experiencia modelando, no te preocupes, no importa, nosotros te guiamos. Envíanos algunas de tus fotos, no tienen que ser profesionales, unas selfies en tu baño son más que suficiente. Sólo siguen estas simples reglas:</p>
						<p class="text-justify text-md-center font-weight-bold mb-0">1) Sin maquillaje &nbsp; 2) Muestra tu figura completa &nbsp; 3) Sin poses de modelo profesional.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>

		<!-- application -->
		<div class="application py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h2 class="h1 text-primary text-md-center text-patua-one mb-4">¡Aplica Hoy Mismo!</h2>
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<form action="uploads.php" method="post" enctype="multipart/form-data" id="models_wanted_form" class="jquey-form-validation" novalidate="novalidate">
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="first_name" class="mb-1">Nombre <span class="text-muted small">(Requerido)</span></label>
									<input type="text" class="form-control" id="first_name" name="first_name" pattern="[a-zA-Z]{3,30}" required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Escribe tu nombre correctamente.</div>
								</div>

								<div class="form-group col-md-5">
									<label for="last_name" class="mb-1">Apellido <span class="text-muted small">(Optional)</span></label>
									<input type="text" class="form-control" id="last_name" name="last_name" pattern="[a-zA-Z]{3,30}">
								</div>

								<div class="form-group col-md-2">
									<label for="age" class="mb-1">Edad</label>
									<input type="number" class="form-control" id="age" name="age" min="18" max="26" required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Escribe tu edad.</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="email" class="mb-1">Email <span class="text-muted small">(Optional)</span></label>
									<input type="email" class="form-control" id="email" name="email">
								</div>

								<div class="form-group col-md-6">
									<label for="whatsapp" class="mb-1">WhatsApp <span class="text-muted small">(Requerido)</span></label>
									<input type="tel" class="form-control" id="whatsapp" name="whatsapp" pattern="[0-9]{8,12}" required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Tu teléfono es súper importante.</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="country" class="mb-1">País <span class="text-muted small">(Solamente México)</span></label>
									<select class="form-control d-block w-100" id="country" name="country">
										<option value="Mexico" selected>Mexico</option>
									</select>
								</div>

								<div class="form-group col-md-4">
									<label for="state" class="mb-1">Estado <span class="text-muted small">(Requerido)</span></label>
									<select class="form-control d-block w-100" id="state" name="state" required>
										<option value="" selected disabled hidden>Selecciona el Estado donde vives</option>
										<?php
											$MXStates = array(
												'AGU' => 'Aguascalientes',
												'BCN' => 'Baja California Norte',
												'BCS' => 'Baja California Sur',
												'CAM' => 'Campeche',
												'CHP' => 'Chiapas',
												'CHH' => 'Chihuahua',
												'COA' => 'Coahuila',
												'COL' => 'Colima',
												'CMX' => 'Ciudad de México',
												'DUR' => 'Durango',
												'GUA' => 'Guanajuato',
												'GRO' => 'Guerrero',
												'HID' => 'Hidalgo',
												'JAL' => 'Jalisco',
												'MEX' => 'Estado de México',
												'MIC' => 'Michoacán',
												'MOR' => 'Morelos',
												'NAY' => 'Nayarit',
												'NLE' => 'Nuevo León',
												'OAX' => 'Oaxaca',
												'PUE' => 'Puebla',
												'QUE' => 'Querétaro',
												'ROO' => 'Quintana Roo',
												'SLP' => 'San Luis Potosí',
												'SIN' => 'Sinaloa',
												'SON' => 'Sonora',
												'TAB' => 'Tabasco',
												'TAM' => 'Tamaulipas',
												'TLA' => 'Tlaxcala',
												'VER' => 'Veracruz',
												'YUC' => 'Yucatán',
												'ZAC' => 'Zacatecas'
											);

											asort($MXStates);
											$i = 0;

											foreach ($MXStates as $key => $value) {
												echo '<option value="' . $key . '">' . $value . '</option>';
											}
										?>
									</select>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Selecciona un Estado.</div>
								</div>

								<div class="form-group col-md-4">
									<label for="city" class="mb-1">Ciudad <span class="text-muted small">(Requerido)</span></label>
									<input type="text" class="form-control" id="city" name="city" pattern="[a-zA-Z]{3,30}" required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">¿En cúal Ciudad actualmente?</div>
								</div>
							</div>

							<div class="custom-file">
								<input type="file" name="portfolio" class="custom-file-input" id="portfolio" accept="image/png, image/jpg, image/jpeg" required multiple>
								<label for="portfolio" class="custom-file-label">Envianos alguna fotos de ti <span class="text-muted small">(Requerido)</span></label>
								<div class="invalid-feedback bg-danger text-white py-1 px-2">Sube algunas foto de cuerpo completo.</div>
							</div>

							<div class="mt-3 text-center">
								<div class="form-group">
									<div class="form-check">
										<label class="form-check-label" for="terms">
											<input class="form-check-input" type="checkbox" id="terms" required> I herby confirm that I have read and understood the Privacy Policy.
											<p class="invalid-feedback text-warning m-0">Por favor, acepta los términos.</p>
										</label>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-4"></div>
								<div class="form-group col-md-4">
									<p class="text-center mb-0 mt-2">
										<button type="submit" form="models_wanted_form" class="btn btn-primary btn-lg btn-block text-patua-one shadow">Enviar Información</button>
									</p>
								</div>
								<div class="form-group col-md-4"></div>
							</div>
						</form>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>

		<?php
			// footer section
			require 'shared/footer.php';

			// copyright section
			require 'shared/copyright.php';

			// javascript libraries
			require 'shared/libraries.php';

			// javascript scripts
			require 'shared/scripts.php';
		?>
	</body>
</html>