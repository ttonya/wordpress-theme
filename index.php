<?php get_header(); ?>
      

  <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <?php get_template_part('content', get_post_format()); ?>
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