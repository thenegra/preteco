

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
			<nav class="social-media">
				<ul>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
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
					<p class="small"><strong>Argentina</strong></p>
					<p class="small">Los Patos 2590, Piso 4</p>
					<p class="small">CABA, Argentina</p>
				</li>
				<li class="hq">
					<p class="small"><strong>Bolivia</strong></p>
					<p class="small">Los Patos 2590, Piso 4</p>
					<p class="small">CABA, Argentina</p>
				</li>
				<li class="hq">
					<p class="small"><strong>Uruguay</strong></p>
					<p class="small">Los Patos 2590, Piso 4</p>
					<p class="small">CABA, Argentina</p>
				</li>
			</ul>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>