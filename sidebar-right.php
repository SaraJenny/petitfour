<!-- Nyheter -->
<h2>Senaste nytt</h2>
<?php
// Loopa fram de 5 senaste nyheterna
$news = new WP_Query('posts_per_page=5&category_name=Nyheter');
while ($news->have_posts())
: $news->the_post();
?>
<!-- Nyhetssektion -->
<a class="more" href="<?php echo get_permalink(); ?>">
	<article class="side-teaser fade fade-light">
        <p class="date"><?php the_time("Y-m-d"); ?></p>
        <h3><?php the_title(); ?></h3>
        <p><?php echo  excerptLimit(21); ?></p>
    </article>
</a><!-- /Nyhetssektion -->
<?php endwhile;
// Hämta kategori-ID
$category_id = get_cat_ID( 'Nyheter' );
?>
<a class="more-cat" href="<?php echo  get_category_link( $category_id ); ?>">Fler nyheter »</a>