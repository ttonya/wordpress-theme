<?php get_header(); ?>
      
<style type="text/css">
  .showcase {
    background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url'). '/img/showcase.jpg'); ?>) no-repeat center center;
  }
</style>

          <section class="showcase">

           <div class="main-form">
            <p class="form-heading">Пригласить на мероприятие:</p>

             <form class="main-form-f" action="mail.php" method="POST">
<p class="form-input">Ваше имя: </p> <input class="main-form-input" type="text" name="name"></br>
<p class="form-input">Номер:</p> <input class="main-form-input" type="text" name="number"> </br>
<p class="form-input">Мероприятие:</p> <input class="main-form-input" type="text" name="event"></br>
<p class="form-input">Дата проведения: </p> <input class="main-form-input" type="text" name="date"></br>

<input type="submit" value="Отправить" class="btn-form btn btn-sm btn-header btn-outline-secondary">
</form>
             </div> 
 
   
          </section>

<div class="container">
<section class="information">


 <div class="news-front-page">
  <div class="information-title">Новости</div>
    
<ul>
<?php

global $post;
$args = array( 'posts_per_page' => 3);

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?><div class="icon-date"><?php echo get_the_date( 'd.m' ); ?></div></a>
   
     </li>
<?php endforeach; 
wp_reset_postdata();?>

</ul>


</div>

<?php if (is_active_sidebar('concerts')) : ?>
           <?php dynamic_sidebar('concerts'); ?>
         <?php endif; ?>   

 
</section>
</div>
  
  </br>
  &nbsp;

   <?php get_footer(); ?>