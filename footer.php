<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medina
 */

?>
		<footer class="footer fw-main-row">
            <div class="fw-container">
               <div class="fw-row">
                  <?php if(defined('FW')) { ?>
                     <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-<?php echo fw_get_db_settings_option()['footer_col1_width']; ?>">
                     	<div class="footer-logo">
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                              <?php if(fw_get_db_settings_option()['logo_image']) { ?>
                                 <img src="<?php echo esc_url(fw_get_db_settings_option()['logo_image']['url']); ?>" alt="<?php echo esc_html(get_bloginfo()); ?> "  >
                              <?php } ?>
                           </a>
                        </div>
                        <p class="footer-text taj"><?php echo fw_get_db_settings_option()['footer_text']; ?></p>
                        <div class="footer-copy"><?php echo fw_get_db_settings_option()['footer_copy']; ?></div>
                     </div>
                     <?php if(is_active_sidebar('footer-sidebar-2') && fw_get_db_settings_option()['footer_col2_width'] != "no") { ?>
                     <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-<?php echo fw_get_db_settings_option()['footer_col2_width']; ?>">
                     	<?php dynamic_sidebar('footer-sidebar-2'); ?>
                     </div>
                     <?php } if(is_active_sidebar('footer-sidebar-3') && fw_get_db_settings_option()['footer_col3_width'] != "no") { ?>
                     <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-<?php echo fw_get_db_settings_option()['footer_col3_width']; ?>">
                     	<?php dynamic_sidebar('footer-sidebar-3'); ?>
                     </div>
                     <?php } if(is_active_sidebar('footer-sidebar-4') && fw_get_db_settings_option()['footer_col4_width'] != "no") { ?>
                     <div class="fw-col-xs-12 fw-col-sm-9 fw-col-md-<?php echo fw_get_db_settings_option()['footer_col4_width']; ?>">
                     	<?php dynamic_sidebar('footer-sidebar-4'); ?>
                     </div>
                     <?php } ?>
                  <?php } else { ?>
                     <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-4">
                        <div class="footer-logo">
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                              <span class="cell"><?php echo esc_html(get_bloginfo()); ?></span>
                           </a>
                        </div>
                     </div>
                     <?php if(is_active_sidebar('footer-sidebar-2')) { ?>
                     <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-3">
                        <?php dynamic_sidebar('footer-sidebar-2'); ?>
                     </div>
                     <?php } if(is_active_sidebar('footer-sidebar-3')) { ?>
                     <div class="fw-col-xs-12 fw-col-sm-3 fw-col-md-2">
                        <?php dynamic_sidebar('footer-sidebar-3'); ?>
                     </div>
                     <?php } if(is_active_sidebar('footer-sidebar-4')) { ?>
                     <div class="fw-col-xs-12 fw-col-sm-9 fw-col-md-3">
                        <?php dynamic_sidebar('footer-sidebar-4'); ?>
                     </div>
                     <?php } ?>
                  <?php } ?>
               </div>
            </div>
         </footer>
      </div>
      <?php wp_footer(); ?>
   </body>
</html>