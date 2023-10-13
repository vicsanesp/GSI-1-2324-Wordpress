<?php
/**
 * Help Panel.
 *
 * @package coffee_bistro
 */
?>

<div id="help-panel" class="panel-left visible">

    <div class="custom-setting">
        <h4><?php esc_html_e( 'Quick Customizer Settings', 'coffee-bistro' ); ?></h4>
        <span><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a></span>
    </div>
    <hr>
   <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-site-alt3"></span>
            </div>
            <h5><?php esc_html_e( 'Site Logo', 'coffee-bistro' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-color-picker"></span>
            </div>
            <h5><?php esc_html_e( 'Color', 'coffee-bistro' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=primary_color' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-screenoptions"></span>
            </div>
            <h5><?php esc_html_e( 'Theme Options', 'coffee-bistro' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=coffee_bistro_theme_options' ) ); ?>"target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a>
            
        </div>
    </div>
    <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-format-image"></span>
            </div>
            <h5><?php esc_html_e( 'Header Image ', 'coffee-bistro' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=header_image' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-align-full-width"></span>
            </div>
            <h5><?php esc_html_e( 'Footer Options ', 'coffee-bistro' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=coffee_bistro_footer_copyright_text' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-page"></span>
            </div>
            <h5><?php esc_html_e( 'Front Page Options', 'coffee-bistro' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=coffee_bistro_front_page_options' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'coffee-bistro' ); ?></a>
            
        </div>
    </div>
</div>