
<!-- team member -->

<div id="teams"></div>
<section >
    <div class="container">
        <div class="row mt120">
            <div class="title position-relative">
                
                <div class="shapes-container">
                    <div class="pattern-dots"></div>
                </div>

                <div class="content text-center">
                    <?php 
                    $team_text_title = get_theme_mod('limmex_theme_our_team_title_setting');
                    $team_text_sub_title = get_theme_mod('limmex_theme_our_team_sub_title_setting');
                    ?>
                    <h1 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if($team_text_title) : echo esc_html__($team_text_title, 'limmex'); endif; ?></h1>
                    <p data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up"><?php if($team_text_sub_title) : echo esc_html__($team_text_sub_title, 'limmex'); endif; ?></p>
                </div>
            </div>
        </div>
        <div class="row mt120">
           <?php
            $custom_post_team_args = array(
                'post_type' => 'team',
                'posts_per_page' => 11,
            );
            //custom Query for custom post team
            $team_query = new WP_Query($custom_post_team_args);
            while ($team_query->have_posts()) {
                $team_query->the_post();
                $member_name = get_the_title();
                if(has_post_thumbnail()){
                    $post_thumbnail = get_the_post_thumbnail_url();
                }
                //custom fields in custom post team
                $team_position_custom_field = get_post_meta(get_the_ID(), "designation", true);
                $facebook = get_post_meta(get_the_ID(), "fb_link", true);
                $twitter = get_post_meta(get_the_ID(), "twitter_link", true);
                $linkedin = get_post_meta(get_the_ID(), "linkedin_link", true);
                $insta = get_post_meta(get_the_ID(), "insta_link", true);
            ?>
            <div class="col-lg-3 col-sm-6 mb30" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                <div class="team-member bg-gray p15 br5">
                    <div class="team-member-image bg-red-op-20">
                        <img src="<?php echo $post_thumbnail; ?>" class="img-fluid br5 w100" alt="team">
                    </div>
                    <div class="team-social">
                        <ul>
                            <li>
                                <a href="<?php if($facebook) : echo esc_url($facebook); endif ?>"><i class="fb icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a href="<?php if($twitter) : echo esc_url($twitter); endif ?>"><i class="tw icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php if($linkedin) : echo esc_url($linkedin); endif ?>"><i class="lk icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="<?php if($insta) : echo esc_url($insta); endif ?>"><i class="ir icofont-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content mt15 text-center">
                        <h2><?php echo esc_html__($member_name, 'limmex'); ?></h2>
                        <p><?php if($team_position_custom_field) : echo esc_html__($team_position_custom_field, 'limmex'); endif; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- team member -->

