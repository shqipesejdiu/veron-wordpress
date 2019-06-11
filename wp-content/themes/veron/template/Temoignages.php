<?php
    /**
    * Template Name: Temoignages
    */  
?>
<!-- ///////////////////////======TEMOIGNAGES=======//////////////////////////////////////////////// -->
<?php get_header() ?>
<div class="temoignages">
	<div id="temoignages-title">
		<div class="container">
			<h1>TEMOIGNAGES</h1>
		</div>
	</div>
	<div class="container-fluid temoignages-wrapper">
		<?php 
			$wp_query->query('showposts=1&post_type=temoignages');
			while($wp_query->have_posts()) : $wp_query->the_post();
			 $cnt = get_the_content();
		 	?>
				<div class="row">
					<div class="col-md-6 col-left">
						<?php echo get_the_post_thumbnail(); ?>
					</div>
					<div class="col-md-6 col-right">
						<div class="col-md-7">
							<h3><?php echo get_the_title(); ?></h3>
							<p><?php echo substr($cnt,0,1000); ?>...</p>
						</div>
						<div class="col-md-5"></div>
					</div>
				</div>
			<?php
			endwhile;
		?>
	</div>
	<div class="temoignages-button-link">
		<div class="container">
			<div class="row">
				<div class="col-md-9"></div>
				<div class="col-md-3">
					<a href="">TEMOIGNAGES SUIVANTS</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>