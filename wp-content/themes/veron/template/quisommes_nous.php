<?php
    /**
    * Template Name: Qui_Sommes_Nous
    */  
?>
<!-- ///////////////////////======QUI SOMMES NOUS =======/////////////////////////// -->
<?php get_header() ?>
<div class="quisommes">
	<div id="quisommes_title">
		<div class="container">
			<h1>QUI SOMMES NOUS</h1>
		</div>
	</div>
	<div class="top-contain">
		<div class="container">
			<h5>
				PRESENTATION  //  L’HISTOIRE DE VERON GRAUER  //  LE MOT DU PRESIDENT  //<br> NOS PARTENARIATS HUMANITAIRES 
			</h5>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<?php 
				$wp_query->query('showposts=1&post_type=quisommes');
				while($wp_query->have_posts()):$wp_query->the_post();
			 	?>
			 		<div class="row">
						<div class="col-md-6">
							<h1><?php echo get_the_title(); ?></h1>
							<p><?php echo get_the_content(); ?></p>
						</div>
						<div class="col-md-6"><?php echo get_the_post_thumbnail(); ?></div>
					</div>
			 	<?php
			 	endwhile;
			 ?>
		 </div>
		 <div class="services">
			<h2>DECOUVREZ NOS <strong>SERVICES</strong></h2>
			<?php 
				$wp_query->query('showposts=6&post_type=service');
				while($wp_query->have_posts()):the_post();
				?>
					<div class="service">
						<?php echo get_the_post_thumbnail(); ?>
						<h6><?php echo get_the_title(); ?></h6>
					</div>
				<?php
				endwhile;
			?>
		</div>
	</div>
</div>
<?php get_footer() ?>