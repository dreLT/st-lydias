<?php /* Template Name: Worship Page */ get_header(); ?>
  <main role="main" class="worship-page">
    
    <section class="content-container">
      <a href="<?php echo home_url(); ?>/worship/dinner-church" class="service">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/dinner-church-image.jpg" class="learn-image"> -->
        <h2>Dinner Church</h2>
      </a>
      <a href="<?php echo home_url(); ?>/worship/vespers" class="service">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/vespers-image.jpg" class="learn-image"> -->
        <h2>Vespers</h2>
      </a>
      <!-- <a class="service">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kids-church-image.jpg" class="learn-image">
        <h2>Kids' Church</h2>
      </a> -->
      <a href="<?php echo home_url(); ?>/worship/waffle-church" class="service">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/waffle-church-image.jpg" class="learn-image"> -->
        <h2>Waffle Church</h2>
      </a>
    </section>

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>