<?php 
    /*  Template Name:  OKLABSCUSTOMTEMPLATE */
    get_header(); 

?>
<div class="main row">
    <section class="col-12 tbdr">
    <?php
        $args = array('post_type'=>'post');
        // The Query
        $the_query = new WP_Query( $args );
        
        // The Loop
        if ( $the_query->have_posts() ) {
            echo '<ul>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo 'This Sample Page';
                //echo '<li>' . get_the_title() . '</li>';
            }
            echo '</ul>';
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    ?>
    </section>
</div>
<?php get_footer( ); ?>