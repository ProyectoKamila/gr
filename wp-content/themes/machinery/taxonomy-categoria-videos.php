<?php 
get_header();?>
<div id="stoy" data-url="videos"></div>
<?php if (ICL_LANGUAGE_CODE == 'es') { ?>
<?php portada("videos"); ?>
<?php } else {?>
<?php portada("videos-en"); ?>
<?php }?>
<?php wp_reset_query("");?>
<section id="archive-videos">
    <div class="container">
        <div class="row">
            
            
                <div class="col-xs-12">
                    <div id="nosotros">
                        <div class="title">
                            <a href="<?php echo get_category_link(get_term_by("slug", $term, "categoria-videos")); ?>"><h1><?php echo $term; ?></h1></a>
                        </div>
                    </div>
                </div>
                <?php query_posts(array("post_type"=>"videos","categoria-videos"=>$term, "posts_per_page"=>-1));?>
                <?php while(have_posts()){ the_post();?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="item">
                      <?php the_content(); ?>
                    </div>
                    <div class="title-videos">
                        <h3><?php the_title();?></h3>
                    </div>
                </div>
                
                <?php } ?>
            
            
        </div>
    </div>
</section>
<?php get_footer();?>