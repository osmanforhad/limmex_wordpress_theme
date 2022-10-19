<!-- portfolio -->
<div id="clients"></div>
<section class="mt120">
    <div class="container">
        <div class="row">
            <!--
            <div class="title position-relative">
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>
                <div class="content text-center">
                    <h1>Clients</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing dsfs</p>
                </div>
            </div>
-->
        </div>
        <div class="row ">
            <div>
                <div class="clients p10 br5 text-center">
                <?php
            $custom_post_partner_args = array(
                'post_type' => 'partner',
                'posts_per_page' => 10,
            );
            //custom Query for custom post team
            $partner_query = new WP_Query($custom_post_partner_args);
            while ($partner_query->have_posts()) {
                $partner_query->the_post();
                $partner_name = get_the_title();
                if(has_post_thumbnail()){
                    $post_thumbnail = get_the_post_thumbnail_url();
                }
                //custom fields in custom post partner
                $web_address_custom_field = get_post_meta(get_the_ID(), "web_url", true);
            ?>
                    <a href="<?php if($web_address_custom_field) : echo esc_url($web_address_custom_field); endif; ?>" target="_blank" title="<?php echo $partner_name; ?>" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up" >
                    <img src="<?php echo $post_thumbnail; ?>" class="p15 img-fluid br5" alt="Clients" width="244"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client -->


<style>
    .clients .list {
        padding: 10px;
        /*    width: 200px;*/
        float: left;
    }

    .clients .list img {
        /*        float: left;*/

    }
</style>