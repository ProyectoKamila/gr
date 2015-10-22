<?php 
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
                <h1><?php the_title();?></h1>
            </div>
        </div>
     
        <div class="clearfix"></div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                   <?php the_content();?>
                </div>
                
                
            </div>
        </div>
        <div class="clearfix"></div>
    
      
    </div>
</div>
</section>
<?php get_footer(""); ?>