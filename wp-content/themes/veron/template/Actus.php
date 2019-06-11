<?php
    /**
    * Template Name: Actus
    */  
?>
<!-- ///////////////////////======ACTUS=======//////////////////////////////////////////////// -->
<?php get_header() ?>
<div class="actus">
	<div id="actus-title">
		<div class="container">
			<h1>ACTUS</h1>
		</div>
	</div>
	<div class="container">
			
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
			   'posts_per_page' => 2,
			   'paged' => $paged
			);

			$custom_query = new WP_Query( $args );

			while($custom_query->have_posts()) : 
			   $custom_query->the_post();	
				$cnt = get_the_content();
			?>
			   <div class="post">
					<div class="row">
						<div class="col-md-2 data">
							<p id="data"><?php echo get_the_date("d.m.Y"); ?></p>
						</div>
						<div class="col-md-10 title">
							<h3><?php echo get_the_title();?></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 img">
							<?php echo get_the_post_thumbnail(); ?>
						</div>
						<div class="col-md-8 text">
							<p><?php echo substr($cnt,0,1000); ?>...</p>
						</div>	
					</div>
				</div>
														
			<?php 
			endwhile; 
			?>
			<div class="actus-pagination">
				 <?php 
		  		if (function_exists("pagination")) {
				pagination($custom_query->max_num_pages);
			}
		   ?>  
			</div>
		 
 		
	</div>
</div>

<?php get_footer(); ?>