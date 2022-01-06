

<section class="form-block bg-negro" id="contacto">
	<div class="linea-gradient small inv"></div>
	<div class="container">
		<h3 class="tit-two" data-aos="fade-up" data-aos-duration="300">Contactanos</h3>
		<div class="form-container" data-aos="fade-up" data-aos-duration="450">
		<?php echo do_shortcode('[contact-form-7 id="8" title="Contacto general"]');?>
		</div>
	</div>
</section>
</div>
<footer id="footer" role="contentinfo" class="bg-verde">
	<div class=""></div>
	<div class="container">
		<div class="brand">
			<div class="main">
			<h1  data-aos="fade-right" data-aos-duration="300"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo-preteco.svg" alt="Preteco"></a></h1>
			<nav class="social-media only-desk"  data-aos="fade-right" data-aos-duration="450">
				<ul>
					<li><a href="https://www.instagram.com/preteco_ar_bo_uy/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://es-la.facebook.com/preteco/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company/preteco/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://twitter.com/preteco/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</nav>
		</div>
		<div class="tagline" data-aos="fade-right" data-aos-duration="300">
					<img src="<?php echo get_template_directory_uri()?>/img/tagline.svg">

				</div>
		</div>
		<div class="contact-info">
			<ul class="hqs" data-aos="fade-right" data-aos-duration="450">
				<li class="hq">
					<p class="small pais" ddata-aos="fade-right" ddata-aos-duration="300"><strong>Argentina</strong></p>
					<div class="oficina" ddata-aos="fade-right" ddata-aos-duration="450">
						<p class="small">Los Patos 2590</p>
						<p class="small">Piso 4</p>
						<p class="small">CABA, Argentina</p>
					</div>
					<div class="oficina" ddata-aos="fade-right" ddata-aos-duration="600">
						<p class="small"> Av. Hipolito Yrigoyen 146</p>
						<p class="small">Piso 15</p>
						<p class="small">Córdoba, Argentina</p>
					</div>
				</li>
				<!--li class="hq">
					<p class="small pais"><strong>Argentina</strong></p>
					<p class="small"> Av. Hipolito Yrigoyen 146 Piso 15</p>
					<p class="small">Córdoba, Argentina</p>
				</li-->
				
				<li class="hq">
					<p class="small pais" ddata-aos="fade-right" ddata-aos-duration="300"><strong>Bolivia</strong></p>
					<div class="oficina" ddata-aos="fade-right" ddata-aos-duration="450">
						<p class="small">Calle 15 de Calacoto Nº 8089</p>
						<p class="small">Torre Fergal piso 2 Oficina E.</p>
						<p class="small">La Paz, Bolivia</p>
					</div>
					<div class="oficina" ddata-aos="fade-right" ddata-aos-duration="600">
						<p class="small">Equipetrol Norte y 4º anillo</p>
						<p class="small">Calle K Nº 279, Edificil Hotel</p>
						<p class="small">Santa Cruz, Bolivia</p>
					</div>
				</li>
				<!--li class="hq">
					<p class="small pais"><strong>Bolivia</strong></p>
					<p class="small">Equipetrol Norte y 4º anillo</p>
					<p class="small">Calle K Nº 279, Edificil Hotel</p>
					<p class="small">Santa Cruz, Bolivia</p>
				</li-->
				<li class="hq">
					<p class="small pais" ddata-aos="fade-right" ddata-aos-duration="300"><strong>Colombia</strong></p>
					<div class="oficina"  ddata-aos="fade-right" ddata-aos-duration="450">
						<p class="small">Calle 72 número 9-55 oficina 502</p>
					<p class="small">Bogota, Colombia</p>
					</div>
					
					<div class="oficina" ddata-aos="fade-right" ddata-aos-duration="450">
						<p class="small pais" ><strong>Uruguay</strong></p>
						<p class="small" >Uruguay Rincon 602 piso 6</p>
						<p class="small" >Montevideo, Uruguay</p>
					</div>
				</li>
				<!--li class="hq">
					
				</li-->
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
<a id="wa-button" href="https://api.whatsapp.com/send?phone=5491140728806&text=%C2%A1Hola!%20Me%20comunico%20desde%20http%3A%2F%2Fwww.preteco.com%2F" target="_blank"><span>Contactanos por WhatsApp</span><i class="fa fa-whatsapp"></i></a>
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