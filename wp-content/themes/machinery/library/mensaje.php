<?php function mensaje($sms) {?>
<?php $mensaje = query_posts(array('post_type'=>'mensajes','posiciones'=>$sms,'posts_per_page'=>1)); ?>
<?php if(!empty($mensaje)){?>
<div id="stoy" data-url="index"></div>
<section class="green-bar">
    <?php while(have_posts()){?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <?php the_post();?>
                <h2><?php echo get_the_content();?></h2>
            </div>
        </div>
    </div>
    <?php }?>
</section>
<?php } ?>
<?php }wp_reset_query(); ?>