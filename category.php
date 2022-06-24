<?php get_header(); ?>

    <main>
      <div class="container">
        <div class="page-head">
          <h1 class="display-4"><?php single_cat_title(); ?></h1>
        </div>
        <div class="page-content">
        <div class="row main-content">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-md-4 col-sm-12">
            <div class="main-content-cont">
              <div class="row"></div>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p class="main-info"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a> / <?php the_time('j F Y'); ?></p>
              <img src="<?php the_post_thumbnail_url('middle'); ?>">
              <p class="main-content-p"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Devamını Oku</button></a>              
            </div>
          </div>
        <?php endwhile; endif; ?>  
        
        </div>          
        </div> 
                       
      </div>          
    </main>

<?php get_footer(); ?>