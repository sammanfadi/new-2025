<?php get_header(); ?>
<main class="chat-wrapper grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="chat-message col-span-12 md:col-span-6">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
