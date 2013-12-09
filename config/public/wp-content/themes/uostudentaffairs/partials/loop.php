<div class="post-loop">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="post">

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail()) { ?>
					<?php the_post_thumbnail(); ?>
				<?php } else { ?>
					<img src="<?php echo get_bloginfo('template_url') ?>/images/post-nofeatured.png" class="attachment-post-thumbnail">
				<?php } ?>
				<h4 class="post-title">&raquo; <?php the_title(); ?></h4>
			</a>
			<span class="post-date"><small>POSTED: <?php echo strtoupper(the_date('M. j \A\T g:i A', '', '', false)); ?></small></span>
			<div class="clearfix"></div>
		</div>
	<?php endwhile; ?>
		<?php get_template_part('partials/pagination', 'links'); ?>
	<?php else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>