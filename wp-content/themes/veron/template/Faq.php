<?php
    /**
    * Template Name: Faq
    */  
?>
<!-- ///////////////////////======FAQ=======//////////////////////////////////////////////// -->
<?php get_header() ?>
<div class="faq">
	<div id="faq-title">
		<div class="container">
			<h1>FAQ</h1>
		</div>
	</div>
	<div class="container">
    	<div class="wrapper">
        	<div class="panel-group" id="accordion">
        		<?php 
        			$wp_query->query('showposts=10&post_type=faq'); 
	            	$c=1;
					while ($wp_query->have_posts()) : $wp_query->the_post();
	            	$cnt = get_the_content();
					?>
						<div class="panel panel-default">
							<div class="buttons">
						   		<div class="panel-heading">
						        	<h4 class="panel-title">
						        		<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$c?>">
						        			<?php echo get_the_title();?>
						        			<span class="pull-right"></span>
						        			<!-- <span class="pull-right span"></span> -->
						        			
						        		</a>
						        	</h4>
						      	</div>
					      	</div>
					      	<div id="collapse<?=$c?>" class="panel-collapse collapse">
					        	<div class="panel-body">
						        	<p><?php echo substr($cnt,0,1000); ?>...</p>	
					        	</div>
					      	</div>
					    </div>	
					<?php
					$c++;
					endwhile;
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

	