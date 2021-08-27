<?php 
    /*  Template Name:  OKLABSCUSTOMTEMPLATE */
    get_header(); 

?>
<div class="main row">
    <section class="col-12 tbdr">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $args = array(
                    'post_type'=>'post',
                    'posts_per_page'   => 1
                );
                // The Query
                $the_query = new WP_Query( $args );
                
                // The Loop
                if ( $the_query->have_posts() ) {
                   $i=1;
                    while ( $the_query->have_posts() ) {
                        echo '<tr>';
                            $the_query->the_post();
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.get_the_title().'</td>';
                            echo '<td>'.get_the_content().'</td>';
                            echo '<td>
                                        <a href="#">EDIT</a>
                                        <a href="#">DELETE</a>
                                  </td>';
                        echo '<tr>';
                        $i++;
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
                </tr>
            </tbody>
        </table>
        
    </section>
</div>
<?php get_footer( ); ?>