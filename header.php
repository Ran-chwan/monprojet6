<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planty - Accueil</title>
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="header-container">
            <!-- Logo à gauche -->
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">Planty</a>
            </div>

            <!-- Liens "Nous rencontrer" et "Admin" -->
            <nav class="header-nav">
                <ul>
                    <li><a href="#nous-rencontrer">Nous rencontrer</a></li>
                    <?php if (current_user_can('administrator')) : ?>
                        <!-- Lien Admin visible uniquement pour les administrateurs -->
                        <li><a href="<?php echo esc_url(admin_url()); ?>">Admin</a></li>
                    <?php endif; ?>
                    <li><a href="#commander" class="commander-btn">Commander</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <?php wp_footer(); ?>
</body>
</html>
