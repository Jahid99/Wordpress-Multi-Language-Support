<section class="post">                     
         <?php         
            if(have_posts() ){                             
                the_post();            
                ?>               
                 <h2><?php the_title(); ?></h2>         
                 <?php the_content();  ?>                     
                 <span class="badge">Posted on <?php echo get_the_date('Y-m-d H:i:s');?></span><br>
                 <?php  } ?>
                            
</section>
