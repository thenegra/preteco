<?php get_header(); ?>
<main id="content" role="main" class="solucion-main bg-negro">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<header class="solucion-header">
		<div class="container">
		<h2 class="tit-one" data-aos="fade-up"><?php the_title(); ?></h2>
		<div class="icono-area only-mob"  data-aos="fade-up">
				<span class="icono ptc-<?php echo get_field('icono'); ?>" data-aos="fade-up" ></span>
			</div>
		<div class="descripcion"  data-aos="fade-up" data-aos-delay="50">
			<?php echo get_field('descripcion');?>
		</div>
		</div>
	</header>
	<?php if(!sg_get_first_block_id()):?>
	<div class="space"></div>
	<?php endif;?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('contenidos'); ?>>
		<div class="container">
			<div class="icono-area only-desk" >
				<span class="icono ptc-<?php echo get_field('icono'); ?>" data-aos="fade-up" ></span>
			</div>
			<div class="servicios">
				<ul class="servicios-list" data-aos="fade-up">
					<?php foreach(get_field('servicios') as $servicio):?>
						
					<li class="servicio">
						<header class="servicio-header bg-secundario <?php if(!$servicio['descripcion']){ echo 'fixed'; }?>">
							<h3 class="tit-four"><?php echo $servicio['nombre']; ?></h3>
							<?php if($servicio['descripcion']):?>
							<span class="marcador">
								<span class="flecha"></span>
							</span>
							<?php endif;?>
						</header>
						<div class="content">
							<?php echo $servicio['descripcion'];?>
						</div>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</article>
	
<div></div>
<section  class="block text-block bg-gris" >
	<?php //blockBump($block); ?>
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two no-marg" data-aos="fade-right">Casos de éxito</h3>
			<div data-aos="fade-right" data-aos-duration="300">
				<p>Descubre cómo nuestros clientes han logrado transformar sus negocios en negocios exitosos.</p>
			</div>
			
		</article>
		
	</div>
</section>
<section class="block solution-block bg-gris">

	<div class="container">
		<?php
		
		 if(get_field('casos')):
		 	$ct=1;
		 	foreach(get_field('casos') as $caso):
		 		$ct++;
			?>
			<article class="solution-item " data-aos="fade" data-aos-duration="<?php echo (200+200*($ct%2));  ?>">
				
			<div class="card-top bg-secundario">
				<div class="contents" data-aos="fade-right" data-aos-duration="<?php echo (200+200*($ct%2));  ?>">
					
						<!--header class="card-header">
							
				<span class="icono ptc-<?php echo $producto['icono']?>" data-aos="fade-right" data-aos-duration="<?php echo (100+200*($ct%2));  ?>"></span>
						</header-->
						<div class="card-contents caso">
							<div style="height: .5em;"></div>
							<a href="<?php echo get_the_permalink($caso['caso'])?>"><h3 class="tit-four"><?php echo get_the_title($caso['caso']); ?></h3></a>
							<h4 class="tit-five"><?php echo get_field('marca',$caso['caso']); ?></h4>
						<?php echo $producto['descripcion'];?>
						<nav class="nav-productos space" data-aos="fade-right" data-aos-duration="<?php echo (350+200*($ct%2));  ?>">
							<span><?php echo get_field('ano',$caso['caso']);?></span>
							<a href="<?php echo get_the_permalink($caso['caso']); ?>" class="boton">Ver más</a>
			</nav>
						
			</div>
			
				</div>
				
			</div>

		</article>
		<?php endforeach;endif;?>
		

	</div>
	<div class="space"></div>
</section>
<section class="block text-block bg-verde">
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two" data-aos="fade-up">Relevamiento gratuito</h3>
			<div data-aos="fade-up" data-aos-delay="400">
				<p>Solicite un Relevamiento gratuito de su infraestructura y descubra como evolucionar su negocio con Preteco.</p>
			</div>
			<div data-aos="fade-up" data-aos-delay="600" >
			
			<a class="boton" onclick="getCotizacion('<?php echo get_the_title();?>')">Quiero saber más</a>
			
			</div>
		</article>
	</div>
</section>

	<?php endwhile; endif; ?>
</main>
<script type="text/javascript">
	$('.servicio .content').hide();
	$('.servicios .servicio .servicio-header').click(function(){
		$('.servicio .content').slideUp();
		$('.servicio').removeClass('open');
		$(this).parent().find('.content').stop().slideToggle('fast',function(){
			//console.log($(this).is(':'));
			if(!$(this).is(":hidden")){
				
				$(this).parent().addClass('open');
			} else{
				
				$(this).parent().removeClass('open');
			}
		});
		
	});
</script>


<?php get_footer(); ?>