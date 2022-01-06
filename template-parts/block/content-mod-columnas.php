<!-- Bloque de soluciones -->
<?php 
$id = $block['id'];
$bg = 'bg-blanco';
if(get_field('color_fondo')){
	$bg = 'bg-'.get_field('color_fondo');
}
?>
</div>

<section class="block text-block <?php echo $bg; ?>">
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two" data-aos="fade-up"><?php echo get_field('titulo');?></h3>
			<div >
				<?php if(get_field('columnas')):?>
				<div class="columnas">
					<?php foreach(get_field('columnas') as $columna):?>
						<article class="columna" data-aos="fade-up" data-delay="400">
							
							<h4 class="tit-four"><?php echo $columna['titulo'];?></h4>
							<div class="bajada">
							<?php echo $columna['bajada']; ?>
							</div>
						</article>
					<?php endforeach;?>
				</div>
				<?php endif;?>
			</div>
			<div data-aos="fade-up" data-delay="600" >
			<?php if(get_field('boton')['url']):?>
				<a class="boton" href="<?php echo get_field('boton')['url'];?>"><?php echo get_field('boton')['texto'];?></a>
			<?php endif;?>
			</div>
		</article>
	</div>
</section>
<div class="container">