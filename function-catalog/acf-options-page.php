<?php

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
	// Ustawienia globalne
	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia globalne',
		'menu_title'	=> 'Ustawienia globalne',
		'menu_slug' 	=> 'theme-general-settings',
	));

	//Stopka
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Stopka',
		'menu_title'	=> 'Stopka',
		'parent_slug'	=> 'theme-general-settings',
	));

};
