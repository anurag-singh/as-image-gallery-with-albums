<?php get_header();?>

    <div class="cntn-sec">
        <div class="wper">
            <div class="pg-lft-clm">
                <div class="pg-bnr">
                    <span class="pg-brn-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Be-Informed-bnr.png" align="right"> </span>
                    <div class="pg-bnr-tilel">
                        <div>
                            <h2><?php echo ucfirst($post->post_type);?></h2>
                        </div>
                    </div>
                </div>

                <div class="pg-cntnt">
                    <?php get_template_part('partials/breadcrumbs/breadcrumbs');
                    echo '<ul class="list-inline">';
                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                        $imageIds = get_post_meta($post->ID, 'as_album_images');
                        foreach($imageIds as $imageId) {
                            echo '<li>';

                                // get thumbnail image attributes
                                $thumbnailImageAttributes = wp_get_attachment_image_src($imageId, 'thumbnail');

                                // get full image attributes for fancybox display
                                $fullImageAttributes = wp_get_attachment_image_src($imageId, 'full');

                                echo '<a class="fancybox" href="'.$fullImageAttributes[0].'" data-fancybox-group="gallery">';
                                    echo '<img src="'. $thumbnailImageAttributes[0]. '">';
                                echo '</a>';
                            echo '</li>';
                        }

                    endwhile; endif;
                    echo '</ul>';
                    ?>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
    <?php get_footer();?>
