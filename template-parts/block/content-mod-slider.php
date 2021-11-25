<!-- Bloque hero -->
<?php $id='bloque-'.generateRandomString(); ?>
</div>
<section class="slider-hero bg-gris" id="<?php echo $id; ?>">
	<div class="container full">
		<ul class="slider-container">
			<?php foreach(get_field('slider') as $slide): ?>
			<li class="slide">
				<div class="slide-container">
				<img class="foto" src="<?php echo $slide['fotos']['url']?>">
				
				<div class="contenidos bg-verde">
					<div class="inner-half right">
						<h3 class="tit-three"><?php echo $slide['titulo']; ?></h3>
						<div class="texto">
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
	$('#<?php echo $id;?> .slider-container').slick({dots:true,arrows:false});

</script>
<div class="linea-gradient"></div>
<div class="container">