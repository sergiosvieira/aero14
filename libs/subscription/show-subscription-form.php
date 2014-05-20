<?php
function show_subscription_form()
{
	get_template_part('templates/page', 'subscription');
}

add_shortcode("show_subscription_form", "show_subscription_form");
?>