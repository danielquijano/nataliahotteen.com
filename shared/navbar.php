<!-- main menu -->
<div class="navbar-container">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-dark navbar-expand-md pt-1 pb-0">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbar">
						<ul class="navbar-nav text-center nav-justified w-100">
							<?php
								foreach ($navbar_attrs as $key => $value) {
									echo '
									<li class="nav-item">
										<a class="nav-link h2 text-patua-one" href="' . $value['url'] . '">
											<i class="mdi ' . $value['icon'] . ' md-36 align-text-top">' . '</i> ' . $value['name'] . '
										</a>
									</li>';
								}
							?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>