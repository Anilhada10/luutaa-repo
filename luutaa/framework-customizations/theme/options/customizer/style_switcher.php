<?php
$options = array(
    'style_switcher' => array(
        'type' => 'tab',
        'title' => esc_html__('Color Switcher', 'luutaa'),
        'options' => array(
			'background_color' => array(
				'label'   => esc_html__( 'Color Scheme', 'luutaa' ),
				'type'    => 'image-picker',
				'value'   => '9',
				'desc'    => esc_html__( 'Select theme color.','luutaa' ),
				'choices' => array(
					'1' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/01.png'
						),
					),
					'2' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/02.png'
						),
					),
					'3' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/03.png'
						),
					),
					'4' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/04.png'
						),
					),
					'5' => array(
						'small' => array(
							'height' => 70,
							'width' => 70,
							'src'    => get_template_directory_uri() . '/framework-customizations/assets/images/05.png'
						),
					),
				),
			),
		)
    )
);
?>