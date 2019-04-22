<?php require 'shared/config.php' ?>

<!doctype html>
<html lang="en">
	<head>
		<?php require 'shared/head.php'; ?>
	</head>

	<body class="<?php echo $body_class ?>">
		<?php 
			// warning modal
			require 'shared/warning-modal.php';

			// cookie alert
			require 'shared/cookie-alert.php';

			// navbar
			require 'shared/navbar.php';
		?>



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