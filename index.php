<?php require 'shared/config.php' ?>

<!doctype html>
<html ⚡ lang="en">
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

		<!-- owl carrousel section -->
		<div class="carousel">
			<div class="owl-carousel">
				<?php 
					foreach($carouselAttrs as $value){
						echo '
						<div class="card rounded-0">
							<amp-img layout="responsive" width="335" height="562" class="card-img rounded-0" alt="' . $value['alt'] . '" title=""
								src="' . $value['image'] . '">
							</amp-img>
							<div class="card-img-overlay">
								<p class="card-title text-white py-1 pr-2 pl-1 mb-2 shadow-sm">' . $value['title'] . '</p>
							</div>
						</div>';
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
						foreach($invitedModelsAttrs as $value){
							echo '<div class="' . $value['col'] . '"><picture><source media="(max-width: 767.98px)" srcset="' . $value['img-sm'] . '"><source media="(min-width: 768px)" srcset="' . $value['img-md'] . '"><source media="(min-width: 992px)" srcset="' . $value['img-lg'] . '"><img class="img-fluid lazy" alt="' . $value['alt'] . '" title="" data-src="' . $value['img-lg'] . '"></picture></div>';
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
								foreach($hottestSetsAttrs as $value){
									echo '<a href="' . $value['url'] . '"><div class="card rounded-0 mb-1"><img class="card-img rounded-0 lazy" data-src="' . $value['image'] . '" alt="' . $value['alt'] . '" title=""><div class="card-img-overlay p-0"><p class="card-title text-warning text-uppercase font-weight-bold mt-2 mb-0 px-3">' . $value['title'] . '</p><p class="card-title text-warning mb-0 px-3">' . $value['grades'] . '</p><p class="card-text text-white mb-0 pt-4 pb-3 px-3">' . $value['text'] . '</p></div></div></a>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			// newsletter section
			require 'shared/newsletter.php';

			// updates section
			require 'shared/updates.php';

			// features section
			require 'shared/features.php';

			// call 2 action section
			require 'shared/call2action.php';

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