<?php get_header(); ?>
<main id="content" role="main" class="page-main caso-main bg-gris">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<header class="page-header">
		<div class="container">
		<h2 class="tit-one"><?php the_title(); ?></h2>
		<div class="descripcion">
			<div class="texto">
				<?php echo get_field('descripcion');?>
			</div>
			<div class="logo">
				<div class="contenidos">
					<div class="ano"><?php echo get_field('ano');?></div>
				</div>
				<?php  echo wp_get_attachment_image(get_field('logo')['ID'],'full',false,array('title'=>get_field('marca'))); ?>
			</div>
		</div>
		</div>
	</header>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container ">
			<div class="space only-desk"></div>
			<div class="contenidos-caso">
				<article class="contenido-caso">
					<?php if(get_field('problema')):?>
					<h3 class="tit-four">Problema</h3>
					<div class="texto">
						<?php echo get_field('problema'); ?>
					</div>
					<?php endif; ?>
				</article>
				<article class="contenido-caso">
					<?php if(get_field('solucion')):?>
					<h3 class="tit-four">Solución</h3>
					<div class="texto">
						<?php echo get_field('solucion'); ?>
					</div>
					<?php endif; ?>
				</article>
				<article class="contenido-caso">
					<?php if(get_field('resultado')):?>
					<h3 class="tit-four">Resultados</h3>
					<div class="texto">
						<?php echo get_field('resultado'); ?>
					</div>
					<?php endif; ?>
				</article>
			</div>
		
		</div>
		<div class="space only-desk"></div>
		<div class="space"></div>
	</article>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>