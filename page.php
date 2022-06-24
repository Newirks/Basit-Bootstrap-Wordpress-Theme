<?php get_header(); ?>

    <main>
      <div class="container">
        <div class="page-head">
          <h1 class="display-4"><?php the_title(); ?></h1>
        </div>
        <div class="page-content">
          <div class="row">
            <div class="col">
              <p><?php the_content(); ?></p>
            </div>
            <div class="col"><img src="<?php the_post_thumbnail_url('middle'); ?>" alt="<?php the_title(); ?>"></div>
          </div>          
        </div> 
                       
      </div>          
    </main>

<?php get_footer(); ?>