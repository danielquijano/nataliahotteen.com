<!-- updates -->
<div class="updates py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h4 class="text-primary text-md-center text-patua-one h1">Awesome XXX Clips & Pictures</h4>
				<p class="text-justify text-md-center mt-3 mb-5 lead">Here's what's coming up: Pretty ladies with gorgeous curvy bodies giving the world's greatest handjobs, the best insane deepthroat and the most incredible sloppy blowjob; nude chicks modeling exotic see-through lingerie, in the tiniest bikinis you have ever seen in highly seductive poses.</p>
			</div>
			<div class="col-lg-1"></div>
		</div>
		<div class="row no-gutters">
			<?php
				foreach ($updatesAttrs as $value) {
					echo '<div class="col-4 col-md-3 col-lg-2"><img class="img-fluid lazy" alt="' . $value['alt'] . '" title="" data-src="' . $value['thumb'] . '"></div>';
				}
			?>
		</div>
	</div>
</div>