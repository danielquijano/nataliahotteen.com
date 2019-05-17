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

		<div class="card-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-primary text-md-center text-patua-one h1 mb-3">Choose Your Subscription</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 order-2 order-md-1">
						<div class="card">
							<div class="card-body">
								<p class="text-center text-secondary mb-0"><i class="material-icons md-106">star</i></p>
								<p class="text-center text-secondary mb-0 display-4 text-patua-one h3">$14<sup>.99</sup></p>
								<p class="text-center text-white mb-0 mt-4 text-patua-one h4">One-Month Purchase</p>
								<ul class="list-group my-4">
									<li class="list-group-item small text-white">One-Time Purchase</li>
									<li class="list-group-item small text-white">Billed in one payment of $14.99</li>
									<li class="list-group-item small text-white">Instant access for 30 days</li>
								</ul>
								<button type="submit" name="subscription_plan" class="btn btn-warning btn-block btn-lg text-patua-one">Select Plan</button>
							</div>
						</div>
					</div>

					<div class="col-md-4 order-1 order-md-2">
						<div class="card shadow">
							<div class="card-body">
								<p class="text-center text-warning mb-0"><i class="material-icons md-106">whatshot</i></p>
								<p class="text-center text-warning mb-0 display-4 text-patua-one h3">$10<sup>.99</sup></p>
								<p class="text-center text-white mb-0 mt-4 text-patua-one h4">Monthly Rebills Purchase</p>
								<ul class="list-group my-4">
									<li class="list-group-item small text-white">Billed monthly in one payment of $10.99</li>
									<li class="list-group-item small text-white">Instant access to for 30 dyas</li>
									<li class="list-group-item small text-white">Become a Member today!</li>
								</ul>
								<button type="submit" name="subscription_plan" class="btn btn-warning btn-block btn-lg text-patua-one">Select Plan</button>
							</div>
						</div>
					</div>

					<div class="col-md-4 order-3">
						<div class="card">
							<div class="card-body">
								<p class="text-center text-secondary mb-0"><i class="material-icons md-106">favorite</i></p>
								<p class="text-center text-secondary mb-0 display-4 text-patua-one h3">$7<sup>.99</sup></p>
								<p class="text-center text-white mb-0 mt-4 text-patua-one h4">Yearly Rebill Purchase</p>
								<ul class="list-group my-4">
									<li class="list-group-item small text-white">Billed yearly in one payment of $95.99</li>
									<li class="list-group-item small text-white">Instant access to for 365 days</li>
									<li class="list-group-item small text-white">Best value!</li>
								</ul>
								<button type="submit" name="subscription_plan" class="btn btn-warning btn-block btn-lg text-patua-one">Select Plan</button>
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