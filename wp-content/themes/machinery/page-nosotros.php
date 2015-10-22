<?php 
//template-name: Page Nosotros
get_header();?>
<div id="stoy" data-url="nosotros"></div>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("nosotros"); ?>
<?php } else {?>
<?php portada("nosotros-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<?php the_post("");?>
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
                        <p><?php the_field("contenido_seccion_".$i);?></p>
                    </div>
                </section>
            </div>
        </div>
        <?php }?>
        <div class="clearfix"></div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <section class="section2">
                        <h2><?php the_field("titulo_seccion_4"); ?> </h2>
                        <p><?php the_field("contenido_seccion_4"); ?></p>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <section class="section2">
                        <div class="image">
                            <img src="<?php the_field("imagen_seccion_4");?>" alt="" class="img-responsive">
                        </div>
                    </section>
                </div>
                
            </div>
        </div>
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
        <div class="col-xs-12 col-sm-7">
            <section class="section2">
            <div class="image">
                <img src="<?php the_field("imagen_seccion_6"); ?>" alt="" class="img-responsive">
            </div>
            </section>
        </div>
        <div class="col-xs-12 col-sm-5">
            <section class="section4">
                <h3><?php the_field("titulo_seccion_6");?></h3>
                <p>
                    <?php the_field("contenido_seccion_6");?>
                </p>
            </section>
        </div>
        <div class="clearfix"></div>
         <div class="col-xs-12">
            
                    <section class="section2">
                        <h2><?php the_field("titulo_seccion_7"); ?> </h2>
                        <p><?php the_field("contenido_seccion_7"); ?></p>
                    </section>
            
        </div>
    </div>
</div>
</section>
<?php get_footer(""); ?>