<?php get_header(); ?>
<!--Hero Section -->
<div id="home"></div>
<section class="about-us align-items-center  ">
    <div class="shapes-container">
        <div class="header-apps-bg-shape"></div>
    </div>
    <div class="container">
        <div class="row  clearfix">
            <div class="col-lg-5 col-sm-12">
                <div class="about mt200 mt-xs-30  text-center-xs">
                    <h1 data-sal="slide-right" data-sal-delay="100" data-sal-duration="1000" data-sal-easing="slider-left">
                        <?php
                        $company_title_first_part = get_theme_mod('limmex_theme_company_title_first_part_setting');
                        if ($company_title_first_part) {
                            echo esc_html__($company_title_first_part, 'limmex');
                        }
                        ?>
                        <br>
                        <?php
                        $company_title_second_part = get_theme_mod('limmex_theme_company_title_second_part_setting');
                        if ($company_title_second_part) {
                            echo esc_html__($company_title_second_part, 'limmex');
                        }
                        ?>
                    </h1>
                    <p>
                        <?php
                        $comany_sologan = get_theme_mod('limmex_theme_company_sologan_setting');
                        if ($comany_sologan) {
                            echo esc_html__($comany_sologan, 'limmex');
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="img" data-sal="slide-left" data-sal-delay="100" data-sal-duration="1000" data-sal-easing="slider-right">
                    <?php
                    $hero_banner = get_theme_mod('limmex_theme_hero_banner');
                    ?>
                    <img src="<?php if ($hero_banner) : echo $hero_banner;
                                endif ?>" class="img-fluid float-r a" alt="about us">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero Section -->

<div class="position-relative">
    <div class="shapes-container">
        <div class="bg-box-rectangle"></div>
    </div>
</div>


<style>
    .width-app {
        margin: 0 auto;
    }

    .feat {
        margin-top: 280px;
    }

    .features-list {
        position: relative;
    }

    .features-list .list {
        width: 200px;
        height: 200px;
        margin: 0 auto;
        line-height: 200px;
        border-radius: 8px;
        text-align: center;
    }

    .features-list.arrow-list::before {
        position: absolute;
        width: 100%;
        top: 93px;
        content: '\ea94';
        font-family: 'IcoFont' !important;
        font-size: 39px;
        color: #c8d7f1;
        left: 228px;
    }

    .features-list img {
        /*        width: 70px;*/
    }

    .features-list .content {
        margin-top: 30px;
    }

    .features-list .content h2 {
        margin-bottom: 10px;
    }
</style>



<!-- features -->
<section class="feat">
    <div class="container">
        <div class="row mt120">
            <div class="col-lg-4 col-sm-6 mb-xs-30">
                <div class="features-list arrow-list text-center" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="list bg-gray">
                        <?php
                        $first_feature_photo = get_theme_mod('limmex_theme_feature_first_photo_setting');
                        $first_featur_text = get_theme_mod('limmex_theme_first_feature_are_text_setting');
                        ?>
                        <img src="<?php if ($first_feature_photo) : echo $first_feature_photo;
                                    endif ?>" class="img-fluid" alt="service" width="100%">
                    </div>
                    <div class="content">
                        <h2><?php if ($first_featur_text) : echo esc_html__($first_featur_text, 'limmex');
                            endif ?></h2>
                    </div>
                </div>
            </div>
            <!-- service 1 -->
            <div class="col-lg-4 col-sm-6 mb-xs-30">
                <div class="features-list arrow-list text-center" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="list bg-gray">
                        <?php
                        $second_feature_photo = get_theme_mod('limmex_theme_feature_second_photo_setting');
                        $second_featur_text = get_theme_mod('limmex_theme_second_feature_are_text_setting');
                        ?>
                        <img src="<?php if ($second_feature_photo) : echo $second_feature_photo;
                                    endif ?>" class="img-fluid" alt="service" width="80%">
                    </div>
                    <div class="content">
                        <h2><?php if ($second_featur_text) : echo esc_html__($second_featur_text, 'limmex');
                            endif ?></h2>
                    </div>
                </div>
            </div>
            <!-- service 1 -->
            <div class="col-lg-4 col-sm-6 mb-xs-30">
                <div class="features-list text-center" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="list bg-gray">
                        <?php
                        $third_feature_photo = get_theme_mod('limmex_theme_feature_third_photo_setting');
                        $third_featur_text = get_theme_mod('limmex_theme_third_feature_are_text_setting');
                        ?>
                        <img src="<?php if ($third_feature_photo) : echo $third_feature_photo;
                                    endif ?>" class="img-fluid" alt="service" width="80%">
                    </div>
                    <div class="content">
                        <h2><?php if ($third_featur_text) : echo esc_html__($third_featur_text);
                            endif ?></h2>
                    </div>
                </div>
            </div>
            <!-- service 1 -->
        </div>
    </div>
</section>
<!-- services -->


<!-- what we do -->
<div id="about-Us"></div>
<section class="what-we-do ">
    <div class="container ">
        <div class="row mt120">
            <div class="col-lg-7 col-sm-12">
                <div class="wedo">
                    <?php
                    $what_we_do_title = get_theme_mod('limmex_theme_what_we_do_title_text_setting');
                    $what_we_do_description = get_theme_mod('limmex_theme_what_we_do_description_text_setting');
                    $what_we_do_banner = get_theme_mod('limmex_theme_what_we_do_banner_setting');
                    ?>
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($what_we_do_title) : echo esc_html__($what_we_do_title, 'limmex');
                                                                                                                        endif ?></h1>
                    <!-- <h2></h2> -->
                    <p data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" data-sal-easing="slider-up">
                        <?php if ($what_we_do_description) : echo esc_html__($what_we_do_description, 'limmex');
                        endif ?>
                    </p>
                </div>
            </div>
            <div class=" col-lg-5 col-sm-12 text-center-xs" class="img-fluid" alt="about us" data-sal="slide-up" data-sal-delay="200" data-sal-duration="1200" data-sal-easing="slider-up">
                <div class="img text-center">
                    <div class="position-relative">
                        <div class="shapes-container">
                            <!-- <div class="circle circle-green"></div>-->
                        </div>
                    </div>
                    <img src="<?php if ($what_we_do_banner) : echo $what_we_do_banner;
                                endif ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- what we do -->



<?php

get_template_part('template-parts/content', 'products');
get_template_part('template-parts/content', 'services');

?>
<!-- form -->
<section class="apps-list " data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
    <div class="container width-app" id="btn-scroll">
        <div class="row about">
            <div class="position-relative">
                <div class="col-lg-8 col-sm-12">
                    <div class="content mb-xs-30">
                        <h1 class="color-white">
                            <?php
                            $get_quotation_title = get_theme_mod('limmex_theme_quotation_title_setting');
                            if ($get_quotation_title) {
                                echo esc_html__($get_quotation_title, 'limmex');
                            }
                            ?>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 ">
                    <a href="#contact-Us" class="button bg-white color-dark button-sm  float-r">Get Quotation</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- apps -->
<div class="position-relative">
    <div class="shapes-container">
        <div class="bg-box-rectangle"></div>
    </div>
</div>

<?php get_template_part('template-parts/content', 'portfolio'); ?>

<div class="position-relative">
    <div class="shapes-container">
        <div class="bg-box-rectangle bg-box-rectangle-transfram-right"></div>
    </div>
</div>

<!-- features -->
<section class="features">
    <div class="container">
        <div class="row mt120">
            <div class="col-lg-12 col-sm-12">
                <div class="title position-relative ">

                    <div class="content text-center">
                        <?php
                        $groco_app_title = get_theme_mod('limmex_theme_groco_app_title_setting');
                        $groco_app_sub_title = get_theme_mod('limmex_theme_groco_app_sub_title_setting');
                        $groco_app_image = get_theme_mod('limmex_theme_groco_app_image_setting');
                        ?>
                        <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($groco_app_title) : echo esc_html__($groco_app_title, 'limmex');
                                                                                                                            endif; ?>
                        </h1>
                        <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($groco_app_sub_title) : echo esc_html__($groco_app_sub_title, 'limmex');
                                                                                                                        endif; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt120">
            <div class="col-lg-5 col-sm-12 text-center-xs" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                <div class="img">
                    <div class="position-relative">
                        <div class="shapes-container">
                            <!--  <div class="circle circle-green"></div>-->
                        </div>
                    </div>
                    <img src="<?php if ($groco_app_image) : echo $groco_app_image;
                                endif; ?>" class="img-fluid" alt="groco-ecommerce" width="60%">

                </div>
            </div>

            <div class="col-lg-7 col-sm-12">
                <div class="wedho clearfix">
                        <?php
                        if (is_active_sidebar('groco_app_title')) {
                            dynamic_sidebar('groco_app_title');
                        }
                        ?>
                    <h2 class="mb15"></h2>
                    <p class="mt15 mb10" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up">
                        <div class="groco_feature_title">
                        <?php
                        if (is_active_sidebar('groco_app_featue_title')) {
                            dynamic_sidebar('groco_app_featue_title');
                        }
                        ?>
                        </div>
                    </p>
                    <div data-sal="slide-up" data-sal-delay="500" data-sal-duration="800" data-sal-easing="slider-up">
                           
                            <?php
                        if (is_active_sidebar('groco_app_featue_left')) {
                            dynamic_sidebar('groco_app_featue_left');
                        }
                        ?>
                      
                      <?php
                        if (is_active_sidebar('groco_app_featue_right')) {
                            dynamic_sidebar('groco_app_featue_right');
                        }
                        ?>
                    </div>
                </div>
                <?php 
                $buy_now_btn_url = get_theme_mod('limmex_theme_groco_app_buy_btn_url_setting');
                $buy_now_btn_text = get_theme_mod('limmex_theme_groco_app_buy_btn_text_setting');
                ?>
                <div class="text-center-xs" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <a target="_blank" href="<?php if($buy_now_btn_url) : echo esc_url($buy_now_btn_url); endif; ?>" class="button primary-bg color-white button-sm primary-bg-hover ">
                        <?php if($buy_now_btn_text) : echo esc_html__($buy_now_btn_text, 'limmex'); endif; ?>
                     </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features -->
<div class="position-relative">
    <div class="shapes-container">
        <div class="pattern-dots"></div>
        <div class="bg-box-rectangle"></div>
    </div>
</div>


<?php
get_template_part('template-parts/content', 'team');
get_template_part('template-parts/content', 'technology');
?>

<div class="position-relative">
    <div class="shapes-container">
        <div class="bg-box-rectangle bg-box-rectangle-transfram-right"></div>
    </div>
</div>

<?php
get_template_part('template-parts/content', 'work-country');
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'clients');
get_template_part('template-parts/content', 'contact-us');
?>


<?php get_footer(); ?>