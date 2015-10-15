<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>machinery</title>
    <!--Bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--LESS-->
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <!--HOVER-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/hover/hover.css"/>
    <!--QUERY MIN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo("template_url");?>/scripts/main.js"></script>
    	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/scripts/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/scripts/fancy//source/jquery.fancybox.css?v=2.1.5" media="screen" />
  
</head>
<body>
    <div class="loader"></div>
    <header>
       <nav class="tama-header navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 sin-padding">
                    <div class="navbar-header page-scroll">
                      <?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'home','posts_per_page'=>1)); ?>
                      <?php if(!empty($pagename)) {?>
                      <?php while(have_posts()){ the_post();?>
                        <div class="logo">
                            <a href="<?php echo home_url(""); ?>" class="hvr-buzz-out">
                              <?php if(get_field('logo')){?>
                                <img src="<?php the_field('logo');?>" class="img-responsive" alt="">
                                <?php } ?>
                            </a>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <div class="boton-res">
                            <button type="button" class="boton-responsi navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Collect the nav links, forms, and other content for toggling -->
                 <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                <div class="col-lg-6 col-lg-offset-1   col-md-8  col-sm-10 col-xs-12 sin-padding">
                    <div class="menu-header">
                        <div class="alto-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="menu-gyr">
                                <ul class="nav navbar-nav">
                                    <li class="hidden">
                                        <a href="#page-top"></a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url(""); ?>">INICIO</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("nosotros");?>">NOSOTROS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("productos"); ?>">PRODUCTOS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("videos"); ?>">VIDEOS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob " href="">NOTICIAS</a>
                                    </li>
                                     <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("contacto"); ?>">CONTACTO</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-12 sin-padding">
                    <div class="redes">
                        <ul>
                            <li>
                              <div class="idiomas">
                                <?php do_action('wpml_add_language_selector'); ?>
                              </div>
                            </li>
                                <?php  query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
                                 <?php while(have_posts()){ the_post();?>
                    
                            <li>
                                <?php if(get_field('cuenta-twitter')){?>
                                    <a class="page-scroll " href=" <?php the_field('cuenta-twitter');?>  " target="_blank"><i class="face-header fa fa-twitter-square"></i></a>
                                <?php } ?>
                            </li>
                             <li>
                                  <?php if(get_field('cuenta-facebook')){?>
                                    <a class="page-scroll" href="<?php the_field('cuenta-facebook');?> " target="_blank"><i class="face-header fa fa-facebook-square"></i></a>
                                 <?php } ?>
                            </li>
                            <li>
                                <?php if(get_field('cuenta-instagram')){?>
                                     <a class="page-scroll" href="<?php the_field('cuenta-instagram');?>" target="_blank"><i class="face-header fa fa-instagram"></i></a>
                                 <?php } ?>
                            </li>
                            <li>
                                 <?php if(get_field('cuenta-google')){?>
                                 <a  href="<?php the_field('cuenta-google');?>" target="_blank"><i class="face-header fa fa-google-plus-square "></i></a>
                                  <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } else {?>
                 <div class="col-lg-6 col-lg-offset-1   col-md-8  col-sm-10 col-xs-12 sin-padding">
                    <div class="menu-header">
                        <div class="alto-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="menu-gyr">
                                <ul class="nav navbar-nav">
                                    <li class="hidden">
                                        <a href="#page-top"></a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url(""); ?>">HOME</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("nosotros");?>">ABOUT US</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("productos"); ?>">PRODUCTS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("videos"); ?>">VIDEOS</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll hvr-bob " href="">NEWS</a>
                                    </li>
                                     <li>
                                        <a class="page-scroll hvr-bob" href="<?php echo home_url("contacto"); ?>">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 sin-padding">
                    <div class="redes">
                        <ul>
                            <li>
                              <div class="idiomas">
                                <?php do_action('wpml_add_language_selector'); ?>
                              </div>
                            </li>
                             <li>
                                <a class="page-scroll hvr-float-shadow" href=""><i class="face-header fa fa-twitter-square"></i></a>
                            </li>
                             <li>
                                <a class="page-scroll hvr-float-shadow" href=""><i class="face-header fa fa-facebook-square"></i></a>
                            </li>
                            <li>
                                 <a class="page-scroll hvr-float-shadow" href=""><i class="face-header fa fa-instagram"></i></a>
                            </li>
                            <li>
                                 <a class="page-scroll hvr-float-shadow" href=""><i class=" face-header fa fa-google-plus-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <!-- /.navbar-collapse -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    