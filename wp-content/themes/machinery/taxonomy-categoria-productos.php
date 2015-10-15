<?php get_header(""); ?>
<?php portada("home"); ?>
<?php wp_reset_query(); ?>
<div id="stoy" data-url="productos"></div>
<div class="container">
    <div class="row">
        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="col-xs-12">
            <div class="titulo-productos">
                <h2>PRODUCTOS</h2>
            </div>
        </div>
        <?php } else {?>
         <div class="col-xs-12">
            <div class="titulo-productos">
                <h2>PRODUCTS</h2>
            </div>
        </div>
        <?php } ?>
        <!--CATEGORIAS DE PRODUCTOS-->
        <div class="col-xs-12">
            <?php if(have_posts()){?>
            <?php }else { ?>
                    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                        No se han encontrado productos
                    <?php }else { ?>
                        No macth Products
                    <?php } ?>
                <?php } ?>
            <div class="categorias-productos">
                <ul class="nav">
                
                    <?php while(have_posts()){ the_post();?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sin-padding">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="fondo-imagen" style="background: url(<?php echo $feat_image;?>) top center no-repeat; background-size:cover; ">
                          
                            <div class="fondo-color">
                                <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                                <div class="info-imagen">
                                    <div class="titulo-imagen">
                                        <h2><?php the_title();?></h2>
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
                                <?php } else {?>
                                <div class="info-imagen">
                                    <div class="titulo-imagen">
                                        <h2><?php the_title();?></h2>
                                    </div>
                                    <div class="parrafo-imagen">
                                        <p>
                                              <?php echo max_charlength(get_the_content(),150,"");?>
                                        </p>
                                    </div>
                                    <div class="">
                                        <a href="<?php the_permalink(); ?>" class="boton1 btn btn-default">
                                            See More
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>  
                        </div>
                    </div>
                    <?php } ?>
                
                
                </ul>
            </div>
        </div>
        <div class="alto50 col-xs-12"></div>
    </div>
</div>
<?php get_footer(""); ?>