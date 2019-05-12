<?php require_once 'shared/config.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<?php require_once 'shared/head.php'; ?>
	</head>

	<body class="<?php echo $body_class ?>">
		<?php 
			// warning modal
			require_once 'shared/warning-modal.php';

			// cookie alert
			require_once 'shared/cookie-alert.php';

			// navbar
			require_once 'shared/navbar.php';
		?>

		<div class="login">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center text-primary text-patua-one h1 mb-4">Members Login</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2 col-lg-3"></div>
					<div class="col-md-8 col-lg-6">
						<div class="bg-primary p-4">
							<form action="" method="" id="members_login_form" class="jquey-form-validation" novalidate="novalidate">
								<div class="form-group mb-4">
									<label for="username" class="small text-white">Enter your User Name</label>
									<input type="text" autocomplete="username" class="form-control form-control-lg rounded-0 bg-transparent border-top-0 border-right-0 border-left-0 border-warning text-warning" id="username" placeholder="Username" autofocus required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Your username is invalid.</div>
								</div>

								<div class="form-group mb-4">
									<label for="password" class="small text-white">Enter your Password</label>
									<input type="password" autocomplete="current-password" class="form-control form-control-lg rounded-0 bg-transparent border-top-0 border-right-0 border-left-0 border-warning text-warning" id="password" placeholder="••••••••" required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Something is wrong with your password.</div>
								</div>

								<button type="submit" form="members_login_form" class="btn btn-warning btn-lg btn-block text-patua-one mb-3">Sign In</button>

								<div class="text-center">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label text-white" for="rememberme">
												<input class="form-check-input" type="checkbox" id="rememberme"> Remember me
											</label>
										</div>
									</div>
								</div>
							</form>

							<div class="row">
								<div class="col-sm-5">
									<p class="text-center mt-4 mb-3">
										<a href="#" class="btn btn-outline-light btn-block btn-sm">Forgot your Username?</a>
									</p>
								</div>
								<div class="col-sm-2"></div>
								<div class="col-sm-5">
									<p class="text-center mt-4 mb-3">
										<a href="#" class="btn btn-outline-light btn-block btn-sm">Forgot your Password?</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-lg-3"></div>
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