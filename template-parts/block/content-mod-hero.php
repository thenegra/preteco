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
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if(count(get_field('contenidos'))>1):?>
<script type="text/javascript">
	$('#<?php echo $id;?> .slider-main').slick({dots:true,arrows:false, autoplay: false, autoplaySpeed: 3000});
</script>
<?php endif; ?>
<div class="linea-gradient inv"></div>
<div class="container">