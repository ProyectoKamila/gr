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
            <?php 
                $args = array(
                	'type'                     => 'videos',
                	'child_of'                 => 0,
                	'parent'                   => '',
                	'orderby'                  => 'name',
                	'order'                    => 'ASC',
                	'hide_empty'               => 0,
                	'hierarchical'             => 1,
                	'exclude'                  => '',
                	'include'                  => '',
                	'number'                   => '',
                	'taxonomy'                 => 'categoria-videos',
                	'pad_counts'               => false 
                ); 
                $categories = get_categories($args);
            ?>
            <?php foreach($categories as $category) { ?>
                <div class="col-xs-12">
                    <div id="nosotros">
                        <div class="title">
                            <a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "categoria-videos")); ?>"><h1><?php echo $category->name; ?></h1></a>
                        </div>
                    </div>
                </div>
                
                <?php query_posts(array("post_type"=>"videos","categoria-videos"=>$category->SLUG, "posts_per_page"=>6));?>
                <?php while(have_posts()){ the_post();?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="item">
                          <?php the_content(); ?>
                        </div>
                        <div class="title-videos">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer();?>