<?php

/**
 * Render homepage sections.
 */
function coffee_bistro_homepage_sections() {
	$homepage_sections = array_keys( coffee_bistro_get_homepage_sections() );

	foreach ( $homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}