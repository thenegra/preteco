<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82775308-5"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-82775308-5');
</script>
<script type="text/javascript">
    var _elqQ = _elqQ || [];
    _elqQ.push(['elqSetSiteId', '1160027']);
    _elqQ.push(['elqTrackPageView']);
    
    (function () {
        function async_load() {
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//img03.en25.com/i/elqCfg.min.js';
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        }
        if (window.addEventListener) window.addEventListener('DOMContentLoaded', async_load, false);
        else if (window.attachEvent) window.attachEvent('onload', async_load); 
    })();
</script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" class="<?php if(!is_front_page()){ echo 'sticky'; }?>" role="banner">
	<div class="container">
	<div id="branding" >
		<div id="site-title" itemprop="publisher">
			<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo-preteco.svg" alt="Preteco"></a></h1>
		</div>
	</div>
	<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
	</nav>
</div>
<div class="linea-gradient small fill"></div>
</header>
<?php if(is_front_page()):?>
<script type="text/javascript">
	var sT;
	$(document).ready(function(){
		$(document).scroll(checkScroll);
		checkScroll();
	});
	function checkScroll(){
		sT = $(document).scrollTop();
		console.log($(window).outerHeight());
		if(sT>$(window).outerHeight()*.1){
			$('#header').addClass('sticky');
		} else{
			$('#header').removeClass('sticky');
		}
	}
</script>
<?php endif; ?>
<div id="container">