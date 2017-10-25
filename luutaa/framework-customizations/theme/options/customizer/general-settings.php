<?php
$options = array(
    'general_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('General Setting', 'luutaa'),
        'options' => array(  
			'logo_choose' => array(
				'type'  => 'multi-picker',
				'label' => false,
				'desc'  => false,
				'value' => array(
				'logo_switch' => 'image',        
				),
				'picker' => array(  
					'logo_switch' => array(
						'type'  => 'switch',
						'value' => 'text',
						'label' => esc_html__('Logo Type', 'luutaa'),
						'left-choice' => array(
							'value' => 'image',
							'label' => esc_html__('image', 'luutaa'),
						),
						'right-choice' => array(
							'value' => 'text',
							'label' => esc_html__('text', 'luutaa'),
						),
					),
				),
				'choices' => array(
					'text' => array(
						'logo_text'  => array( 
							'type' => 'text',
							'value' => '',
							'label' => esc_html__('Logo Text', 'luutaa'),
							'desc' => esc_html__('', 'luutaa'),
						),
					),
					'image' => array(
						'logo_setting' => array(
							'type' => 'group',
							'options' => array(
								'logo_image'  => array( 
									'label' => esc_html__('Logo Image', 'luutaa'),
									'desc' => esc_html__('Upload logo image Here.', 'luutaa'),
									'type' => 'upload', 
								),
								'logo_width'  => array( 
									'type' => 'text',
									'value' => '111',
									'desc' => esc_html__('Enter logo width size in pixels. Ex: 200', 'luutaa'),
								),
								'logo_height'  => array( 
									'type' => 'text',
									'value' => '22',
									'desc' => esc_html__('Enter logo height size in pixels. Ex: 50', 'luutaa'),
								),
							),
						),
					),       
				),
			),
			'infi_loader_switch' => array(
				'type'  => 'multi-picker',
				'label' => false,
				'desc'  => false,
				'value' => array(
				'loader_switch' => 'Off',        
				),
				'picker' => array(  
					'loader_switch' => array(
						'type'  => 'switch',
						'value' => 'on',
						'label' => esc_html__('Loader Enable/Disable', 'luutaa'),
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
						'loader_image'  => array( 
							'label' => esc_html__('Loader Image', 'luutaa'),
							'desc' => esc_html__('Upload loader image Here.', 'luutaa'),
							'type' => 'upload', 
						),
					),       
				),
			),
			'theme_sidebar' => array(
				'label'   => esc_html__( 'Theme Sidebar Position', 'luutaa' ),
				'type'    => 'image-picker',
				'value'   => 'right',
				'desc'    => esc_html__( 'Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.','luutaa' ),
				'choices' => array(
					'full' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/1c.png'
						),
					),
					
					'left' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/2cl.png'
						),
					),
					'right' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/2cr.png'
						),
					),
				),
			  ),
			),
        )
    );
?>