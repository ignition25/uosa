<div class="categories">
	<?php $categories = get_categories();
		foreach($categories as $category) { ?>
		<div class="index-category-pane">
			<img class="index-category-image" src="<?php category_image_path($category->term_id, "index-category-thumb") ?>">
			<a class="index-category-link" href="<?php echo get_category_link($category->cat_ID); ?>" title="<?php $category->category_nicename?>">
				<h4 class="index-category-title">&raquo; <?php echo $category->name ?></h4>
			</a>
		</div>
	<?php } ?>
</div>