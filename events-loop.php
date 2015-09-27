<?php
global $more;
$the_query = new WP_Query(array(
  'category_name'     => 'events',
  'posts_per_page'  => -1,
  'meta_key'      => 'event_date',
  'orderby'     => 'meta_value_num',
  'order'       => 'ASC'
));
?>

<!-- Loop to display articles based on the WP_Query -->
<?php if( $the_query->have_posts() ): ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <!-- Thumbnail for larger screens -->
      <figure class="event-image">
        <?php the_post_thumbnail(); ?>
      </figure>
      <!-- Thumbnail for smaller screens -->
      <!-- <figure class="home-featured-article-img-mobile">
        <?php the_post_thumbnail( 'thumbnails-mobile' ); ?>
      </figure> -->
      <div>  
        <?php if(get_field('event_single_page_set')): ?>
          <a href="<?php the_permalink(); ?>"><h1 class="event-title"><strong><?php the_title(); ?></strong></h1></a>
        <?php else: ?>
          <h1 class="event-title"><strong><?php the_title(); ?></strong></h1>
        <?php endif ?>
        <p class="event-description"><?php the_content(); ?></p>
        <p class="event-details">
          <?php 
          if (get_field('event_display_date')) {
            echo the_field('event_display_date');
          }
          else {
            $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
            echo $date->format('F j, Y');
          }
          ?>
          <br>
          <?php the_field('event_time'); ?>
          <?php the_field('event_location'); ?>
          <a href="<?php the_field('event_url'); ?>"><?php the_field('event_url_text'); ?></a>
        </p>
      </div>
      <!-- <span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More »</a></span> -->
    </article>
  <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>