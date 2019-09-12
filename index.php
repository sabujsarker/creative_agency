<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Agency Template</title>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php 
                            
    $banner = new WP_Query(array('post_type'=>'banner','category_name' =>'banner_top'));
    if ($banner->have_posts()) {
    while ($banner -> have_posts()) {
        $banner -> the_post();
        ?>
    <div class="wrapper">
        <header class="header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header-shepe-white.png" alt="">
            </div>
            <div class="container">
                <img class="shepe1" src="<?php echo get_template_directory_uri(); ?>/img/shepe1.png" alt="">
                <img class="shepe2" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <img class="shepe3" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <img class="shepe4" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <img class="shepe5" src="<?php echo get_template_directory_uri(); ?>/img/shepe1.png" alt="">
                <img class="shepe6" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <?php the_custom_logo(  ); ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php 
                            include_once 'header.php';
                         ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                         
                        <div class="header-text">
                           <?php
                                     
                                     $left_btn_text = get_post_meta($post->ID, 'left_btn_text', true); 
                                     $left_btn_url = get_post_meta($post->ID, 'left_btn_url', true);
                                     $right_btn_url = get_post_meta($post->ID, 'right_btn_url', true);
                                     $right_btn_text = get_post_meta( $post->ID, 'right_btn_text', true );
                                     ?>
                                     <h1><?php  the_title(  ); ?></h1>
                                     <?php the_content( );
                                     ?>
                                     <button><a href="<?php echo $left_btn_url ?>"><?php echo $left_btn_text; ?></a></button><button><a href="<?php echo $right_btn_url ?>"><?php echo $right_btn_text; ?></a></button>
                                     <?php
                                 }
                             } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="another-text">
                             <?php 

                            $banner = new WP_Query(array('post_type'=>'banner','category_name'=>'banner_bootom'));
                            if ($banner->have_posts()) {
                                 while ($banner -> have_posts()) {
                                     $banner -> the_post();
                                     ?>
                                     <h3><?php  the_title(  ); ?></h3>
                                     <?php the_content( );
                                 }
                             } 
                             ?></div>
                    </div>
                </div>
            </div>
        </header>
        <section class="development">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/development-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>/img/development-shepe-white.png" alt="">
            </div>
            <div class="container">
                <div class="row ">
                        <?php $section_2=new WP_Query(array('post_type'=>'section2','category_name'=>'icon','order'=>'ASC')) ;
                        if ($section_2->have_posts()) {
                            while ($section_2 -> have_posts()) { ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="design-development two">
                        <?php
                                $section_2 ->the_post();
                                $icon=get_post_meta( $post->ID, 'icon', true );
                                $color=get_post_meta( $post->ID, 'color', true );
                                ?>
                                <i class="material-icons" style="background: <?php echo $color; ?>;">
                                    <?php echo $icon; ?>
                                    <span class="after" style="border:1px solid <?php echo $color; ?>; "></span>
                                    <span class="before" style="border:1px solid <?php echo $color; ?>; "></span>
                                </i>
                                <h2><?php the_title( ); ?></h2>
                                <?php the_content(  );
                                ?>
                                 </div>

                       
                    </div>
                                 <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </section>
        <section class="works">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="work-images">

                            <?php 
                            $section_2_left = new WP_Query(array('post_type'=>'section2','category_name'=>'left'));

                            if ($section_2_left ->have_posts()) {
                                while ($section_2_left->have_posts()) {
                                    $section_2_left->the_post();
                                    $video = get_post_meta( $post->ID, 'video', true );
                                    ?>
                                     <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video ?>" frameborder="0" allowfullscreen=""></iframe>
                                     <?php
                                }
                            }
                             ?>
                             <div class="overlay-text">
                                <i class="material-icons">play_circle_filled</i>
                            </div>
                            </div>


                        </div>
                    <div class="col-md-5">
                        <div class="work-text-full">
                            <div class="work-text">
                                <?php $coustom=new WP_Query (array('post_type'=>'coustom','tag'=>'1st'));
                                if ($coustom->have_posts()) {
                                    while ($coustom->have_posts()) {
                                        $coustom->the_post();

                                        ?>
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content( );
                                    }
                                }
                                 ?>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolia">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="port-text">
                            <?php $coustom=new WP_Query (array('post_type'=>'coustom','tag'=>'2nd'));
                                if ($coustom->have_posts()) {
                                    while ($coustom->have_posts()) {
                                        $coustom->the_post();
                                        ?>
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content( );
                                    }
                                }
                                 ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="hover_full">
                        <?php $hover = new WP_Query(array('post_type'=>'hover'));
                        if ($hover-> have_posts()) {
                            # code...
                            while ($hover->have_posts()) {
                                # code...
                                $hover->the_post();
                                ?>
                                <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                            <div class="overlay-slide">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                                <?php
                            }
                        }
                     ?>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-text">
                             <?php $coustom=new WP_Query (array('post_type'=>'coustom','tag'=>'3rd'));
                                if ($coustom->have_posts()) {
                                    while ($coustom->have_posts()) {
                                        $coustom->the_post();
                                        ?>
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content( );
                                    }
                                }
                                 ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-claint owl-carousel owl-theme">
                              <?php  $slider= new WP_Query(array('post_type'=>'post','category_name'=>'slider'));

                                    while ($slider->have_posts()) {
                                        $slider->the_post();


                                        ?>
                            <div class="item">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3><?php the_title( ); ?></h3>
                                    <?php
                                        the_content( );
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
                                        </div>
                                        </div>
                                        <?php
                                    }
                                     ?>
                                 

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="contact">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact-shepe-white.png" alt="">
            </div>
            <div class="container contact_section">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-text">
                            <?php $coustom=new WP_Query (array('post_type'=>'coustom','tag'=>'4th'));
                                if ($coustom->have_posts()) {
                                    while ($coustom->have_posts()) {
                                        $coustom->the_post();
                                        ?>
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content( );
                                    }
                                }
                                 ?>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <?php $contact = new WP_Query(array('post_type'=>'section2','category_name'=>'contact'));
                                    while ($contact->have_posts()) {
                                        $contact->the_post();
                                        the_content( );
                                    }
                                 ?>
                               
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <?php include_once 'footer.php'; ?>
    </div>
    
    <?php wp_footer(); ?>
</body>

</html>