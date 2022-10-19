                        <!doctype html>
                        <html lang="<?php language_attributes(); ?>" class="no-js">

                        <head>
                            <!-- Required meta tags -->
                            <meta charset="<?php bloginfo('charset'); ?>">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                            <?php wp_head(); ?>
                        </head>

                        <body <?php body_class(); ?>>
                            <header class="d-block  d-md-none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                            <?php
                                            $company_logo =  get_theme_mod('limmex_theme_logo');
                                            $home_navigation = home_url();
                                            ?>
                                            <a href="<?php echo $home_navigation; ?>">
                                                <img src="<?php if ($company_logo) : echo $company_logo;
                                                            endif ?>" alt="logo" class="img-fluid logo-mobile" width="100">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </header>

                            <header class="d-none d-sm-none d-md-block">
                                <div class="header-bottom">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12 ">
                                                <div class="logo">
                                                    <a href="<?php echo $home_navigation; ?>">
                                                        <img src="<?php if ($company_logo) : echo $company_logo;
                                                                    endif ?>" alt="logo desktop" class="img-fluid logo" width="200">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-9 d-none d-sm-block">
                                                <div class="main-menu ">
                                                    <nav class="main-nav">
                                                        <ul>
                                                            <?php
                                                            wp_nav_menu(array(
                                                                'theme_location' => 'primary-menu'
                                                            ));
                                                            ?>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mobile-menu-add d-block d-sm-none"></div>


                            </header>
                            <!--      header-->