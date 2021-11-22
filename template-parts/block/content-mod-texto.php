<!-- Bloque de texto -->
</div>

<section class="text-block bg-<?php if(get_field('color')){ echo get_field('color'); } else{ echo 'blanco';}?>">
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two"><?php echo get_field('titulo');?></h3>
			<div>
				<?php echo get_field('texto');?>
			</div>
			<?php if(get_field('boton')['url']):?>
				<a class="boton" href="<?php echo get_field('boton')['url'];?>"><?php echo get_field('boton')['texto'];?></a>
			<?php endif;?>
		</article>
	</div>
</section>
<div class="container">