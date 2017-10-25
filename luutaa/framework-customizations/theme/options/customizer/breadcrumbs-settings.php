<?php
$options = array(
    'breadcrumbs_settings' => array(
        'type' => 'tab',
        'title' => esc_html__(' Breadcrumbs Setting', 'luutaa'),
        'options' => array(
			'logo_setting' => array(
				'type' => 'group',
				'options' => array(
				    'breadcrums_image'  => array( 
						'label' => esc_html__('Breadcrumbs Image', 'luutaa'),
						'desc' => esc_html__('Upload  Breadcrumbs Image Here.', 'luutaa'),
						'type' => 'upload', 
					), 
					'breadcrumbs_switcher' => array(
                        'label' => __('Breadcrumbs On/Off', 'luutaa'),
                        'desc' => __('Breadcrumbs On/Off', 'luutaa'),
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
				  ),
			    ),
			  
			
			),
        )
    );
?>