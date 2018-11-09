<?php get_header(); ?>

<div id="main-content">
  <?php echo do_shortcode('[et_pb_section global_module="5007"][/et_pb_section]');?>
</div> <!-- #main-content -->

<?php

global $post;
$args = array( 'posts_per_page' => -1 );

$posts = get_posts( $args ); ?>
<div class="blog-archive-wrap">
<section class="blog-archive">
  <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
  <article class="blog-archive__item box-shadow">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium', array('class' => 'blog-archive__img')); ?>
    </a>
    <div class="blog-archive__item-meta">
      <div class="blog-archive__item-date"><?php echo get_the_date( 'F j, Y' );  ?></div>
      <a class="blog-archive__item-title text-break" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
  </article>
  <?php endforeach; ?>
</section>
</div>
<?php wp_reset_postdata();?>

<?php echo do_shortcode('[et_pb_section global_module="4029"][/et_pb_section]');?>

<?php get_footer(); ?>