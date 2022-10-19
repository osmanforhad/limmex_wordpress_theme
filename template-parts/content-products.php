<!-- projects -->
<div id="projects"></div>
<section class="projects-title bg-gray">
    <div class="container">
        <div class="row mt120 pt50">
            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center">
                    <?php
                    $our_product_title = get_theme_mod('limmex_theme_our_product_title_setting');
                    $our_product_sub_title = get_theme_mod('limmex_theme_our_product_sub_title_setting');

                    ?>
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($our_product_title) : echo esc_html__($our_product_title, 'limmex');
                                                                                                                        endif; ?></h1>
                    <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($our_product_sub_title) : echo esc_html__($our_product_sub_title, 'limmex');
                                                                                                                    endif; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-list">
    <div class="container-fluid">
        <div class="rows mt120">
            <div class="slider">
                <?php
                $custom_post_product_args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10,
                );
                //custom Query for custom post product
                $product_query = new WP_Query($custom_post_product_args);
                while ($product_query->have_posts()) {
                    $product_query->the_post();
                    //custom fields in custom post product
                    $product_link = get_post_meta(get_the_ID(), "product_link", true);
                ?>
                    <div class="project-item br5" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                        <div class="item">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid br5" alt="<?php the_title_attribute(); ?>" width="100%">
                            <?php endif ?>
                            <div class="content mt15 ">
                                <a target="_blank" href="<?php if ($product_link) : echo esc_url($product_link);
                                                            endif; ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                            </div>
                            <div class="icon">
                                <a target="_blank" href="<?php if ($product_link) : echo esc_url($product_link);
                                                            endif; ?>"><i class="icofont-link"></i></a>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<style>
    .projects-title {
        padding-bottom: 500px;
    }

    .project-list {
        margin-top: -500px;
    }

    .project-item {
        /*        box-shadow: 0px 0px 16px 1px rgb(154 161 171 / 18%);*/
        position: relative;
    }

    .project-item .item img {
        height: 530px;
        box-shadow: 0px 0px 16px 1px rgb(154 161 171 / 18%);
        background: #fff;
    }

    .project-item .item .icon {
        position: absolute;
        top: 50%;
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
        z-index: 10;

    }

    .project-item:hover .icon {
        opacity: 1;
        transform: translateY(0px);
    }

    .project-item.slick-slide {
        /*        transform: scale(1);*/
        opacity: .5;
        transition: .3s ease-in-out all;
    }

    .project-item.slick-slide.slick-center {
        opacity: 1;
        /*        transform: scale(1.08);*/
    }

    .project-item.slick-active img {
        width: 75%;
        margin: 0 auto;
        height: auto;
    }

    .project-item .item::before {
        content: "";
        overflow: hidden;
        background: linear-gradient(to bottom, #673ab700 51%, #f1f6ff 100%);
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        right: 0px;
        top: 0px;
        left: 0px;
        border-radius: 10px;
        opacity: 1;
        width: 75%;
        margin: 0 auto;
    }

    .project-item .content {
        position: absolute;
        bottom: 0;
        left: 0;
        /*        background: rgb(255, 255, 255, 0.8);*/
        transition: 1s ease all;
        width: 100%;
        padding: 20px 20px;
        z-index: 1;
        text-align: center;
    }

    .project-item:hover .content {
        bottom: 20px;
        background-color: inherit;
    }

    .slick-prev {
        left: 100px;
        z-index: 1;
    }

    .slick-next {
        right: 100px;
    }

    .slick-prev:before,
    .slick-next:before {
        font-family: 'IcoFont' !important;
        color: #A2C413;
        font-size: 55px;
        /*  opacity: 0.5 !important;*/
    }

    .slick-prev:before {
        content: '\ea93';
    }

    .slick-next:before {
        content: '\ea94';
    }

    .slick:hover .slick-prev {
        opacity: 1;
    }
</style>