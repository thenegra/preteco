
<?php get_header(); 

?>
<main id="content" role="main" class="page-main">


	<header class="page-header">
		<div class="container">
		<h2 class="tit-one">Página no encontrada</h2>
		</div>
	</header>
	
	<div class="space"></div>
	
	<article id="post-404">
		<div class="container">
			<h3 class="tit-three">El contenido que buscás no existe, o el link es incorrecto.</h3>
			<p>Probá buscando en nuestra página de inicio haciendo <a href="<?php echo home_url('/inicio')?>">click acá</a></p>
		
		</div>
	</article>
	<div class="space"></div><div class="space"></div><div class="space"></div>
</main>
<?php get_footer(); ?>