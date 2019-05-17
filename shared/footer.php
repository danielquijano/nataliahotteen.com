<!-- footer -->
<footer class="footer-container">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-6 col-md-4">
				<div class="h-100 py-5 px-4">
					<p class="h2 text-warning text-uppercase text-patua-one mb-0">Site Map</p>
					<ul class="list-unstyled m-0">
						<?php 
							foreach ($sitemap_attrs as $key => $value) {
								echo '<li><a class="btn btn-link text-light btn-sm p-0" title="' . $value['title'] . '" href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>
			<div class="col-6 col-md-4">
				<div class="h-100 py-5 px-4">
					<p class="h2 text-warning text-uppercase text-patua-one mb-0">We want you</p>
					<ul class="list-unstyled m-0">
						<?php
							foreach ($models_wanted_attrs as $key => $value) {
								echo '<li><a class="btn btn-link text-light btn-sm p-0" title="' . $value['title'] . '" href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="h-100 py-5 px-4">
					<p class="h2 text-warning text-uppercase text-patua-one mb-0">Agreement</p>
					<ul class="list-unstyled m-0">
						<?php
							foreach ($agreement_attrs as $key => $value) {
								echo '<li><a class="btn btn-link text-light btn-sm p-0" title="' . $value['title'] . '" href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>