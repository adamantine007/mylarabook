<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Session Driver
	|--------------------------------------------------------------------------
	|
	| This option controls the default sessions "driver" that will be used on
	| requests. By default, we will use the lightweight native driver but
	| you may specify any of the other wonderful drivers provided here.
	|
	| Supported: "file", "cookie", "database", "apc",
	|            "memcached", "redis", "array"
	|
	*/

	'driver' => 'file',

	/*
	|--------------------------------------------------------------------------
	| Session Lifetime
	|--------------------------------------------------------------------------
	|
	| Here you may specify the number of minutes that you wish the sessions
	| to be allowed to remain idle before it expires. If you want them
	| to immediately expire on the browser closing, set that option.
	|
	*/

	'lifetime' => 120,

	'expire_on_close' => false,

	/*
	|--------------------------------------------------------------------------
	| Session File Location
	|--------------------------------------------------------------------------
	|
	| When using the native sessions driver, we need a location where sessions
	| files may be stored. A default has been set for you but a different
	| location may be specified. This is only needed for file sessions.
	|
	*/

	'files' => storage_path().'/sessions',

	/*
	|--------------------------------------------------------------------------
	| Session Database Connection
	|--------------------------------------------------------------------------
	|
	| When using the "database" or "redis" sessions drivers, you may specify a
	| connection that should be used to manage these sessions. This should
	| correspond to a connection in your database configuration options.
	|
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| Session Database Table
	|--------------------------------------------------------------------------
	|
	| When using the "database" sessions driver, you may specify the table we
	| should use to manage the sessions. Of course, a sensible default is
	| provided for you; however, you are free to change this as needed.
	|
	*/

	'table' => 'sessions',

	/*
	|--------------------------------------------------------------------------
	| Session Sweeping Lottery
	|--------------------------------------------------------------------------
	|
	| Some sessions drivers must manually sweep their storage location to get
	| rid of old sessions from storage. Here are the chances that it will
	| happen on a given request. By default, the odds are 2 out of 100.
	|
	*/

	'lottery' => array(2, 100),

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Name
	|--------------------------------------------------------------------------
	|
	| Here you may change the name of the cookie used to identify a sessions
	| instance by ID. The name specified here will get used every time a
	| new sessions cookie is created by the framework for every driver.
	|
	*/

	'cookie' => 'laravel_session',

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Path
	|--------------------------------------------------------------------------
	|
	| The sessions cookie path determines the path for which the cookie will
	| be regarded as available. Typically, this will be the root path of
	| your application but you are free to change this when necessary.
	|
	*/

	'path' => '/',

	/*
	|--------------------------------------------------------------------------
	| Session Cookie Domain
	|--------------------------------------------------------------------------
	|
	| Here you may change the domain of the cookie used to identify a sessions
	| in your application. This will determine which domains the cookie is
	| available to in your application. A sensible default has been set.
	|
	*/

	'domain' => null,

	/*
	|--------------------------------------------------------------------------
	| HTTPS Only Cookies
	|--------------------------------------------------------------------------
	|
	| By setting this option to true, sessions cookies will only be sent back
	| to the server if the browser has a HTTPS connection. This will keep
	| the cookie from being sent to you if it can not be done securely.
	|
	*/

	'secure' => false,

);
