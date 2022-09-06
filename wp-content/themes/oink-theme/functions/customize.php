<?php
function theme_customize_register( $wp_customize ) {
	/*
	 * social links start
	 */
	$wp_customize->add_section( 'theme_social_links' , array(
		'title'      => __( 'Social Links', 'theme' ),
		'priority'   => 30,
	) );
	// facbook
	$wp_customize->add_setting( 'facebook_link' , array(
		'default' => 'http://',
	) );
	//twitter
	$wp_customize->add_setting( 'twitter_link' , array(
		'default' => 'http://',
	) );
	// instagram
	$wp_customize->add_setting( 'instagram_link' , array(
		'default' => 'http://',
	) );
	// linkedin
	$wp_customize->add_setting( 'linkedin_link' , array(
		'default' => 'http://',
	) );
	// youtube
	$wp_customize->add_setting( 'youtube_link' , array(
		'default' => 'http://',
	) );

	$wp_customize->add_control(
		'facebook_link', array(
			'label' => __('Facebook Link', 'theme'),
			'section' => 'theme_social_links',
			'settings' => 'facebook_link',
			'type' => 'url',
		)
	);
	$wp_customize->add_control(
		'twitter_link', array(
			'label' => __('Twitter Link', 'theme'),
			'section' => 'theme_social_links',
			'settings' => 'twitter_link',
			'type' => 'url',
		)
	);
	$wp_customize->add_control(
		'instagram_link', array(
			'label' => __('Instagram Link', 'theme'),
			'section' => 'theme_social_links',
			'settings' => 'instagram_link',
			'type' => 'url',
		)
	);
	$wp_customize->add_control(
		'linkedin_link', array(
			'label' => __('LinkedIn Link', 'theme'),
			'section' => 'theme_social_links',
			'settings' => 'linkedin_link',
			'type' => 'url',
		)
	);
	$wp_customize->add_control(
		'youtube_link', array(
			'label' => __('Youtube Link', 'theme'),
			'section' => 'theme_social_links',
			'settings' => 'youtube_link',
			'type' => 'url',
		)
	);
	/*
	 * social links end
	 */

	/*
	 * Address Info Start
	 */
	$wp_customize->add_section( 'theme_contact_info' , array(
		'title'      => __( 'Contact Info', 'theme' ),
		'priority'   => 30,
	) );


	// Office street address
	$wp_customize->add_setting( 'place' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'place', array(
			'label' => __('Place Name', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'place',
			'type' => 'text',
		)
	);

	// Office street address
	$wp_customize->add_setting( 'office_street_address' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'office_street_address', array(
			'label' => __('Office Street Address', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'office_street_address',
			'type' => 'text',
		)
	);

	// Office city
	$wp_customize->add_setting( 'office_city' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'office_city', array(
			'label' => __('Office City', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'office_city',
			'type' => 'text',
		)
	);
	// Office state
	$wp_customize->add_setting( 'office_state' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'office_state', array(
			'label' => __('Office State', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'office_state',
			'type' => 'text',
		)
	);

	// Office postcode
	$wp_customize->add_setting( 'office_postcode' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'office_postcode', array(
			'label' => __('Office Postcode', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'office_postcode',
			'type' => 'text',
		)
	);

	// Office Country
	$wp_customize->add_setting( 'office_country' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'office_country', array(
			'label' => __('Office Country', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'office_country',
			'type' => 'text',
		)
	);

	// Contact Phone
	$wp_customize->add_setting( 'contact_phone' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'contact_phone', array(
			'label' => __('Contact Phone', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'contact_phone',
			'type' => 'text',
		)
	);

	// Contact Email
	$wp_customize->add_setting( 'contact_email' , array(
		'default' => '',
	) );
	$wp_customize->add_control(
		'contact_email', array(
			'label' => __('Contact Email', 'theme'),
			'section' => 'theme_contact_info',
			'settings' => 'contact_email',
			'type' => 'text',
		)
	);

}
add_action( 'customize_register', 'theme_customize_register' );