<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="images/logo.png">
    <?php wp_head(); ?>

</head>

<body>

    <header class="header text-center">
	    <a class="site-title pt-lg-4 mb-0" href="index.html">
            <?php echo get_bloginfo('name');
 ?>
 </a>
 <nav class="navbar navbar-expand-lg navbar-dark">
    <butoon class="navbar-toggler" type="butoon" data-target="#navigation" aria-controls="navigation" aria-ecpend="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div id="navigation" class="collapse navbar-colla[se flex-coloum">
    <?php if(function_exists('the_coustum_logo')){
        $coustum_logo_id = get_theme_mod('coustum_logo');
        $logo = wp_get_atachment_image_scr($coustum_logo_id, 'full');
    }      
    ?>
    <img class="mb-3 ,x-auto logo" src="<?php echo $logo[0] ?>"alt="logo">

    <?php
    wp_nav_menu(
        [
            'menu' -> 'primary',
            'conrainer'=>'',
            'theme_location'=>'primary',
            'menu_class' => 'navbar-nav flex-column text-sm-center text-md-left',
'items_wrap' => '<ul id=%1$s" class="%2$s"?</ul>' ,
        ]
        );
        ?>
        <hr>
       <ul class="c=social-list list-inline py-3 mx-auto">
      <li class="list-inline-item"><a href="#"><i class="fab fa-teiter da- fw"></i></li>
      <li><a href="#"><i class="fab fa-twiter da- fw"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
      <li><a href="#"><i class="fab fa-github-alt fa fw"></i></a></li>
      <li><a href="#"><i class="fab fa-stack-overflow fa-fw "></i></a></li>
<li><a href="#"><i class="fab fa-codepen fa-fw "></i></a></li>
        
    </ul>
    </div>
    </nav>
    </header>
    <div class="heading">
        <?php the_tittle(); ?>
    </h1>
    </header>