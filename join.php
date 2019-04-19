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

		<div class="subscription">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 class="text-center text-white text-patua-one h1 mb-4">Choose your Subscription</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 order-2 order-md-1">
						<div class="py-md-5 my-4 my-md-0">
							<div class="bg-primary p-3">
								<p class="text-center mb-0"><i class="material-icons md-66">star</i></p>
								<p class="text-center display-4 text-patua-one h3">$29<sup>.99</sup></p>
								<h5 class="text-center text-warning text-patua-one">One-Month Purchase</h5>
								<p class="text-center text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

								<button type="submit" name="subscription_plan" class="btn btn-white btn-block btn-lg font-weight-bold">Select Plan</button>
							</div>
						</div>
					</div>

					<div class="col-md-4 order-1 order-md-2 bg-warning">
						<div class="py-md-3 h-100">
							<div class="bg-primary p-3 py-md-5 h-100">
								<p class="text-center mb-0"><i class="material-icons md-66">whatshot</i></p>
								<p class="text-center display-4 text-patua-one h3">$19<sup>.99</sup></p>
								<h4 class="text-center text-warning text-patua-one">Monthly Rebills Purchase</h4>
								<p class="text-center text-white">This is a longer card with supporting text belowto additional content. This content is a little bit longer.</p>

								<button type="submit" name="subscription_plan" class="btn btn-warning btn-block btn-lg font-weight-bold shadow">Select Plan</button>
							</div>
						</div>
					</div>

					<div class="col-md-4 order-3">
						<div class="py-md-5">
							<div class="bg-primary p-3">
								<p class="text-center mb-0"><i class="material-icons md-66">favorite</i></p>
								<p class="text-center display-4 text-patua-one h3">$ 7<sup>.50</sup></p>
								<h5 class="text-center text-warning text-patua-one">Yearly Rebill Purchase</h5>
								<p class="text-center text-white">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

								<button type="submit" name="subscription_plan" class="btn btn-white btn-block btn-lg font-weight-bold">Select Plan</button>
							</div>
						</div>
					</div>
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