<!-- Bloque hero -->
<?php $id='bloque-'.generateRandomString(); ?>
</div>
<section class="main-hero bg-verde" id="<?php echo $id; ?>">
	<div class="container full">
		<div class="col-uno">
			<div class="inner-half left">
				<div class="tagline">
					<img src="<?php echo get_template_directory_uri()?>/img/tagline.svg">

				</div>
			</div>
		</div>
		<div class="col-dos bg-blanco">
				<div class="inner-half right">
				<ul class="slider-main">
					<?php if(get_field('contenidos')):?>
					<?php foreach(get_field('contenidos') as $contenido):?>
					<li class="slider-unit">

						<article class="">
							
							<h4 class="tit-four"><?php echo $contenido['texto'];?></h4>
							
						</article>
						<div class="img-container">
						<!--img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Image placeholder"-->
						<?php echo wp_get_attachment_image($contenido['foto']['ID'],'medium'); ?>
						</div>
					</li>
					<?php endforeach; ?>
					<?php else:?>
						<li class="slider-unit">

						<article class="">
							
							<h4 class="tit-four">Más de 20 años potenciando diariamente la innovación de nuestros clientes. Gestionamos los datos punta a punta, desde la obtención hasta la activación del proyecto, para convertirlos en negocios concretos y escalables.</h4>
							
						</article>
						<div class="img-container">
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Image placeholder">
						
						</div>
					</li>
					<?php endif;?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if(get_field('contenidos') && count(get_field('contenidos'))>1):?>
<script type="text/javascript">
	$('#<?php echo $id;?> .slider-main').slick({dots:true,arrows:false, autoplay: true, autoplaySpeed: 4500});
</script>
<?php endif; ?>
<div class="linea-gradient inv"></div>
<div class="container">