<?php
    /**
    * Template Name: NosPrestations
    */  
?>
<!-- ///////////////////////======NOS-PRESTATIONS=======//////////////////////////////////////////////// -->
<?php get_header() ?>
<div class="NosPrestations">
    <!-- <div class="contain"> -->
        <div id="NosPrestations">
            <div class="container">
                <h1>NOS<strong>PRESTATIONS</strong></h1>
            </div>
        </div>
        <div class="top-contain">
            <div class="container">
                <h6>
                    Transports internationaux  //  Dédouanement  //  Entreposage  //  Spécialités  //<br>
                    Assurance  //  Déménagement & Caisserie
                </h6>
            </div>
        </div>
        <div class="container-fluid">
            <?php
            $type = 1;
            $left_color = 1;
            $wp_query->query('showposts=7&post_type=prestations'); 
            while ($wp_query->have_posts()) : $wp_query->the_post();
                $cnt = get_the_content();
                if($type%2 == 0){
                    ?>
                        <div class="row col-right">
                            <div class="col-md-6">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-7 text">
                                    <h2><?php echo get_the_title();?></h2>
                                    <p><?php echo substr($cnt,0,500); ?>... </p>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </div>
                    <?php 
                }
                else{
                    $custom_class = '';
                    if($left_color%2 == 0){
                        $custom_class = 'col-left-middle';
                    }
                    else{
                        $custom_class = 'col-left';
                    }
                    ?>
                        <div class="row <?php echo $custom_class; ?>">
                            <div class="col-md-6">
                                <div class="col-md-5"></div>
                                <div class="col-md-7 text">
                                    <h2 class=""><?php echo get_the_title();?></h2>
                                    <p><?php echo substr($cnt,0,500); ?>...</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php
                    $left_color++;
                }
            $type++;
            endwhile;
            ?>    
        </div>
    </div>
</div>

<?php get_footer(); ?>