    <footer>
      <div class="container footer-main">
        <div class="footer-main">
          <h4>Kategoriler</h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footermenu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="nav justify-content-center %2$s">%3$s</ul>',
                        'depth' => 1,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
          Wordpress için test temasıdır.
        </div>
      </div>
    </footer>
  <?php wp_footer(); ?>
  </body>
</html>