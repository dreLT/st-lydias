<?php get_header(); ?>

	<main role="main" class="event-single-page">
	<!-- section -->
	
	<!-- Dekstop to Tablet Layout -->
	<div class="desktop-tablet-layout">
		<?php get_sidebar(); ?>
		<section class="content-container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
	<!-- 			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?> -->
				<!-- /post thumbnail -->

				<!-- post title -->
				<h1 class="event-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->

				<!-- post details -->
				<!-- <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
				<!-- /post details -->

				<!--<?php the_content(); // Dynamic Content ?>-->

				<?php the_field('event_single_page_content'); ?>

				<p class="event-details">
					<?php 
					$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
					echo $date->format('F j, Y');
					?>
					<br>
					<?php the_field('event_time'); ?>
					<?php the_field('event_location'); ?>
					<a href="<?php the_field('event_url'); ?>"><?php the_field('event_url_text'); ?></a>
	        	</p>

				<!--<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>-->

				<!--<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>-->

				<!--<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->

				<!--<?php edit_post_link(); // Always handy to have Edit Post Links available ?>-->

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
	</div>

	<!-- Phone Layout -->
	<div class="phone-layout">
		<section class="content-container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
	<!-- 			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?> -->
				<!-- /post thumbnail -->

				<!-- post title -->
				<h1 class="event-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->

				<!-- post details -->
				<!-- <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
				<!-- /post details -->

				<!--<?php the_content(); // Dynamic Content ?>-->

				<?php the_field('event_single_page_content'); ?>

				<p class="event-details">
					<?php 
					$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
					echo $date->format('F j, Y');
					?>
					<br>
					<?php the_field('event_time'); ?>
					<?php the_field('event_location'); ?>
					<a href="<?php the_field('event_url'); ?>"><?php the_field('event_url_text'); ?></a>
	        	</p>

				<!--<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>-->

				<!--<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>-->

				<!--<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->

				<!--<?php edit_post_link(); // Always handy to have Edit Post Links available ?>-->

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<?php include( TEMPLATEPATH . '/sidebar.php'); ?>
	</div>
	
	<!-- /section -->
	</main>

<?php get_footer(); ?>