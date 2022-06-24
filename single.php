<?php get_header(); ?>

    <main>
      <div class="container">
        <div class="page-head">
          <h1 class="display-6"><?php the_title(); ?> / <a href="<?php the_permalink(); ?>"><?php the_category(', ') ?></a> </h1>          
        </div>
        <div class="page-content">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <h3><?php the_title(); ?></h3>                                          
              <p class="main-info"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a> / <?php the_time('j F Y'); ?></p>
              <p><?php the_content(); ?></p>
            </div>
            <div class="col-md-6 col-sm-12"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>
          </div>

                    
        </div> 
                       
      </div>          
    </main>

<?php get_footer(); ?>