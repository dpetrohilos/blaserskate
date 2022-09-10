			<!-- footer -->
			<footer class="footer grid" role="contentinfo">
<div class="grid-item-1">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer_img.png" alt="Handmade designs" class="footer design element">


		</div>
<div class="grid-item-2">
				
<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-1' ) ) ?>

<nav class="footer-menu">

<?php
wp_nav_menu( array( 
    'theme_location' => 'footer', 
    'container_class' => 'footer' ) ); 
?>

<nav class="social-menu">

<?php
wp_nav_menu( array( 
    'theme_location' => 'social', 
    'container_class' => 'social' ) ); 
?>

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
function toggleNav(status, scope) {
  document.documentElement.classList.toggle("has-open-menu");

  if (status == "open") {
    scope.addEventListener("transitionend", () => {
      scope.querySelector(".js-close").focus();
    });
  }
  if (status == "close") {
    scope.querySelector(".js-open").focus();
  }
}

/* ----------
 * Open & close menu on buttons click
 */
const menu = document.querySelector(".menu");

menu.addEventListener(
  "click",
  (event) => {
    const openButton = menu.querySelector(".js-open");
    const closeButton = menu.querySelector(".js-close");

    if (event.target == openButton) {
      toggleNav("open", menu);
    } else if (
      event.target == closeButton ||
      !event.target.closest(".menu_list")
    ) {
      toggleNav("close", menu);
    }
  },
  true
);

/* ----------
 * Close menu if focus is out of it
 */
menu.addEventListener(
  "blur",
  (event) => {
    // Check if the target link is an indirect child of .menu_list
    const targetIsIn = event.relatedTarget.closest(".menu_list");

    if (
      document.documentElement.classList.contains("has-open-menu") &&
      !targetIsIn
    ) {
      document.documentElement.classList.remove("has-open-menu");
    }
  },
  true
);

/* ----------
 * Close menu if Esc is pressed
 */
document.addEventListener("keydown", (event) => {
  const escapeKey = 27;

  if (event.keyCode === escapeKey && document.documentElement.classList.contains("has-open-menu")) {
    document.documentElement.classList.remove("has-open-menu");
  }
});
</script>


	</body>
</html>
