<?php get_header(""); ?>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("productos"); ?>
<?php } else {?>
<?php portada("productos-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<div id="stoy" data-url="productos"></div>
<div class="container">
    <div class="row">
         <?php if (ICL_LANGUAGE_CODE == 'es') { ?>
        <div class="col-xs-12">
            <div class="titulo-productos">
                <h2>productos</h2>
            </div>
        </div>
        <?php } else {?>
         <div class="col-xs-12">
            <div class="titulo-productos">
                <h2>products</h2>
            </div>
        </div>
        <?php } ?>
        <!--CATEGORIAS DE PRODUCTOS-->
         <?php
			$args = array(
            	'type'                     => 'productos',
            	'child_of'                 => 0,
            	'parent'                   => '',
            	'orderby'                  => 'name',
            	'order'                    => 'ASC',
            	'hide_empty'               => 1,
            	'hierarchical'             => 1,
            	'exclude'                  => '',
            	'include'                  => '',
            	'number'                   => '',
            	'taxonomy'                 => 'categoria-productos',
            	'pad_counts'               => false 
                        
            ); ?>
                        <?php $categories = get_categories( $args ); ?> 
        <div class="col-xs-12">
            <div class="categorias-productos">
                <ul class="nav">
                    <?php foreach ($categories as $category) {?>
                    <li>
                        <a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "categoria-productos")); ?> "  class="hvr-underline-reveal"><?php echo $category->name;?></a>
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
<?php get_footer(""); ?>