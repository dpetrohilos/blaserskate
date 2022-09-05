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
      <span class="site-title">						
        
            <a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img width="64" heigh="64" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo_ill.svg" alt="Logo" class="site-brand">
						</a>
</span>
    </div>

    <button class="menu-toggle" tabindex="0" aria-label="Menu" aria-controls="primary-menu">Menu<span>toggle menu</span></button>
    <ul id="primary-menu" class="nav-menu">

    <?php html5blank_nav(); ?>
  </div>
  </div>

</header>

<div class="content-area">
  <p>Resize window to less than 1000px wide to see the mobile menu</p>
</div>

<script>

/**
* CLASS HELPERS
* Plain JavaScript functions to add, remove, toggle, and check for classes, no jQuery required
*/

// hasClass
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

// addClass
function addClass(elem, className) {
  if (!hasClass(elem, className)) {
      elem.className += ' ' + className;
  }
}

// removeClass
function removeClass(elem, className) {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
      while (newClass.indexOf(' ' + className + ' ') >= 0) {
          newClass = newClass.replace(' ' + className + ' ', ' ');
      }
      elem.className = newClass.replace(/^\s+|\s+$/g, '');
  }
}

// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
  if (hasClass(elem, className)) {
      while (newClass.indexOf(" " + className + " ") >= 0) {
          newClass = newClass.replace(" " + className + " ", " ");
      }
      elem.className = newClass.replace(/^\s+|\s+$/g, '');
  } else {
      elem.className += ' ' + className;
  }
}


/**
* MOBILE NAVIGATION
* Plain JavaScript functions to toggle the mobile navigation, no jQuery required
* WAI-ARIA values are also added for accessibility 
*/

// Add toggles to menu items that have submenus and bind to click event
var subMenuItems = document.body.querySelectorAll('.page_item_has_children > a');
var index = 0;
for (index = 0; index < subMenuItems.length; index++) {
var dropdownArrow = document.createElement('span');
dropdownArrow.className = 'sub-nav-toggle';
dropdownArrow.innerHTML = 'More';
subMenuItems[index].parentNode.insertBefore(dropdownArrow, subMenuItems[index].nextSibling);
}

// Enables toggling all submenus individually
var subMenuToggle = document.querySelectorAll('.sub-nav-toggle');    
for(var i = 0; i < subMenuToggle.length; i++) {
if(subMenuToggle.hasOwnProperty(i)) {
  subMenuToggle[i].onclick = function() {
    this.parentElement.querySelector('.children').classList.toggle("active");
    this.parentElement.querySelector('.sub-nav-toggle').classList.toggle("active");
    this.parentElement.parentElement.querySelector('.page_item_has_children').classList.toggle("active");
  };
}
}



// Mobile navigation controls
// uses class helpers to enable jQuery-like controls over class manipulation
var menuToggle = document.querySelector('.menu-toggle');
  outsideMenu = document.querySelector('.site-content-wrap');
  menuContainer = document.querySelector('.main-navigation');
  navMenu = document.querySelector('.nav-menu');

// set WAI-ARIA values for nav and toggle button
menuToggle.setAttribute( 'aria-expanded', 'false' );
navMenu.setAttribute( 'aria-expanded', 'false' );

// Toggle main menu and set WAI-ARIA values when menu button is clicked
menuToggle.onclick = function() {
if (hasClass(menuContainer, 'toggled')) {
  removeClass(menuToggle, 'is-active');
  removeClass(menuContainer, 'toggled');
  menuToggle.setAttribute( 'aria-expanded', 'false' );
  navMenu.setAttribute( 'aria-expanded', 'false' );
} else {
  addClass(menuToggle, 'is-active');
  addClass(menuContainer, 'toggled');
  menuToggle.setAttribute( 'aria-expanded', 'true' );
  navMenu.setAttribute( 'aria-expanded', 'true' );
}
};

// Reset mobile nav for laptop and desktop
window.addEventListener('resize', disableMobileNav);
function disableMobileNav() {
if (window.innerWidth > 999) {
  removeClass(menuToggle, 'is-active');
  removeClass(menuContainer, 'toggled');
  menuToggle.setAttribute( 'aria-expanded', 'false' );
  navMenu.setAttribute( 'aria-expanded', 'true' );
} else {
  navMenu.setAttribute( 'aria-expanded', 'false' );
}
}

</script>



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



