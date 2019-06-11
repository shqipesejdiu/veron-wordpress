<?php get_header() ?>
<div class="single">
	<?php while(have_posts()): the_post() ?>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-left">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
			</div>
		</div>
		<div class="col-right">
			<div class="container">
				<div class="row">
					<div class="col-md-6 pull-right">
						<h2><?php the_title()?></h2>
						<p><?php the_content();?></p>
					</div>
				</div>
			</div>
		</div>
	   <?php endwhile; ?>
	   <div class="temoignages-button-link">
			<div class="container">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-3">
						<a href="#" class="prev bar">< TEMOIGNAGES PRECEDENTS</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="next">TEMOIGNAGES SUIVANTS ></a>
					</div>
				</div>
			</div>
		</div>
</div>
<?php get_footer() ?>
