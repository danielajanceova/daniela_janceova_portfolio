<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header() ?>

<div class="container-fluid">
      <h1>portfolio</h1>
      <p>POSTERS</p>
      
      <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post() ?>
              <?php
            $projectLoop = new WP_Query (array(
            "post_type" => "project",
            "posts_per_page" => -1
            ));
            ?>

            <ul>
            <div class="posters">
                  <?php if ($projectLoop->have_posts ()) : ?>
                        <?php while ($projectLoop->have_posts ()) : ($projectLoop->the_post()) ?>
                       
                        <?php
                        $poster_one = get_field("poster_one") ;
                        $poster_two = get_field("poster_two") ;
                        $poster_three = get_field("poster_three") ;
                        $poster_four = get_field("poster_four") ;
                  ?>

                     
                        <img src="<?php echo $poster_one ["url"]; ?> " alt="">  
                        <img src="<?php echo $poster_two ["url"]; ?> " alt="">  
                        <img src="<?php echo $poster_three ["url"]; ?> " alt="">  
                        <img src="<?php echo $poster_four ["url"]; ?> " alt="">  
            
                        </ul>

            </div>

<div class="container-fluid">
<p>LOGOS</p>
                  <div class="logos">
                  
                        <?php
                        $logo_one = get_field("logo_one") ;
                        $logo_two = get_field("logo_two") ;
                        ?>

                     
                        <img src="<?php echo $logo_one ["url"]; ?> " alt="">  
                        <img src="<?php echo $logo_two ["url"]; ?> " alt="">  
                        

                        </div>
</div>

<div class="container-fluid">
            <p>COMMERCIAL</p>
            <div class="commercial">
    

    <iframe width="860" height="615" src="https://www.youtube.com/embed/xn3XgjieGE0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  
 </div>
<div class="container-fluid">
      <div class="row">
                  <p>PACKAGE DESIGN</p>
                  <div class="package">
                  
                        <?php
                        $package_one = get_field("package_one") ;
                        $package_two = get_field("package_two") ;
                        ?>

                     
                        <img src="<?php echo $package_one ["url"]; ?> " alt="">  
                        <img src="<?php echo $package_two ["url"]; ?> " alt="">  
                        
                        </div>
       </div>
                        <div class="secondrow">

                        <p>PHOTOS</p>
                  <div class="posters">
                  
                        <?php
                        $photo_one = get_field("photo_one") ;
                        ?>

                     
                        <img src="<?php echo $photo_one ["url"]; ?> " alt="">  
                        
                        <?php
                        $photo_two = get_field("photo_two") ;
                        ?>

                     
                        <img src="<?php echo $photo_two ["url"]; ?> " alt="">  

                        <?php
                        $photo_three = get_field("photo_three") ;
                        ?>

                     
                        <img src="<?php echo $photo_three ["url"]; ?> " alt=""> 
                        
                        <?php
                        $photo_four = get_field("photo_four") ;
                        ?>

                     
                        <img src="<?php echo $photo_four ["url"]; ?> " alt=""> 

                        
                        </div>


                        
                        
                        </div>
                        
                       
                      
</div>

                  </ul>
                  


                 

                  


                  </div>
                        <?php endwhile; ?> 
                  <?php endif; ?>
                  <?php wp_reset_postdata () ?>
            
</div>

            
           
      
               
             <?php endwhile; ?>
            <?php else: ?>
           
            <p>Sorry, we did not find any content to show here.</p>
        <?php endif; ?>
 


                        
                       


                      

            

<?php get_footer(); ?>


    