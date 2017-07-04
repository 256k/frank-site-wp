<?php get_header()?>


  <div class="wrapper">
      <div class="hero">
        <div class="container">
          <div class="hero-wrapper">
          <div class="hero-info">
            <h1>Frank Arndt</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, nostrum, debitis possimus expedita, veniam commodi corporis minima eius culpa quod porro voluptate sapiente aliquid necessitatibus, at cumque quis! Eaque, corrupti!</p>
            <div class="hero-social-icons">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
          </div>
          <div class="hero-profile-pic">
            <img src="http://fillmurray.com/400/400" alt="Frank Arndt">
          </div>
          </div>
        </div>
      </div>
      <div class="js-navbar-marker"></div>
      
      <div class="navbar-wrapper">
        <div class="scrolled-title">
        <h1>Frank Arnudt</h1>
      </div>
      <div class="navbar">
        <div class="container">
          <?php wp_nav_menu( array( 'theme_location' => 'filter-menu' ) ); ?>

        </div>
      </div>
        
      </div>

      <!-- gallery section -->
      <div class="container">
        <div class="gallery-grid">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      
      // get thumnail if available, if not use default thumbnail:
        if (has_post_thumbnail()):
          $thumb = get_the_post_thumbnail_url($post, 'full');
        else :
          $thumb = 'http://fillmurray.com/400/500';
        endif;
        
        // get post category(ies) and add them as classes to each post box:
        $postcatobj = get_the_category();
        $postcat = "";
        foreach($postcatobj as $value) {
        $postcat .= $value->cat_name . " ";
    
        // get the single post permalink:
        $postlink = get_permalink();
  }
        ?>
      
        <a href="<?php echo $postlink ?>" class="gallery-grid-box <?php echo $postcat ?> ">
          <div class="image" style="background-image: url('<?php echo $thumb ?>')"></div>
        </a>
  
        
      <?php endwhile; ?>
        <!-- post navigation -->
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>

            
            
          </div>
        </div>

    </div>
    </div>
    
    


<?php get_footer()?>
