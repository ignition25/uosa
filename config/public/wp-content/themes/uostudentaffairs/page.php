  <?php get_header(); ?>
  <div class="row">
    <div class="col-md-<?php main_content_columns(); ?>">
      <div class="single-page">
        <!-- Main content -->
        <?php $title = strtoupper(single_post_title('', false)); ?>
        <?php page_header($title); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-wrapper">
          <div class="post-meta">
            CREATED: <?php echo strtoupper(the_date('M. j \A\T g:i A', '', '', false)); ?>
          </div>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page could not be found.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
      <?php get_sidebar(); ?>
  </div>

</div> <!-- /container -->
<?php get_footer(); ?>