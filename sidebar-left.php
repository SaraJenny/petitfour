<h2><span>Dagens rätt</span></h2>
<?php
// Hämtar de fem senaste dagens rätt
$special = new WP_Query('posts_per_page=5&category_name=Dagens');
// Sorterar de fem senaste dagens rätt från äldst till nyast
$special->posts = array_reverse($special->posts);
// Loopar fram dagens rätt
while ($special->have_posts())
: $special->the_post();
?>
<h3><?php the_title(); ?></h3>
<?php the_content(); ?>
<?php endwhile; ?>