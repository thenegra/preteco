
<?php get_header(); 

?>
<main id="content" role="main" class="page-main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<header class="page-header">
		<div class="container">
		<h2 class="tit-one"><?php the_title(); ?></h2>
		</div>
	</header>
	<?php if(!sg_get_first_block_id()):?>
	<div class="space"></div>
	<?php endif;?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
		<?php the_content(); ?>
		
		</div>
	</article>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>