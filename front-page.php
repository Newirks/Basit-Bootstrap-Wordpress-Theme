<?php get_header(); ?>
    <main>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php bloginfo('template_url'); ?>/image/img-01.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/image/img-02.jpg" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/image/img-03.jpg"  alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="row main-content">
        <?php $frontPage = new WP_Query("showposts=6"); while($frontPage->have_posts()) : $frontPage->the_post(); ?>
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
        <?php endwhile; ?>
        <?php wp_reset_query(); ?> 
        </div>                
      </div>          
    </main>
<?php get_footer(); ?>