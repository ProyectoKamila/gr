<?php get_header(""); ?>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("productos"); ?>
<?php } else {?>
<?php portada("productos-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<div id="stoy" data-url="productos"></div>
<!--INVENTARIO-->
<div class="container">
    <div class="row">
        <div class="alto50 col-xs-12"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <div class="titulo-productos">
                <h2>Inventario </h2>
            </div>
            <?php } else {?>
             <div class="titulo-productos">
                <h2>Inventory </h2>
            </div>
            <?php } ?>
        </div>
        <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-6 col-xs-12 text-center">
            <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
            <div class="titulo-productos">
              <a href="http://gnrmachinery.net/todo-el-inventario/" target="_blank"><h2>Todo Inventario </h2></a>
            </div>
            <?php } else {?>
             <div class="titulo-productos">
                <a href="http://gnrmachinery.net/todo-el-inventario/" target="_blank"><h2>All Inventory </h2></a>
            </div>
            <?php } ?>
        </div>
       
        <div class="alto20 col-xs-12"></div>
    </div>
</div>
  <!--IMAGENES DE LOS INVENTARIO-->
        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="container-fluid">
            <div class="row">
                <?php  query_posts(array('post_type'=>'productos','posts_per_page'=>100)); ?>
                 <?php while(have_posts()){ the_post();?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sin-padding">
                        <!--Modelo-->
                        <div class="col-xs-12">
                            <h2 class="texto1"><?php echo max_charlength(get_the_title(),30,""); ?></h2>
                        </div>
                        <!--Imagen-->
                        <div class="col-xs-12">
                            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                           <div class="imagen-inve">
                                <img src="<?php echo $feat_image;?>" class="img-responsive" alt="">
                           </div>
                        </div>
                        <!--precio-->
                        <?php if(get_field('precio')){?>
                            <div class="col-xs-6">
                                <h2 class="texto2">Precio: <?php the_field('precio');?></h2>
                            </div>
                         <?php } ?>
                        <div class="col-xs-6">
                            <a href="<?php the_permalink(); ?> "><button type="button" class="bot1 btn btn-danger">Ver Detalle</button></a>
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
                        <!--Modelo-->
                        <div class="col-xs-12">
                            <h2 class="texto1"><?php echo max_charlength(get_the_title(),30,""); ?></h2>
                        </div>
                        <!--Imagen-->
                        <div class="col-xs-12">
                            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                           <div class="imagen-inve">
                                <img src="<?php echo $feat_image;?>" class="img-responsive" alt="">
                           </div>
                        </div>
                        <!--precio-->
                        <?php if(get_field('precio')){?>
                            <div class="col-xs-6">
                                <h2 class="texto2">Price: <?php the_field('precio');?></h2>
                            </div>
                         <?php } ?>
                        <div class="col-xs-6">
                            <a href="<?php the_permalink(); ?> "><button type="button" class="bot1 btn btn-danger">See More</button></a>
                        </div>
                    </div>
                    <?php } ?>
            </div>
            <div class="alto50 col-xs-12"></div>
        </div>
        <?php } ?>
<?php get_footer(""); ?>