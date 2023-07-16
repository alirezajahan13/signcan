<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signcan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderParent">
		<div class="mainHeader flexBoxParent mainView">
			<div class="mobMenuParent">
				<span class="mobileMenuIcon generalBoxBorder lowRadius">
					<svg width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon glyph"><path d="M21 19H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2Zm0-6H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2Zm0-6H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2Z"/></svg>
				</span>
			</div>
			<div class="headerPartLeft">
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
				</a>
			</div>
			<div class="headerMobileIcon">
				<a class="headerLoginBtn generalBoxBorder lowRadius" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#4a4041" height="15" stroke="#4a4041" stroke-width="1.5" viewBox="25 25 75 90" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M87 50c0-12.7-10.3-23-23-23S41 37.3 41 50s10.3 23 23 23 23-10.3 23-23zm-40 0c0-9.4 7.6-17 17-17s17 7.6 17 17-7.6 17-17 17-17-7.6-17-17zm-21.5 58.2c.5.3 1 .4 1.5.4 1 0 2.1-.5 2.6-1.5C36.6 94.7 49.8 87 64 87s27.4 7.7 34.5 20.1c.8 1.4 2.7 1.9 4.1 1.1s1.9-2.7 1.1-4.1C95.6 89.9 80.4 81 64 81s-31.6 8.9-39.7 23.1c-.8 1.4-.3 3.3 1.2 4.1z" data-original="#000000"/></svg></a>
				<a class="headerCarBtn generalBoxBorder lowRadius" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4a4041" stroke="#4a4041" stroke-width="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M25.308 61.679c-3.514 0-6.373-2.859-6.373-6.373s2.859-6.372 6.373-6.372 6.373 2.858 6.373 6.372-2.859 6.373-6.373 6.373zm0-8.745a2.375 2.375 0 0 0-2.373 2.372c0 1.309 1.064 2.373 2.373 2.373s2.373-1.064 2.373-2.373a2.375 2.375 0 0 0-2.373-2.372zm22.154 8.745c-3.514 0-6.372-2.859-6.372-6.373s2.858-6.372 6.372-6.372 6.373 2.858 6.373 6.372-2.86 6.373-6.373 6.373zm0-8.745a2.375 2.375 0 0 0-2.372 2.372 2.375 2.375 0 0 0 2.372 2.373 2.375 2.375 0 0 0 2.373-2.373 2.375 2.375 0 0 0-2.373-2.372zm4.666-8.94H20.709a6.482 6.482 0 0 1-6.35-5.061L7.838 10.456a1.264 1.264 0 0 0-.696-.86L1.733 7.089a2.5 2.5 0 0 1 2.102-4.536L9.244 5.06a6.293 6.293 0 0 1 3.468 4.28l6.521 28.479a1.506 1.506 0 0 0 1.476 1.176h31.419a1.51 1.51 0 0 0 1.476-1.171l5.07-21.813a1.488 1.488 0 0 0-.288-1.284 1.49 1.49 0 0 0-1.186-.572h-37a2.5 2.5 0 1 1 0-5h37c1.999 0 3.857.897 5.101 2.462s1.696 3.579 1.244 5.526l-5.071 21.814a6.489 6.489 0 0 1-6.346 5.037z" data-original="#000000"/></svg></a>
			</div>
			<div class="headerParetRight">
				<div class="rightHeaderUp flexBoxParent">
					<?php echo do_shortcode('[fibosearch]'); ?>
					<a class="generalButton headerLoginBtn" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#4a4041" height="15" stroke="#4a4041" stroke-width="1.5" viewBox="25 25 75 90" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M87 50c0-12.7-10.3-23-23-23S41 37.3 41 50s10.3 23 23 23 23-10.3 23-23zm-40 0c0-9.4 7.6-17 17-17s17 7.6 17 17-7.6 17-17 17-17-7.6-17-17zm-21.5 58.2c.5.3 1 .4 1.5.4 1 0 2.1-.5 2.6-1.5C36.6 94.7 49.8 87 64 87s27.4 7.7 34.5 20.1c.8 1.4 2.7 1.9 4.1 1.1s1.9-2.7 1.1-4.1C95.6 89.9 80.4 81 64 81s-31.6 8.9-39.7 23.1c-.8 1.4-.3 3.3 1.2 4.1z" data-original="#000000"/></svg><span>Login</span></a>
					<a class="generalButton" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4a4041" stroke="#4a4041" stroke-width="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M25.308 61.679c-3.514 0-6.373-2.859-6.373-6.373s2.859-6.372 6.373-6.372 6.373 2.858 6.373 6.372-2.859 6.373-6.373 6.373zm0-8.745a2.375 2.375 0 0 0-2.373 2.372c0 1.309 1.064 2.373 2.373 2.373s2.373-1.064 2.373-2.373a2.375 2.375 0 0 0-2.373-2.372zm22.154 8.745c-3.514 0-6.372-2.859-6.372-6.373s2.858-6.372 6.372-6.372 6.373 2.858 6.373 6.372-2.86 6.373-6.373 6.373zm0-8.745a2.375 2.375 0 0 0-2.372 2.372 2.375 2.375 0 0 0 2.372 2.373 2.375 2.375 0 0 0 2.373-2.373 2.375 2.375 0 0 0-2.373-2.372zm4.666-8.94H20.709a6.482 6.482 0 0 1-6.35-5.061L7.838 10.456a1.264 1.264 0 0 0-.696-.86L1.733 7.089a2.5 2.5 0 0 1 2.102-4.536L9.244 5.06a6.293 6.293 0 0 1 3.468 4.28l6.521 28.479a1.506 1.506 0 0 0 1.476 1.176h31.419a1.51 1.51 0 0 0 1.476-1.171l5.07-21.813a1.488 1.488 0 0 0-.288-1.284 1.49 1.49 0 0 0-1.186-.572h-37a2.5 2.5 0 1 1 0-5h37c1.999 0 3.857.897 5.101 2.462s1.696 3.579 1.244 5.526l-5.071 21.814a6.489 6.489 0 0 1-6.346 5.037z" data-original="#000000"/></svg></a>
				</div>
				<div class="rightHeaderDown">
					<?php wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container_class'=>'desktopMenu'
							)
						);
					?>
				</div>
			</div>
		</div>
	</div>
