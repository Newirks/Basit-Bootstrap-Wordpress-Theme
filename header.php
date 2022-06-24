<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wordpress - Bootstrap Teması</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Wordpress - Bootstrap Teması</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'up-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
              <form action="<?php echo home_url('/'); ?>" class="d-flex" role="search" method="get" >
                <input name="s" value="<?php echo get_search_query(); ?>" class="form-control me-2" type="search" placeholder="Aranacak Kelime" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Ara</button>
              </form>
                </div>
            </div>
        </nav>     
      </div>    
    </header>