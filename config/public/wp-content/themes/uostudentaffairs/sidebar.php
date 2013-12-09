<div class="col-md-<?php sidebar_content_columns(); ?>">
	<div id="sidebar">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
			<?php endif; ?>
		</ul>
	</div>
</div>