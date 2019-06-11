<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 ?>

     <?php get_header(); ?>
    <div class="container">
        <!-- first article row -->
        <div class="row">
            <div class="col-md-12">
				<section id="primary" class="content-area">
						<div id="content" class="site-content" role="main">
							<?php if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'veron' ), get_search_query() ); ?></h1>
							</header><!-- .page-header -->
								<?php
									// Start the Loop.
									while ( have_posts() ) : the_post();

										/*
										 * Include the post format-specific template for the content. If you want to
										 * use this in a child theme, then include a file called called content-___.php
										 * (where ___ is the post format) and that will be used instead.
										 */
										get_template_part( 'content', get_post_format() );
											
									endwhile;
									

								else :
									// If no content, include the "No posts found" template.
									get_template_part( 'content', 'none' );
								

								endif;
							?>
						</div><!-- #content -->
					</section><!-- #primary -->
				</div>
			 </div>
            <!-- / End of first article row -->
     </div>
     <!-- /container --> 
<?php get_footer(); ?>