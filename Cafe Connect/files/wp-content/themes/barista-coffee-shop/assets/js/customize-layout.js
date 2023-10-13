(function( $ ) {
	wp.customize.bind( 'ready', function() {

		var optPrefix = '#customize-control-barista_coffee_shop_options-';
		
		// Label
		function barista_coffee_shop_customizer_label( id, title ) {

			// Colors

			if ( id === 'barista_coffee_shop_theme_color' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Top Header

			if ( id === 'barista_coffee_shop_phone_text' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// General Setting

			if ( id === 'barista_coffee_shop_preloader_hide' || id === 'barista_coffee_shop_sticky_header' || id === 'barista_coffee_shop_scroll_hide'  || id === 'barista_coffee_shop_scroll_top_position' || id === 'barista_coffee_shop_products_per_row' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Social Icon

			if ( id === 'barista_coffee_shop_facebook_url' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'barista_coffee_shop_slider_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		   //Featured Product

			if ( id === 'barista_coffee_shop_product_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'barista_coffee_shop_footer_text_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Setting

			if ( id === 'barista_coffee_shop_single_post_thumb' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Post Setting

			if ( id === 'barista_coffee_shop_post_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Page Setting

			if ( id === 'barista_coffee_shop_single_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-barista_coffee_shop_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}

		// Colors
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_theme_color', 'Theme Color' );
		barista_coffee_shop_customizer_label( 'background_color', 'Colors' );
		barista_coffee_shop_customizer_label( 'background_image', 'Image' );

		// Site Identity
		barista_coffee_shop_customizer_label( 'custom_logo', 'Logo Setup' );
		barista_coffee_shop_customizer_label( 'site_icon', 'Favicon' );

		// Top Header
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_phone_text', 'Phone' );

		// General Setting
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_preloader_hide', 'Preloader' );
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_sticky_header', 'Sticky Header' );
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_scroll_hide', 'Scroll To Top' );
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_scroll_top_position', 'Scroll to top Position' );
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_products_per_row', 'Woocommerce setting' );

		// Social Icon
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_facebook_url', 'Social Links' );

		//Slider
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_slider_setting', 'Slider' );

		//Header Image
		barista_coffee_shop_customizer_label( 'header_image', 'Header Image' );

		//Featured Product
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_product_setting', 'Featured Product' );

		//Footer
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_footer_text_setting', 'Footer' );

		//Single Post Setting
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_single_post_thumb', 'Single Post Setting' );

		//Post Setting
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_post_page_title', 'Post Setting' );

		// Page Setting
		barista_coffee_shop_customizer_label( 'barista_coffee_shop_single_page_title', 'Page Setting' );
	

	});

})( jQuery );
