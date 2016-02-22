<!-- PHP to build index file on any Wordpress theme and show the recent content types as an index page. Similar to blog index page. 
                    
           
                <!--SCRIPT TO SHOW INDEX OF CREDIT ARTICLE TYPES STARTS HERE -->
                <?php
                $parameters = array(
                    'post_type' => 'content_type_name', // This is the name of the content type. In your case it is called "articles"
                    'orderby' => 'date', // this will order by "date"
                    'order' => 'DESC', // ordered in descending order (newest at the top)
                    //'category_name' => 'credit', // this is the name of the category of article you want to get. In your case it is "credit"
                    'posts_per_page' => 20 // total articles to show. If you want to show all change 20 to -1
                );



                $postTypeData = new WP_Query( $parameters );
                ?>
                <?php while ( $postTypeData->have_posts()) : $postTypeData->the_post(); ?>

                <div class=""><?php the_date(); ?> by <?php the_author_posts_link(); ?></div>
                                    <?php the_excerpt(); ?>
                                

                <?php endwhile; wp_reset_query(); ?>                        
            </div>

            <!-- END OF SCRIPT TO SHOW ARTICLE POSTS--> 
        
    

        
