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
			<div data-aos="fade-up" data-delay="400">
				<?php echo get_field('texto');?>
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