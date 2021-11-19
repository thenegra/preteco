<?php

?>
<!-- Bloque de clientes -->
</div>
<section class="text-block bg-blanco">

	<div class="container">
		<article class="text-container">
			<h3 class="tit-two no-marg"><?php 
			if(get_field('titulo')) { 
				echo get_field('titulo'); 
			} else{ 
				echo 'Clientes';
			}?></h3>
		</article>
		
	</div>
</section>
<section class="clientes-block bg-blanco">
	<div class="container">
		<ul class="clientes">
			<div class="content-slick">
				<?php $ct = 0; foreach(get_field('clientes') as $cliente):
				
				?>

				<?php if($ct%8==0):?><div class="cliente-page"><div class="inner-container"><?php endif;?>
				<li class="cliente">
					<?php echo wp_get_attachment_image($cliente['logotipo']['ID'],'full'); ?>
				</li>
				<?php if($ct%8==7):?></div></div><?php endif;?>				
				
			<?php $ct++;endforeach; ?>
			
			</div>
		</ul>
	</div>
</section>
<script type="text/javascript">
	$('.clientes .content-slick').slick({dots:true,arrows:false});

</script>
<div class="container">