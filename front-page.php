<?php get_header(); ?>

  <div class="homepage-main">
    <main role="main" class="home-container">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/homepage-background.jpg" class="home-background"> -->
      <section class="home-content"> <!--background image -->
        <span class="welcome">Welcome.</span>
        <div class="home-intro intro-item">
          <h2>St. Lydia's is a church<br />where life is lived out around<br />the table</h2>
          <p>A progressive, GLBTQ-affirming congregation in the Gowanus neighborhood of Brooklyn, New York, we are working together to dispel isolation, reconnect neighbors, and subvert the status quo.</p>
          <p>You are welcome here.</p>
        </div>
        <!-- <a class="home-event intro-item" href="https://stlydias.dntly.com/campaign/2484#/">
          <span>The Step Right Up Campaign:<br /> we’re almost there!</span>
        </a> -->
        <a class="home-event intro-item" href="<?php the_field('home_feed_url'); ?>">
          <span><?php the_field('home_feed'); ?></span>
        </a>
        <a href="<?php echo home_url(); ?>/support" class="home-support intro-item">
          <span>Like what we're up to?</span><br />
          <span>SUPPORT ST. LYDIA'S</span>
        </a>
      </section>
      
    </main>
    <?php get_footer(); ?>
  </div>
