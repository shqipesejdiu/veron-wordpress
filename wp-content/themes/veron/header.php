<!DOCTYPE html>
<html>
  <head>
       <title><?php wp_title() ?></title>
 


  
      <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- <h1><img src="<?php //print IMAGES; ?>/logo.png" alt="<?php
//bloginfo('name'); ?>" /></h1> -->
<?php wp_head(); ?>
</head>
<body>
<!-- //////////////////////======HEADER=======///////////////////////////////////////////////// -->
<header>       
  
  <div class="container">
    <div class="veron-img pull-left">
     <img src="<?php bloginfo('template_directory'); ?>/images/actus.png">
    </div>
    <div class="contact pull-right">
      <p id="contact">CONTACT<span>022 732 64 40</span></p>
    </div>
    <div class="title">
      <p id="title">LE SPECIALISTE DE L LOGISTIQUE DEPUIS 1867</p>
    </div>
    <nav class="navbar navbar-default" role="navigation">
      <div class = "navbar-header">
        <button type = "button" class = "navbar-toggle" 
           data-toggle = "collapse" data-target = "#example-navbar-collapse">
           <span class = "sr-only">Toggle navigation</span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
        </button>    
      </div>
      <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
        <div class="navbarin">
          <?php top_navbar();?>
        </div>
      </div>
    </nav>        
  </div>
</header> 