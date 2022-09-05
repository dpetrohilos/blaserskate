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




  <header id="masthead" class="site-header">

  <div class="site-navbar">

    <div class="site-branding">
      <span class="site-title"><a href="#/" rel="home">Site Title</a></span>
    </div>

    <button class="menu-toggle" tabindex="0" aria-label="Menu" aria-controls="primary-menu">Menu<span>toggle menu</span></button>

    <nav id="site-navigation" class="main-navigation">
      
      <ul id="primary-menu" class="nav-menu">
        <li class="page_item page-item-703"><a href="#">Blog</a></li>
        <li class="page_item"><a href="#">Front Page</a></li>
        <li class="page_item"><a href="#">Sample Page</a></li>
        <li class="page_item page_item_has_children"><a href="#">About The Tests</a>
          <ul class="children">
            <li class="page_item"><a href="#">Page Image Alignment</a></li>
            <li class="page_item"><a href="#">Page Markup And Formatting</a></li>
            <li class="page_item"><a href="#">Clearing Floats</a></li>
            <li class="page_item"><a href="#">Page with comments</a></li>
            <li class="page_item"><a href="#">Page with comments disabled</a></li>
          </ul>
        </li>
        <li class="page_item page_item_has_children"><a href="#">Level 1</a>
          <ul class="children">
            <li class="page_item page_item_has_children"><a href="#">Level 2</a>
              <ul class="children">
                <li class="page_item"><a href="#">Level 3</a></li>
                <li class="page_item"><a href="#">Level 3a</a></li>
                <li class="page_item"><a href="#">Level 3b</a></li>
              </ul>
            </li>
            <li class="page_item"><a href="#">Level 2a</a></li>
            <li class="page_item page-item-744"><a href="#">Level 2b</a></li>
          </ul>
        </li>
        <li class="page_item"><a href="#">Lorem Ipsum</a></li>
        <li class="page_item"><a href="#">Page A</a></li>
        <li class="page_item"><a href="#">Page B</a></li>
      </ul>
      
    </nav>

  </div>

</header>

<div class="content-area">
  <p>Resize window to less than 1000px wide to see the mobile menu</p>
</div>




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

<div id="menu" role="navigation" class="grid top-menu">
  
    
  
    
    
    
</div>

<div class="menu-bg" id="menu-bg"></div>



