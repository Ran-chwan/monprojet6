<?php
// Security check: prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	</div>
</div>

<?php
// Hook before the footer starts (useful to add elements above the footer)
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_attr( 'footer' ); ?>>
	<?php
	// Hook before the main footer content
	do_action( 'generate_before_footer_content' );

    // Display the footer menu 
	wp_nav_menu( array(
		'theme_location' => 'menu-footer',  
		'menu_class'     => 'footer-menu',  
	) );

	// Main footer hook: generates widgets and footer content
	do_action( 'generate_footer' );

	// Hook after the footer content (perfect to add legal links or custom elements)
	do_action( 'generate_after_footer_content' );
	?>
</div>

<?php
// Hook after the complete footer
do_action( 'generate_after_footer' );

// Required: loads WordPress scripts and closes everything properly
wp_footer();
?>

</body>
</html>
