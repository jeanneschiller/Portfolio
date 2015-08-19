<div class="menu-container clearfix">
	<?php

	/*
		Template Name: home page, No Sidebar
	*/

	get_header();  ?>
</div>	


<div class="main">
  <div class="container">
    <div>

      <?php 
      //custom posts loop
      $portfolioArgs = array(
        "post_type" => "portfolio",
        "posts_per_page" => 3,
        // "orderby" => "title",
        // "order" => "ASC",
        ); 
      $portfolioQuery = new WP_Query($portfolioArgs);
      if($portfolioQuery->have_posts()){
        while($portfolioQuery->have_posts()){
          $portfolioQuery->the_post();
        ?>
        <div class="portfolio-peice clearfix">
          <div class="portfolio-img">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <div class="portfolio-content">
            <h3><?php  the_title(); ?></h3>
            <?php the_content(); ?>
          </div>
        </div>  
        
        <?php
        }
      }
      //rememeber to add this to the end of the custom query so that the origional loop
      //can reset itself.
      wp_reset_postdata();  
      ?>

    </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>