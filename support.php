<?php /* Template Name: Support Page */ get_header(); ?>

  <main role="main" class="support-page">
    
    <section class="content-container">
      <div class="header-image-container" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/people-cooking.jpg)"></div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/people-cooking.jpg" class="support-image"> -->
      <h2>When you give<br /> to St. Lydia's,</h2>
      <p>You connect neighbors,<br />
      Break down boundaries,<br />
      Feed hungry souls,<br />
      Bring healing and justice.</p>
      <p>You set a table in Brooklyn.<br />
      You change the future of the Church.</p>
      <!-- <a href="<?php echo get_site_url(); ?>/support" class="support-button">
        <span>Like what we're up to?</span>
        <span>SUPPORT ST. LYDIA'S</span>
      </a> -->
      <!--<script src='https://www.dntly.com/assets/js/v1/form.js' data-donately-id="2359" data-donately-css-url="https://fiftyandfifty.github.io/donately/css/donately-submit-styles.css" data-donately-amount="20" ></script>-->
      <script src='https://www.dntly.com/assets/js/v1/form.js' data-donately-id="2359" data-donately-css-url="<?php echo get_template_directory_uri(); ?>/donately.css" data-donately-amount="20" data-donately-embed-css='true'></script>
    </section>
    <!-- https://dntly.com/assets/js/v1/form-inner/form-inner.css -->

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>