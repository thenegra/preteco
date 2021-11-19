<?php /* Template Name: Página de módulos */ ?>

<?php get_header(); ?>
<main id="content" role="main">
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
<?php the_content(); ?>


<?php endwhile; endif; ?>

</div>


</article>
</main>
<?php get_footer(); ?>