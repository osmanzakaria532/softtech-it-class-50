<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title><?php bloginfo()?></title> -->

        <!-- dynamic title add process  -->
        <?php wp_head() ?>
    </head>
    <body>

        <h1>welcome to our website</h1>

        <!-- <nav>
            <?php
                // show the menu in frontend
                wp_nav_menu(
                    // decided to which menu is visible
                    array(
                        'theme_location' => 'main-menu',
                    )
                );
            ?>
        </nav> -->


        <!-- <footer>
            <?php
                // show the menu in frontend
                wp_nav_menu(
                    // decided to which menu is visible
                    array(
                        'theme_location' => 'footer-menu',
                    )
                );
            ?>

        </footer> -->
        
        <?php wp_footer(); ?>
    </body>
</html>


