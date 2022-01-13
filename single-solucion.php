<?php get_header(); ?>
<main id="content" role="main" class="solucion-main bg-negro">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<header class="solucion-header">
		<div class="container">
		<h2 class="tit-one"><?php the_title(); ?></h2>
		<div class="icono-area only-mob" >
				<span class="icono ptc-<?php echo get_field('icono'); ?>" data-aos="fade-up" ></span>
			</div>
		<div class="descripcion">
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