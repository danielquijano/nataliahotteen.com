<?php require 'shared/config.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<?php require 'shared/head.php'; ?>
	</head>

	<body class="gallery">
		<?php 
			// warning modal
			require 'shared/warning-modal.php';

			// cookie alert
			require 'shared/cookie-alert.php';

			// navbar
			require 'shared/navbar.php';
		?>


		<div class="container">
			<div class="row">
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