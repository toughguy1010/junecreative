<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content list-post-content">

		<?php
			$args = array(
				'post_type'=> 'post',
				'orderby'    => 'ID',
				'post_status' => 'publish',
				'order'    => 'DESC',
				
				
				'paged' => $paged
				);
				$result = new WP_Query( $args );
			
				if ( $result-> have_posts() ) : ?>
				<?php while ( $result->have_posts() ) : $result->the_post(); ?>
					<div class="menu-work-item">
						<a href="<?php the_permalink(); ?>" class="work-item modal-link">
							
							<div class="work-title"><?php the_title() ?></div>
							<div class="work-desc"> <div class="description"><?php the_title() ?></div> <div class="work-excerpt"><?php the_excerpt() ?></div> </div>
                         
						</a>
					</div>
					
				<?php endwhile; ?>
				<?php endif; wp_reset_postdata();


		// the_content();
		// understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer list-post-footer">

		<div class="back-to-header">
            <img src="<?php echo get_template_directory_uri().'/img/back-header.svg' ?>" alt="">
        </div>
        <div class="footer-infor">
            <div class="author-design">
            <?php
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'author', 
                        'container' => 'false', 
                        'menu_id' => 'author-menu', 
                        'menu_class' => ''
                     ) 
                  ); 
                ?> 
            </div>
            <div class="copy-right">
            <?php
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'copyrigth', 
                        'container' => 'false', 
                        'menu_id' => 'copyrigth-menu', 
                        'menu_class' => ''
                     ) 
                  ); 
                ?> 
            </div>
        </div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
