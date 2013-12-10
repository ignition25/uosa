<?php get_header(); ?>
<?php if ( is_home() ) { ?>
<?php $title = "RECENT"; ?>
  <?php } elseif ( is_category() ) { ?> <!-- End index page carousel -->
    <?php $title = single_cat_title('', false); ?>
  <?php } else { ?>
    <?php $title = "OOPS"; ?>
  <?php } ?>
  <div class="row">
    <div class="col-md-<?php main_content_columns(); ?>">
      <!-- Main content -->
      	<!-- <?php page_header($title); ?> -->
      	<?php get_template_part('partials/categories'); ?>

    </div>
      <?php get_sidebar(); ?>
  </div>

</div> <!-- End .container. -->
</div> <!-- End .content-wrapper. -->
<?php get_footer(); ?>