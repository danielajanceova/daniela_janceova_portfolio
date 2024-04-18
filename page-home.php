<?php
/*
Template Name: Home
*/
?>

      <?php get_header() ?>
       
<div class="container-fluid">
      <h1>portfolio</h1>

            <div class="homepage_photo">

            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post() ?>
              <?php the_content() ?>
           
      <div class="row">
                  <?php 
                  $homepage_photo = get_field("homepage_photo") ;
                  ?>

                        <img src="<?php echo $homepage_photo ["url"]; ?> " alt="">  
                  
                  </div>
                  
                  
             <?php endwhile; ?>
            <?php else: ?>
            <p>Sorry, we did not find any content to show here.</p>
        <?php endif; ?>
        </div>
    </div>
    

<?php get_footer(); ?>