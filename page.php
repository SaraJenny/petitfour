<?php
/*
Template Name: Helsida
*/
get_header();
?>
<!-- Huvudsakligt innehåll -->
<section id="main-content">
    <h2 id="page-h2"><?php echo get_the_title(); ?></h2>
	<?php
	// Hämtar sidans unika innehåll
	if (have_posts()) :
		while (have_posts()) :
	    	the_post();
	    	the_content();
	   endwhile;
	endif;
	?>
</section><!--/#main-content -->
<?php
get_footer();
