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

		<div class="plans-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center text-primary text-patua-one h1 mb-4">Choose your Subscription</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 order-2 order-md-1">
							<div class="card">
								<div class="card-body">
									<p class="text-center text-warning mb-0"><i class="material-icons md-106">star</i></p>
									<p class="text-center text-warning display-4 text-patua-one h3">$29<sup>.99</sup></p>
									<p class="text-center text-warning text-patua-one h4 mt-3">One-Month Purchase</p>
									<p class="card-text text-center my-4">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

									<button type="submit" name="subscription_plan" class="btn btn-outline-warning btn-block btn-lg font-weight-bold">Select Plan</button>
								</div>
							</div>
					</div>

					<div class="col-md-4 order-1 order-md-2">
							<div class="card">
								<div class="card-body">
									<p class="text-center text-warning mb-0"><i class="material-icons md-106">whatshot</i></p>
									<p class="text-center text-warning display-4 text-patua-one h3">$19<sup>.99</sup></p>
									<p class="text-center text-warning text-patua-one h4 mt-3">Monthly Rebills Purchase</p>
									<p class="card-text text-center my-4">This is a longer card with supporting text belowto additional content. This content is a little bit longer.</p>

									<button type="submit" name="subscription_plan" class="btn btn-warning btn-block btn-lg font-weight-bold shadow">Select Plan</button>
								</div>
							</div>
					</div>

					<div class="col-md-4 order-3">
							<div class="card">
								<div class="card-body">
									<p class="text-center text-warning mb-0"><i class="material-icons md-106">favorite</i></p>
									<p class="text-center text-warning display-4 text-patua-one h3">$ 7<sup>.50</sup></p>
									<p class="text-center text-warning text-patua-one h4 mt-3">Yearly Rebill Purchase</p>
									<p class="card-text text-center my-4">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

									<button type="submit" name="subscription_plan" class="btn btn-outline-warning btn-block btn-lg font-weight-bold">Select Plan</button>
								</div>
							</div>
					</div>
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