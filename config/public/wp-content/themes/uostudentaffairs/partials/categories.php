<div class="categories">
	<?php $categories = get_categories();
		foreach($categories as $category) { ?>
		<div class="index-category-pane">
			<a class="index-category-link" href="<?php echo get_category_link($category->cat_ID); ?>" title="<?php $category->category_nicename?>">
				<img class="index-category-image" src="<?php category_image_path($category->term_id, "index-category-thumb") ?>">
				<h4 class="index-category-header">&raquo; <span class="category-title"><?php echo $category->name ?></span></h4>
			</a>
		</div>
	<?php } ?>
</div>