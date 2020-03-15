<?php

return new \Phalcon\Config([
	'database' => [
		'adapter'     => 'Mysql',
		'host'        => 'localhost',
		'username'    => 'root',
		'password'    => 'YdJxIHX~',
		'dbname'      => 'tip',
	],
	'application' => [
		'appDir'         => ROOT . '/app/',
		'controllersDir' => ROOT . '/app/controllers/',
		'modelsDir'      => ROOT . '/app/models/',
		'viewsDir'       => ROOT . '/app/views/',
		'pluginsDir'     => ROOT . '/app/plugins/',
		'libraryDir'     => ROOT . '/app/library/',
		'interfacesDir'  => ROOT . '/app/library/interfaces/',
		'currencyDir'    => ROOT . '/app/library/currency/',
		'cacheDir'       => ROOT . '/app/cache/',
		'configDir'      => ROOT . '/app/config/',
		'baseUri'        => '/'
	]
]);
