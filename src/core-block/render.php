<?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $the_query = new WP_Query($args); 
    ob_start();
	?>
        <main class="kcls-section">
            <div class="kcls-recent-posts">
                <?php if ( $the_query->have_posts() ) ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div 
                        class="<?php
                            // Applies unique class to most recent post
                            if($the_query->current_post === 0) echo 'kcls-most-recent-post'; 
                            else echo('kcls-recent-post'); ?>">                
                        <div class="kcls-news-details">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p class="kcls-recent-post-time"><?php the_date(); ?></p>    
                        </div>
                        <div 
                            class="kcls-recent-post-expanded <?php if($the_query->current_post === 0) echo 'kcls-blurb-and-image';?>">
                            <?php 
                                // Shows excerpt if it is the most recent post
                                if($the_query->current_post === 0) the_excerpt(); 
                            ?> 
                            <div class="kcls-news-image">
                                <div class="kcls-recent-post-thumbnail">
                                    <?php if ( has_post_thumbnail() ){
                                        the_post_thumbnail('medium');
                                    } 
                                    // If no featured image, display the first image from the post or default logo
                                    else {
                                        $kcls_post_img = kcls_get_post_image();
                                        echo '<img src="' . $kcls_post_img . '" alt="' . get_the_title() . '">';
                                    } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </main>

	<?php
	wp_reset_postdata();
    return ob_get_clean();