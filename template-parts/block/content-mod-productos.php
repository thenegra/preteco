<!-- Bloque de soluciones -->
<?php 
$id = $block['id'];
$bg = 'bg-gris';
if(get_field('color_fondo')){
	$bg = 'bg-'.get_field('color_fondo');
}
?>
</div>
<section  class="text-block <?php echo $bg?>" >
	<?php blockBump($block); ?>
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two no-marg" data-aos="fade-right"><?php 
			if(get_field('titulo')) { 
				echo get_field('titulo',false,false); 
			} else{ 
				echo 'Productos';
			}?></h3>
			<div data-aos="fade-right" data-aos-duration="300">
				<?php if(get_field('descripcion')):?><?php echo get_field('descripcion');?><?php endif; ?>	
			</div>
			
		</article>
		
	</div>
</section>
<section class="solution-block <?php echo $bg?>">

	<div class="container">
		<?php
		
		 if(get_field('productos')):
		 	$ct=1;
		 	foreach(get_field('productos') as $producto):
		 		$ct++;
			?>
			<article class="solution-item " data-aos="fade" data-aos-duration="<?php echo (200+200*($ct%2));  ?>">
				<header class="imagen">
					<a onclick="getCotizacion('<?php echo $producto['nombre']; ?>')">
						<!--img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg"-->
						<?php
						
						echo wp_get_attachment_image($producto['foto']['ID'],'medium'); ?>
						<div class="hover">
							<span><?php echo $producto['nombre']; ?></span>
						</div>
					</a>
				</header>
			<div class="card-top bg-secundario">
				<!--span class="icono ptc-<?php echo $producto['icono']?>" data-aos="fade-right" data-aos-duration="<?php echo (100+200*($ct%2));  ?>"></span-->
				<div class="contents" data-aos="fade-right" data-aos-duration="<?php echo (200+200*($ct%2));  ?>">
					<div>
						<header class="card-header">
				<a onclick="getCotizacion('<?php echo $producto['nombre']; ?>')"><h3 class="tit-four"><?php remove_filter('acf_the_content', 'wpautop'); echo $producto['nombre'];add_filter('acf_the_content', 'wpautop');?></h3></a>
				<span class="icono ptc-<?php echo $producto['icono']?>" data-aos="fade-right" data-aos-duration="<?php echo (100+200*($ct%2));  ?>"></span>
						</header>
						<div class="card-contents">
						<?php echo $producto['descripcion'];?>
						<nav class="nav-productos" data-aos="fade-right" data-aos-duration="<?php echo (350+200*($ct%2));  ?>">
			<?php if($producto['link']):?>
				<a href="<?php echo $producto['link']; ?>" class="boton">Ver más</a>

			<?php endif;?>
			<a onclick="getCotizacion('<?php echo $producto['nombre']; ?>')" class="boton">Quiero saber más</a>
			</nav>
						</div>
			</div>
			
				</div>
				
			</div>

		</article>
		<?php endforeach;endif;?>
		

	</div>
	<div class="space"></div>
</section>
<div class="container">