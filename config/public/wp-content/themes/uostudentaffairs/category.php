<?php get_header(); ?>
 <div class="row">
    <div class="col-md-<?php main_content_columns(); ?>">
      <!-- Main content -->
      <?php $title = strtoupper(single_cat_title('', false)); ?>
      <?php page_header($title); ?>

      <?php 
        $queried_object = get_queried_object(); 
        $term_id = $queried_object->term_id;  
        ?>
          <img src="<?php category_image_path($term_id, "thumbnail") ?>" class="alignleft category-featured-image">

      <div class="category-description">
        <?php echo category_description(); ?>
      </div>

      <div class="clearfix"></div>

      <?php get_template_part('partials/loop'); ?>
    </div>
      <?php get_sidebar(); ?>
  </div>

</div> <!-- End .container. -->
</div> <!-- End .content-wrapper. -->
<?php get_footer(); ?>