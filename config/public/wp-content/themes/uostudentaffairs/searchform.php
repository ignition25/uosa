
<form class="form-search sidebar-search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
	  <input type="text" class="form-control" placeholder="Search" name="s" id="s">
	  <span class="input-group-btn">
    	<button class="btn btn-default" type="submit" id="submit-search-button"><i class="glyphicon glyphicon-search"></i></button>
      </span>
	</div>
</form>

<ul id="sidebar-icon-links">
	<a href="<?php echo esc_url(get_category_link( get_cat_ID( 'Assessment' ) )); ?>"><li><img class="navicon" src="<?php echo get_bloginfo('template_url') ?>/images/assessment.png" /><span>ASSESSMENT</span></li></a>
	<a href="<?php echo esc_url(get_category_link( get_cat_ID( 'Healthy Oregon' ) )); ?>"><li><img class="navicon" src="<?php echo get_bloginfo('template_url') ?>/images/healthyoregon.png" /><span>HEALTHY OREGON</span></li></a>
	<a href="<?php echo esc_url(get_category_link( get_cat_ID( 'Inclusion' ) )); ?>"><li><img class="navicon" src="<?php echo get_bloginfo('template_url') ?>/images/inclusion.png" /><span>INCLUSION</span></li></a>
</ul>