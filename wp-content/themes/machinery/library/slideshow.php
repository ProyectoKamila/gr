<?php function portada($categoria){?>
    <?php if( $categoria != null){?>
        <?php $pagename = query_posts(array('post_type'=>'portada','sesion'=>$categoria,'posts_per_page'=>3)); ?>
    <?php if(!empty($pagename)) {?>
        <div class="container-fluid sli sin-padding">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="content-slider1">
                    <ul id="slider1">
                         <?php while(have_posts()){ the_post();?>
                              <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                    <li style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover; sin-padding">
                                       
                                       
                                    </li>
                         <?php } ?>
                    </ul>
                </div>
        </div>
    </div>
    </div>
    <?php } ?>
<!--/SLIDER -->
        <?php } ?>
<?php } ?>