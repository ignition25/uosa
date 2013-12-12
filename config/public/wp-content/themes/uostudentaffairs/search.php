<?php get_header(); ?>
    <div class="row">
        <div class="col-md-<?php main_content_columns(); ?>">

                <?php page_header('Showing Results for ' . get_search_query()) ?>
                <?php get_template_part('partials/loop'); ?>
        </div>
      <?php get_sidebar(); ?>
    </div>
</div> <!-- End .container. -->
</div> <!-- End .content-wrapper. -->

<?php get_footer(); ?>