<?php /* Template Name: Visit Page */ get_header(); ?>

  <main role="main" class="visit-page">
    
    <section class="content-container">
      <div class="upper-content">
        <div class="header-image-container" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/visit-image.jpg)"></div>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/visit-image.jpg" class="visit-image"> -->
        <iframe width="355" height="432" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD_-YJUS8lELtJHDi5exZoN96EPprLfi0c&amp;q=304+Bond+Street,Brooklyn,NY,11231" class="contact_map"></iframe>
      </div>
      
      
      <!-- Desktop Tablet Layout -->
      <div class="desktop-tablet-layout">
        <?php get_sidebar(); ?>
        <div class="lower-content">
          <div class="information">
            <h2>St. Lydia's is located at</h2>
            <p class="address">304 Bond Street<br />
              between Sacket and Union<br />
              Brooklyn, New York</p>
            <p>We are an eight minute walk from the Union Street stop on the R and a six minute walk from the Carroll Street stop on the F/G.</p>
            <p>By this Fall, our space will be fully wheelchair accessible, with an accessible bathroom and a ramp at the front door. Currently, there are two steps leading up to our space, which we will be happy to assist you in navigating.</p>
            <p>If you are visiting from out of town, please see our <a href="<?php echo home_url(); ?>/dinner-chuch#out-of-town-visitors">guide for visitors.</a></p>
            <a href="<?php echo get_site_url(); ?>/support" class="support-button">
              <span>Like what we're up to?</span>
              <span>SUPPORT ST. LYDIA'S</span>
            </a>
            <!-- <a href="mailto:stlydias@stlydias.org" class="contact-button">
              <span>Need some more info?</span>
              <span>CONTACT US</span>
            </a> -->
          </div>
        </div>
      </div>

      <!-- Phone Layout -->
      <div class="phone-layout">
        <div class="lower-content">
          <div class="information">
            <h2>St. Lydia's is located at</h2>
            <p class="address">304 Bond Street<br />
              between Sacket and Union<br />
              Brooklyn, New York</p>
            <p>We are an eight minute walk from the Union Street stop on the R and a six minute walk from the Carroll Street stop on the F/G.</p>
            <p>By this Fall, our space will be fully wheelchair accessible, with an accessible bathroom and a ramp at the front door. Currently, there are two steps leading up to our space, which we will be happy to assist you in navigating.</p>
            <p>If you are visiting from out of town, please see our <a href="<?php echo home_url(); ?>/dinner-chuch#out-of-town-visitors">guide for visitors.</a></p>
            <a href="<?php echo get_site_url(); ?>/support" class="support-button">
              <span>Like what we're up to?</span>
              <span>SUPPORT ST. LYDIA'S</span>
            </a>
            <!-- <a href="mailto:stlydias@stlydias.org" class="contact-button">
              <span>Need some more info?</span>
              <span>CONTACT US</span>
            </a> -->
          </div>
        </div>
        <?php include( TEMPLATEPATH . '/sidebar.php'); ?>
      </div>

    </section>

  </main>

<?php get_footer(); ?>