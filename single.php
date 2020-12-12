
<?php get_header(); ?>
<?php include('inc/example.php'); ?>

</div>
<main class="fe text-right py-5  m-0 container mx-auto row">
    <div class="content-body col-9">
        <section class=" " id="best">
            <div class="m-post row">
                <div class="our-post col-6">

                    <?php include('inc/slider.php') ?>

                </div>

                <div class="ads-in col-6">

                    <?php dynamic_sidebar( 'middle-ads' ); ?>


                </div>

                <div class="clear"> </div>

                <article class="">

                    <!-- ____________________________________________________________ -->
 
                    <?php

                    $c=array();
                    $mytags=array();
                    while(have_posts())
                    {
                        the_post();


                        // var_dump(get_the_category());
                        $mycat=wp_get_post_categories(get_the_ID());
                        $t2=wp_get_post_tags(get_the_ID());

                        foreach($t2 as $junk)
                        {
                            $mytags[]=$junk->term_id;     //TAGS
                        }

                        ?>
                        <div class="post">
                            <div class="title p-4 px-5">
                                <a href=" <?php the_permalink(); ?> "><h2>  <?php the_title(); ?> </h2></a>
                            </div>

                            <div class="post-content ">
                                <?php the_content(""); ?>
                            </div>


                            <footer>
                                <div class="tabs">
                                    <a href="#" id=" <?php the_ID(); ?> " data-toggle="tooltip" data-placement="top" title=" نویسنده: <?php the_author();?> ">  <i class="fa fa-user"></i> </a>
                                    <a href="#"  id=" <?php the_ID(); ?> " data-toggle="tooltip" data-placement="top" title="  <?php echo get_the_date("y/m/d"); ?>">  <i class="fa fa-calendar"></i> </a>
                                    <a href="#"  id=" <?php the_ID(); ?> " data-toggle="tooltip" data-placement="top"title="  <?php foreach((get_the_category()) as $category) {echo $category->cat_name . ' ';} ?>">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <a href="#"  id=" <?php the_ID(); ?> " data-toggle="tooltip" data-placement="top" title="نظر ها: <?php  echo get_comments_number(); ?>">  <i class="fa fa-comments"></i> </a>

                                </div>

                                <a href="<?php the_permalink(); ?>" class="more-link btn btn-success">ادامه مطلب</a>
                            </footer>

                        </div>
                        <div class="post text-center mt-3 ">
                            <div class="download-box text-center">
                                <h3> دو زبانه </h3>
                                <a href="#" class="d-block download-links"> 720p-1.5g </a>
                                <a href="#" class="d-block download-links"> 720p-1g </a>
                                <a href="#" class="d-block download-links"> 480p-985mg </a>
                                --------------------------
                            </div>
                            <div class="download-box text-center">
                                <h3> دو زبانه </h3>
                                <a href="#" class="d-block download-links"> 720p-1.5g </a>
                                <a href="#" class="d-block download-links"> 720p-1g </a>
                                <a href="#" class="d-block download-links"> 480p-985mg </a>
                                <a href="#" class="d-block download-links"> زیر نویس فارسی </a>
                                <p  class="download-links" > رمز : <?php echo get_post_meta(get_the_id(),"password",true ); ?> </p>


                            </div>
                        </div>
                        <div class="Related"><!-- مربوط -->
                        <?php             $q=new WP_Query(
                            array(
                                "posts_per_page"=>6,
                                "category__in"=>$mycat,
                                "tag__in"=>$mytags,
                                "post__not_in"=>array(get_the_ID()),
                                "orderby"=>"rand" //random

                            )
                        );?>
                        <h3  class="d-block text-light bg-secondary p-2">مطالب مرتبط</h3>
                        <div class="owl-carousel owl-theme post pt-4 pb-1 px-4 m-0 single-s">
                        <?php
                        while($q->have_posts())
                        {
                            $q->the_post();
                           // var_dump(the_title());
                            ?>

                                <div class="item"> <img src=" <?php the_post_thumbnail(); ?> " alt="<?php the_title() ?>"> </div>
                        <?php  } wp_reset_postdata(); ?></div>
                    </div>
                        <?php
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                        ?>

                        <?php

                    }wp_reset_query();?>





                    <!-- ____________________________________________________________ -->

                </article>


                <nav aria-label="Page navigation example" class="another-tabs">
                    <?php wp_pagenavi(); ?>

                </nav>

                    </section>
                    <div class="clear"></div>
                </div>
                <?php get_sidebar("single"); ?>
            </div>
        </main>

        <?php get_footer(); ?>

        <?php include('functions.php') ?>
