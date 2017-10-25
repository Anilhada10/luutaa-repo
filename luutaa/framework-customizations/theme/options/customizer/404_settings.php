<?php
$options = array(
    'error_404_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('404 Setting', 'luutaa'),
        'options' => array(
			'error_404_heading'  => array( 
				'label' => esc_html__('Heading', 'luutaa'),
				'type' => 'text',
				'value' => '404',
				'desc' => esc_html__('', 'luutaa'),
			),
			'error_404_title'  => array( 
				'label' => esc_html__('Title', 'luutaa'),
				'type' => 'wp-editor',
				'value' => 'Sorry, This Page Is Not Available',
				'desc' => esc_html__('', 'luutaa'),
				'media_buttons' => false,
				'wpautop' => false,
			),
			'error_404_subtitle'  => array( 
				'label' => esc_html__('Subtitle', 'luutaa'),
				'type' => 'text',
				'value' => 'Something is not quite right here',				
			),
		)
    )
);
?>