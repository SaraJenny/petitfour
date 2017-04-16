<?php
get_header();
?>
<!-- Huvudsakligt innehåll -->
<section id="main-content">
    <h2 id="page-h2"><?php echo get_the_title(); ?></h2>
	<!-- Vänsterkolumn -->
    <article class="main-container">
	<?php
	// Hämtar sidans unika innehåll
	if (have_posts()) :
		while (have_posts()) :
	    	the_post();
	    	the_content();
	   endwhile;
	endif;
	?>
	</article><!-- /Vänsterkolumn -->
	<!-- Högerkolumn -->
	<aside>
	<!-- Karta -->
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
	        <?php dynamic_sidebar( 'sidebar' ); ?>
	    </div><!-- #primary-sidebar -->
	<?php endif; ?>
   	</aside><!-- /Högerkolumn -->
</section><!--/#main-content -->
<?php
get_footer();