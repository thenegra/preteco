<?php get_header(); ?>
<main id="content" role="main">
	<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!--article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>

</div>
</article-->

<?php endwhile; endif; ?>
</div>
<section class="main-hero bg-gris">
	<div class="container full">
		<div class="col-uno">
			<div class="inner-half left">
				<h2 class="tit-one">Evolucionamos tu negocio, distribuimos IT</h2>
			</div>
		</div>
		<div class="col-dos bg-verde">
			
				<ul class="slider-main">
					<li class="slider-unit">

						<article class="">
							<div class="inner-half right">
							<h4 class="tit-three">Liderando el sector tecnológico con más de 420 mil clientes e implementaciones en 145 países.</h4>
							</div>
						</article>
						<div class="img-container">
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Image placeholder">
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="linea-gradient"></div>
<div class="container">
</div>

<section class="text-block bg-blanco">

	<div class="container">
		<article class="text-container">
			<h3 class="tit-two">Quienes somos</h3>
			<p>Somos una consultora integral de IT  que hace mas de dos décadas  trabajamos junto a nuestros clientes para optimizar sus procesos de negocios a través de la implementación de soluciones informáticas, innovando o modernizando su infraestructura tecnológica.</p>
			<p>	Nuestra trayectoria y experiencia en aportar una solución completa y satisfactoria para cada una de las necesidades de nuestros canales y clientes, nos convierte en un aliado estratégico para sus negocios.</p>
		</article>
	</div>
</section>
<div class="container">
<!-- Bloque de soluciones -->
</div>
<section class="text-block bg-gris">

	<div class="container">
		<article class="text-container">
			<h3 class="tit-two">Nuestras soluciones</h3>
			<p>Las unidades de negocio dan respuesta a las distintas necesidades de las empresas con servicios a medida de Customer Experience, Business Analytics y Tecnología & Desarrollo. Por otro lado, su unidad de productos ofrece un amplio portafolio de licencias hardware y servicios cloud de los principales vendors del mercado.</p>
		</article>
		
	</div>
</section>
<section class="solution-block bg-gris">

	<div class="container">
		
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-servicios-desarrollo"></span>
				<div class="contents">
				<h3 class="tit-four">Tecnología & Desarrollo</h3>
				<p>Las unidades de negocio dan respuesta a las distintas necesidades de las empresas con servicios a <strong>medida de Customer Experience</strong>, Business Analytics y Tecnología & Desarrollo.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
			</div>

		</article>
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-busines-analytics"></span>
				<div class="contents">
				<h3 class="tit-four">Business Analytics</h3>
				<p>Las unidades de negocio dan respuesta a las distintas necesidades de las empresas con servicios a <strong>medida de Customer Experience</strong>, Business Analytics y Tecnología & Desarrollo.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
			</div>

		</article>
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-customer-experience"></span>
				<div class="contents">
				<h3 class="tit-four">Experiencia del Cliente</h3>
				<p>Las unidades de negocio dan respuesta a las distintas necesidades de las empresas con servicios a <strong>medida de Customer Experience</strong>, Business Analytics y Tecnología & Desarrollo.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
			</div>

		</article>
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-cloud"></span>
				<div class="contents">
				<h3 class="tit-four">Cloud</h3>
				<p>Las unidades de negocio dan respuesta a las distintas necesidades de las empresas con servicios a <strong>medida de Customer Experience</strong>, Business Analytics y Tecnología & Desarrollo.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
			</div>

		</article>
		

	</div>
</section>
<div class="container">
</div>
</main>
<?php get_footer(); ?>