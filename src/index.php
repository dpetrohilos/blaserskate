<?php get_header(); ?>
<div class="hero grid grid-row-1"> 
<section class="grid-item-1 col-1">
<header class="content">
<div class="over-text kent">Blaser Skateboards</div>
<h1 class="section-title">Old School Meets New School</h1>
<p>Blaser Boards are custom designed from the gnarliest wood for unforgettable shredding. Each skateboard is handmade with love, right out of Lexington, KY. Catch wicked air and get mad sketchy.
<strong>No broom required to fly.</strong>
</p>
<a class="button primary" href="/store">Explore</a>

</header>
</section>

<div class="grid-item-2 col-2">



<picture class="hero-wrapper">
    <source media="(min-width: 1000px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_BG_desktop.jpg">
    <source media="(min-width: 470px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Hero_BG_tablet.jpg">
	<img class="hero-item" alt="person skateboarding" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_BG_mobile.jpg"/>

</picture>




</div>
</div>







<div class="grid grid-row-2 col-wrapper photo-area-wrapper">

<div class="grid-item-1 col-1 radius bg-shadow bg-white">

<img class="radius" alt="person skateboarding" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/kickflip2.jpg"/>

</div>
<div class="grid-item-2 col-2 first-row flex v-align radius bg-shadow bg-white">

<div class="v-align grid-row">
<blockquote class="pq">
We do this for the love of skateboarding. Blaser Boards was founded in 2022 by a group of friends. Each deck is hand drawn, hand painted and lovingly handcrafted.
</blockquote>
<div class="cite-wrapper text-center flex"><cite class="v-align flex">–Justin Cornett, 
Founder, Louisville, KY </cite>
<img class="circle" height="84" width="84" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/people/justin.jpg"/></div>
</div>

</div>



</div>
</div>
<div class="grid grid-row-3">

<header class="first-row title">
<h2 class="section-title"><span>Custom Art, Hand Pressed Skate Decks</span>
</h2>
<p></p>

</header>

<div class="second-row flex inline-flex">
	

<img width="1200" height="600" alt="hand crafted, made with love, picture of the skateboard. Illustration of the dragon and logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/handcrafted.png"/>

</div></div>


<div class="grid grid-row-4 wrapper">


<div class="grid-item-1 col-1 first-row">
<blockquote class="pq">
A lot of people buy a surfboard because their favorite shapers made it, not because their favorite company made it.</blockquote>
<div class="h-align flex v-align second-row"><div class="cite-wrapper text-center flex"><cite class="v-align flex">–Korey Blaser, 
Founder, Louisville, KY </cite>
<img class="circle" height="84" width="84" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/people/korey.jpg"/></div>
</div></div>

</div>
</div>


<div class="grid grid-row-5 wrapper">

<div class="grid-item-1 card overlay">
<a class="card-item card-item-link" href="/decks">
<img class="card-item card-item-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/deck_store_image.jpg"/>
<p  class="card-item card-item-text kent">Designs as unique as you</p>
<div class="button third card-item card-item-button"> Custom Decks</div>
</a>

</div>

<div class="grid-item-2 card overlay">
<a class="card-item card-item-link" href="/catalogue">
<img class="card-item card-item-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/deck_store_image_2.jpg"/>
<p  class="card-item card-item-text kent">Made to order decks</p>
<div class="button third card-item card-item-button">Our Catalogue</div>
</a>

</div>
</div>

<main role="main" aria-label="Content" class="grid-row-4 grid wrapper">
		<!-- section replace loop with store -->
		<section><header class="title">
			<h3 class="section-title"><span>In Stock</span></h3></header>


			<ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 6
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'featured' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!–/.products–>


		</section>
		<!-- /section -->
	</main>

	<div class="grid-row-6 grid wrapper">

<header class="grid-item-1 title">
<h4 class="section-title">News &amp; Updates 
</h4>
</header>

<div class="grid-item-2 col-1" >

<?php get_template_part('loop'); ?>
		
		<!-- Pagination -->
		<div id="pagination">
			<?php html5wp_pagination(); ?>
		</div>

</div>

</div>
<?php get_footer(); ?>
