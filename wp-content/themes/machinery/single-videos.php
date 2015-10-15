<?php 
get_header();?>
<div id="stoy" data-url="videos"></div>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("videos"); ?>
<?php } else {?>
<?php portada("videos-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<?php the_post();?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <section id="nosotros">
            <div class="title">
                <h1><?php the_title();?></h1>
            </div>
        </section>
        </div>
        <div class="col-xs-12">
            <?php the_content();?>
        </div>
    </div>
</div>
<?php get_footer();?>