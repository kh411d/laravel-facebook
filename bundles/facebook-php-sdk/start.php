<?php

Autoloader::map(array(
    'Facebook'    => Bundle::path('facebook-php-sdk').'facebook.php',
));

Laravel\IoC::singleton('facebook-php-sdk', function()
{
    $config = array();
	$config['appId'] = Config::get('facebook.app_id');
	$config['secret'] = Config::get('facebook.secret');
	$config['fileUpload'] = true; // optional

	return new Facebook($config);
});