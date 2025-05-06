<?php
// Security check: prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); // Loads important WordPress scripts and styles ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>

	<?php
	// Hook just after opening the body tag (used by plugins or for accessibility)
	do_action( 'wp_body_open' );

	// Hook before the header (can add a top bar, navigation, etc.)
	do_action( 'generate_before_header' );

	// Main header hook (displays the site logo, title, nav, etc.)
	do_action( 'generate_header' );

    // Display the menu in the header
	wp_nav_menu([
		'theme_location' => 'menu-header',  
		'container' => 'nav',               
		'container_class' => 'header-navigation', 
		'menu_class' => 'menu-header',      
	]);

	// Hook right after the header (can show a featured image or header banner)
	do_action( 'generate_after_header' );
	?>

	<div <?php generate_do_attr( 'page' ); ?>>
		<?php
		// Hook inside the main site container 
		do_action( 'generate_inside_site_container' );
		?>

		<div <?php generate_do_attr( 'site-content' ); ?>>
			<?php
			// Hook inside the main content container
			do_action( 'generate_inside_container' );
			?>
