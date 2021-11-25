<!-- Bloque de texto -->
</div>

<section class="text-block bg-<?php if(get_field('color')){ echo get_field('color'); } else{ echo 'blanco';}?>">
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two"><?php echo get_field('titulo');?></h3>
			<div>
				<?php echo get_field('texto');?>
			</div>
			<section class="links">
				<?php foreach(get_field('links') as $link):
					//var_dump($link);
					?>
				<article class="link">
					<div class="foto">
						<?php echo wp_get_attachment_image($link['foto']['ID']); ?>
					</div>
					<h4 class="tit-three"><?php echo $link['nombre'];?></h4>
					<div class="texto">
						<?php echo $link['bajada'];?>
					</div>
					<a class="boton" href="<?php echo get_field('boton')['url'];?>">Ver más</a>
				</article>
				<?php endforeach;?>
			</section>
		</article>
	</div>
</section>
<div class="container">