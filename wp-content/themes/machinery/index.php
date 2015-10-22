<?php get_header(""); ?>
<div id="stoy" data-url="index"></div>
<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'home','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
        <div class="conatiner">
            <div class="row">
                <div class="col-xs-12">
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                    <div class="imagen1-home" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;  background-attachment: fixed; margin-top:-100px;">
                        <div class="col-xs-4">
                            <div class="logo">
                                <img src="<?php the_field("logo"); ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="parrafo-imagen1">
                            <h1>
                                <?php echo max_charlength(get_the_content(),100,"");?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
<?php } ?>
<?php portada("home"); ?>
<!--PRODUCTOS-->
<div class="container">
    <div class="row">
        <div class="alto50 col-xs-12"></div>
        <div class="col-xs-12">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <div class="titulo-productos">
                <h2>productos <a href="http://gnrmachinery.net/nuestra-flota/" target="_blank">Nuestra Flota</a></h2>
            </div>
            <?php } else {?>
             <div class="titulo-productos">
                <h2>products <a href="http://gnrmachinery.net/nuestra-flota/" target="_blank">Our  fleet </a></h2>
            </div>
            <?php } ?>
        </div>
       
        <div class="alto20 col-xs-12"></div>
    </div>
</div>
  <!--IMAGENES DE LOS PRODUCTOS-->
        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="container-fluid">
            <div class="row">
                <?php  query_posts(array('post_type'=>'productos','posts_per_page'=>4)); ?>
                 <?php while(have_posts()){ the_post();?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sin-padding">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="fondo-imagen" style="background: url(<?php echo $feat_image;?>) top center no-repeat; background-size:cover; ">
                            <div class="fondo-color">
                                <div class="info-imagen">
                                    <div class="titulo-imagen">
                                        <h2><?php the_title();?></h2>
                                        <?php if(get_field('precio')){?>
                                        <h3> <?php the_field('precio');?> </h3>
                                        <?php } ?>
                                    </div>
                                    <div class="parrafo-imagen">
                                        <p>
                                              <?php echo max_charlength(get_the_content(),150,"");?>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="<?php the_permalink(); ?>" class="boton1 btn btn-default">
                                            Ver Más
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <?php } ?>
            </div>
            <div class="alto50 col-xs-12"></div>
        </div>
        <?php } else {?>
        <div class="container-fluid">
            <div class="row">
                <?php  query_posts(array('post_type'=>'productos','posts_per_page'=>4)); ?>
                 <?php while(have_posts()){ the_post();?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sin-padding">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="fondo-imagen" style="background: url(<?php echo $feat_image;?>) top center no-repeat; background-size:cover; ">
                            <div class="fondo-color">
                                <div class="info-imagen">
                                    <div class="titulo-imagen">
                                        <h2><?php the_title();?></h2>
                                        <?php if(get_field('precio')){?>
                                        <h3> <?php the_field('precio');?> </h3>
                                        <?php } ?>
                                    </div>
                                    <div class="parrafo-imagen">
                                        <p>
                                              <?php echo max_charlength(get_the_content(),150,"");?>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="<?php the_permalink(); ?> " class="boton1 btn btn-default">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <?php } ?>
            </div>
            <div class="alto50 col-xs-12"></div>
        </div>
        <?php } ?>



<!--CATERGORIAS-->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <div class="titulo-productos">
                <h2>categorias</h2>
            </div>
            <?php } else {?>
             <div class="titulo-productos">
                <h2>Categories</h2>
            </div>
             <?php } ?>
        </div>
        <!--CATEGORIAS DE CATERGORIAS-->
         <?php
			$args = array(
            	'type'                     => 'productos',
            	'child_of'                 => 0,
            	'parent'                   => '',
            	'orderby'                  => 'name',
            	'order'                    => 'ASC',
            	'hide_empty'               => 0,
            	'hierarchical'             => 1,
            	'exclude'                  => '',
            	'include'                  => '',
            	'number'                   => 8,
            	'taxonomy'                 => 'categoria-productos',
            	'pad_counts'               => false 
                        
            ); ?>
                        <?php $categories = get_categories( $args ); ?> 
        <div class="col-xs-12">
            <div class="categorias-productos">
                <ul class="nav">
                    <?php foreach ($categories as $category) {?>
                    <li>
                        <a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "categoria-productos")); ?> " class="hvr-underline-reveal"><?php echo $category->name;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="alto50 col-xs-12"></div>
    </div>
