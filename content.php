<div class="blog-post">
            <h2 class="blog-post-title">

                <?php if (is_single()) : ?>
                    <?php the_title(); ?>
                <?php else : ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                 <?php endif; ?> 

            </h2>



            <p class="blog-post-meta">
            <?php the_date(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <div class="post-thumb">
               <?php the_post_thumbnail(); ?>
             </div>
             <?php endif; ?>


                <?php if (is_single()) : ?>
                    <?php the_content(); ?>
                <?php else : ?>
                     <?php the_excerpt(); ?>
                 <?php endif; ?> 



          </div><!-- /.blog-post -->