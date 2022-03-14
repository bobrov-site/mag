<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="breadcrumbs dark">
				<?php
				if (function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
				?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<h1 class="title-page dark">
				<?php
				if (is_archive()) {
                    the_archive_title();
				}
				else {
					the_title();
				}
				?>
			</h1>
		</div>
	</div>
</div>
