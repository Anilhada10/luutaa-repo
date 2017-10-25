<?php
$options = array(
    'footer_settings' => array(
        'type' => 'tab',  
        'title' => esc_html__('Footer Setting', 'luutaa'),
        'options' => array(
		        'footerwg_switcher' => array(
                        'label' => __('Top Footer On/Off', 'luutaa'),
                        'desc' => __('Top Widget On/Off', 'luutaa'),
                        'type' => 'switch',
                        'value' => 'false',
                        'left-choice' => array(
                        'value' => 'false',
                        'label' => __('OFF', 'luutaa'),
                          ),
                        'right-choice' => array(
                        'value' => 'true',
                        'label' => __('ON', 'luutaa'),
                       ),
                    ),	
		        'footerbg_image'  => array( 
						'label' => esc_html__('Top Footer Background Image', 'luutaa'),
						'desc' => esc_html__('Upload  Footer Background Image Here.', 'luutaa'),
						'type' => 'upload', 
					),
				'footer_copyrigth' => array(
				'label' => esc_html__('Copyright', 'luutaa'),
				'desc' => esc_html__('Enter Copyright Text Here.', 'luutaa'),
				'type' => 'text', 
				'value' => 'Copyright 2017 by your Theme All Right Reserved.'
				),
				'social_picker' => array(
				'type'  => 'multi-picker',
				'label' => false,
				'desc'  => false,
				'value' => array(
				'social_switch' => 'Off',        
				),
				'picker' => array(  
					'social_switch' => array(
						'type'  => 'switch',
						'value' => 'on',
						'label' => esc_html__('Social Menu Enable/Disable', 'luutaa'),
						'left-choice' => array(
							'value' => 'off',
							'label' => esc_html__('Off', 'luutaa'),
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__('On', 'luutaa'),
						),
					),
				),
				'choices' => array(
					'on' => array(
						'social_facebook' => array(
							'label' => esc_html__('Facebook', 'luutaa'),
							'desc' => esc_html__('Enter Facebook Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_twitter' => array(
							'label' => esc_html__('Twitter', 'luutaa'),
							'desc' => esc_html__('Enter Twitter Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_google' => array(
							'label' => esc_html__('Google+', 'luutaa'),
							'desc' => esc_html__('Enter Google+ Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_linkedin' => array(
							'label' => esc_html__('Linkedin', 'luutaa'),
							'desc' => esc_html__('Enter Linkedin Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_youtube' => array(
							'label' => esc_html__('Youtube', 'luutaa'),
							'desc' => esc_html__('Enter Youtube Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_flickr' => array(
							'label' => esc_html__('Flickr', 'luutaa'),
							'desc' => esc_html__('Enter Flickr Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_pinterest' => array(
							'label' => esc_html__('Pinterest', 'luutaa'),
							'desc' => esc_html__('Enter Pinterest Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_dribbble' => array(
							'label' => esc_html__('Dribbble', 'luutaa'),
							'desc' => esc_html__('Enter Dribbble Link Here.', 'luutaa'),
							'type' => 'text',
						),
						'social_reddit' => array(
							'label' => esc_html__('Reddit', 'luutaa'),
							'desc' => esc_html__('Enter Reddit Link Here.', 'luutaa'),
							'type' => 'text',
						),
					),       
				),
			),
        )
    )
);
?>