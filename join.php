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

		<!-- headline -->
		<div class="pt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
					<h2 class="text-primary text-md-center nht-text-patua-one mb-0 h1">Choose Your Subscription</h2>
					<p class="text-justify text-md-center mt-4 mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nibh enim, vulputate a laoreet in, varius luctus leo. Vivamus erat mauris, varius vitae rhoncus eu, elementum eget felis.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>

		<!-- Subscription plans -->
		<div class="nht-plans pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-4 order-2 order-md-1 align-self-center">
						<div class="card border border-light nht-rounded-lg">
							<div class="card-body">
								<p class="text-center text-primary mb-0 display-4 nht-text-patua-one h3">$14<sup>.99</sup></p>
								<p class="text-center text-primary mb-0 mt-4 nht-text-patua-one h4">One-Month Purchase</p>
								<ul class="list-group my-4">
									<li class="list-group-item small">One-Time Purchase</li>
									<li class="list-group-item small">Billed in one payment of $14.99</li>
									<li class="list-group-item small">Instant access for 30 days</li>
								</ul>
								<button type="submit" name="subscription_plan" class="btn btn-primary btn-block btn-lg nht-text-patua-one">Select Plan</button>
							</div>
						</div>
					</div>

					<div class="col-md-4 order-1 order-md-2">
						<div class="card bg-primary nht-rounded-lg">
							<div class="card-body">
								<p class="text-center text-warning mb-0"><i class="mdi mdi-fire nht-mdi-144px"></i></p>
								<p class="text-center text-warning mb-0 display-4 nht-text-patua-one h3">$10<sup>.99</sup></p>
								<p class="text-center text-warning mb-0 mt-4 nht-text-patua-one h4">Monthly Rebills Purchase</p>
								<ul class="list-group my-4">
									<li class="list-group-item small text-white">Billed monthly in one payment of $10.99</li>
									<li class="list-group-item small text-white">Instant access to for 30 dyas</li>
									<li class="list-group-item small text-white">Become a Member today!</li>
								</ul>
								<button type="submit" name="subscription_plan" class="btn btn-warning btn-block btn-lg nht-text-patua-one">Select Plan</button>
							</div>
						</div>
					</div>

					<div class="col-md-4 order-3 align-self-center">
						<div class="card border border-light nht-rounded-lg">
							<div class="card-body">
								<p class="text-center text-primary mb-0 display-4 nht-text-patua-one h3">$7<sup>.99</sup></p>
								<p class="text-center text-primary mb-0 mt-4 nht-text-patua-one h4">Yearly Rebill Purchase</p>
								<ul class="list-group my-4">
									<li class="list-group-item small">Billed yearly in one payment of $95.99</li>
									<li class="list-group-item small">Instant access to for 365 days</li>
									<li class="list-group-item small">Best value!</li>
								</ul>
								<button type="submit" name="subscription_plan" class="btn btn-primary btn-block btn-lg nht-text-patua-one">Select Plan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			// features section
			require_once 'shared/features.php';

			// copyright section
			require_once 'shared/copyright.php';

			// javascript libraries
			require_once 'shared/libraries.php';
		?>
	</body>
</html>