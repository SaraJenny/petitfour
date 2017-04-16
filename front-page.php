<?php
get_header();
?>
<!-- Slider -->
<div id="slider">
<?php
echo do_shortcode('[smartslider3 slider=2]');
?>
</div><!-- /#slider -->
<!-- Huvudsakligt innehåll -->
<section id="main-content">
    <!-- Sidebar: Dagens rätt -->
    <aside id="start-aside">
        <?php get_sidebar('left'); ?>
    </aside><!-- /#start-aside -->
    <!-- Högerkolumn -->
    <article id="start-container" class="main-container">
        <h2>Senaste nytt</h2>
    	<?php
        // Loopar fram de fem senaste nyheterna
        $news = new WP_Query('posts_per_page=5&category_name=Nyheter');
        while ($news->have_posts())
        : $news->the_post();
    	?>
    	<!-- Nyhetssektion -->
        <a class="teaser-section more" href="<?php echo get_permalink(); ?>">
        	<section class="fade fade-light">
                <?php the_post_thumbnail( 'thumb_small' ); ?>
        		<p class="date"><?php the_time("Y-m-d"); ?></p>
        	    <h3><?php the_title(); ?></h3>
                <p><?php echo  excerptLimit(33); ?></p>
            </section>
        </a><!-- /Nyhetssektion -->
    	<?php endwhile; ?>
    </article><!-- /#start-container -->
</section><!--/#main-content -->
<?php
get_footer();