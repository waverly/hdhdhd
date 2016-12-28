<?php


/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HD2017
 */

get_header(); ?>
	<section id="draggable-container">
			<?php
						$args = array(
						'posts_per_page'   => 15,
						'offset'           => 0,
						'category'         => '',
						'category_name'    => 'Desktop Node',
						'orderby'          => 'menu_order',
						'order'            => 'ASC',
						'include'          => '',
						'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'post',
						'post_mime_type'   => '',
						'post_parent'      => '',
						'author'	   => '',
						'author_name'	   => '',
						'post_status'      => 'publish',
						'suppress_filters' => true
						);

			$the_query = new WP_Query( $args ); ?>

			<?php
			function createNode() {
				echo"<span class='draggable ui-widget-content folder-node'>";
				the_post_thumbnail();
				the_title('<p>','</p>');
				echo"</span>";
			}
			?>

			<?php if ( $the_query->have_posts() ) : ?>
				<!-- pagination here -->
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php $key_values = get_post_custom_values("Link"); ?>
					<?php
					if( is_array( $key_values ) ){
						foreach($key_values as $key => $value );
						echo  "<a href=$value>";
						createNode();
						echo"</a>";
					}
					else{
					  createNode();
				}
				?>
			  <?php endwhile; ?>
			<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

	</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section id="soundcloud">
			<img id="play" src="/wp-content/uploads/2016/12/playicon.png">
			<img id="pause" class="hidden" src="/wp-content/uploads/2016/12/pauseicon.png">
			<p id="soundcloudText">
				<span>Soundcloud</span>
		 </p>
		</section>

		<section id="events">
				<p style="margin-bottom: 1.5rem;">Upcoming Events</p>
				<?php
							$args = array(
							'posts_per_page'   => 5,
							'offset'           => 0,
							'category'         => '',
							'category_name'    => 'events',
							'orderby'          => 'menu_order',
							'order'            => 'ASC',
							'include'          => '',
							'exclude'          => '',
							'meta_key'         => '',
							'meta_value'       => '',
							'post_type'        => 'post',
							'post_mime_type'   => '',
							'post_parent'      => '',
							'author'	   => '',
							'author_name'	   => '',
							'post_status'      => 'publish',
							'suppress_filters' => true
							);

				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ) : ?>
					<!-- pagination here -->
					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<?php $key_values = get_post_custom_values("Date"); ?>
									<?php
									if( is_array( $key_values ) ){
									  foreach($key_values as $key => $value );
									  echo  "<p><span>$value</span>";
									} ?>

									<?php $key_values = get_post_custom_values("Venue"); ?>
									<?php
									if( is_array( $key_values ) ){
									  foreach($key_values as $key => $value );
									  echo  "<span>$value</span></p>";
									} ?>
					<?php endwhile; ?>
				<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
		</section>

		<section id="instagram" class="col-md-6">
			<div class="circle">
				<img id="circle-img" src="/wp-content/uploads/2016/12/insta-bg.png" alt="">
			</div>
		</section>

		<div class="contact col-md-6">
			<p>DJ HD Bookings</br>
			<a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">Christine@discwoman.com</a></p>
			<p>Bookings & Inquiries
			for Rahel, Thurmon
			Green, Jay Boogie:</p>
			<a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">book@hd.com</a>
		  <p>Doom Dab</p>
			<a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">HD@doomdab.com</a>
			<p> For everything else <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">info@hd.com</a></p>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
