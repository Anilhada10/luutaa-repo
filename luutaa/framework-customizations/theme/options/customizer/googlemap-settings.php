<?php
$map_link = 'https://developers.google.com/maps/documentation/javascript/get-api-key';
$options = array(
    'googlemap_settings' => array(
		'type' => 'tab',
		'title' => esc_html__(' Google Map Setting', 'luutaa'),
		'options' => array(
			'map_heading' => array(
				'type'  => 'text',
				'label' => esc_html__('Map Heading', 'luutaa'),
			),
			'map_api' => array(
				'type'  => 'text',
				'label' => esc_html__('Map API Key', 'luutaa'),
				'desc'  => esc_html__('For map api key ', 'luutaa').'<a href="'.esc_url($map_link).'"  target="_blank">'.esc_html__('Click Here', 'luutaa').'</a>',
			),
			'map_latitude' => array(
				'type'  => 'text',
				'label' => esc_html__('Latitude', 'luutaa'),
			),
			'map_longitude' => array(
				'type'  => 'text',
				'label' => esc_html__('Longitude', 'luutaa'),
			),
			'map_title' => array(
				'type'  => 'text',
				'label' => esc_html__('Title', 'luutaa'),
				'value' => ''
			),
			'map_zoom' => array(
				'type'  => 'select',
				'value' => '15',
				'label' => esc_html__('Zoom Level', 'luutaa'),
				'desc'  => esc_html__('', 'luutaa'),
				'choices' => array(
					'1' => esc_html__('1', 'luutaa'),
					'2' => esc_html__('2', 'luutaa'),
					'3' => esc_html__('3', 'luutaa'),
					'4' => esc_html__('4', 'luutaa'),
					'5' => esc_html__('5', 'luutaa'),
					'6' => esc_html__('6', 'luutaa'),
					'7' => esc_html__('7', 'luutaa'),
					'8' => esc_html__('8', 'luutaa'),
					'9' => esc_html__('9', 'luutaa'),
					'10' => esc_html__('10', 'luutaa'),
					'11' => esc_html__('11', 'luutaa'),
					'12' => esc_html__('12', 'luutaa'),
					'13' => esc_html__('13', 'luutaa'),
					'14' => esc_html__('14', 'luutaa'),
					'15' => esc_html__('15', 'luutaa'),
					'16' => esc_html__('16', 'luutaa'),
					'17' => esc_html__('17', 'luutaa'),
					'18' => esc_html__('18', 'luutaa'),
					'19' => esc_html__('19', 'luutaa'),
					'20' => esc_html__('20', 'luutaa'),
				),
			),
		),
	)
);
  