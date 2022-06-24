<?php get_header(); ?>

    <main>
      <div class="container">
        <div class="page-head">
          <h1 class="display-4"><?php echo get_search_query(); ?></h1>
        </div>
        <div class="page-content">
        <div class="row main-content">

		<?php
		$s = get_search_query();
		$args = array(
		        	's' => $s
		            );
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
		        _e("<h2 class='display-6'>Aranan Kelime: ".get_query_var('s')."</h2>");
		        while ( $the_query->have_posts() ) {
		           $the_query->the_post();
		                 ?>
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
		                 <?php
		        }
		    }else{
		?>
		        <h2 style='font-weight:bold;color:#000'>Üzgünüz Bulamadı :(</h2>
		        <div class="alert alert-info">
		          <p>Aradığınız kritere uygun bir veri bulunamadı.</p>
		        </div>
		<?php } ?>



 
        
        </div>          
        </div> 
                       
      </div>          
    </main>

<?php get_footer(); ?>