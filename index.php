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

		<!-- owl carrousel section -->
		<div class="carousel">
			<div class="owl-carousel">
				<?php 
					foreach($carousel_attrs as $value){
						echo '
							<div class="card rounded-0">
								<img width="335" height="562" class="card-img rounded-0" alt="" title="" src="' . $value['image'] . '">
								<div class="card-img-overlay">
									<p class="card-title text-white py-1 pr-2 pl-1 mb-2 shadow-sm">' . $value['title'] . '</p>
								</div>
							</div>
						';
					}
				?>
			</div>
		</div>

		<!-- headline section -->
		<div class="headline bg-primary py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h1 class="text-warning text-md-center text-patua-one mb-0">Hot Sexy Girls Photos & Videos</h1>
						<hr class="my-4">
						<p class="text-white text-justify text-md-center mb-0 lead">Spend hours of pure pleasure watching hot sexy girls masturbating to orgasm, cumming over, dancing sensually, stripping slowly in front of the camera, and getting fucked hard for just a few dollars like cheap street prostitutes. Man, you won't find these anywhere else on the entire internet.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>

		<!-- invited model section -->
		<div class="invited-models py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h2 class="text-primary text-md-center text-patua-one h1">Ordinary Real Babes Doing Porn</h2>
						<p class="text-justify text-md-center mt-3 mb-5 lead">Each one of them completely exclusive, adorable, cute, totally innocent, with a perfect body, and a dirty mind, between 18 - 23 years old, willing to do everything to satisfy your dark sexual fantasies, experiencing their first encounter in the pornography industry, and looking to become the hottest pornstars.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
				<div class="row gutter-sm">
					<?php
						foreach($invited_models_attrs as $value){
							echo '
								<div class="' . $value['col'] . '">
									<img class="img-fluid lazy"  alt="' . $value['alt'] . '" title="' . $value['title'] . '" data-src="' . $value['img'] . '">
								</div>
							';
						}
					?>
				</div>
			</div>
		</div>

		<!-- hottest sets section -->
		<div class="hottest-sets py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<h3 class="text-primary text-md-center text-patua-one h1">A New Bunch of Horny Women</h3>
						<p class="text-justify text-md-center mt-3 mb-5 lead">Watch stunning ex-girlfriends naked showing off their nice tits, desperate housewives cheating on their husbands as soon as they leave, exploited teens spreading their legs wide open, rubbing their delicious shaved pink pussy, having fun sucking dicks and craving to get a lot of cum in their mouths.</p>
					</div>
					<div class="col-lg-1"></div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card-columns">
							<?php 
								foreach($hottest_sets_attrs as $value){
									echo '
										<a href="' . $value['url'] . '">
											<div class="card rounded-0 mb-1">
												<img class="card-img rounded-0 lazy" alt="' . $value['alt'] . '" title="" data-src="' . $value['image'] . '">
												
												<div class="card-img-overlay p-0">
													<p class="card-title text-warning text-uppercase font-weight-bold mt-2 mb-0 px-3">' . $value['title'] . '</p>
													<p class="card-title text-warning mb-0 px-3">' . $value['grades'] . '</p>
													<p class="card-text text-white mb-0 pt-4 pb-3 px-3">' . $value['text'] . '</p>
												</div>
											</div>
										</a>
									';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			// newsletter section
			require_once 'shared/newsletter.php';

			// updates section
			require_once 'shared/updates.php';

			// features section
			require_once 'shared/features.php';

			// call 2 action section
			require_once 'shared/call2action.php';

			// footer section
			require_once 'shared/footer.php';

			// copyright section
			require_once 'shared/copyright.php';

				// javascript libraries
			require_once 'shared/libraries.php';
		?>
	</body>
</html>