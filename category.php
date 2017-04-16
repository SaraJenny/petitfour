<?php
get_header();
?>
<!-- Huvudsakligt innehåll -->
<section id="main-content">
    <h2 id="page-h2"><?php single_term_title(); ?></h2>
	<!-- Fullbredd -->
    <article id="news-container">
	<?php
	// Hämtar det senaste inlägget
    $news = new WP_Query('posts_per_page=-1&category_name=Nyheter');
    while ($news->have_posts())
    	: $news->the_post();
    ?>
    	<a href="<?php echo get_permalink(); ?>">
	    <?php
        // Kollar om inlägget har en utvald bild till sig och skriver i så fall ut den
	    if ( has_post_thumbnail() ) {
	    ?>
            <figure class="news-image">
                <img class="fade" src="<?php the_post_thumbnail_url( 'thumb_medium' ); ?>" alt="<?php the_title(); ?>">
                <figcaption class="hide"><p class="date"><?php the_time("Y-m-d"); ?></p><?php the_title(); ?><br><span class="news-excerpt"><?php echo excerptLimit( 25 ); ?></span></figcaption>
            </figure>
		<?php
		}
        // Om ingen bild finns skrivs inlägget ut på följande vis
        else {
        ?>
            <div class="no-image-news fade-light">
                <p class="date"><?php the_time("Y-m-d"); ?></p>
                <h3><?php the_title(); ?></h3>
                <p class="news-excerpt"><?php echo excerptLimit( 25 ); ?></p>
            </div>
        <?php
        }
        ?>
    	</a>
    <?php endwhile; ?>
	</article><!-- /#news-container -->
</section><!--/#mainContent -->
<?php
get_footer();