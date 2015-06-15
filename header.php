<?php
/**
 * @package WordPress
 * @subpackage Heliae
 */
?>

<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="heliae-theme">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php
		/*
			j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
			 - device-width : Occupy full width of the screen in its current orientation
			 - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
			 - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
			 - minimal-ui = iOS devices have minimal browser ui by default
		*/
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}


		/*
			The is the icon for iOS Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
		*/
		if (true == of_get_option('head_apple_touch_icon'))
			echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>

	<!-- concatenate and minify for production -->
	<!--Reset-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
    <link rel="stylesheet" href="/wp-content/themes/heliae/_/fonts/Heliae/Heliae.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!--Theme CSS-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <!--Fonts-->
    
    <!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
    <script src="<?php echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>

	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>

	<!-- Application-specific meta tags -->
	<?php
		// Windows 8
		if (true == of_get_option('meta_app_win_name')) {
			echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
			echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
			echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
		}

		// Twitter
		if (true == of_get_option('meta_app_twt_card')) {
			echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
			echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
			echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
			echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
			echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
		}

		// Facebook
		if (true == of_get_option('meta_app_fb_title')) {
			echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
			echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
		}
	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    
    
    
    
    <style type="text/css">#wpadminbar { display:none; }</style>
    <style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0px !important; }
		* html body { margin-top: 0px !important; }
	}
</style>
    
    
    
    
    

</head>

<body <?php body_class(); ?>>

	<!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
	<!--<div id="wrapper">-->

    <header id="header" role="banner">
        
        <div id="mobile-nav-hamburger">
        
            <i class="fa fa-bars"></i>
        
        </div>

        <ul id="social-buttons">

            <li>
                
                <a href="https://www.linkedin.com/company/heliae" target="_blank">

                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
                    
                </a>

            </li>

            <li>
                
                <a href="https://www.facebook.com/pages/Heliae-Development-LLC/103308379728510" target="_blank">

                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
                    
                </a>

            </li>

            <li>
                
                <a href="https://twitter.com/heliae_algae" target="_blank">

                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                    
                </a>

            </li>

            <li>
                
                <a href="mailto:info@Heliae.com">

                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                </span>
                    
                </a>

            </li>

        </ul>

    </header>

    <nav role="navigation" id="site-nav">

        <ul id="nav">
        
            <li id="nav-home"><a href="/"><img src="/wp-content/uploads/2015/06/fav.png" /><span class="nav-home-text">Home</span></a></li>
        
            <li><a href="/company/"<?php if(is_page(61)){echo ' class="active-nav"';} ?>>Company</a></li>
            
            <li><a href="/technology/"<?php if(is_page(189)){echo ' class="active-nav"';} ?>>Technology</a></li>
            
            <li><a href="/products-partners/"<?php if(is_page(72)){echo ' class="active-nav"';} ?>>Products + Partners</a></li>
            
            <li><a href="/our-team/"<?php if(is_page(21)){echo ' class="active-nav"';} ?>>Team</a></li>
            
            <li><a href="/reading-room/"<?php if(is_page(207)){echo ' class="active-nav"';} ?>>Reading Room</a></li>
            
            <li><a href="/careers/"<?php if(is_page(491)){echo ' class="active-nav"';} ?>>Careers</a></li>
            
            <li><a href="/contact/"<?php if(is_page(59)){echo ' class="active-nav"';} ?>>Contact</a></li>

            <!--This is a commented out navigation point. To do so, add the <!-- at the start
<li><a href="/contact/"<?php if(is_page(59)){echo ' class="active-nav"';} ?>>Contact</a></li>
and add this at the end: -->

        </ul>

        <div class="nav-logo">

            <a href="/">
                
                <img src="/wp-content/uploads/2015/05/heliae_ondark.png" />
            
            </a>

        </div>

    </nav>