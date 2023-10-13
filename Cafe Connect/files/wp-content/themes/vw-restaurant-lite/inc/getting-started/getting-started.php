<?php
//about theme info
add_action( 'admin_menu', 'vw_restaurant_lite_gettingstarted' );
function vw_restaurant_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Restaurant Theme', 'vw-restaurant-lite'), esc_html__('About VW Restaurant Theme', 'vw-restaurant-lite'), 'edit_theme_options', 'vw_restaurant_lite_guide', 'vw_restaurant_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_restaurant_lite_admin_theme_style() {
   wp_enqueue_style('vw-restaurant-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
   wp_enqueue_script('vw-restaurant-lite-tabs', esc_url(get_template_directory_uri()) . '/inc/getting-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_restaurant_lite_admin_theme_style');

//guidline for about theme
function vw_restaurant_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-restaurant-lite' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Restaurant Theme', 'vw-restaurant-lite' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-restaurant-lite'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Restaurant at 20% Discount','vw-restaurant-lite'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-restaurant-lite'); ?> ( <span><?php esc_html_e('vwpro20','vw-restaurant-lite'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-restaurant-lite' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_restaurant_lite_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-restaurant-lite' ); ?></button>
			<button class="tablinks" onclick="vw_restaurant_lite_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-restaurant-lite' ); ?></button>
			<button class="tablinks" onclick="vw_restaurant_lite_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-restaurant-lite' ); ?></button>
			<button class="tablinks" onclick="vw_restaurant_lite_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-restaurant-lite' ); ?></button>
			<button class="tablinks" onclick="vw_restaurant_lite_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-restaurant-lite' ); ?></button>
			<button class="tablinks" onclick="vw_restaurant_lite_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-restaurant-lite' ); ?></button>
		</div>

		<?php
			$vw_restaurant_lite_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_restaurant_lite_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Restaurant_Lite_Plugin_Activation_Settings::get_instance();
				$vw_restaurant_lite_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-restaurant-lite-recommended-plugins">
				    <div class="vw-restaurant-lite-action-list">
				        <?php if ($vw_restaurant_lite_actions): foreach ($vw_restaurant_lite_actions as $key => $vw_restaurant_lite_actionValue): ?>
				                <div class="vw-restaurant-lite-action" id="<?php echo esc_attr($vw_restaurant_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_restaurant_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_restaurant_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_restaurant_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-restaurant-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_restaurant_lite_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-restaurant-lite' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Restaurant Lite Theme is a responsive multipurpose restaurant WordPress theme which is ideal for all types of hotel and food related websites. It best suits the food critics, food bloggers, eatery, food joint, lodge, hospitality business, bakery, cafe, coffee or any food business such as barbecues, grill houses, Italian restaurants, fast food, and pizzerias. The baker can display his cakes and the restaurants can put their recipe, cuisine and Chinese dishes as well. It is a beautiful, professional, interactive, and highly responsive WordPress theme built with the intention to create stunning websites that will suit elegant restaurants.This free theme has got various shortcodes and personalization options making it user-friendly and allowing you to design your site with the available secure and clean code. It has sharp looking testimonial section wherein you can feature the feedbacks of clients who are appreciate your services. There is Call to Action Button on the widely displayed pages having banner giving it an exclusive appearance. This theme is completely SEO friendly that helps in keeping your site on top of search engines. Furthermore, it has social media integration tools that make the visitors familiar with your social media presence. Built on Bootstrap, it comes with ready translation. Having optimized codes, the theme has faster page load time giving a smooth experience to the visitors. It is a readily mobile friendly theme having animated features that makes your site appear best on mobile devices. It is having e-commerce functionality as well.','vw-restaurant-lite'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-restaurant-lite' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-restaurant-lite' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_RESTAURANT_LITE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-restaurant-lite' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-restaurant-lite'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-restaurant-lite'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-restaurant-lite'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-restaurant-lite'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-restaurant-lite'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_RESTAURANT_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-restaurant-lite'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-restaurant-lite'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-restaurant-lite'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_RESTAURANT_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-restaurant-lite'); ?></a>
					</div>

			  	  	<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-restaurant-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-restaurant-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=vw_restaurant_lite_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-restaurant-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-restaurant-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_belive') ); ?>" target="_blank"><?php esc_html_e('We Belive Section','vw-restaurant-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-restaurant-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-restaurant-lite'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-restaurant-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-restaurant-lite'); ?></a>
								</div> 
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('Theme Layout Settings','vw-restaurant-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-restaurant-lite'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-restaurant-lite'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-restaurant-lite'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-restaurant-lite'); ?></span><?php esc_html_e(' Go to ','vw-restaurant-lite'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-restaurant-lite'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-restaurant-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-restaurant-lite'); ?></span><?php esc_html_e(' Go to ','vw-restaurant-lite'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-restaurant-lite'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-restaurant-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-restaurant-lite'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-restaurant-lite/" target="_blank"><?php esc_html_e('Documentation','vw-restaurant-lite'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Restaurant_Lite_Plugin_Activation_Settings::get_instance();
			$vw_restaurant_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-restaurant-lite-recommended-plugins">
				    <div class="vw-restaurant-lite-action-list">
				        <?php if ($vw_restaurant_lite_actions): foreach ($vw_restaurant_lite_actions as $key => $vw_restaurant_lite_actionValue): ?>
				                <div class="vw-restaurant-lite-action" id="<?php echo esc_attr($vw_restaurant_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_restaurant_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_restaurant_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_restaurant_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-restaurant-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_restaurant_lite_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-restaurant-lite' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-restaurant-lite'); ?></p>
	              <p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon.','vw-restaurant-lite'); ?></span></b></p>
	              	<div class="vw-restaurant-lite-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-restaurant-lite'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/block-pattern1.png" alt="" />
				    	<p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Sections >> Publish.','vw-restaurant-lite'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/block-pattern.png" alt="" />	
	            </div>

              	<div class="block-pattern-link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-restaurant-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-restaurant-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-restaurant-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-restaurant-lite'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-restaurant-lite'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-restaurant-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-restaurant-lite'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('Theme Layout Settings','vw-restaurant-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-restaurant-lite'); ?></a>
								</div> 
							</div>
						</div>
				</div>			
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Restaurant_Lite_Plugin_Activation_Settings::get_instance();
			$vw_restaurant_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-restaurant-lite-recommended-plugins">
				    <div class="vw-restaurant-lite-action-list">
				        <?php if ($vw_restaurant_lite_actions): foreach ($vw_restaurant_lite_actions as $key => $vw_restaurant_lite_actionValue): ?>
				                <div class="vw-restaurant-lite-action" id="<?php echo esc_attr($vw_restaurant_lite_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_restaurant_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_restaurant_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_restaurant_lite_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-restaurant-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-restaurant-lite-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-restaurant-lite'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-restaurant-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-restaurant-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-restaurant-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-restaurant-lite'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-restaurant-lite'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-restaurant-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-restaurant-lite'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('Theme Layout Settings','vw-restaurant-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-restaurant-lite'); ?></a>
								</div> 
							</div>
						</div>
				</div>	
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Restaurant_Lite_Plugin_Activation_Woo_Products::get_instance();
				$vw_restaurant_lite_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-restaurant-lite-recommended-plugins">
					    <div class="vw-restaurant-lite-action-list">
					        <?php if ($vw_restaurant_lite_actions): foreach ($vw_restaurant_lite_actions as $key => $vw_restaurant_lite_actionValue): ?>
					                <div class="vw-restaurant-lite-action" id="<?php echo esc_attr($vw_restaurant_lite_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($vw_restaurant_lite_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($vw_restaurant_lite_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($vw_restaurant_lite_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-restaurant-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-restaurant-lite-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-restaurant-lite'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-restaurant-lite'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-restaurant-lite'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-restaurant-lite'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-restaurant-lite'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-restaurant-lite'); ?></span></b></p>
	              	<div class="vw-restaurant-lite-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-restaurant-lite'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-restaurant-lite'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-restaurant-lite' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Our premium restaurant WordPress theme has a majestic design, perfect for restaurant and fine dining based industries. This premium Restaurant WordPress theme is clean & systematic. It caters to the needs of restaurant owners belonging to this sector. No business can survive without satisfying their customers and negligence in such a critical area can lead to failure. So it becomes important to not only have a perfect looking restaurant but also have a well-built website and a theme that can portray all that you have to offer in a beautiful manner Cleanliness, majestic design & assured superior customer experience is all Jam-packed in this theme. Make that first impression on your customers an impactful one, so-as-to assure the customers return to your website and restaurant.','vw-restaurant-lite'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_RESTAURANT_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-restaurant-lite'); ?></a>
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-restaurant-lite'); ?></a>
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-restaurant-lite'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/vw-restaurant-theme.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-restaurant-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-restaurant-lite'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-restaurant-lite'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-restaurant-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-restaurant-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-restaurant-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-restaurant-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-restaurant-lite'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-restaurant-lite'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-restaurant-lite'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-restaurant-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-restaurant-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-restaurant-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-restaurant-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-restaurant-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-restaurant-lite'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-restaurant-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-restaurant-lite'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-restaurant-lite'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-restaurant-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-restaurant-lite'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-restaurant-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-restaurant-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-restaurant-lite'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php } ?>