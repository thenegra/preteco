

<section class="form-block bg-blanco" id="contacto">
	<div class="linea-gradient small inv"></div>
	<div class="container">
		<h3 class="tit-two">Contactanos</h3>
		<?php echo do_shortcode('[contact-form-7 id="8" title="Contacto general"]');?>
	</div>
</section>
</div>
<footer id="footer" role="contentinfo" class="bg-gris">
	<div class=""></div>
	<div class="container">
		<div class="brand">
			<div class="main">
			<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo-preteco.svg" alt="Preteco"></a></h1>
			<nav class="social-media only-desk">
				<ul>
					<li><a href="https://www.instagram.com/preteco_ar_bo_uy/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://es-la.facebook.com/preteco/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company/preteco/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://twitter.com/preteco/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</nav>
		</div>
		<div class="tagline">
					<img src="<?php echo get_template_directory_uri()?>/img/tagline.svg">

				</div>
		</div>
		<div class="contact-info">
			<ul class="hqs">
				<li class="hq">
					<p class="small"><strong>Buenos Aires</strong></p>
					<p class="small">Los Patos 2590, Piso 4</p>
					<p class="small">CABA, Argentina</p>
				</li>
				<li class="hq">
					<p class="small"><strong>Uruguay</strong></p>
					<p class="small">Los Patos 2590, Piso 4</p>
					<p class="small">CABA, Argentina</p>
				</li>
				<li class="hq">
					<p class="small"><strong>La Paz</strong></p>
					<p class="small">Calle 15 de Calacoto Nº 8089</p>
					<p class="small">Torre Fergal piso 2 Oficina E.</p>
					<p class="small">La Paz, Bolivia</p>
				</li>
				<li class="hq">
					<p class="small"><strong>Santa Cruz</strong></p>
					<p class="small">Equipetrol Norte y 4º anillo</p>
					<p class="small">Calle K Nº 279, Edificil Hotel</p>
					<p class="small">Santa Cruz, Bolivia</p>
				</li>
				
				
			</ul>
		</div>
		<nav class="social-media only-mob">
				<ul>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</nav>
	</div>
</footer>
<div class="linea-gradient"></div>
</div>
<?php wp_footer(); ?>
<div class="toggle-container" id="toggle-relevamiento">
	<div class="toggle-inner">
		<div class="inner-container bg-blanco">
			<a onclick="closeCotizacion()" class="close-btn "><i class="fa fa-close"></i></a>
			<?php echo do_shortcode('[contact-form-7 id="179" title="Relevamiento"]');?>
		</div>
	</div>
</div>
<div class="toggle-container" id="toggle-cv">
	<div class="toggle-inner">
		<div class="inner-container bg-blanco">
			<a onclick="closeCV()" class="close-btn "><i class="fa fa-close"></i></a>
			<?php echo do_shortcode('[contact-form-7 id="180" title="Recruiting"]');?>
		</div>
	</div>
</div>

<script type="text/javascript">
	function getCotizacion(str){
		$('.change-area').val(str);
		$('#toggle-relevamiento').fadeIn();
	}
	function closeCotizacion(){
		$('#toggle-relevamiento').fadeOut();	
	}
	function getCV(){
		$('#toggle-cv').fadeIn();
	}
	function closeCV(){
		$('#toggle-cv').fadeOut();	
	}
</script>
</body>
</html>