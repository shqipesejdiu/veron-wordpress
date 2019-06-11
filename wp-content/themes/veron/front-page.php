<?php get_header(); ?>

<div class="home">
	<div class="home-top">
		<div class="slider">
			<div class="photo">
				<img src="<?php bloginfo('template_directory'); ?>/images/home1-picture.png">
			</div>
		</div>
		<div class="blank"></div>
		<div class="home-services">
			<!-- <div class="container"> -->
				<div class="services">
					<h1>NOS<strong>SERVICES</strong></h1>
					<?php
						$wp_query->query('showposts=6&post_type=service');
						while($wp_query->have_posts()):the_post();
						$cnt=get_the_content();
						?>		
							<div class="service">
								<?php echo get_the_post_thumbnail(); ?>
								<h6><?php echo get_the_title(); ?></h6>
							</div>		
						<?php
						endwhile;
					 ?>
				</div>
			<!-- </div> -->
		</div>
		<div class="veron-grauer-sa">
			<!-- <div class="container">
				<div class="row">
				  	<?php $the_query = new WP_Query( 'page_id=70' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
	                       <?php the_content(); ?>
	     			<?php endwhile;?>
				</div>
			</div> -->
			<div class="container">
				<div class="row">
					<h2>VERON GRAUER SA</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>
							<strong>Spécialisée dans le déménagement depuis 1867, la société Véron Grauer S.A possède un entrepôt à Genève (Vernier) et une flotte de véhicules reconnaissables par leur couleur jaune.</strong> 
						</p>
						<p>	
							Avec professionnalisme, les employés de l’entreprise répondent de manière personnalisée aux demandes de leurs clients. La qualité du service, le soin apporté à chaque demande et l’efficacité sont des valeurs sur lesquelles Véron Grauer S.A s’appuie au quotidien.
						</p>
					</div>
					<div class="col-md-6">
						<p>
							Véron Grauer S.A prend en charge vos transports internationaux, de l’emballage à la livraison, tout en gérant les questions d’assurance et de dédouanement. Son service de confection de caisses sur mesure lui permet de proposer des contenants solides et adaptés à tous vos produits, pour un transport sans risque. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="home-actus">
		<div class="container">
			<h1>ACTUS</h1>
		</div>
		<div class="home-actus-contain">
			<div class="container">
				<div class="row ">
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
								<div class="col-md-6 post">
									<div class="row">
										<div class="col-sm-5">
										<?php echo get_the_post_thumbnail(); ?>
										</div>
										<div class="col-sm-7 text">
											<span><?php echo get_the_date("d.m.Y"); ?></span>
											<h5><?php get_the_title(); ?></h5>
											<p><?php echo substr($cnt,0,500); ?>...</p>
											<button><a href="<?php the_permalink(); ?>">LIRE LA SUITE</a></button>	
										</div>
									</div>
								</div>

							<?php
						endwhile;
					?>	
				</div> 
			</div>
		</div>
	</div>
	<div class="home-temoignages">
		<?php 
			$wp_query->query('showposts=1&post_type=temoignages');
			while($wp_query->have_posts()) : $wp_query->the_post();
			$cnt = get_the_content();
		 	?>
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
								<h1><?php echo get_the_title(); ?></h1>
								<p><?php echo substr($cnt,0,1000); ?></p>
								<button><a href="<?php the_permalink(); ?>">LIRE LA SUITE</a></button>
								<button class="pull-right"><a href="<?php the_permalink(); ?>">VOIR TOUS LES TEMOIGNAGES</a></button>
							</div>
							
						</div>
					</div>
				</div>
			<?php
			endwhile;
		?>	
	</div>
	<!-- <div class="home-grauer">
		<div class="container">
			<div class="row content">
				<div class="col-md-3">
					<div id="photos">
						<img src="<?php //bloginfo('template_directory'); ?>/images/home-picture3.png"/>
						<img id="photo2" src="<?php //bloginfo('template_directory'); ?>/images/home-picture4.png"/>
					</div>
				</div>
				<div class="col-md-9">
					<h1>VERON GRAUER:<br/> DES DEMENAGEURS AU GRAND C&OElig;UR</h1>
					<div class="col-md-4"></div>
					<div class="col-md-8">
						<p>
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div> -->
</div>
    
<?php get_footer(); ?>