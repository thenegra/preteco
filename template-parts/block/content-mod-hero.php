<!-- Bloque hero -->
</div>
<section class="main-hero bg-verde">
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
							<span style="font-size: .4em"><?php var_dump($contenido); ?></span>
							<h4 class="tit-four"><?php echo $contenido['texto'];?></h4>
							
						</article>
						<div class="img-container">
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Image placeholder">
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="linea-gradient inv"></div>
<div class="container">