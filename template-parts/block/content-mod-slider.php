<!-- Bloque hero -->
<?php $id='bloque-'.generateRandomString(); ?>
</div>
<section class="block slider-hero bg-gris" id="<?php echo $id; ?>">
	<div class="container full">
		<ul class="slider-container">
			<?php foreach(get_field('slider') as $slide): ?>
			<li class="slide">
				<div class="slide-container">
				<img class="foto" src="<?php echo $slide['fotos']['url']?>">
				
				<div class="contenidos bg-verde">
					<div class="inner-half right">
						<h3 class="tit-four"><?php echo $slide['titulo']; ?></h3>
						<div class="texto small">
							<?php echo $slide['bajada'];?>
						</div>
					</div>
				</div>
		
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
<script type="text/javascript">
	$('#<?php echo $id;?> .slider-container').slick({dots:true,arrows:false, autoplay: true, autoplaySpeed: 3000});

</script>
<div class="linea-gradient"></div>
<div class="container">