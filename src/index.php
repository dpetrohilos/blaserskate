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


<img width="2400" height="966" class="hero-image" alt="Skateboarder doing a trick" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/BlaserBoardHero_v2.jpg"/>

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
<div class="grid-item-2 col-2">
<blockquote class="pq">
We do this for the love of skateboarding. Blaser Boards was founded in 2022 by a group of friends. Each deck is hand drawn, hand painted and lovingly handcrafted.
</blockquote>
<cite>–Justin Cornett, 
Louisville, KY </cite>
<img height="84" width="84" class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/people/justin.jpg"/>
</div>
</div>

<div class="grid grid-row-3">

<header class="first-row title">
<h2 class="section-title">Shred The Gnar</h2>
</header>

<div class="second-row flex inline-flex">
	

<img width="660" height="320" alt="hand crafted, made with love, picture of the skateboard. Illustration of the dragon and logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/handcrafted.svg"/>
<img width="194" height="545" alt="hand crafted, made with love, picture of the skateboard. Illustration of the dragon and logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/deck_vert.png"/>
<img width="660" height="320" alt="hand crafted, made with love, picture of the skateboard. Illustration of the dragon and logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/madewithlove.svg"/>

</div></div>


<div class="grid grid-row-4 col-wrapper">

<div class="grid-item-1 col-1 title">
<p class="section-title">We ride because we can</p>
</div>

<div class="grid-item-2 col-2">
<div class="flex v-align">	
<blockquote class="pq">
A lot of people buy a surfboard because their favorite shapers made it, not because their favorite company made it.</blockquote>
<cite>–Korey Blaser, 
Founder, Louisville, KY </cite>
<img class="circle" height="84" width="84" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/people/korey.jpg"/>
</div>
</div>
</div>

<div class="grid grid-row-3 wrapper col-wrapper">
<div class="grid-item-1 col-1">
<h3 class="section-title">Our Store </h3>
<p>Put simply, Blaser Boards are made from the strongest wood you can get. Sustainably sourced, slow grown, American maple from Northern Wisconsin gives each board has its own unique signature. Perfect for every free spirited adventurer who can’t be tamed.</p>
<div class="inline"><a href="/decks" class="button secondary">Decks</a>
<a href="/clothing" class="button secondary">Clothing</a></div>
</div>
<div class="grid-item-2 col-2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_5.jpg"/>
</div>
</div>
<main role="main" aria-label="Content" class="grid-row-4 grid wrapper">
		<!-- section replace loop with store -->
		<section><header class="title">
			<h4 class="section-title">In Stock</h4></header>
			<?php get_template_part( 'loop' ); ?>
			<?php get_template_part( 'pagination' ); ?>
		</section>
		<!-- /section -->
	</main>

	<div class="grid-row-5 grid wrapper">

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
