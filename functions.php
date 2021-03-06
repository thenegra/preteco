
<?php
@ini_set( 'upload_max_size' , '120M' );
@ini_set( 'post_max_size', '120M');
@ini_set( 'max_execution_time', '300' );
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( !isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
}
add_action( 'admin_notices', 'blankslate_admin_notice' );
function blankslate_admin_notice() {
$user_id = get_current_user_id();
if ( !get_user_meta( $user_id, 'blankslate_notice_dismissed_3' ) && current_user_can( 'manage_options' ) )
echo '<div class="notice notice-info"><p>' . __( '<big><strong>BlankSlate</strong>:</big> Help keep the project alive! <a href="?notice-dismiss" class="alignright">Dismiss</a> <a href="https://calmestghost.com/donate" class="button-primary" target="_blank">Make a Donation</a>', 'blankslate' ) . '</p></div>';
}
add_action( 'admin_init', 'blankslate_notice_dismissed' );
function blankslate_notice_dismissed() {
$user_id = get_current_user_id();
if ( isset( $_GET['notice-dismiss'] ) )
add_user_meta( $user_id, 'blankslate_notice_dismissed_3', 'true', true );
}
add_action( 'wp_enqueue_scripts', 'blankslate_enqueue' );
function blankslate_enqueue() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );

wp_enqueue_style( 'ico', get_template_directory_uri().'/css/icons.css' );
wp_enqueue_style('aos','https://unpkg.com/aos@2.3.1/dist/aos.css');
wp_enqueue_script('aos','https://unpkg.com/aos@2.3.1/dist/aos.js');
wp_enqueue_script( 'jquer','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
wp_enqueue_script( 'slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );
wp_enqueue_style('slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	    wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
wp_enqueue_style('Font_Awesome');
wp_enqueue_style( 'css', get_template_directory_uri().'/css/styles.css' );
}
function admin_style() {
  wp_enqueue_style( 'css', get_template_directory_uri().'/css/styles.css' );
}
add_action('admin_enqueue_scripts', 'admin_style');
add_action( 'wp_footer', 'blankslate_footer' );
function blankslate_footer() {
?>
<script>
jQuery(document).ready(function($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'nav_menu_link_attributes', 'blankslate_schema_url', 10 );
function blankslate_schema_url( $atts ) {
$atts['itemprop'] = 'url';
return $atts;
}
if ( !function_exists( 'blankslate_wp_body_open' ) ) {
function blankslate_wp_body_open() {
do_action( 'wp_body_open' );
}
}
add_action( 'wp_body_open', 'blankslate_skip_link', 5 );
function blankslate_skip_link() {
echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'blankslate' ) . '</a>';
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( !is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( !is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
unset( $sizes['1536x1536'] );
unset( $sizes['2048x2048'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( !is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }



add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'mod-clientes',
			'title'				=> __('Preteco: M??dulo de clientes'),
			'description'		=> __('Bloque de clientes'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'clientes' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-productos',
			'title'				=> __('Preteco: M??dulo de productos'),
			'description'		=> __('Bloque de productos/soluciones'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'productos' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-hero',
			'title'				=> __('Preteco: Hero de la home'),
			'description'		=> __('Bloque principal de la home'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'hero' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-numeros',
			'title'				=> __('Preteco: En n??meros'),
			'description'		=> __('Preteco en n??meros'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'hero' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-texto',
			'title'				=> __('Preteco: M??dulo texto'),
			'description'		=> __('Bloque con t??tulo y texto com??n'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'texto' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-columnas',
			'title'				=> __('Preteco: M??dulo columnas valores'),
			'description'		=> __('Bloque con t??tulo y l??stado de valores, misiones, etc. '),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'texto' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-slider',
			'title'				=> __('Preteco: Slider hero'),
			'description'		=> __('Bloque con slider hero'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'slider, hero' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-links',
			'title'				=> __('Preteco: Bloque links'),
			'description'		=> __('Bloque con slider hero'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'slider, hero' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-linea',
			'title'				=> __('Preteco: L??nea'),
			'description'		=> __('Bloque visual de l??nea divisoria'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'linea, separador' ),
		));
		acf_register_block(array(
			'name'				=> 'mod-busquedas',
			'title'				=> __('Preteco: B??squedas'),
			'description'		=> __('Bloque visual b??squedas laborales'),
			'render_callback'	=> 'render_block_acf',
			'category'			=> 'custom',
			'icon'				=> 'grid-view',
			'keywords'			=> array( 'linea, separador' ),
		));
	}
}

function render_block_acf( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz-_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}





function the_field_nop( $field_name ) {
	
	remove_filter('acf_the_content', 'wpautop');
	
	the_field( $field_name );
	
	add_filter('acf_the_content', 'wpautop');
	
}

/**
 * Get ID of the first ACF block on the page
 */
function blockBump($block){

	$id = $block['id'];
	
	if($id == firstBlock()):?>
	<div class="space"></div>
	<?php endif;
}
function firstBlock() {
    $post = get_post(); 

    if(has_blocks($post->post_content)) {
        $blocks = parse_blocks($post->post_content);
        $first_block_attrs = $blocks[0]['attrs'];

        if(array_key_exists('id', $first_block_attrs)) {
            return $first_block_attrs['id'];
        }
    }
}



/**
 * Get ID of the first ACF block on the page
 */
function sg_get_first_block_id() {
    $post = get_post(); 

    if(has_blocks($post->post_content)) {
        $blocks = parse_blocks($post->post_content);
        $first_block_attrs = $blocks[0]['attrs'];
        //var_dump($first_block_attrs);
        if(array_key_exists('id', $first_block_attrs)) {
            return $first_block_attrs['id'];
        }
    }
}

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'solucion' || $post_type === 'caso' ) return false;
    return $current_status;
}



