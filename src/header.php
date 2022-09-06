<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>


	</head>
	<body <?php body_class(); ?>>


<header class="header" role="banner">


			
<!-- logo -->
<div class="logo">
	<a href="<?php echo esc_url( home_url() ); ?>">
		<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img">
	</a>
</div>
<!-- /logo -->

<!-- nav -->

<!-- /nav -->

</header>
<!-- /header -->


  <header id="masthead" class="site-header">

  <div class="site-navbar nav">

    <div class="site-branding">
      <span class="site-title">						
        
            <a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img width="64" heigh="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo_ill.svg" alt="Logo" class="site-brand">
						</a>
</span>
    </div>

    <button class="menu-toggle" tabindex="0" aria-label="Menu" aria-controls="primary-menu">Menu<span>toggle menu</span></button>
      
	
<nav class="main-navigation" id="site-navigation">
      <?php html5blank_nav(); ?>
  </nav>




  </div>

</header>
			


