<?php
/*
Template Name: Med sidebar för nyheter
*/
get_header();
?>
<!-- Huvudsakligt innehåll -->
<section id="main-content">
	<!-- Vänsterkolumn -->
    <article class="main-container main">
	    <p class="date single-date"><?php the_time("Y-m-d"); ?></p>
    	<h2><?php echo get_the_title(); ?></h2>
		<?php
		// Hämtar sidans unika innehåll
		if (have_posts()) :
			while (have_posts()) :
		    	the_post();
		    	the_content();
	        	the_post_thumbnail( 'thumb_large' );
		   endwhile;
		endif;
		?>
	</article><!-- /Vänsterkolumn -->
	<!-- Högerkolumn -->
	<aside class="main">
		<?php get_sidebar('right'); ?>
	</aside><!-- /Högerkolumn -->
</section><!--/#mainContent -->
<?php
get_footer();