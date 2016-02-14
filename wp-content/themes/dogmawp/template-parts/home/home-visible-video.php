<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php $wr_options = get_option('wr_wp'); ?>
<!--=============== content-holder ===============-->
<div class="content-holder elem scale-bg2">
    <!-- Page title -->
    <div class="dynamic-title"><?php the_title();?></div>
    <!-- Page title  end-->
    <?php get_template_part('template-parts/menu-part');?>
    <!--  Content -->
    <div class="content full-height">
        <!--full-height wrap -->
        <div class="full-height-wrap">
            <div class="full-width-slider-holder">
                <?php if(get_post_meta($post->ID,'rnr_portfolio-post-formats',true)=='portfolio'){ ?>
                    <!--media-container -->
                    <div class="media-container">
                        <div class="video-mask"></div>
                        <!--=============== add you video id  in data-vid="" if you want add sound change data-mv="1" on data-mv="0" ===============-->
                        <?php if (( get_post_meta($post->ID,'rnr_yid',true))):?>
                            <div  class="background-video" data-vid="<?php echo esc_attr(get_post_meta($post->ID,'rnr_yid',true)); ?>" data-mv="<?php echo (get_post_meta($post->ID,'rnr_intro-section-video-sound',true)) ?>"> </div>
                        <?php endif;?>
                        <?php if (has_post_thumbnail( $post->ID ) ):
                            $wr_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                            <div class="bg mob-bg" style="background-image:url(<?php echo esc_url($wr_image[0]);?>)"></div>
                        <?php endif;?>
                    </div>
                    <!--media-container end -->
                    <div class="overlay"></div>
                <?php }?>



            </div>
        </div>
        <!-- full-height-wrap end  -->
    </div>
    <!-- Content   end -->
    <?php get_template_part('template-parts/social-share');?>
</div>
<!-- Content holder  end -->