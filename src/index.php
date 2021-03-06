<?php get_header(); ?>
<div class="hero grid grid-row-1">
<section class="grid-item-1 col-1">
<header>
<hr/> <div class="over-text">2022</div>
<h1 class="section-title">New Collection</h1>
<p>Louisville, KY is known for two things. Very strong baseball bats, and lovingly handcrafted skateboards. Come shred with us!</p>
<a class="button primary" href="/store">Explore</a>

</header>
</section>

<div class="grid-item-2 col-2">


<img class="hero-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/BlaserBoardHero.jpg"/>

</div>

</div>




<div class="grid grid-row-2">
<div class="grid-item-1 col-1">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_1.jpg"/>
</div>
<div class="grid-item-2 col-2">
<blockquote class="pq">
We do this for the love of skateboarding. Blaser Boards was founded in 2022 by a group of friends. Each deck is hand drawn, hand painted and lovingly handcrafted.
</blockquote>
<cite>–Justin Cornett, 
Louisville, KY </cite>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Justin-Quote.jpg"/>
</div>
</div>
<div class="grid grid-row-3">
<header class="grid-item-1">
<h2 class="section-title">Shred The Gnar </h2>
</header>
<div class="grid-item-2 col-1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_2.jpg"/>
</div>
<div class="grid-item-3 col-2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_3.jpg"/></div>
</div>
</div>
<div class="grid grid-row-4">
<div class="grid-item-1 col-1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_4.jpg"/></div>
<div class="grid-item-2 col-2"><blockquote>
A lot of people buy a surfboard because their favorite shapers made it, not because their favorite company made it.</blockquote>
<cite>–Korey Blaser, 
Founder, Louisville, KY </cite>
</div>
</div>
<div class="grid grid-row-3">
<div class="grid-item-1 col-1 section-title">
<h3 class="title">Our Store </h3>
<p>Put simply, Blaser Boards are made from the strongest wood you can get. Sustainably sourced, slow grown, American maple from Northern Wisconsin gives each board has its own unique signature. Perfect for every free spirited adventurer who can’t be tamed.</p>
<a href="/decks" class="button secondary">Decks</a>
<a href="/clothing" class="button secondary">Clothing</a>
</div>
<div class="grid-item-2 col-2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_5.jpg"/>
</div>
</div>
<main role="main" aria-label="Content" class="grid-row-4 grid">
		<!-- section replace loop with store -->
		<section>
			<h4 class="section-title">In Stock</h4>
			<?php get_template_part( 'loop' ); ?>
			<?php get_template_part( 'pagination' ); ?>
		</section>
		<!-- /section -->
	</main>
<div class="grid-row-5 grid">
<header class="grid-item-1 title">
<h5 class="section-title">The Squad
</h5>
</header>
<div class="grid grid-item-2" >
<div class="grid-item-1 kent col-1">
<p class="sub-title">Korey Blaser</p>
<p class="sub-title">Sar Rats </p>
<p class="sub-title">KRIN Fernandez</p>
</div>
<div class="grid-item-2 kent col-2">
<p class="sub-title">Justin Cornett</p>
<p class="sub-title">Holden Turner</p>
</div>
</div>
</div>
<?php get_footer(); ?>
