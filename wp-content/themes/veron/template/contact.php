<?php
    /**
    * Template Name: Contact
    */  
?>

<?php get_header() ?>
<div class="contact">
	<div class="contact-title">
		<div class="container">
			<h1>CONTACT</h1>
		</div>
	</div>
	<div class="contact-wraper">
		<div class="container-fluid">
			<div class="row contact-img">
				<div class="col-md-6 contact-img">
					<img src="<?php bloginfo('template_directory'); ?>/images/contact-photo.png">
					<div class="text">
						<p><strong>DGM Veron Grauer SA</strong></p>
						<p>Chemin Grenet 24 <br> 1214 Vernier</p>
						<p>Tél. : +41 22 732 64 40 <br> < Fax : +41 22 738 75 20 > <br> Email: moving@veron-grauer.ch</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-right">
			<div class="container">
				<div class="row">
					<div class="col-md-6 pull-right">
					  	<?php $the_query = new WP_Query( 'page_id=23' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
		                       <?php the_content(); ?>
		     			<?php endwhile;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>