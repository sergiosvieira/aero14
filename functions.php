<?php
/**
 * @package WordPress
 * @subpackage themename
 */

add_action('admin_init','customize_meta_boxes');

/** Libraries **/
$array = array(
	"/libs/list-pages.php",
	"/libs/list-pages-marketing.php",
	"/libs/subscription/show-subscription-form.php"
);

foreach ($array as $file)
{
	$file_path = get_template_directory() . $file;

	if (is_readable($file_path))
	{
		include_once($file_path);
	}	
}
?>