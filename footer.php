<style>
    .info-setion {
        width: 80%;
        margin: 0 auto;
    }

    .info {
        text-align: center;
        color: #fff;
        border: 0.2px solid #91a7c9;
        padding: 60px 15px;
        border-radius: 10px;
    }

    .info i,
    .info p {
        color: #fff;
    }

    .info p {
        overflow: hidden;
        height: 80px;
        margin-top: 10px;
        color: #91A7C9;
    }

    .info i {
        font-size: 30px;
    }

    .info h2 {
        color: #A2C413;
    }
</style>



<footer class="pb60 clearfix">
    <div class="primary-footer">
        <div class="shapes-container">
            <div class="bg-box-rectangle"></div>
        </div>
        <div class="container">
            <?php
            $mobile_title = get_theme_mod('limmex_theme_contact_details_mobile_title_setting');
            $mobile_content = get_theme_mod('limmex_theme_contact_details_mobile_content_setting');
            $email_title = get_theme_mod('limmex_theme_contact_details_email_title_setting');
            $email_content = get_theme_mod('limmex_theme_contact_details_email_content_setting');
            $web_title = get_theme_mod('limmex_theme_contact_details_web_title_setting');
            $web_content = get_theme_mod('limmex_theme_contact_details_web_content_setting');
            $location_title = get_theme_mod('limmex_theme_contact_details_location_title_setting');
            $location_content = get_theme_mod('limmex_theme_contact_details_location_content_setting');
            ?>
            <div class="row pt170 info-setion">
                <div class="col-lg-3 col-sm-6 mb-xs-30 " data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="info">
                        <i class="icofont-ui-touch-phone"></i>
                        <h2 class="mt20"><?php if ($mobile_title) : echo esc_html__($mobile_title, 'limmex');
                                            endif; ?></h2>
                        <p><?php if ($mobile_content) : echo esc_html__($mobile_content, 'limmex');
                            endif; ?></p>
                    </div>
                </div>
                <!-- end info list-->
                <div class="col-lg-3 col-sm-6 mb-xs-30 " data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="info">
                        <i class="icofont-ui-message"></i>
                        <h2 class="mt20"><?php if ($email_title) : echo esc_html__($email_title, 'limmex');
                                            endif; ?></h2>
                        <p><?php if ($email_content) : echo esc_html__($email_content, 'limmex');
                            endif; ?></p>
                    </div>
                </div>
                <!-- end info list-->
                <div class="col-lg-3 col-sm-6 mb-xs-30 " data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="info">
                        <i class="icofont-link"></i>
                        <h2 class="mt20"><?php if ($web_title) : echo esc_html__($web_title, 'limmex');
                                            endif; ?></h2>
                        <p><?php if ($web_content) : echo esc_url($web_content);
                            endif; ?></p>
                    </div>
                </div>
                <!-- end info list-->
                <div class="col-lg-3 col-sm-6 mb-xs-30 " data-sal="slide-up" data-sal-delay="400" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="info">
                        <i class="icofont-location-pin"></i>
                        <h2 class="mt20"><?php if ($location_title) : echo esc_html__($location_title, 'limmex');
                                            endif; ?></h2>
                        <p><?php if ($location_content) : echo esc_html__($location_content, 'limmex');
                            endif; ?></p>
                    </div>
                </div>
                <!-- end info list-->

            </div>

            <div class="row pb100 pt100 justify-content-between">
                <div class="col-lg-4 col-sm-6  mb-xs-30">
                    <div class="f-about-us mt-30-xs">
                        <?php
                        $footer_logo = get_theme_mod('limmex_theme_footer_top_logo_setting');
                        $footer_text = get_theme_mod('limmex_theme_footer_top_text_left_setting');
                        $footer_right_text = get_theme_mod('limmex_theme_footer_top_text_right_setting');
                        $footer_right_logo_one = get_theme_mod('limmex_theme_footer_top_right_photo_one_setting');
                        $footer_rigt_logo_one_url = get_theme_mod('limmex_theme_footer_top_logo_one_url_setting');
                        $footer_right_logo_two = get_theme_mod('limmex_theme_footer_top_right_photo_two_setting');
                        $footer_rigt_logo_two_url = get_theme_mod('limmex_theme_footer_top_logo_two_url_setting');
                        $footer_social_fb = get_theme_mod('limmex_theme_social_fb_setting');
                        $footer_social_twitter = get_theme_mod('limmex_theme_social_twitter_setting');
                        $footer_social_linkedin = get_theme_mod('limmex_theme_social_linkedin_setting');
                        $footer_social_youtube = get_theme_mod('limmex_theme_social_youtube_setting');
                        $footer_social_instagram = get_theme_mod('limmex_theme_social_instagram_setting');
                        $footer_copyright_text = get_theme_mod('limmex_theme_copyright_text_setting');
                        ?>
                        <img src="<?php if ($footer_logo) : echo $footer_logo;
                                    endif; ?>" class="img-fluid" alt="logo" width="200" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up" />
                        <p class="des" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                            <?php if ($footer_text) : echo esc_html__($footer_text);
                            endif; ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6  mb-xs-30">
                    <div class="footer-menu mt-30-xs">
                        <h4 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                            <?php
                            if (is_active_sidebar('footer_top_left_title')) {
                                dynamic_sidebar('footer_top_left_title');
                            }
                            ?>
                        </h4>
                        <ul class="mt15" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'menu_class' => 'navbar-nav mt-auto'
                            ));
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6  mb-xs-30">
                    <div class="footer-menu mt-30-xs">
                        <h4 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                            <?php
                            if (is_active_sidebar('footer_top_right_title')) {
                                dynamic_sidebar('footer_top_right_title');
                            }
                            ?>
                        </h4>
                        <ul class="mt15" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                            <div class="footer_top_right_services_list">
                                <?php
                                if (is_active_sidebar('footer_top_right_services')) {
                                    dynamic_sidebar('footer_top_right_services');
                                }
                                ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6  mb-xs-30">
                    <div class="project-logo footer-menu footer-address mt-30-xs mb-xs-30">
                        <h4 data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up"><?php if ($footer_right_text) : echo esc_html__($footer_right_text, 'limmex');
                                                                                                                            endif; ?></h4>
                        <ul class="mt15" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" data-sal-easing="slider-up">
                            <li><a target="_blank" href="<?php if ($footer_rigt_logo_one_url) : echo esc_url($footer_rigt_logo_one_url);
                                                            endif; ?>">
                                    <img src="<?php if ($footer_right_logo_one) : echo $footer_right_logo_one;
                                                endif; ?>" class="img-fluid" alt="logo" width="150" />
                                </a></li>
                            <li><a target="_blank" href="<?php if ($footer_rigt_logo_two_url) : echo esc_url($footer_rigt_logo_two_url);
                                                            endif; ?>">
                                    <img src="<?php if ($footer_right_logo_two) : echo $footer_right_logo_two;
                                                endif; ?>" class="img-fluid mt10" alt="logo" width="150" />
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr style="color: #91a7c9; opacity: 0.1;">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="f-social text-center">
                        <ul>
                            <li>
                                <a target="_blank" href="<?php if ($footer_social_fb) : echo esc_url($footer_social_fb);
                                                            endif; ?>"><i class="fb icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a href="<?php if ($footer_social_twitter) : echo esc_url($footer_social_twitter);
                                            endif; ?>"><i class="tw icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php if ($footer_social_linkedin) : echo esc_url($footer_social_linkedin);
                                            endif; ?>"><i class="lk icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="<?php if ($footer_social_youtube) : echo esc_url($footer_social_youtube);
                                            endif; ?>"><i class="yt icofont-youtube"></i></a>
                            </li>
                            <li>
                                <a href="<?php if ($footer_social_instagram) : echo esc_url($footer_social_instagram);
                                            endif; ?>"><i class="ir icofont-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" data-sal-easing="slider-up">
                    <div class="mt10 text-right footer-secondary text-center-xs">
                        <?php if ($footer_copyright_text) : echo esc_html__($footer_copyright_text, 'limmex');
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>




<!-- Back To Top Button  -->
<div id="back-top">
    <a href="#pageWrapper" class="scroll" data-scroll>
        <i class="icofont-rounded-up"></i>
    </a>
</div>
<!-- Back To Top Button -->

<?php wp_footer(); ?>
</body>

</html>