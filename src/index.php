<?php get_header(); ?>

<div class="hero grid">
<section class="grid-item-1">
<header>
<hr/> <div class="over-text">2022</div>
<h1 class="title">New Collection</h1>
<p>Louisville, KY is known for two things. Very strong baseball bats, and lovingly handcrafted skateboards. Come shred with us!</p>
<a class="button b1" href="/store">Explore</a>

</header>

<div class="grid-item-2">


<img class="hero-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/BlaserBoardHero.jpg"/>

</div>
</section>

</div>

<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h1><?php esc_html_e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part( 'loop' ); ?>

			<?php get_template_part( 'pagination' ); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
