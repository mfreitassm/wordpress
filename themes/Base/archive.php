<?php get_header();?>

<div class="container">

<h1><?php the_single_cat_title();?></h1>

<?php if (have_posts()): while (have_posts()): the_post();?>

		<?php if (has_post_thumbnail()): ?>

		<img src="<?php the_post_thumbnail_url('smallest');?>" alt="">

		<?php endif;?>

	    <h3><?php the_title();?></h3>
	    <?php the_excerpt();?>
	    <a href="<?php the_permalink();?>">Read More</a>
	<?php endwhile;endif;?>

</div>

<?php get_footer();?>
