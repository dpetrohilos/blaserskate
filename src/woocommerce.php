<?php get_header(); ?>

	<main id="woo" role="main" aria-label="Content" class="wrapper woo">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

			<?php if ( have_posts() ) : ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php woocommerce_content(); ?>




			</article>
		

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
