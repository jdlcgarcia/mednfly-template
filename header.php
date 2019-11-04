<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medina
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
   <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <div id="page">
         <?php if(defined( 'FW' )) { ?>
         	<?php if(fw_get_db_settings_option()['show_preloader'] == 'yes') { ?>
            <!-- Preloader -->
            <div id="page-preloader"<?php if(isset(fw_get_db_settings_option()['preloader_image']['url']) && !empty(fw_get_db_settings_option()['preloader_image']['url']) && strpos(fw_get_db_settings_option()['preloader_image']['url'], '.gif'))  echo ' class="gif"' ?>>
               <?php if(isset(fw_get_db_settings_option()['preloader_image']['url']) && fw_get_db_settings_option()['preloader_image']['url']) { ?>
               <div class="spinner img centered-container"><img src="<?php echo esc_url(fw_get_db_settings_option()['preloader_image']['url']) ?>" alt="<?php bloginfo( 'name' ); ?>"></div>
               <?php } else { ?>
               <div class="spinner centered-container"></div>
               <?php } ?>
            </div>
            <!-- END Preloader -->
            <?php } ?>
         <?php } ?>

         <!-- Header -->
         <header class="header clearfix">
            <!-- Top header -->
            <div class="fw-main-row top-header">
               <div class="fw-container">
                  <?php if(defined( 'FW' )) { ?>
                     <?php if(medina_social_buttons()) { ?>
                     <div class="fl">
                        <!-- Social link -->
                        <?php echo medina_social_buttons() ?>
                        <!-- END Social link -->
                     </div>
                     <?php } ?>
                     <?php if(fw_get_db_settings_option()['address'] || fw_get_db_settings_option()['clock'] || fw_get_db_settings_option()['phone']) { ?>
                     <div class="fr">
                        <?php if(fw_get_db_settings_option()['address']) { ?>
                        <!-- Contact item -->
                        <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span><?php echo esc_html(fw_get_db_settings_option()['address']) ?></span></span>
                        <!-- END Contact item -->
                        <?php } ?>
                        <?php if(fw_get_db_settings_option()['clock']) { ?>
                        <!-- Contact item -->
                        <span class="contact-item"><i class="icon-font icon-clock-2"></i> <span><?php echo esc_html(fw_get_db_settings_option()['clock']) ?></span></span>
                        <!-- END Contact item -->
                        <?php } ?>
                        <?php if(fw_get_db_settings_option()['phone']) { ?>
                        <!-- Contact item -->
                        <span class="contact-item"><i class="icon-font icon-telephone-1"></i> <span><?php echo esc_html(fw_get_db_settings_option()['phone']) ?></span></span>
                        <!-- END Contact item -->
                        <?php } if (fw_get_db_settings_option()['cart_switch'] == 'yes' && class_exists( 'WooCommerce' )) { ?>
                        <div class="header-minicart">
                           <?php global $woocommerce;
                           $count = $woocommerce->cart->cart_contents_count;
                           if($count == 0) { ?>
                           <div class="hm-cunt"><span><?php echo esc_html($count) ?></span></div>
                           <?php } else { ?>
                           <a class="hm-cunt" href="<?php echo esc_url(wc_get_cart_url()) ?>"><span><?php echo esc_html($count) ?></span></a>
                           <?php } ?>
                        </div>
                        <?php } ?>
                     </div>
                     <?php } ?>
                  <?php } ?>
               </div>
            </div>
            <!-- END Top header -->
            <!-- Header-wrap -->
            <div class="fw-main-row header-wrap">
               <div class="fw-container">
                  <div class="fw-row">
                     <div class="fw-col-sm-3 fw-col-md-2 logo-area">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                           <?php if(defined( 'FW' )) { ?>
                              <?php if(fw_get_db_settings_option()['logo_image']) { ?>
                                 <img  src="<?php echo esc_url(fw_get_db_settings_option()['logo_image']['url']); ?>" alt="<?php echo esc_html(get_bloginfo()); ?> "  >
                              <?php } else { ?>
                                 <span class="cell"><?php echo esc_html(get_bloginfo()); ?></span>
                              <?php } ?>
                           <?php } else { ?>
                              <span class="cell"><?php echo esc_html(get_bloginfo()); ?></span>
                           <?php } ?>
                        </a>
                     </div>
                     <?php if(defined( 'FW' )) { ?>
                         <?php if(fw_get_db_settings_option()['search'] == 'yes') { ?>
                        <nav class="fw-col-sm-9 fw-col-md-9 navigation">
                           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'ul' ) ); ?>
                        </nav>
                        <?php } else { ?>
                        <nav class="fw-col-sm-10 fw-col-md-10 navigation nav-no-search">
                           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'ul' ) ); ?>
                        </nav>
                        <?php } if(fw_get_db_settings_option()['search'] == 'yes') { ?>
                        <?php if(is_active_sidebar('sidebar')) { ?>
                        <div class="fw-col-sm-1 search-module w-side-b">
                        <?php } else { ?>
                        <div class="fw-col-sm-1 search-module">
                        <?php } ?>
                           <?php if(is_active_sidebar('sidebar')) { ?>
                              <div class="side-div"><div></div></div>
                           <?php } ?>
                        </div>
                         <?php } ?>
                     <?php } else { ?>
                        <nav class="fw-col-sm-9 fw-col-md-9 navigation">
                           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'ul' ) ); ?>
                        </nav>
                        <?php if(is_active_sidebar('sidebar')) { ?>
                        <div class="fw-col-sm-1 search-module w-side-b">
                        <?php } else { ?>
                        <div class="fw-col-sm-1 search-module">
                        <?php } ?>
                           <?php if(is_active_sidebar('sidebar')) { ?>
                              <div class="side-div"><div></div></div>
                           <?php } ?>
                        </div>
                     <?php } ?>
                     <!-- Mobile side button -->
                     <div class="mobile-side-button"><i class="icon-font icon-menu"></i></div>
                     <!-- END Mobile side button -->
                     <!-- Mobiile side -->
                     <div class="mobile-side">
                        <?php if(defined( 'FW' )) { ?>
                           <div class="fl">
                              <?php if(medina_social_buttons()) { ?>
                              <div class="fl">
                                 <!-- Social link -->
                                 <?php echo medina_social_buttons() ?>
                                 <!-- END Social link -->
                              </div>
                              <?php } ?>
                              <?php if (fw_get_db_settings_option()['cart_switch'] == 'yes' && class_exists( 'WooCommerce' )) { ?>
                              <div class="header-minicart">
                                 <?php global $woocommerce;
                                 $count = $woocommerce->cart->cart_contents_count;
                                 if($count == 0) { ?>
                                 <div class="hm-cunt"><span><?php echo esc_html($count) ?></span></div>
                                 <?php } else { ?>
                                 <a class="hm-cunt" href="<?php echo esc_url(wc_get_cart_url()) ?>"><span><?php echo esc_html($count) ?></span></a>
                                 <?php } ?>
                              </div>
                              <?php } ?>
                           </div>
                        <?php } if(defined( 'FW' ) && fw_get_db_settings_option()['search'] != 'no') { ?>
                        <div class="search-module">
                        </div>
                        <?php } ?>
                        <!-- Mobile navigation -->
                        <nav class="mobile-navigation">
                           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'ul' ) ); ?>
                        </nav>
                        <!-- END Mobile navigation -->
                     </div>
                     <!-- END Mobiile side -->
                  </div>
               </div>
            </div>
            <!-- END Header-wrap -->
         </header>
         <!-- END Header -->
         <?php if(is_active_sidebar('sidebar')) { ?>
            <div class="sidebar-wrap">
               <div class="close"></div>
               <div class="wrap">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="side-logo">
                     <?php if(defined( 'FW' )) { ?>
                        <?php if(fw_get_db_settings_option()['logo_image_alternative']) { ?>
                           <img  src="<?php echo esc_url(fw_get_db_settings_option()['logo_image_alternative']['url']); ?>" alt="<?php echo esc_html(get_bloginfo()); ?> "  >
                        <?php } else { ?>
                           <span class="cell"><?php echo esc_html(get_bloginfo()); ?></span>
                        <?php } ?>
                     <?php } else { ?>
                        <span class="cell"><?php echo esc_html(get_bloginfo()); ?></span>
                     <?php } ?>
                  </a>
                  <?php dynamic_sidebar('sidebar'); ?>
               </div>
            </div>
         <?php } ?>