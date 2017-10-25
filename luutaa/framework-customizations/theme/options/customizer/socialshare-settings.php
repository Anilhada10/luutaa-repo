<?php
$options = array(
    'socialshare_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Social Share Setting', 'luutaa'),
        'options' => array(
		       'social_sharetitle' => array(
				'label' => esc_html__('Title', 'luutaa'),
				'desc' => esc_html__('Enter Text Here.', 'luutaa'),
				'type' => 'text', 
				'value' => ''
		     	),       
			   'facebook_switcher' => array(
                         'label' => __('Facebook Social Share On', 'luutaa'),
                         'desc' => __('Facebook Social Share On', 'luutaa'),
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
                'twitter1_switcher' => array(
                         'label' => __('Twitter Social Share On', 'luutaa'),
                         'desc' => __('Twitter Social Share On', 'luutaa'),
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
                'linkedin_switcher' => array(
                         'label' => __('Linkedin Social Share On', 'luutaa'),
                         'desc' => __('Linkedin Social Share On', 'luutaa'),
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
                'google_plus_switcher' => array(
                         'label' => __('Google Plus Social Share On', 'luutaa'),
                         'desc' => __('Google Plus Social Share On', 'luutaa'),
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
            )
        );
?>