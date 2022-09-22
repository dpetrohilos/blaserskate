<?php get_header(); ?>
<div class="hero grid grid-row-1"> 
<section class="grid-item-1 col-1">
<header class="content">
<div class="over-text kent sub-title">2022</div>
<h1 class="section-title">Handcrafted decks</h1>
<p>Blaser Boards are custom designed from the gnarliest of wood for an unforgettable shredding experience. Each skateboard is made with love in Central Kentucky. Catch wicked air and get mad sketchy. <strong>No broom required to fly with us.</strong>
</p>
<a class="button primary" href="/store">Explore</a>

</header>
</section>

<div class="grid-item-2 col-2">



<picture>
    <source media="(min-width: 1000px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_BG_desktop.jpg">
    <source media="(min-width: 470px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Hero_BG_tablet.jpg">
	<img alt="person skateboarding" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hero_BG_mobile.jpg"/></picture>




</div>
</div>







<div class="grid grid-row-2 col-wrapper">

<div class="grid-item-1 col-1 photo-area-wrapper">

<div class="vidoe-wrapper featured card"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/grid/img_1.jpg"/></div>
<div class="card first-row"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/grid/img_2.jpg"/></div>
<div class="card first-row"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/grid/img_3.jpg"/></div>
<div class="card second-row"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/grid/img_4.jpg"/></div>
<div class="card second-row"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/grid/img_5.jpg"/></div>
</div>
<div class="grid-item-2 col-2 first-row flex v-align">

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
<h2 class="section-title">Shred The Gnar</h2>
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

<img class="card-item card-item-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/deck_store_image.jpg"/></a>
<p  class="card-item card-item-text kent">Designs as unique as you</p>
<a class="button third card-item card-item-button" href="/decks">Custom Decks</a>


</div>

<div class="grid-item-2 col-3 card">

<img  class="card-item card-item-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/deck_store_image_2.jpg"/>


<p class="card-item card-item-text kent">Made to order decks</p>


<a class="button third card-item card-item-button" href="/catalogue"> Our catalogue</a>

</div>
</div>

<main role="main" aria-label="Content" class="grid-row-4 grid wrapper">
		<!-- section replace loop with store -->
		<section><header class="title">
			<h4 class="section-title">In Stock</h4></header>


			<ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 6
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
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
<h5 class="section-title">The Crew
</h5>

</header>

<div class="grid-item-2 col-1" >
<p class="sub-title">Korey Blaser</p>
<p class="sub-title">Sar Rats </p>
<p class="sub-title">KRIN Fernandez</p>
</div>

<div class="grid-item-3 kent col-2">
<p class="sub-title">Justin Cornett</p>
<p class="sub-title">Holden Turner</p>
</div>
</div>
</div>
<?php get_footer(); ?>
