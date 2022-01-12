<!-- Bloque de texto -->
<?php 
$id = $block['id'];
$bg = 'bg-blanco';
if(get_field('color_fondo')){
	$bg = 'bg-'.get_field('color_fondo');
}
?>
</div>

<section class="block text-block <?php echo $bg; ?>">
	<div class="container">
		<article class="text-container">
			<h3 class="tit-two" data-aos="fade-up"><?php echo get_field('titulo');?></h3>
			<div>
				<?php echo get_field('texto');?>
			</div>
			
		</article>
		<section class="links">
			<?php 
			$ct = 1;
			foreach(get_field('links') as $link):
				//var_dump($link);
				$ct++;
				?>
			<article class="link" data-aos="fade-up" data-aos-delay="<?php echo ($ct%2)*100;?>">
				<div class="foto">
					<a href="<?php echo $link['url'];?>" target="_blank"><?php echo wp_get_attachment_image($link['foto']['ID'],'medium'); ?></a>
				</div>
				<h4 class="tit-three"><a href="<?php echo $link['url'];?>" target="_blank"><?php echo $link['nombre'];?></a></h4>
				<div class="texto">
					<?php echo $link['bajada'];?>
				</div>
				<a class="boton" href="<?php echo $link['url'];?>" target="_blank">Ver más</a>
			</article>
			<?php endforeach;?>
		</section>
	</div>
</section>
<div class="container">