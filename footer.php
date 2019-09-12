 <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                            <?php the_custom_logo(  ); ?>
                            <?php $f_post = new WP_Query( array('post_type'=>'post','category_name'=>'f_post'));
                                    if ($f_post->have_posts()) {
                                        # code...
                                        while ($f_post->have_posts()) {
                                            # code...
                                            $f_post->the_post();
                                             $fb= get_post_meta( $post->ID, 'facebook', true );
                                            $linkdin= get_post_meta( $post->ID, 'linkdin', true );
                                            $dribbble= get_post_meta( $post->ID, 'dribbble', true );
                                            $be= get_post_meta( $post->ID, 'be', true );
                                            $google= get_post_meta( $post->ID, 'google', true );
                                        ?>
                                        <p><?php  empt($fb,'fa fa-facebook');
                                                 empt($linkdin,'fa fa-linkedin');
                                                 empt($dribbble,'fa fa-dribbble');
                                                 empt($be,'fa fa-behance');
                                                 empt($google,'fa fa-google-plus');

                                         ?></p>
                                         <?php
                                        }
                                    }
                             ?></p>
                            <h5>&copy; All Right Reserved. dart theme 2017</h5>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-text">
                            <div class="row">
                                <?php dynamic_sidebar( 'footer1' ); ?>
                                <?php dynamic_sidebar( 'footer2' ); ?>
                                <?php dynamic_sidebar( 'footer3' ); ?>
                                <?php dynamic_sidebar( 'footer4' ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </footer>