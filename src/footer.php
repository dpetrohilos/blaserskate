			<!-- footer -->
			<footer class="footer " role="contentinfo">
        <div class="footer-internal-wrapper grid" >

<div class="grid-item-1">
<img width="984" height="1053" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer_img.svg" alt="Handmade designs" class="footer-design-element">


		</div>
<div class="grid-item-2">
				
<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-1' ) ) ?>

<nav class="footer-menu">
<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

</nav>

<nav class="social-menu">

<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>

    </nav>


</div>

    </div>

<div class="grid-item-3">
<!-- copyright -->
<?php
				    printf( '<p class="copyright">' . __( '&copy; %1$s Copyright %2$s. Powered by <a href="%3$s" title="WordPress">WordPress</a> &amp; <a href="%4$s" title="HTML5 Blank">HTML5 Blank</a>.', 'html5blank' ) . '</p>',
				    	date( 'Y'),
				    	esc_html( get_bloginfo( 'name' ) ),
				    	'//wordpress.org',
				    	'//html5blank.com'
					);
				?>
				<!-- /copyright -->

<p>Designed by <a href="Repater.Digital" title="link to repeater digital website">Repeater Digital</a></p>
</div>

        </div>
			</footer>
			<!-- /footer -->



		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
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

<script>
       (function () {
        function logElementEvent(eventName, element) {
          console.log(Date.now(), eventName, element.getAttribute("data-src"));
        }

        var callback_enter = function (element) {
          logElementEvent("🔑 ENTERED", element);
        };
        var callback_exit = function (element) {
          logElementEvent("🚪 EXITED", element);
        };
        var callback_loading = function (element) {
          logElementEvent("⌚ LOADING", element);
        };
        var callback_loaded = function (element) {
          logElementEvent("👍 LOADED", element);
        };
        var callback_error = function (element) {
          logElementEvent("💀 ERROR", element);
          element.src =
            "https://via.placeholder.com/440x560/?text=Error+Placeholder";
        };
        var callback_finish = function () {
          logElementEvent("✔️ FINISHED", document.documentElement);
        };
        var callback_cancel = function (element) {
          logElementEvent("🔥 CANCEL", element);
        };

        var ll = new LazyLoad({
          threshold: 0,
          // Assign the callbacks defined above
          callback_enter: callback_enter,
          callback_exit: callback_exit,
          callback_cancel: callback_cancel,
          callback_loading: callback_loading,
          callback_loaded: callback_loaded,
          callback_error: callback_error,
          callback_finish: callback_finish
        });
      })();


  </script>


	</body>
</html>
