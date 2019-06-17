<?php get_header(); ?>
      
          <section class="showcase">
             <div class="container">
              <h1>Lorem Ipsum Dolor</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a class="btn btn-primary btn-lg">Read More</a>
             </div>
          </section>
          
          <section class="boxes">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="box">
                    <i class="fa fa-rocket"></i>
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>

                 <div class="col-md-4">
                  <div class="box">
                    <i class="fa fa-beer"></i>
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>

                 <div class="col-md-4">
                  <div class="box">
                    <i class="fa fa-bell"></i>
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
            
          </section>




      



  <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>

          <div class="blog-post">
            <h2 class="blog-post-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
            </h2>
            <p class="blog-post-meta">
            <?php the_date(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <div class="post-thumb">
               <?php the_post_thumbnail(); ?>
             </div>
             <?php endif; ?>
                 <?php the_excerpt(); ?>
          </div><!-- /.blog-post -->

<?php endwhile; ?>
<?php else : ?>
<p><?php __('Нет новостей'); ?></p>


<?php endif; ?>
      </div><!-- /.row -->



        <aside class="col-md-4 blog-sidebar">
           <?php if (is_active_sidebar('sidebar')) : ?>
           <?php dynamic_sidebar('sidebar'); ?>
         <?php endif; ?>        
        </aside><!-- /.blog-sidebar -->

    </main><!-- /.container -->
      </div><!-- /.blog-main -->

   <?php get_footer(); ?>