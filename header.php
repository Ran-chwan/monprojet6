<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="site-header" role="banner">
        <div class="header-container">

            <div class="logo">
                <a href="<?php echo home_url(); ?>">Planty</a>
            </div>

            <div class="nav-links">
                <a href="#rencontrer">Nous rencontrer</a>
                
                <?php if (current_user_can( 'manage_options' )): ?>
                    <a href="<?php echo admin_url(); ?>">Admin</a>
                <?php endif; ?>

                <button class="commander-button">Commander</button>
            </div>
        </div>
    </header>

    <?php wp_footer(); ?>
</body>
</html>
