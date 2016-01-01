<?php get_header(); ?>
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
                        <?php get_template_part('partials/breadcrumbs/breadcrumbs');?>

                            <?php // if(have_posts()) : while(have_posts()) : the_post();
                                echo '<ul class="list-inline">';

                                $args = array(
                                    'taxonomy'  => 'album',
                                    'orderby'   => 'id',
                                    'order'     => 'ASC'

                                );
                                $taxonomies = get_categories($args);

                                foreach ($taxonomies as $taxonomy) {
                                    $taxonomy_id = $taxonomy->term_id;
                                    $taxonomy_name = $taxonomy->name;

                                    $taxonomy_metadata = get_term_meta($taxonomy_id, 'taxonomy_image', true);
                                    $thumbnailImageAttributes = wp_get_attachment_image_src($taxonomy_metadata, 'thumbnail');
                                    echo '<li>';
                                        echo '<a href="' . get_category_link( $taxonomy_id ) . '" title="'.$taxonomy_name.'"><img src="'. $thumbnailImageAttributes[0]. '" alt="" class="attachment-thumbnail size-thumbnail" width="150px" height="150px"><span class="thumbnail-image-title">' . $taxonomy_name.'</span></a> ';
                                    echo '</li>';
                                }

                                echo '</ul>';
                            //endwhile; endif; ?>
                    </div>
            </div>
            <?php get_sidebar(); ?>
                <?php get_footer(); ?>
        </div>
    </div>
