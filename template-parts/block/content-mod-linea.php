<!-- Bloque de soluciones -->
<?php 
$id = $block['id'];
$bg = 'bg-blanco';
if(get_field('color_fondo')){
	$bg = 'bg-'.get_field('color_fondo');
}
?>
</div>
<div class="linea-gradient <?php echo get_field('color').' '.get_field('tamano');?>"></div>
<div class="container">