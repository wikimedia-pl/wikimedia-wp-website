<?php
/**
 * Fieldmanager Fields for Connect Module
 *
 * @package wmfoundation
 */

/**
 * Add connect page options.
 */
function wmf_featured_post() {
	if ( ! wmf_is_home() ) {
		return;
	}

	$featured_post = new Fieldmanager_Select(
		array(
			'name'        => 'featured_post',
			'first_empty' => true,
			'options'     => wmf_get_posts_options(),
		)
	);
	$featured_post->add_meta_box( __( 'Featured Post', 'wmfoundation' ), array( 'page' ) );

	$featured_categories = new Fieldmanager_Checkboxes(
		array(
			'name'        => 'featured_categories',
			'options'     => wmf_get_categories_options(),
		)
	);
	$featured_categories->add_meta_box( __( 'Category Filter List', 'wmfoundation' ), array( 'page' ) );
}
add_action( 'fm_post_page', 'wmf_featured_post' );
