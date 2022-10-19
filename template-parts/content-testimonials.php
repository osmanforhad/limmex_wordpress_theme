<!-- portfolio -->
<div id="services"></div>
<section>
    <div class="container-fluid">
        <div class="row mt120">
            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center ">
                    <?php
                    $testimonial_title = get_theme_mod('limmex_theme_testimonial_title_setting');
                    $testimonial_sub_title = get_theme_mod('limmex_theme_testimonial_sub_title_setting'); 
                    ?>
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if($testimonial_title) : echo esc_html__($testimonial_title, 'limmex'); endif; ?></h1>
                    <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up"><?php if($testimonial_sub_title) : echo esc_html__($testimonial_sub_title, 'limmex'); endif; ?></p>
                </div>
            </div>
        </div>
        <div class="rows mt120">
            <div class="testimonial-sliders  ">
                <?php
                $custom_post_testimonial_args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 5,
                );
                //custom Query for custom post testimonial
                $testimonial_query = new WP_Query($custom_post_testimonial_args);
                while ($testimonial_query->have_posts()) {
                    $testimonial_query->the_post();
                    $testimonial_writer = get_the_title();
                    $testimonial_author = get_the_author();
                    $testimonial_text = get_the_excerpt();
                    if(has_post_thumbnail()){
                        $post_thumbnail = get_the_post_thumbnail_url();
                    }
                    //custom fields in custom post testimonial
                    $testimonial_writer_address_custom_field = get_post_meta(get_the_ID(), "address", true);
                ?>
                <div class="testmonial p10 br5" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="content ">
                        <div class="author mb30">
                            <img src="<?php echo $post_thumbnail; ?>" class="img-fluid br5" alt="<?php echo $testimonial_author; ?>" width="100">
                            <div class="author-content">
                                <h3><?php echo esc_html__($testimonial_writer, 'limmex'); ?></h3>
                                <span><?php if($testimonial_writer_address_custom_field) : echo esc_html__($testimonial_writer_address_custom_field, 'limmex'); endif; ?></span>
                            </div>
                        </div>
                        <p><?php if($testimonial_text) : echo esc_html__($testimonial_text, 'limmex'); endif; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>


<style>
    .testmonial {
        /*        width: 50% !important;*/
    }

    .testmonial p {
        /*        width: 70%;*/
        text-align: left;
    }
    .testmonial .content {
        background: #F1F6FF;

    }
    .testmonial .content {
        background: #F1F6FF;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
       padding: 51px 84px;
        border-radius: 10px;
    }
    
    .testmonial.slick-active .content {
        background: #F1F6FF;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
        padding: 50px 84px;
        border-radius: 10px;
    }
    
    .testmonial .content .author {
        /*        display: inline-block;*/
           width: 70%;
        text-align: left;
    }
    .testmonial img {
        width: 52px;
        margin: 0 auto;
        float: left;
        border-radius: 50px;
        height: 50px;
        margin-right: 15px;
    }
    .testmonial.slick-slide.slick-active img {
        width: 52px;
        margin: 0 auto;
        float: left;
        border-radius: 50px;
        height: 50px;
        margin-right: 15px;
    }
    .testmonial.slick-slide {
/*        transform: scale(1);*/
        opacity: .5;
        transition: .3s ease-in-out all;
         margin: 0px 100px;
    }
    .testmonial.slick-slide.slick-active{
        opacity: 1;
    }
    .testmonial .slick-slide.slick-center {
        opacity: 1;
        transform: scale(1.08);
    }
    .testimonial-sliders .slick-prev {
        left: 100px;
        z-index: 1;
    }
    .testimonial-sliders .slick-next {
        right: 100px;
    }
    .testimonial-sliders .slick-prev:before,
    .testimonial-sliders .slick-next:before {
        font-family: 'IcoFont' !important;
        color: #1e266d;
        font-size: 55px;
        /*        opacity: 0.5 !important;*/
    }
    .testimonial-sliders .slick-prev:before {
        content: '\ea93';
    }
    .testimonial-sliders .slick-next:before {
        content: '\ea94';
    }
    .testimonial-sliders .slick:hover .testimonial-sliders .slick-prev {
        opacity: 1;
    }
</style>