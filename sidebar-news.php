<?php

if (! is_active_sidebar('news-sidebar') ) {
	return;
}
?>

<aside class="widget-area">
	<?php echo dynamic_sidebar('news-sidebar'); ?>
</aside>
