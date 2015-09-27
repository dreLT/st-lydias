<?php /* Template Name: Events Page */ get_header(); ?>

  <main role="main" class="events-page">
    <section class="content-container">
      <div class="header-image-container"></div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/events.jpg" class="events-image"> -->
      <h2 class="headline events-headline">Take part.</h2>
      <h3>Upcoming Events</h3>

      <?php get_template_part('events-loop'); ?>

      <!-- <p style="font-family: 'EB Garamond', serif; color: #1A779B; margin: 10px 0; font-size: 30px; margin-top: 18px;">Events listing coming soon!</p> -->

      <!-- <a class="email-list-button"><span>Stay up to date!</span><br /><span>JOIN OUR EMAIL LIST.</span></a> -->

    </section>

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>