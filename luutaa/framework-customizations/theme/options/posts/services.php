<?php
if (!defined( 'FW' ))  die('Forbidden') ;
$options = array(  
	'services_setting' => array(
		'title' => esc_html__('Services Single Page Setting', 'djnight'),
		'type' => 'box',
		'options' => array(
			'blog_single_sidebar' => array(
				'label'   => esc_html__( 'Sidebar Position', 'djnight' ),
				'type'    => 'image-picker',
				'value'   => 'right',
				'desc'    => esc_html__( 'Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.','djnight' ),
				'choices' => array( 
					'full' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/1c.png'
						),
					),
					'left' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/2cl.png'
						),
					),
					'right' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/2cr.png'
						),
					),
				),
			), 
			'breadcrums_post_image'  => array( 
						'label' => esc_html__('Breadcrumbs Image', 'djnight'),
						'desc' => esc_html__('Upload  Breadcrumbs Image Here.', 'djnight'),
						'type' => 'upload', 
					),
			'breadcrumbs_switcher' => array(
                        'label' => __('Breadcrumbs On/Off', 'djnight'),
                        'desc' => __('Breadcrumbs On/Off', 'djnight'),
                        'type' => 'switch',
                        'value' => 'false',
                        'left-choice' => array(
                        'value' => 'false',
                        'label' => __('OFF', 'djnight'),
                          ),
                        'right-choice' => array(
                        'value' => 'true',
                        'label' => __('ON', 'djnight'),
                       ),
                    ),	
			'footerbg_image'  => array( 
						'label' => esc_html__('Top Footer Background Image', 'djnight'),
						'desc' => esc_html__('Upload  Footer Background Image Here.', 'djnight'),
						'type' => 'upload', 
					),
			'sicon_image'  => array( 
						'label' => esc_html__('Upload Icon Image', 'djnight'),
						'desc' => esc_html__('Upload Icon Image Here.', 'djnight'),
						'type' => 'upload', 
					),
			'footerwg_switcher' => array(
                        'label' => __('Top Footer On/Off', 'djnight'),
                        'desc' => __('Top Widget On/Off', 'djnight'),
                        'type' => 'switch',
                        'value' => 'false',
                        'left-choice' => array(
                        'value' => 'false',
                        'label' => __('OFF', 'djnight'),
                          ),
                        'right-choice' => array(
                        'value' => 'true',
                        'label' => __('ON', 'djnight'),
                       ),
                    ),	
		
		          ),
	          ),
         );