<!-- services -->
<div id="services"></div>
<section class="services ">
    <div class="container">
        <div class="row  mt120">
            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center">
                    <?php
                    $our_services_title = get_theme_mod('limmex_theme_our_services_title_setting');
                    $our_services_sub_title = get_theme_mod('limmex_theme_our_services_sub_title_setting');
                    ?>
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($our_services_title) : echo esc_html__($our_services_title, 'limmex');
                                                                                                                        endif; ?></h1>
                    <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($our_services_sub_title) : echo esc_html__($our_services_sub_title, 'limmex');
                                                                                                                    endif; ?></p>
                </div>
            </div>
        </div>
        <div class="row mt120">
            <?php
            $custom_post_services_args = array(
                'post_type' => 'ourservices',
                'posts_per_page' => 8,
            );
            //custom Query for custom post Services
            $services_Query = new WP_Query($custom_post_services_args);
            while ($services_Query->have_posts()) {
                $services_Query->the_post();
            ?>
                <div class="col-lg-3 col-sm-6 mb30 " data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="app-service bg-gray p50 br5">
                        <div class="app-service-image ">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <h2><?php the_title(); ?></h2>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- services -->


<style>
    .app-service,
    .app-service .app-service-image {
        transition: 1s ease all;
    }

    .app-service:hover,
    .app-service:hover .app-service-image {
        transform: translateY(-15px);
    }
</style>