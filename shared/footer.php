<footer class="nht-footer py-5">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-6 col-md-4">
				<div class="h-100 pl-5">
					<p class="h2 text-primary text-uppercase text-patua-one mb-3">Site Map</p>
					<ul class="list-unstyled mb-0">
						<?php 
							foreach ($sitemap_attrs as $key => $value) {
								echo '<li><a class="btn btn-link" title="' . $value['title'] . '" href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>

			<div class="col-6 col-md-4">
				<div class="h-100 pl-5">
					<p class="h2 text-primary text-uppercase text-patua-one mb-3">Agreement</p>
					<ul class="list-unstyled mb-0">
						<?php
							foreach ($agreement_attrs as $key => $value) {
								echo '<li><a class="btn btn-link" title="' . $value['title'] . '" href="' . $value['url'] . '">' . $value['name'] . '</a></li>';
							}
						?>
					</ul>
				</div>
			</div>

			<div class="col-12 col-md-4">
				<div class="h-100 pl-5">
					<p class="h2 text-primary text-uppercase text-patua-one mb-3">Support</p>
				</div>
			</div>
		</div>
	</div>
</footer>