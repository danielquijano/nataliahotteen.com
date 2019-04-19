<!-- main menu -->
<div class="bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-dark navbar-expand-md py-0">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbar">
						<ul class="navbar-nav text-center nav-justified w-100">
							<?php
								foreach ($navbarAttrs as $key => $value) {
									echo '<li class="nav-item"><a class="nav-link h2 text-patua-one text-uppercase" href="' . $value['url'] . '"><i class="material-icons md-36 align-text-top">' . $value['icon'] . '</i> ' . $value['name'] . '</a></li>';
								}
							?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>