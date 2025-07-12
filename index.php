<?php get_header(); ?>
<main class="chat-wrapper grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="chat-message col-span-12 md:col-span-6">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="post-thumb"><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <div class="views-count">
      <?php echo intval( get_post_meta( get_the_ID(), 'mhtwa_views', true ) ); ?> views
    </div>
  </div>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
