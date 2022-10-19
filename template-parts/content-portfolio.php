<!-- portfolio -->
<div id="portfolio"></div>
<section class="portfolio">
    <div class="container">
        <div class="row mt120">
            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center">
                    <?php
                    $portfolio_title = get_theme_mod('limmex_theme_portfolio_title_setting');
                    $portfolio_sub_title = get_theme_mod('limmex_theme_portfolio_sub_title_setting');
                    ?>
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if($portfolio_title) : echo esc_html__($portfolio_title, 'limmex'); endif;  ?></h1>
                    <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up"><?php if($portfolio_sub_title) : echo esc_html__($portfolio_sub_title, 'limmex'); endif; ?></p>
                </div>
            </div>
        </div>
        <div class="row mt120">
        <?php
                $custom_post_portfolio_args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 10,
                );
                //custom Query for custom post portfolio
                $portfolio_query = new WP_Query($custom_post_portfolio_args);
                while ($portfolio_query->have_posts()) {
                    $portfolio_query->the_post();
                    //custom fields in custom post portfolio
                    $portfolio_link_custom_field = get_post_meta(get_the_ID(), "portfolio_link", true);
                ?>
            <div class="col-lg-4 col-sm-6 mb30" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                <div class="portfolio-item  br5">
                    <div class="item">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid br5" alt="<?php the_title_attribute(); ?>" width="100%">
                        <?php endif ?>
                        <div class="icon">
                            <a target="_blank" href="<?php if ($portfolio_link_custom_field) : echo esc_url($portfolio_link_custom_field);
                                                            endif; ?>"><i class="icofont-link"></i></a>
                        </div>
                    </div>
                    <div class="content mt15 ">
                        <a target="_blank" href="<?php if ($portfolio_link_custom_field) : echo esc_url($portfolio_link_custom_field);
                                                            endif; ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- portfolio -->

<style>
    .portfolio-item {
        position: relative;
    }

    .portfolio-item .item::before {
        content: "";
        overflow: hidden;
        background: linear-gradient(to bottom, #673ab700 5%, #f1f6ff 100%);
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        right: 0px;
        top: 0px;
        left: 0px;
        border-radius: 5px;
        opacity: 1;
    }

    .portfolio-item img {
        /*        height: 400px;*/
    }

    .portfolio-item .item img {
        -webkit-transition: all 500ms linear;
        transition: all 500ms linear;
        border-radius: 5px;
    }

    .portfolio-item:hover img {
        -webkit-opacity: 0.7;
        opacity: 0.7;
        -moz-transform: scale(1.2, 1.2) rotate(-2deg);
        -webkit-transform: scale(1.2, 1.2) rotate(-2deg);
        -o-transform: scale(1.2, 1.2) rotate(-2deg);
        -ms-transform: scale(1.2, 1.2) rotate(-2deg);
        transform: scale(1.2, 1.2) rotate(-2deg);
        border-radius: 5px;
    }

    .portfolio-item .item .icon {
        position: absolute;
        top: 40%;
        left: 50%;
        background: #A2C413;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 50px;
        color: #fff;
        line-height: 50px;
        opacity: 0;
        transform: translateY(15px);
        transition: 1s ease all;
        z-index: 1;
    }

    .portfolio-item:hover .icon {
        opacity: 1;
        transform: translateY(0px);
    }

    .portfolio-item .content {
        position: absolute;
        bottom: 0;
        left: 0;
        /*        background: rgb(255, 255, 255, 0.8);*/
        transition: 1s ease all;
        width: 100%;
        padding: 20px 20px;
        z-index: 1;
    }

    .portfolio-item:hover .content {
        bottom: 20px;
        background-color: inherit;
    }
</style>