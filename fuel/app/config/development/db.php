<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type' => 'mysqli',
		'connection'  => array(
			'hostname' => 'localhost',
			'database' => 'v_fuelstart',
			'username' => 'root',
			'password' => 'snc2014',
		),
		'table_prefix' => 'ws_',
		'charset' => 'utf8',
		'profiling'  => true,
	),
);
