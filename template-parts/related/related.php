<section class="section-content work related">
    <h5 class="description">
        <?php esc_html_e( 'See also' ); ?>
    </h5>
    <div class="posts">
        <?php $args = array(
        'posts_per_page' => 3, // How many items to display
        'post__not_in'   => array( get_the_ID() ), // Exclude current post
        'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
        );

        // Check for current post category and add tax_query to the query arguments
        $cats = wp_get_post_terms( get_the_ID(), 'category' ); 
        $cats_ids = array();  
        foreach( $cats as $wpex_related_cat ) {
        $cats_ids[] = $wpex_related_cat->term_id; 
        }
        if ( ! empty( $cats_ids ) ) {
        $args['category__in'] = $cats_ids;
        }

        // Query posts
        $wpex_query = new wp_query( $args );

        // Loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
        <article class="post">
            <?php if ( has_post_thumbnail() ): ?>
            <figure class="media">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="link">
                    <?php the_post_thumbnail('work-small'); ?>
                </a>
            </figure>
            <?php endif; ?>

            <h2 class="title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="link">
                    <?php the_title(); ?>
                </a>
            </h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark"
                class="button link"><?php esc_html_e( 'View case study' ); ?>
            </a>

        </article>

        <?php endforeach;
        // Reset post data
        wp_reset_postdata(); ?>
    </div>
</section>