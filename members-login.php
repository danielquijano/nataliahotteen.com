﻿<?php require_once 'shared/config.php' ?>

<!doctype html>
<html lang="en" class="h-100">
	<head>
		<?php require_once 'shared/head.php'; ?>
	</head>

	<body class="<?php echo $body_class ?> d-flex flex-column h-100">
		<?php 
			// warning modal
			require_once 'shared/warning-modal.php';

			// cookie alert
			require_once 'shared/cookie-alert.php';

			// navbar
			require_once 'shared/navbar.php';
		?>

		<!-- login -->
		<div class="login">
			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="card bg-primary nht-rounded-lg mt-5">
							<div class="card-body">
								<h2 class="text-warning nht-text-patua-one mb-4">Members Login</h2>

								<form action="" method="" id="members_login_form" class="js-form-validation" novalidate="novalidate">
									<div class="form-group mb-4">
										<label for="username" class="text-white">Enter your User Name</label>
										<input type="text" autocomplete="on" class="form-control form-control-lg" placeholder="Username" id="username" required autofocus>

										<div class="invalid-feedback bg-danger text-white py-1 px-2 rounded shadow-sm">Your username is invalid.</div>
									</div>

									<div class="form-group mb-4">
										<label for="password" class="text-white">Enter your Password</label>
										<input type="password" autocomplete="on" class="form-control form-control-lg" placeholder="Password" id="password" required>

										<div class="invalid-feedback bg-danger text-white py-1 px-2 rounded shadow-sm">
											Something is wrong with your password.
										</div>
									</div>

									<p class="text-center mb-4">
										<button type="submit" form="members_login_form" class="btn btn-warning btn-lg nht-text-patua-one">Log In to Your Account</button>
									</p>

									<div class="d-flex justify-content-around">
										<div class="form-group mb-0">
											<div class="form-check">
												<label class="form-check-label text-white btn-sm" for="rememberme">
													<input class="form-check-input" type="checkbox" id="rememberme">&nbsp;Remember me
												</label>
											</div>
										</div>

										<a href="#" class="btn btn-link btn-sm text-white">Need Help?</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>

		<?php
			// copyright section
			require_once 'shared/copyright.php';

			// javascript libraries
			require_once 'shared/libraries.php';
		?>
	</body>
</html>