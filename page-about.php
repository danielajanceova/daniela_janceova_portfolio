<?php
/*
Template Name: About
*/
?>

      <?php get_header() ?>
 
      <?php
$about_photo = get_field("about_photo");
$aboutText = get_field("about_text");
?>
<section id="about">
    <div class="container-fluid">
    <h2>learn something</h2>
    <div class="about_text">
    <?php echo $aboutText; ?>
    </div>
    <div class="col">
    <h3>about me</h3>   
    <div class="about_photo">
     
        <img src="<?php echo $about_photo["url"] ?>" alt="about_photo">
        
        </div>
        </div>

        <div class="row">
                <p>VIDEO CV</p>
                <div class="video_CV">
    

             <iframe width="660" height="415" src="https://www.youtube.com/embed/Ijvnl-f6IEM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>
            <div class="cv_file">
                <?php
                $cv_file = get_field('cv_file');

             if ($cv_file) {
             echo '<a href="' . esc_url($cv_file['url']) . '" target="_blank">view my CV</a>';
             }
             ?>
             
          
            </div>
             
           



        </div>
    </div>
    </div>
    </div>
</section><!-- #about -->

<?php get_footer(); ?>
                  
    




           