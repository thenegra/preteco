<!-- Bloque de soluciones -->
<?php 
$id = $block['id'];
$bg = 'bg-gris';
if(get_field('color_fondo')){
	$bg = 'bg-'.get_field('color_fondo');
}
?>
</div>
<section class="text-block <?php echo $bg?>">
	<?php blockBump($block); ?>
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two no-marg"><?php 
			if(get_field('titulo')) { 
				echo get_field('titulo',false,false); 
			} else{ 
				echo 'Productos';
			}?></h3>
			<?php if(get_field('descripcion')):?><?php echo get_field('descripcion');?><?php endif; ?>
		</article>
		
	</div>
</section>
<section class="solution-block <?php echo $bg?>">

	<div class="container">
		<?php
		
		 if(get_field('productos')):foreach(get_field('productos') as $producto):
			?>
			<article class="solution-item">
			<div class="card-top">
				<span class="icono ptc-<?php echo $producto['icono']?>"></span>
				<div class="contents">
					<div>
				<h3 class="tit-four"><?php remove_filter('acf_the_content', 'wpautop'); echo $producto['nombre'];add_filter('acf_the_content', 'wpautop');?></h3>
				<?php echo $producto['descripcion'];?>
			</div>
			<nav class="nav-productos">
			<?php if($producto['link']):?>
				<a href="<?php echo $producto['link']; ?>" class="boton">Ver más</a>

			<?php endif;?>
			<a onclick="getCotizacion('<?php echo $producto['nombre']; ?>')" class="boton">Quiero saber más</a>
			</nav>
				</div>
				
			</div>

		</article>
		<?php endforeach;endif;?>
		

	</div>
	<div class="space"></div>
</section>
<div class="container">