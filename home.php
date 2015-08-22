<div class="menu-container clearfix">
	<?php

	/*
		Template Name: home page, No Sidebar
	*/

	get_header();  ?>
</div>	


<div class="main">
  <div class="container">
    <div id="about">
      <?php 
      //contact posts loop
      $aboutArgs = array(
        "post_type" => "about",
        "posts_per_page" => 1,
        ); 
      $aboutQuery = new WP_Query($aboutArgs);
      if($aboutQuery->have_posts()){
        while($aboutQuery->have_posts()){
          $aboutQuery->the_post();
        ?>
        <div class="about-me">
          <?php the_post_thumbnail('large'); ?>
          <div class=" about-me_content">
            <h1><?php  the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>  
        
        <?php
        }
      }
      wp_reset_postdata();  
      ?>
    </div>  
    <div id="portfolio">
      <?php 
      //custom posts loop
      $portfolioArgs = array(
        "post_type" => "portfolio",
        "posts_per_page" => 4,
        // "orderby" => "title",
        "order" => "ASC",
        ); 
      $portfolioQuery = new WP_Query($portfolioArgs);
      if($portfolioQuery->have_posts()){
        while($portfolioQuery->have_posts()){
          $portfolioQuery->the_post();
        ?>
        <div class="portfolio-peice clearfix">
          <div class="portfolio-img">
            <?php the_post_thumbnail('large'); ?>

          </div>
          <div class="portfolio-container">
            <div class="portfolio-link">
              <?php the_field("link_to_live_site"); ?>
            </div>
            <div class="portfolio-content"> 
              <h3><?php  the_title(); ?></h3>
              <?php the_content(); ?>
              <div class="technology">
                <?php the_field("technologies"); ?>
              </div>

            </div>  
          </div>
        </div>  
        
        <?php
        }
      }
      //rememeber to add this to the end of the custom query so that the origional loop
      //can reset itself.
      wp_reset_postdata();  
      ?>
    </div> <!--/. #portfolio -->
    <div id="skills">
      <?php 
      //contact posts loop
      $skillArgs = array(
        "post_type" => "skill",
        "posts_per_page" => 3,
        ); 
      $skillQuery = new WP_Query($skillArgs);
      if($skillQuery->have_posts()){
        while($skillQuery->have_posts()){
          $skillQuery->the_post();
        ?>
        <div class="skill-set">
          <?php the_post_thumbnail('medium'); ?>
          <div class="skill-set_content">
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
    <div id="contact">
      <?php 
      //contact posts loop
      $contactArgs = array(
        "post_type" => "contact",
        "posts_per_page" => 1,
        ); 
      $contactQuery = new WP_Query($contactArgs);
      if($contactQuery->have_posts()){
        while($contactQuery->have_posts()){
          $contactQuery->the_post();
        ?>
        <div class="contact-form clearfix">
          <?php the_content(); ?>
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