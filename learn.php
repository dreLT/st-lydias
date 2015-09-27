<?php /* Template Name: Learn Page */ get_header(); ?>

  <main role="main" class="learn-page">
    
    <section class="content-container">

      <div class="header-image-container" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/learn-image.jpg)"></div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/learn-image.jpg" class="learn-image"> -->
      <h2 class="headline">Take a seat<br /> at the table</h2>
      <div class="learn-intro">
        <p>We’re thrilled that St. Lydia’s has something to offer to church leaders around the country, exploring new ideas for your own contexts. We hope these resources will help you as you gather ideas and explore.</p>
        <p>If you’re inspired or discover something from what you find here, we hope you’ll support the work we’re doing. Giving from folks around the country is an important part of our budget each year.</p>
        <a href="<?php echo get_site_url(); ?>/support" class="learn-button support-button">SUPPORT ST. LYDIA'S</a>
      </div>

      <div class="learn-items-container">
        <div class="articles-interviews">
          <h3>Articles and Interviews</h3>
          <a class="learn-button" href="http://www.nyspirit.com/spirit/spirituality/hungry-for-a-connection/"><span>how we</span><br /><span>CONNECT</span></a>
          <a class="learn-button" href="http://www.faithandleadership.com/dinner-and-gospel-served-st-lydias"><span>how we</span><br /><span>EMERGED</span></a>
          <a class="learn-button" href="http://www.blogtalkradio.com/lifecoachradionetwork/2015/01/27/spiritually-speaking-with-rev-jen-and-rebecca"><span>the whole darn</span><br /><span>STORY</span></a>
        </div>

        <div class="listen-in">
          <h3>Listen In</h3>
          <a class="learn-button" href="<?php echo get_template_directory_uri(); ?>/img/rule-of-life.pdf"><span>our</span><br /><span>RULE OF LIFE</span></a>
          <a class="learn-button" href="<?php echo get_template_directory_uri(); ?>/img/scripts.pdf"><span>our</span><br /><span>SCRIPTS</span></a>
          <a class="learn-button" href="http://brokenbread.podbean.com/"><span>Emily's</span><br /><span>SERMONS</span></a>
        </div>

        <div class="singing-together">
          <h3>Singing Together</h3>
          <a class="learn-button" href="http://stlydias.org/blog/category/songswesing/"><span>teaching</span><br /><span>RECORDINGS</span></a>
          <a class="learn-button" href="<?php echo get_template_directory_uri(); ?>/learn/how-we-choose-our-repertoire/"><span>choosing</span><br /><span>SONGS</span></a>
          <a class="learn-button" href="<?php echo get_template_directory_uri(); ?>/learn/the-spiritual-practice-of-song-leading-at-saint-lydias/"><span>spirituality of</span><br /><span>SONG LEADING</span></a>
          <a class="learn-button" href="<?php echo get_template_directory_uri(); ?>/learn/what-song-leaders-work-on-in-rehearsal/"><span>how we</span><br /><span>REHEARSE</span></a>
          <a class="learn-button" href="https://www.churchpublishing.org/products/index.cfm?fuseaction=productDetails&productID=3266]"><span>our</span><br /><span>HYMNAL</span></a>
        </div>

        <div class="people">
          <h3>People We Love and Have Learned From</h3>
          <a class="learn-button" href="http://www.saintgregorys.org/"><span>st. gregory of</span><br /><span>NYSSA</span></a>
          <a class="learn-button" href="http://www.allsaintscompany.org"><span>all saints'</span><br /><span>COMPANY</span></a>
          <a class="learn-button" href="http://www.musicthatmakescommunity.org/"><span>music that makes</span><br /><span>COMMUNITY</span></a>
          <a class="learn-button" href="http://heartell-press.myshopify.com/"><span>rachel pollack</span><br /><span>KROH</span></a>
          <a class="learn-button" href="http://www.notsochurchy.org/"><span>not so</span><br /><span>CHURCHY</span></a>
          <a class="learn-button" href="http://parity.nyc"/><span></span><br /><span>PARITY</span></a>
          <a class="learn-button" href="http://trinitylowereastside.org/"><span></span><span>Trinity Lower East Side</span></a>
          <a class="learn-button" href="http://www.faithinnewyork.org/"><span></span><span>Faith in<br /> New York</span></a>
        </div>
      </div>

    </section>
    
    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>