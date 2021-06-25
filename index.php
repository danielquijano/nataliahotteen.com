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

		<!-- hottest sets section -->
		<div class="nht-hottest-sets py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h3 class="text-primary text-md-center nht-text-patua-one mb-0 h1">A New Bunch of Horny Women</h3>
						<p class="text-justify text-md-center mt-4 mb-5 lead">Watch stunning ex-girlfriends naked showing off their nice tits, desperate housewives cheating on their husbands as soon as they leave, exploited teens spreading their legs wide open, rubbing their delicious shaved pink pussy, having fun sucking dicks and craving to get a lot of cum in their mouths.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card-columns">
							<?php
							foreach ($hottest_sets_attrs as $value) {
								echo
									'<a href="' . $value['url'] . '">
										<div class="card mb-1">
											<img loading="lazy" class="card-img" src="' . $value['image'] . '" alt="' . $value['alt'] . '" title="">

											<div class="card-img-overlay p-0">
												<p class="card-title text-warning text-uppercase font-weight-bold mt-2 mb-0 px-3">' . $value['title'] . '</p>
												<p class="card-title text-warning mb-0 px-3">' . $value['grades'] . '</p>
												<p class="card-text text-white mb-0 pt-4 pb-3 px-3">' . $value['text'] . '</p>
											</div>
										</div>
									</a>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		// updates section
		require_once 'shared/updates.php';

		// features section
		require_once 'shared/features.php';

		// call 2 action section
		require_once 'shared/call2action.php';

		// newsletter section
		require_once 'shared/newsletter.php';

		// footer section
		require_once 'shared/footer.php';

		// copyright section
		require_once 'shared/copyright.php';

		// javascript libraries
		require_once 'shared/libraries.php';
		?>
	</body>
</html>