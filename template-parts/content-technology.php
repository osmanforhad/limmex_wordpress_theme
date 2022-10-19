<!-- portfolio -->

<section>
    <div class="container">
        <div class="row mt120">

            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center">
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                        <?php
                        if (is_active_sidebar('tools_tech_title')) {
                            dynamic_sidebar('tools_tech_title');
                        }
                        ?>
                    </h1>
                    <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up">
                        <?php
                        if (is_active_sidebar('tools_tech_sub_title')) {
                            dynamic_sidebar('tools_tech_sub_title');
                        }
                        ?>
                    </p>
                </div>
            </div>

        </div>
        <div class="row mt50">
            <div>
                <div class="technology p10 br5 text-center">
                    <ul>
                        <?php
                          $custom_post_tech_args = array(
                            'post_type' => 'tools_tech',
                            'posts_per_page' => 20,
                        );
                        //custom Query for custom post tools & technology
                        $tech_query = new WP_Query($custom_post_tech_args);
                        while ($tech_query->have_posts()) {
                            $tech_query->the_post();
                            
                            if(has_post_thumbnail()){
                                $post_thumbnail = get_the_post_thumbnail_url();
                            }
                        ?>
                        <li class="col">
                            <img src="<?php echo $post_thumbnail; ?>" class=" img-fluid br5" alt="Clients" width="100" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client -->


<style>
    .technology ul li:nth-of-type(even) {
        margin-top: 15px;
    }

    .technology img {
        background: #F1F6FF;
        padding: 10px;
        margin: 10px;
    }

    .technology ul li img {
        transition: 1s ease all;
    }

    .technology ul li img:hover {
        transform: translateY(-15px);
    }
</style>