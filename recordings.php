<?php /* Template Name: Learn Item */ get_header(); ?>

  <main role="main" class="learn-items">
    
    <section class="content-container">
      
    <h1><?php the_title(); ?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_content(); ?>

        <br class="clear">

      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

      </article>
      <!-- /article -->

    <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>