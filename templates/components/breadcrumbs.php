<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="breadcrumbs">
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
			<h1 class="title-page">
                <?php
                if (is_archive()) {
                    single_term_title();
                }
                else {
	                the_title();
                }
                ?>
			</h1>
		</div>
	</div>
</div>