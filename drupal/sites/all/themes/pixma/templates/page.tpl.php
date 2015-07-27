<?php

/**
 * The doctype, html, head, and body tags are not in this template. Instead
 * they can be found in the html.tpl.php template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $main_menu_expanded (array): An array containing 2 depths of the Main
 *   menu links
 *   for the site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node entity, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Kalatheme:
 * - $no_panels: A boolean that is true if the current page is not a panels page
 * - $always_show_page_title: A boolean that is true if we're to always print
 *   the page title, even on panelized pages.
 *
 * Regions:
 * - $page['content']: The main content of the current page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div class="page-mask">
  <div class="page-loader">

    <div class="spinner"></div>
    Loading...
  </div>

</div>
<div class="wrap">
  <!-- Header Start -->
  <header id="header">
    <!-- Header Top Bar Start -->
    <div class="top-bar">
      <div class="slidedown collapse">
        <?php if ($page['top_left'] || $page['top_right']): ?>
        <div class="container">
          <div class="phone-email pull-left">
            <?php print render($page['top_left']); ?>
          </div>
          <div class="pull-right">
            <?php print render($page['top_right']); ?>

            <div id="search-form" class="pull-right">
              <form action="#" method="get">
                <input type="text" class="search-text-box">
              </form>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <!-- Header Top Bar End -->
    <!-- Main Header Start -->
    <div class="main-header">
      <div class="container">
        <!-- TopNav Start -->
        <div class="topnav navbar-header">
          <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
            <i class="fa fa-angle-down icon-current"></i>
          </a>
        </div>
        <!-- TopNav End -->
        <!-- Logo Start -->
        <div class="logo pull-left">
          <?php if ($page['logo']): ?>
            <?php print render($page['logo']); ?>
          <?php endif; ?>
        </div>
        <!-- Logo End -->
        <!-- Mobile Menu Start -->
        <div class="mobile navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
            <i class="fa fa-bars fa-2x"></i>
          </a>
        </div>
        <!-- Mobile Menu End -->
        <!-- Menu Start -->
        <nav class="collapse navbar-collapse menu">

          <?php if ($page['nav']): ?>
            <?php print render($page['nav']); ?>
          <?php endif; ?>

        </nav>
        <!-- Menu End -->
      </div>
    </div>
    <!-- Main Header End -->
  </header>
  <!-- Header End -->
  <!-- Content Start -->
  <div id="main">
    <?php if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])): ?>
      <div id="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>

    <?php if ($action_links): ?>
      <div id="action-links">
        <?php print render($action_links); ?>
      </div>
    <?php endif; ?>
    <!-- Slider Start-->
    <?php if ($page['marquee']): ?>
      <?php print render($page['marquee']); ?>
    <?php endif; ?>
    <!-- Slider End-->
    <!-- Slogan Start-->
    <div class="slogan bottom-pad-small">
      <div class="container">
        <div class="row">

          <?php print render($page['content']); ?>

        </div>
      </div>
    </div>
    <!-- Slogan End-->
    <!-- Main Content start-->
    <div class="main-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="content-box big ch-item bottom-pad-small border-bottom-green">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"><i class="fa fa-tasks"></i></div>
                  <div class="ch-info-back bg-green">
                    <i class="fa fa-bullseye"></i>
                  </div>
                </div>
              </div>
              <div class="content-box-info">
                <h3>Long-Term Placement</h3>

                <p>
                  Helloworld is committed to providing a candidate that is more than just a good fit with skills. It's important that they also match your
                  companies values and culture. With research, we can do better.
                </p>
                <a href="/placement" class="color-green">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="content-box big ch-item bottom-pad-small">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"><i class="fa fa-edit"></i></div>
                  <div class="ch-info-back">
                    <i class="fa fa-sort-amount-asc"></i>
                  </div>
                </div>
              </div>
              <div class="content-box-info">
                <h3>Consulting</h3>

                <p>
                  We provide a wide range of consulting services designed to help you retain long-term developers
                  who will continue to grow with your organization. Whether you need help with tools, processes, or culture, we can help.
                </p>
                <a href="/consulting">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="content-box big ch-item border-bottom-purple">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"><i class="fa fa-users"></i></div>
                  <div class="ch-info-back bg-purple">
                    <i class="fa fa-thumbs-up"></i>
                  </div>
                </div>
              </div>
              <div class="content-box-info">
                <h3>Mentorship</h3>

                <p>
                  In addition to business consulting, we can help your current developers
                  stay interested in their work and your company. All juniors place by helloworld are
                  automatically eligible for mentorship.
                </p>
                <a href="/junior-mentorship" class="color-purple">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content end-->

    <!-- Product Content Start-->
    <!--<div class="product-lead bottom-pad">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
            <img src="/sites/all/themes/pixma/img/iphone5c.png" alt="iPhone5c">
          </div>
          <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
            <div class="app-service">
              <h3>Pixma App Services</h3>
              <h4>We provide all kinds of iPhone application design and development services.</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                type.Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit
                amet.Lorem fermentum diam diam.
              </p>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
              </p>

              <div class="divider"></div>
              <div class="learnmore">
                <a class="btn-special btn-grey" href="#">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Product Content end-->

    <!-- Recent works start-->
    <!--<div class="bottom-pad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afl d1">
            <h3 class="title">Recent Works</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row portfolio-pad">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                <div class="portfolio-item">
                  <a href="/sites/all/themes/pixma/img/portfolio/portfolio-1.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                    <span class="portfolio-item-hover"></span>
                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="/sites/all/themes/pixma/img/portfolio/portfolio-1.jpg"
                                                                                     alt=" "/>
                  </a>

                  <div class="portfolio-item-title">
                    <a href="single-project.html">Insta Genius</a>

                    <p>
                      Design / Development
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                <div class="portfolio-item">
                  <a href="/sites/all/themes/pixma/img/portfolio/portfolio-2.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i
                        class="fa fa-search"></i></span><img src="/sites/all/themes/pixma/img/portfolio/portfolio-2.jpg" alt=" "/>
                  </a>

                  <div class="portfolio-item-title">
                    <a href="single-project.html">YA Sound</a>

                    <p>
                      Sound / Audio
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                <div class="portfolio-item">
                  <a href="/sites/all/themes/pixma/img/portfolio/portfolio-3.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i
                        class="fa fa-search"></i></span><img src="/sites/all/themes/pixma/img/portfolio/portfolio-3.jpg" alt=" "/>
                  </a>

                  <div class="portfolio-item-title">
                    <a href="single-project.html">Nike Shoe</a>

                    <p>
                      Apareal / Shoe
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d5">
                <div class="portfolio-item">
                  <a href="/sites/all/themes/pixma/img/portfolio/portfolio-4.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i
                        class="fa fa-search"></i></span><img src="/sites/all/themes/pixma/img/portfolio/portfolio-4.jpg" alt=" "/>
                  </a>

                  <div class="portfolio-item-title">
                    <a href="single-project.html">Camera Icon</a>

                    <p>
                      Icon / Device
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d6">
                <div class="portfolio-item">
                  <a href="/sites/all/themes/pixma/img/portfolio/portfolio-5.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i
                        class="fa fa-search"></i></span><img src="/sites/all/themes/pixma/img/portfolio/portfolio-5.jpg" alt=" "/>
                  </a>

                  <div class="portfolio-item-title">
                    <a href="single-project.html">Penguin</a>

                    <p>
                      Animal / Nature
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d7">
                <div class="portfolio-item">
                  <a href="/sites/all/themes/pixma/img/portfolio/portfolio-6.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i
                        class="fa fa-search"></i></span><img src="/sites/all/themes/pixma/img/portfolio/portfolio-6.jpg" alt=" "/>
                  </a>

                  <div class="portfolio-item-title">
                    <a href="single-project.html">Sound Box</a>

                    <p>
                      Audio / Sound
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Recent work end-->
    <!-- Features start -->
    <!--<div class="features bottom-pad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="title">Our Services</h3>

            <div class="row">
              <div class="circular-nav">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate_afl">
                  <div id="cn-tabs">
                    <div class="service service-1">
                      <div class="cn-content">
                        <h4>Premium Sliders</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>

                        <div class="clearfix"></div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-2">
                      <div class="cn-content">
                        <h4>Unlimited Colors</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>

                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="service service-3">
                      <div class="cn-content">
                        <h4>Shortcodes</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-4">
                      <div class="cn-content">
                        <h4>300+ Icons</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-5">
                      <div class="cn-content">
                        <h4>HTML5 / CSS3</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-6">
                      <div class="cn-content">
                        <h4>After Sale Support</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-7">
                      <div class="cn-content">
                        <h4>Google Fonts</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-8">
                      <div class="cn-content">
                        <h4>Ajax Contact Form</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="service service-9">
                      <div class="cn-content">
                        <h4>Valid HTML Files</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book.</p>
                        <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 animate_afr">
                  <div class="cn-wrapper">
                    <ul>
                      <li class="circle-1 circle"><a class="active" href="#"><span class="fa fa-picture-o"></span></a>
                      </li>
                      <li class="circle-2 circle"><a href="#"><span class="fa fa-rocket"></span></a></li>
                      <li class="circle-3 circle"><a href="#"><span class="fa fa-puzzle-piece"></span> </a></li>
                      <li class="circle-4 circle"><a href="#"><span class="fa fa-thumbs-o-up"></span></a></li>
                      <li class="circle-5 circle"><a href="#"><span class="fa fa-html5"></span></a></li>
                      <li class="circle-6 circle"><a href="#"><span class="fa fa-user"></span></a></li>
                      <li class="circle-7 circle"><a href="#"><span class="fa fa-google-plus"></span> </a></li>
                      <li class="circle-8 circle"><a href="#"><span class="fa fa-envelope-o"></span></a></li>
                      <li class="circle-9 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Features End -->
    <!-- Latest Posts start -->
    <!--<div class="latest-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12">
            <h3 class="title">Latest Posts</h3>
          </div>
          <div class="clearfix"></div>
          <div class="blog-showcase col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afb d1">
            <ul>
              <li class="">
                <div class="blog-showcase-thumb col-lg-4">
                  <div class="post-body">
                    <a class="post-item-link" href="/sites/all/themes/pixma/img/portfolio/portfolio-5.jpg" data-rel="prettyPhoto"><span
                        class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img
                        alt="" src="/sites/all/themes/pixma/img/portfolio/portfolio-5.jpg"></a>
                  </div>
                </div>
                <div class="blog-showcase-extra-info col-lg-4">
                  <span><a href="#">Sep 11th, 2013</a></span>
                  <h4><a href="#" class="title">Blog post title</a></h4>

                  <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                  <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                </div>
              </li>
              <li>
                <div class="blog-showcase-thumb col-lg-4">
                  <div class="post-body">
                    <a class="post-item-link" href="/sites/all/themes/pixma/img/portfolio/portfolio-6.jpg" data-rel="prettyPhoto"><span
                        class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img
                        alt="" src="/sites/all/themes/pixma/img/portfolio/portfolio-6.jpg"></a>
                  </div>
                </div>
                <div class="blog-showcase-extra-info col-lg-4">
                  <span><a href="#">Sep 11th, 2013</a></span>
                  <h4><a href="#" class="title">Blog post title</a></h4>

                  <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                  <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                </div>
              </li>
              <li class="blog-first-el">
                <div class="blog-showcase-thumb col-lg-4">
                  <div class="post-body">
                    <a class="post-item-link" href="/sites/all/themes/pixma/img/portfolio/portfolio-7.jpg" data-rel="prettyPhoto"><span
                        class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img
                        alt="" src="/sites/all/themes/pixma/img/portfolio/portfolio-7.jpg"></a>
                  </div>
                </div>
                <div class="blog-showcase-extra-info col-lg-4">
                  <span><a href="#">Sep 11th, 2013</a></span>
                  <h4><a href="#" class="title">Blog post title</a></h4>

                  <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                  <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                </div>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
    </div>-->
    <!-- Latest Posts End -->
    <!-- Our Clients Start-->
    <!--<div class="our-clients">
      <div class="container">
        <div class="row">
          <div class="client">
            <div class="client-logo">
              <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="clients-title">
                  <h3 class="title">Our Clients</h3>

                  <div class="carousel-controls pull-right">
                    <a class="prev" href="#client-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="next" href="#client-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>

                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div id="client-carousel" class="client-carousel carousel slide">
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d1">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-1.png"></a></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d2">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-2.png"></a></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d3">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-3.png"></a></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d4">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-4.png"></a></div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-5.png"></a></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-2.png"></a></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-1.png"></a></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner"><a href="#"><img alt="Upportdash"
                                                                   src="/sites/all/themes/pixma/img/clientslogo/logo-3.png"></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                <!-- Testimonials Widget Start -->
                <!--<div class="row ">
                  <div class="testimonials widget">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="testimonials-title">
                        <h3 class="title">Testimonials</h3>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="testimonials-carousel" class="testimonials-carousel carousel slide animate_afr d5">
                      <div class="carousel-inner">
                        <div class="item active">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type.
                              </p>

                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img alt="" src="/sites/all/themes/pixma/img/testimonial/team-member-1.jpg">
                                </div>
                                <div class="testimonial-author-info">
                                  <a href="#"><span class="color">Monica Sing</span></a> FIFO Themes
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type.
                              </p>

                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img alt="" src="/sites/all/themes/pixma/img/testimonial/team-member-2.jpg">
                                </div>
                                <div class="testimonial-author-info">
                                  <a href="#"><span class="color">Monzurul Haque</span></a> FIFO Themes
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type.
                              </p>

                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img alt="" src="/sites/all/themes/pixma/img/testimonial/team-member-3.jpg">
                                </div>
                                <div class="testimonial-author-info">
                                  <a href="#"><span class="color">Carol Johansen</span></a> FIFO Themes
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Our Clients End -->
  </div>
  <!-- Content End -->
  <!-- Footer Start -->
  <footer id="footer">
    <!-- Footer Top Start -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <section class="col-lg-6 col-md-6 col-xs-12 col-sm-6 footer-one">
            <h3>About</h3>

            <p>
              Helloworld is committed to creating lasting relationships through better understanding of company and developer needs.
            </p>
          </section>
          <!--<section class="col-lg-4 col-md-4 col-xs-12 col-sm-4 footer-two">
            <h3>Twitter Stream</h3>
            <ul id="tweets">
            </ul>
          </section>-->
          <section class="col-lg-6 col-md-6 col-xs-12 col-sm-6 footer-three">
            <h3>Contact Us</h3>
            <ul class="contact-us">
              <!--<li>
                <i class="fa fa-map-marker"></i>

                <p>
                  <strong class="contact-pad">Address:</strong> House: 325, Road: 2,<br> Mirpur DOHS <br>
                  Dhaka, Bangladesh
                </p>
              </li>-->
              <li>
                <i class="fa fa-phone"></i>

                <p><strong>Phone:</strong> 503-515-3593</p>
              </li>
              <li>
                <i class="fa fa-envelope"></i>

                <p><strong>Email:</strong><a href="mailto:info@helloworlddevs.com">info@helloworlddevs.com</a></p>
              </li>
            </ul>
          </section>
         <!-- <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
            <h3>Flickr Photostream</h3>
            <ul id="flickrfeed" class="thumbs"></ul>
          </section> -->
        </div>
      </div>
    </div>
    <!-- Footer Top End -->
    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 "> &copy; Copyright 2015 by helloworld. All Rights
            Reserved.
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
            <ul class="social social-icons-footer-bottom">
              <li class="facebook"><a href="https://www.facebook.com/helloworlddevs" title="Facebook"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="twitter"><a href="https://twitter.com/helloworlddevs" title="Twitter"><i class="fa fa-twitter"></i></a>
              </li>
             <!-- <li class="dribbble"><a href="#" data-toggle="tooltip" title="Dribble"><i class="fa fa-dribbble"></i></a>
              </li>
              <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
              </li>
              <li class="rss"><a href="#" data-toggle="tooltip" title="Rss"><i class="fa fa-rss"></i></a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Bottom End -->
  </footer>
  <!-- Scroll To Top -->
  <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrap End -->
<!--<section id="style-switcher">
  <h2>Style Switcher <a href="#"><i class="fa fa-cog"></i></a></h2>

  <div>
    <h3>Predefined Colors</h3>
    <ul class="colors">
      <li><a title="Blue" class="blue" href="#"></a></li>
      <li><a title="Green" class="green" href="#"></a></li>
      <li><a title="Orange" class="orange" href="#"></a></li>
      <li><a title="Purple" class="purple" href="#"></a></li>
      <li><a title="Red" class="red" href="#"></a></li>
      <li><a title="Magenta" class="magenta" href="#"></a></li>
      <li><a title="Brown" class="brown" href="#"></a></li>
      <li><a title="Gray" class="gray" href="#"></a></li>
      <li><a title="Golden" class="golden" href="#"></a></li>
      <li><a title="Teal" class="teal" href="#"></a></li>
    </ul>
    <h3>Layout Style</h3>

    <div class="layout-style">
      <select id="layout-style">
        <option value="1">Wide</option>
        <option value="2">Boxed</option>
      </select>
    </div>
    <h3>Header Color</h3>

    <div class="header-color">
      <input type='text' class="header-bg"/>
    </div>
    <h3>Footer Top Color</h3>

    <div class="header-color">
      <input type='text' class="footer-bg"/>
    </div>
    <h3>Footer Bottom Color</h3>

    <div class="header-color">
      <input type='text' class="footer-bottom"/>
    </div>
    <h3>Background Image</h3>
    <ul id="bg" class="colors bg">
      <li><a class="bg1" href="#"></a></li>
      <li><a class="bg2" href="#"></a></li>
      <li><a class="bg3" href="#"></a></li>
      <li><a class="bg4" href="#"></a></li>
      <li><a class="bg5" href="#"></a></li>
      <li><a class="bg6" href="#"></a></li>
      <li><a class="bg7" href="#"></a></li>
      <li><a class="bg8" href="#"></a></li>
      <li><a class="bg9" href="#"></a></li>
      <li><a class="bg10" href="#"></a></li>
    </ul>
  </div>
</section>-->