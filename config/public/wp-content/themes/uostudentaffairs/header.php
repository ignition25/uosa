<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>UO Student Affairs</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- Bootstrap core JS -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <!-- TOP UO BAR -->
  <div id="uobar-container">
    <div id="uobar">
      <div id="uologobox">
        <a href="http://www.uoregon.edu"><img src="<?php echo get_bloginfo('template_url') ?>/images/uologo.png" alt="University of Oregon" width="216" height="35" border="0"></a>
      </div>
      <div id="uolinks">
        <span class="right">
          <a href="http://www.uoregon.edu" class="uonav">UO Home</a>&nbsp; | &nbsp; 
          <a href="http://www.uoregon.edu/azindex/" class="uonav">Dept Index</a>
        </span>
      </div>
    </div>
  </div>
  <!-- end top UO bar -->


    <div class="content-wrapper">
      <div class="container">

        <!-- Static navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="navbar">
            <!-- <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?> -->
              <li><a href="#">PEOPLE</a></li>
              <li><a href="#">KUDOS</a></li>
              <li><a href="#">NEWS</a></li>
              <li><a href="<?php echo site_url(); ?>" style="padding: 5px 45px;"><img id="navbar-centered-logo" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" /></a></li>
              <li><a href="#">HIGHLIGHTS</a></li>
              <li><a href="./">STUDENT EXPERIENCE</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>