</div>
  <!--IMAGENES DE LOS PRODUCTOS-->
        
        <?php
			$args = array(
            	'type'                     => 'productos',
            	'child_of'                 => 0,
            	'parent'                   => '',
            	'orderby'                  => 'name',
            	'order'                    => 'ASC',
            	'hide_empty'               => 0,
            	'hierarchical'             => 1,
            	'exclude'                  => '',
            	'include'                  => '',
            	'number'                   => '',
            	'taxonomy'                 => 'categoria-productos',
            	'pad_counts'               => false 
                        
            ); ?>
                        <?php $categories = get_categories( $args ); ?> 
        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($categories as $category) {?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sin-padding">
                        <div class="fondo-imagen" style="background: url(<?php the_field('imagen-producto', $category->taxonomy . '_' . $category->term_id); ?>) top center no-repeat; background-size:cover; ">
                            <div class="fondo-color">
                                <div class="info-imagen">
                                    <div class="titulo-imagen">
                                        <h2><?php echo $category->name ?></h2>
                                    </div>
                                    <div class="parrafo-imagen">
                                        <p>
                                              <?php echo substr($category->category_description, 0, 150)?>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "categoria-productos")); ?> " class="boton1 btn btn-default">
                                            Ver Más
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </div>
        <?php } else {?>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($categories as $category) {?>
              
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sin-padding">
                        <div class="fondo-imagen" style="background: url(<?php the_field('imagen-producto', $category->taxonomy . '_' . $category->term_id); ?>) top center no-repeat; background-size:cover; ">
                          
                            <div class="fondo-color">
                                <div class="info-imagen">
                                    <div class="titulo-imagen">
                                        <h2><?php echo $category->name ?></h2>
                                    </div>
                                    <div class="parrafo-imagen">
                                        <p>
                                              <?php echo substr($category->category_description, 0, 150)?>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "categoria-productos")); ?> " class="boton1 btn btn-default">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </div>
        <?php } ?>

<!--WELCOME-->
<?php wp_reset_query();?>

<?php query_posts(array("posts_type"=>"page","pagename"=>"nosotros","posts_per_page"=>1));?>

<?php while(have_posts()){ the_post();?>
<section id="nosotros">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="title">
                <h1><?php the_field("titulo_de_bienvenida");?></h1>
                <p class="intro"><?php the_field("texto_introductorio");?></p>
            </div>
        </div>
        <?php for($i=1;$i<3;$i++){?>
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <section class="item">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="thumb">
                            <img src="<?php the_field("imagen_seccion_".$i);?>" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><?php the_field("titulo_seccion_".$i);?></h2>
                        <p><?php the_field("contenido_seccion_".$i);?>
                        <?php if($i == 1 && get_field("url")){?>
                             <a href="" class="btn btn-default"><?php the_field("url_texto");?></a>
                         <?php } ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <?php }?>
        <div class="clearfix"></div>
        <div class="col-xs-10 col-sm-8">
                    <section class="section2 topcorto">
                <h2><?php the_field("titulo_seccion_5");?></h2>
                <p><?php the_field("contenido_seccion_5");?></p>
            </section>
        </div>
        <div class="col-xs-12">
            <div class="section3">
                <div class="image">
                    <img src="<?php the_field("imagen_seccion_5");?>" alt="" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
    </div>
</div>
</section>
<?php } ?>
<!--VIDEOS-->
<?php wp_reset_query();?>
<?php $pagename = query_posts(array("posts_type"=>"page","pagename"=>"video-promocion","posts_per_page"=>1));?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
<div class="container">
    <div class="row">
        <?php if(get_field('fondo')){?>
        <div class="col-xs-12">
            <div class="video-home" style="background:url('<?php the_field("fondo");?>') top center; background-size:cover;">
            <?php $id_post = get_field("producto");
                 $prod = get_post($id_post[0]);   
            ?>
            
            <?php //debug($prod->ID);?>
            <div class="col-xs-12 col-sm-5">
                <div class="producto-home">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="image">
                                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id_post[0]) );?>
                                <img src="<?php echo $feat_image; ?>" class="img-responsive" alt=""></img>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="txt-video">
                                <h3><?php echo $prod->post_title;?></h3>
                                <p><?php echo max_charlength($prod->post_content,150,"")?></p>
                                <a href="<?php the_permalink();?>" class="btn btn-large">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>
<?php } ?>
<?php get_footer(""); ?>

