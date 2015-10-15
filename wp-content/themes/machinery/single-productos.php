<?php get_header(""); ?>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("productos"); ?>
<?php } else {?>
<?php portada("productos-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<div id="stoy" data-url="productos"></div>
<?php while(have_posts()){ the_post();?>
<div class="container">
    <div class="row">
        <!--MODELO-->
        <div class="col-xs-12">
            <?php if(get_field('modelo')){?>
                <div class="modelo">
                    <h2><?php the_field('modelo');?></h2>
                </div>
            <?php } ?>
        </div>
        <div class="alto20 col-xs-12"></div>
        <!-- PRODUCTO IMAGEN-->
        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 sin-padding">
            <!--IMAGEN Y CIRCULO DE INFO-->
            <div class="col-xs-12">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="imagen-pro" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;">
                    <!--CIRCULOS-->
                    <?php if(get_field('activar-circulo1') == true){?>
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs " style="overflow:hidden;">
                        <div class="circle" style="top: <?php if(get_field('top-circulo1')){ the_field('top-circulo1');}else{echo '100';}?>px; left: <?php if(get_field('left-circulo1')){ the_field('left-circulo1');}else{echo '473';}?>px;">
                                <div class="hvr-wobble-vertical"><i class="fa fa-dot-circle-o"></i></div>
                            <!--CUADRO INFO-->
                            <div class="cuadro-info">
                                <?php if(get_field('info-circulo1')){?>
                                <p>
                                    <?php echo substr(get_field('info-circulo1'), 0, 600)?>  
                                </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   <?php if(get_field('activar-circulo2') == true){?>
                    <div class="circle" style="top: <?php if(get_field('top-circulo2')){ the_field('top-circulo2');}else{echo '100';}?>px; left: <?php if(get_field('left-circulo2')){ the_field('left-circulo2');}else{echo '200';}?>px;">
                             <div class="hvr-wobble-vertical"><i class="fa fa-dot-circle-o"></i></div>
                        <!--CUADRO INFO-->
                          <div class="cuadro-info">
                             <?php if(get_field('info-circulo2')){?>
                            <p>
                                <?php the_field('info-circulo2');?>   
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
             <!--DESCRIPCION DETALLES DEL PRODUCTO-->
             <div class="clearfix"></div>
             <div class="alto20"></div>
        </div>
        <?php } else {?>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 sin-padding">
            <!--IMAGEN Y CIRCULO DE INFO-->
            <div class="col-xs-12">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="imagen-pro" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;">
                    <!--CIRCULOS-->
                    <?php if(get_field('activar-circulo1') == true){?>
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs ">
                        <div class="circle" style="top: <?php if(get_field('top-circulo1')){ the_field('top-circulo1');}else{echo '100';}?>px; left: <?php if(get_field('left-circulo1')){ the_field('left-circulo1');}else{echo '473';}?>px;">
                                <div class="hvr-wobble-vertical"><i class="fa fa-dot-circle-o"></i></div>
                            <!--CUADRO INFO-->
                            <div class="cuadro-info">
                                <?php if(get_field('info-circulo1')){?>
                                <p>
                                    <?php echo substr(get_field('info-circulo1'), 0, 600)?>  
                                </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   <?php if(get_field('activar-circulo2') == true){?>
                    <div class="circle" style="top: <?php if(get_field('top-circulo2')){ the_field('top-circulo2');}else{echo '100';}?>px; left: <?php if(get_field('left-circulo2')){ the_field('left-circulo2');}else{echo '200';}?>px;">
                             <div class="hvr-wobble-vertical"><i class="fa fa-dot-circle-o"></i></div>
                        <!--CUADRO INFO-->
                          <div class="cuadro-info">
                             <?php if(get_field('info-circulo2')){?>
                            <p>
                                <?php the_field('info-circulo2');?>   
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
             <!--DESCRIPCION DETALLES DEL PRODUCTO-->
             <div class="clearfix"></div>
             <div class="alto20"></div>
        </div>
        <?php } ?>
        
        <!--ASIDE PRODUCTO-->
         <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sin-padding">
             <!--MAS FOTOS DEL PRODUCTO-->
            <div class="col-xs-12">
                <div class="aside1">
                    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                    <div class="aside-header">
                        <h2>Precio del Equipo</h2>
                    </div>
                    <?php } else {?>
                    <div class="aside-header">
                        <h2>Price Equipment</h2>
                    </div>
                    <?php } ?>
                    <div class="aside-fotos">
                        <?php if(get_field('galeria')){?>
                        <?php the_field('galeria');?>
                        <?php } ?>
                    </div>
                     <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                    <?php if(get_field('precio')){?>
                    <div class="aside-precio">
                        <h2>Precio:</h2><h2><?php the_field('precio');?></h2> 
                    </div>
                    <?php } ?>
                    <?php } else {?>
                    <?php if(get_field('precio')){?>
                    <div class="aside-precio">
                        <h2>Price:</h2><h2><?php the_field('precio');?></h2> 
                    </div>
                     <?php } ?>
                     <?php } ?>
                </div>
            </div>
        </div>
        </div>
        <?php } else {?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sin-padding">
             <!--MAS FOTOS DEL PRODUCTO-->
            <div class="col-xs-12">
                <div class="aside1">
                    <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                    <div class="aside-header">
                        <h2>Precio del Equipo</h2>
                    </div>
                    <?php } else {?>
                    <div class="aside-header">
                        <h2>Price Equipment</h2>
                    </div>
                    <?php } ?>
                    <div class="aside-fotos">
                        <?php if(get_field('galeria')){?>
                        <?php the_field('galeria');?>
                        <?php } ?>
                    </div>
                     <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                    <?php if(get_field('precio')){?>
                    <div class="aside-precio">
                        <h2>Precio:</h2><h2><?php the_field('precio');?></h2> 
                    </div>
                    <?php } ?>
                    <?php } else {?>
                    <?php if(get_field('precio')){?>
                    <div class="aside-precio">
                        <h2>Price:</h2><h2><?php the_field('precio');?></h2> 
                    </div>
                     <?php } ?>
                     <?php } ?>
                </div>
            </div>
        </div>
         <?php } ?>
         <!--DESCRIPCION DEL PRODUCTO-->
         <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center">
                    <div class="menu-imagen">
                        <ul>
                             <li onclick="mostrardescri();"   class="act act1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                     Descripción
                                 </a>
                             </li>
                              <li onclick="mostrarespecifi();"   class="act act2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                     Especificación
                                 </a>
                             </li>
                             <li onclick="mostrarinfo();" class="act act3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                     Solicitar Información
                                 </a>
                             </li>
                              <li onclick="mostrarvideos();"   class="act act4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                    Videos
                                 </a>
                             </li>
                        </ul>
                    </div>
                    <div class="alto50 col-xs-12"></div>
                    
                     <!--CUADRO DE INFORMACION DE LOS MENU-->
                <div class="col-xs-12">
                    <div id="descripcion">
                        <?php if(get_field('descripcion')){?>
                        <div class="parrafo-info">
                            <p>
                                 <?php the_field('descripcion');?> 
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                     <div id="especificacion">
                         <?php if(get_field('especificaciones')){?>
                        <div class="parrafo-info">
                            <p>
                                 <?php the_field('especificaciones');?> 
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                    <div  id="info" >
                        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                        <div class="formulario">
                            <form action="" method="POST">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Nombre</div>
                                    <input type="text" name="nombre" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Email</div>
                                    <input type="email" name="email" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Telefono</div>
                                    <input type="text" name="telefono" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Pais</div>
                                    <input type="text" name="pais" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-xs-12">
                                    <div class="titulo">Mensaje</div>
                                    <textarea class="tex-are" placeholder="" name="mensaje" required ></textarea>
                                        
                                </div>
                                <div class="col-xs-12">
                                     <input type="submit" name="enviar" value="Enviar" class="btn btn-danger btn-lg pull-right"/>
                                </div>
                            </form>
                        </div>
                        <?php } else {?>
                        <div class="formulario">
                            <form action="" method="post">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Name</div>
                                    <input type="text" name="nombre" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Email</div>
                                    <input type="email" name="email" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Telephone</div>
                                    <input type="text" name="telefono" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Country</div>
                                    <input type="text" name="pais" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-xs-12">
                                    <div class="titulo">Message</div>
                                    <textarea class="tex-are" placeholder="" name="mensaje" required ></textarea>
                                        
                                </div>
                                <div class="col-xs-12">
                                     <input type="submit" name="enviar" value="Send" class="btn btn-danger btn-lg pull-right"/>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                     <div  id="videos" >
                         <div class="col-xs-12 text-center">
                             <?php if(get_field('videos')){?>
                            <div class="videos">
                                
                                <?php the_field('videos');?> 
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                 </div>
                </div>
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="aside-titulo">
                        <h2>Similar</h2>
                        
                    </div>
                
                    <div class="col-xs-12">
                        <?php
                            $terms = get_the_terms($post->ID, 'categoria-productos' );
                            if ($terms && ! is_wp_error($terms)) :
                            	$term_slugs_arr = array();
                            	foreach ($terms as $term) {
                            	    $term_slugs_arr[] = $term->slug;
                            	}
                            	
                            endif;
                             $term_slugs_arr[0];
                            ?>
                            <div class="similar-item">
                            <?php query_posts(array("posts_type"=>"productos","categoria-productos"=>$term_slugs_arr[0], "posts_per_page"=>2))?>
                            <?php while(have_posts()){ the_post();?>
                                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <a href="<?php the_permalink();?>">
                                        <div class="item" style="background:url(<?php echo $feat_image; ?>) top center; background-size:cover;">
                                            <div class="cover">
                                                <h4><?php the_title();?></h4>
                                                <br/>
                                                <h4><?php the_field("modelo");?></h4>
                                            </div>
                                        </div>
                                    </a>
                            <?php } wp_reset_query();?>
                            </div>
                    </div>
                </div>
        </div>
             <?php } else {?>
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center">
                    <div class="menu-imagen">
                        <ul>
                             <li onclick="mostrardescri();"   class="act act1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                     Description
                                 </a>
                             </li>
                              <li onclick="mostrarespecifi();"   class="act act2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                     Specifications
                                 </a>
                             </li>
                             <li onclick="mostrarinfo();" class="act act3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                    Request Information
                                 </a>
                             </li>
                              <li onclick="mostrarvideos();"   class="act act4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <a class="hvr-wobble-horizontal">
                                    Videos
                                 </a>
                             </li>
                        </ul>
                    </div>
                    <div class="alto50 col-xs-12"></div>
                 </div>
                 <!--CUADRO DE INFORMACION DE LOS MENU-->
                 <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div id="descripcion">
                        <?php if(get_field('descripcion')){?>
                        <div class="parrafo-info">
                            <p>
                                 <?php the_field('descripcion');?> 
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                     <div id="especificacion">
                         <?php if(get_field('especificaciones')){?>
                        <div class="parrafo-info">
                            <p>
                                 <?php the_field('especificaciones');?> 
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                    <div  id="info" >
                        <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
                        <div class="formulario">
                            <form action="" method="post">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Nombre</div>
                                    <input type="text" name="nombre" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Email</div>
                                    <input type="email" name="email" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Telefono</div>
                                    <input type="text" name="telefono" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Pais</div>
                                    <input type="text" name="pais" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-xs-12">
                                    <div class="titulo">Mensaje</div>
                                    <textarea class="tex-are" placeholder="" name="mensaje" required ></textarea>
                                        
                                </div>
                                <div class="col-xs-12">
                                     <input type="submit" name="enviar" value="Enviar" class="btn btn-danger btn-lg pull-right"/>
                                </div>
                            </form>
                        </div>
                        <?php } else {?>
                        <div class="formulario">
                            <form action="" method="post">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Name</div>
                                    <input type="text" name="nombre" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Email</div>
                                    <input type="email" name="email" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Telephone</div>
                                    <input type="text" name="telefono" class="formu" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="titulo">Country</div>
                                    <input type="text" name="pais" class="formu" required/>
                                </div>
                                <div class="alto20 col-xs-12"></div>
                                <div class="col-xs-12">
                                    <div class="titulo">Message</div>
                                    <textarea class="tex-are" placeholder="" name="mensaje" required ></textarea>
                                        
                                </div>
                                <div class="col-xs-12">
                                     <input type="submit" name="enviar" value="Send" class="btn btn-danger btn-lg pull-right"/>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                     <div  id="videos" >
                         <div class="col-xs-12 text-center">
                             <?php if(get_field('videos')){?>
                            <div class="videos">
                                
                                <?php the_field('videos');?> 
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                    <div class="aside-titulo">
                        <h2>Similar</h2>
                        
                    </div>
                
                    <div class="col-xs-12">
                        <?php
                            $terms = get_the_terms($post->ID, 'categoria-productos' );
                            if ($terms && ! is_wp_error($terms)) :
                            	$term_slugs_arr = array();
                            	foreach ($terms as $term) {
                            	    $term_slugs_arr[] = $term->slug;
                            	}
                            	
                            endif;
                             $term_slugs_arr[0];
                            ?>
                            <div class="similar-item">
                            <?php query_posts(array("posts_type"=>"productos","categoria-productos"=>$term_slugs_arr[0], "posts_per_page"=>2))?>
                            <?php while(have_posts()){ the_post();?>
                                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <a href="<?php the_permalink();?>">
                                        <div class="item" style="background:url(<?php echo $feat_image; ?>) top center; background-size:cover;">
                                            <div class="cover">
                                                <h4><?php the_title();?></h4>
                                                <br/>
                                                <h4><?php the_field("modelo");?></h4>
                                            </div>
                                        </div>
                                    </a>
                            <?php } wp_reset_query();?>
                            </div>
                    </div>
                </div>
             </div>
             <?php } ?>
                
         <div class="alto20 col-xs-12"></div>
</div>
<?php } ?>
<?php get_footer(""); ?>
<!--FANCIBOX-->
<script type="text/javascript">
	$(document).ready(function() {
	    $(".gallery-item a").addClass("fancybox");
	    $(".gallery-item a").attr("data-fancybox-group","gallery");
		$(".fancybox").fancybox();
	});
</script>
 