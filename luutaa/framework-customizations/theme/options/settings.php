<?php if (!defined('FW')) {
	die('Forbidden');
}
$options = array(
    fw()->theme->get_options('customizer/general-settings'),
    fw()->theme->get_options('customizer/footer-settings'),
	fw()->theme->get_options('customizer/breadcrumbs-settings'),
	fw()->theme->get_options('customizer/socialshare-settings'),
	fw()->theme->get_options('customizer/googlemap-settings'), 
	fw()->theme->get_options('customizer/style_switcher'),
    fw()->theme->get_options('customizer/404_settings'),
);    