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
				<div class="tagline">
					<img src="<?php echo get_template_directory_uri()?>/img/tagline.svg">

				</div>
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
			<h3 class="tit-two">Nuestras <strong>soluciones</strong></h3>
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
					<div>
				<h3 class="tit-four">Tecnología & Desarrollo</h3>
				<p>Contamos con un equipo de <strong>Desarrollo de software a medida</strong> especializado en soluciones end to end. Creamos proyectos a medida y elaboramos una propuesta detallada del paso a paso para que nuestros clientes puedan contar con la <strong>tecnología que necesitan</strong>.</p>
			</div>
				<a href="#" class="boton">Ver más</a>
				</div>
				
			</div>

		</article>
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-busines-analytics"></span>
				<div class="contents">
					<div>
				<h3 class="tit-four">Business Analytics</h3>
				<p>Nuestra unidad de <strong>Business Analytics</strong> e Inteligencia Artificial tiene como objetivo <strong>transformar digitalmente a tu empresa</strong>, convirtiendo a tus procesos de negocios en un formato <strong>data-driven</strong>.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
				</div>
				
			</div>

		</article>
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-customer-experience"></span>
				<div class="contents">
					<div>
						<h3 class="tit-four">Customer experience</h3>
						<p>Te ayudamos a diseñar una experiencia de cliente diferencial. La <strong>experiencia del cliente</strong> es la suma de cada uno de los puntos de contacto que los consumidores tienen con una empresa de bienes y/o servicios. A través de estas interacciones se establece un vínculo que es de <strong>vital importancia para el negocio</strong>.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
				</div>
				
			</div>

		</article>
		<article class="solution-item">
			<div class="card-top bg-gris">
				<span class="icono ptc-cloud"></span>
				<div class="contents">
					<div>
				<h3 class="tit-four">Cloud</h3>
				<p>Sabemos los beneficios de contar con soluciones en la nube y tenemos la <strong>experiencia</strong> necesaria para poder implementar estas soluciones <strong>en cualquier entorno</strong>.</p>
				</div>
				<a href="#" class="boton">Ver más</a>
				</div>
				
			</div>

		</article>
		

	</div>
	<div class="space"></div>
</section>
<div class="container">

<!-- Bloque de soluciones -->
</div>
<section class="text-block bg-negro">

	<div class="container">
		<article class="text-container">
			<h3 class="tit-two no-marg">Quienes somos en <strong>números</strong></h3>
		</article>
		
	</div>
</section>
<section class="numeros-block bg-negro">
	<div class="linea-gradient small inv"></div>
	<div class="contenedor-numeros">
		<article class="col-uno">
			<div class="inner-half left">
				<div class="mapa">
					<img src="<?php echo get_template_directory_uri()?>/img/mapa.png">
				</div>
				<div class="contenido">
					<h3 class="tit-two"><span style="font-size: 2.2em;	">4</span> países</h3>
					<ul class="lista">
						<li>Argentina</li>
						<li>Bolivia</li>
						<li>Uruguay</li>
						<li>Colombia</li>
					</ul>
				</div>
			</div>

		</article>

		<article class="col-dos">
			<div class="linea-gradient small inv only-mob"></div>
			<div class="inner-content">
				<div class="inner-half right">
					<h4 class="tit-three"><span class="t-verde">+</span> 300 clientes en el sector privado</h4>
					<p>Servicios financieros / Salud / Telco & Media / Manufactura / Retail</p>
				</div>
				<div class="linea-gradient small inv"></div>
			</div>
			<div class="inner-content">
				<div class="inner-half right">
					<h4 class="tit-three"><span class="t-verde">+</span> 200 clientes en el sector público</h4>
					<p><span class="t-verde">+</span> 30 Organismos Nacionales <br /><span class="t-verde">+</span> 50 Organismos Provinciales <br /><span class="t-verde">+</span> 150 Organismos Municipales</p>
				</div>
				<div class="linea-gradient small inv"></div>
			</div>
			<div class="inner-content">
				<div class="inner-half right">
					<h4 class="tit-three">Nuestros <strong>partnerships</strong></h4>
					<div class="logos">
						<img  src="<?php echo get_template_directory_uri()?>/img/sas-partner.png" alt="SAS Partner">
						<img class="google" 	src="<?php echo get_template_directory_uri()?>/img/google-partner.png" alt="Google Partner">
						<img src="<?php echo get_template_directory_uri()?>/img/denodo.png" alt="Denodo">
						<img class="oracle" src="<?php echo get_template_directory_uri()?>/img/oracle.png" alt="Oracle Partner">
					</div>
				</div>
				
			</div>
		</article>
	</div>
</section>
<div class="container">
<!-- Bloque de clientes -->
</div>
<section class="text-block bg-blanco">

	<div class="container">
		<article class="text-container">
			<h3 class="tit-two no-marg">Empresas que han confiado en <strong>nosotros</strong></h3>
		</article>
		
	</div>
</section>
<section class="clientes-block bg-blanco">
	<div class="container">
		<ul class="clientes">
			<div class="content-slick">
				<?php $i;for($i=0;$i<3;$i++):?>
				<div class="cliente-page">
					<div class="inner-container">
					<?php $j;for($j=0;$j<8;$j++):?>
						<?php if($i==2&&$j>3):?>
						<!--
					<?php endif?>
						<li class="cliente"><img src="<?php echo get_template_directory_uri()?>/img/client-fake.png" alt="Fake client"></li>
						<?php if($i==2&&$j>3):?>
						-->
					<?php endif?>
						<?php endfor;?>
					</div>
				</div>
			<?php endfor;?>
			</div>
		</ul>
	</div>
</section>
<script type="text/javascript">
	$('.clientes .content-slick').slick({dots:true,arrows:false});

</script>
<div class="container">


</div>
</main>
<?php get_footer(); ?>