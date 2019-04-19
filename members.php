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

		<div class="login">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center text-white text-patua-one h1 mb-4">Members Login</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2 col-lg-3"></div>
					<div class="col-md-8 col-lg-6">
						<div class="bg-primary p-4 shadow">
							<form action="" method="" id="members_login_form" class="jquey-form-validation" novalidate="novalidate">
								<div class="form-group">
									<label for="username" class="small text-white">Enter your User Name</label>
									<input type="text" class="form-control form-control-lg rounded-0" id="username" placeholder="Username" autofocus required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Your username is invalid.</div>
								</div>

								<div class="form-group">
									<label for="password" class="small text-white">Enter your Password</label>
									<input type="password" class="form-control form-control-lg rounded-0" id="password" placeholder="••••••••" required>
									<div class="invalid-feedback bg-danger text-white py-1 px-2">Something is wrong with your password.</div>
								</div>

								<div class="text-center">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label small pt-1 text-white" for="remember"><input type="checkbox" class="form-check-input" id="remember"> Remember me</label>
										</div>
									</div>
								</div>

								<button type="submit" form="members_login_form" class="btn btn-white btn-lg btn-block text-patua-one shadow">Login</button>
							</form>

							<div class="row">
								<div class="col-sm-6">
									<p class="text-center mt-5 mb-3">
										<a href="#" class="btn btn-outline-white btn-sm">Forgot your Username?</a>
									</p>
								</div>
								<div class="col-sm-6">
									<p class="text-center mt-0 mt-sm-5 mb-0">
										<a href="#" class="btn btn-outline-white btn-sm">Forgot your Password?</a>
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