<!-- portfolio -->
<div id="clients"></div>
<section>
    <div class="container">
        <div class="row mt120">

            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center">
                    <?php
                    if (is_active_sidebar('country_client_title')) {
                        dynamic_sidebar('country_client_title');
                    }
                    ?>
                    <?php
                    if (is_active_sidebar('country_clinet_sub_title')) {
                        dynamic_sidebar('country_clinet_sub_title');
                    }
                    ?>
                </div>
            </div>

        </div>
        <div class="row mt50">
            <div class="country p10 br5 text-center">
                <?php
                $custom_post_country_args = array(
                    'post_type' => 'country_client',
                    'posts_per_page' => 5,
                );
                //custom Query for custom post clinet & country
                $country_query = new WP_Query($custom_post_country_args);
                while ($country_query->have_posts()) {
                    $country_query->the_post();

                    if (has_post_thumbnail()) {
                        $post_thumbnail = get_the_post_thumbnail_url();
                    }
                ?>
                    <img src="<?php echo $post_thumbnail; ?>" class="p15 img-fluid br5" alt="Clients" width="200" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- client -->


<style>
    .country .list {
        padding: 10px;
        /*    width: 200px;*/
        float: left;
    }

    .country img {
        border-radius: 20px;

    }
</style>