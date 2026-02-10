<?php

use Illuminate\Support\Str;
use MUONLINECORE\Funcs;

if (!defined('DB_NAME')) {
	$wpConfig = Funcs::instance()->_getWPConfig();
}

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

	'default' => env('MUONLINECORE_DB_CONNECTION', 'muoc'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

	'connections' => [
		'mu_server' => [
			'driver'                   => 'sqlsrv',
			'host'                     => env('MUOC_DB_MUSERVER_HOST'),
			'port'                     => env('MUOC_DB_MUSERVER_PORT'),
			'database'                 => env('MUOC_DB_MUSERVER_DATABASE'),
			'username'                 => env('MUOC_DB_MUSERVER_USERNAME'),
			'password'                 => env('MUOC_DB_MUSERVER_PASSWORD'),
			'charset'                  => 'utf8',
			'prefix'                   => '',
			'encrypt'                  => env('MUOC_DB_MUSERVER_ENCRYPT', 'yes'),
			'trust_server_certificate' => env('MUOC_DB_MUSERVER_TRUST_SERVER_CERTIFICATE', true),
		],

		'wp' => [
			'driver'         => 'mariadb',
//			'url'            => env('MUONLINECORE_DB_URL'),
			'host'           => defined('DB_HOST') ? DB_HOST : ($wpConfig['DB_HOST'] ?? env('MUONLINECORE_DB_HOST', '127.0.0.1')),
			'port'           => defined('DB_PORT') ? DB_PORT : ($wpConfig['DB_PORT'] ?? env('MUONLINECORE_DB_PORT', '3306')),
			'database'       => defined('DB_NAME') ? DB_NAME : ($wpConfig['DB_NAME'] ?? env('MUONLINECORE_DB_DATABASE', 'laravel')),
			'username'       => defined('DB_USER') ? DB_USER : ($wpConfig['DB_USER'] ?? env('MUONLINECORE_DB_USERNAME', 'root')),
			'password'       => defined('DB_PASSWORD') ? DB_PASSWORD : ($wpConfig['DB_PASSWORD'] ?? env('MUONLINECORE_DB_PASSWORD', '')),
			'unix_socket'    => env('MUONLINECORE_DB_SOCKET', ''),
//			'charset'        => defined('DB_CHARSET') ? DB_CHARSET : ($wpConfig['DB_CHARSET'] ?? env('MUONLINECORE_DB_CHARSET', 'utf8mb4')),
//			'collation'      => defined('DB_COLLATE') ? DB_COLLATE : ($wpConfig['DB_COLLATE'] ?? env('MUONLINECORE_DB_COLLATE', 'utf8mb4_unicode_ci')),
			'prefix'         => 'wp_',
			'prefix_indexes' => true,
			'strict'         => true,
			'engine'         => null,
			'options'        => extension_loaded('pdo_mysql') ? array_filter([
				(PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
			]) : [],
		],

		'muoc' => [
			'driver'         => 'mariadb',
//			'url'            => env('MUONLINECORE_DB_URL'),
			'host'           => defined('DB_HOST') ? DB_HOST : ($wpConfig['DB_HOST'] ?? env('MUONLINECORE_DB_HOST', '127.0.0.1')),
			'port'           => defined('DB_PORT') ? DB_PORT : ($wpConfig['DB_PORT'] ?? env('MUONLINECORE_DB_PORT', '3306')),
			'database'       => defined('DB_NAME') ? DB_NAME : ($wpConfig['DB_NAME'] ?? env('MUONLINECORE_DB_DATABASE', 'laravel')),
			'username'       => defined('DB_USER') ? DB_USER : ($wpConfig['DB_USER'] ?? env('MUONLINECORE_DB_USERNAME', 'root')),
			'password'       => defined('DB_PASSWORD') ? DB_PASSWORD : ($wpConfig['DB_PASSWORD'] ?? env('MUONLINECORE_DB_PASSWORD', '')),
			'unix_socket'    => env('MUONLINECORE_DB_SOCKET', ''),
//			'charset'        => defined('DB_CHARSET') ? DB_CHARSET : ($wpConfig['DB_CHARSET'] ?? env('MUONLINECORE_DB_CHARSET', 'utf8mb4')),
//			'collation'      => defined('DB_COLLATE') ? DB_COLLATE : ($wpConfig['DB_COLLATE'] ?? env('MUONLINECORE_DB_COLLATE', 'utf8mb4_unicode_ci')),
			'prefix'         => 'wp_muoc_',
			'prefix_indexes' => true,
			'strict'         => true,
			'engine'         => null,
			'options'        => extension_loaded('pdo_mysql') ? array_filter([
				(PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
			]) : [],
		],

		'sqlite' => [
			'driver'                  => 'sqlite',
			'url'                     => env('MUONLINECORE_DB_URL'),
			'database'                => env('MUONLINECORE_DB_DATABASE', database_path('database.sqlite')),
			'prefix'                  => '',
			'foreign_key_constraints' => env('MUONLINECORE_DB_FOREIGN_KEYS', true),
			'busy_timeout'            => null,
			'journal_mode'            => null,
			'synchronous'             => null,
			'transaction_mode'        => 'DEFERRED',
		],

		'mysql' => [
			'driver'         => 'mysql',
			'url'            => env('MUONLINECORE_DB_URL'),
			'host'           => env('MUONLINECORE_DB_HOST', '127.0.0.1'),
			'port'           => env('MUONLINECORE_DB_PORT', '3306'),
			'database'       => env('MUONLINECORE_DB_DATABASE', 'laravel'),
			'username'       => env('MUONLINECORE_DB_USERNAME', 'root'),
			'password'       => env('MUONLINECORE_DB_PASSWORD', ''),
			'unix_socket'    => env('MUONLINECORE_DB_SOCKET', ''),
			'charset'        => env('MUONLINECORE_DB_CHARSET', 'utf8mb4'),
			'collation'      => env('MUONLINECORE_DB_COLLATION', 'utf8mb4_unicode_ci'),
			'prefix'         => '',
			'prefix_indexes' => true,
			'strict'         => true,
			'engine'         => null,
			'options'        => extension_loaded('pdo_mysql') ? array_filter([
				(PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
			]) : [],
		],

		'mariadb' => [
			'driver'         => 'mariadb',
			'url'            => env('MUONLINECORE_DB_URL'),
			'host'           => env('MUONLINECORE_DB_HOST', '127.0.0.1'),
			'port'           => env('MUONLINECORE_DB_PORT', '3306'),
			'database'       => env('MUONLINECORE_DB_DATABASE', 'laravel'),
			'username'       => env('MUONLINECORE_DB_USERNAME', 'root'),
			'password'       => env('MUONLINECORE_DB_PASSWORD', ''),
			'unix_socket'    => env('MUONLINECORE_DB_SOCKET', ''),
			'charset'        => env('MUONLINECORE_DB_CHARSET', 'utf8mb4'),
			'collation'      => env('MUONLINECORE_DB_COLLATION', 'utf8mb4_unicode_ci'),
			'prefix'         => '',
			'prefix_indexes' => true,
			'strict'         => true,
			'engine'         => null,
			'options'        => extension_loaded('pdo_mysql') ? array_filter([
				(PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
			]) : [],
		],

		'pgsql' => [
			'driver'         => 'pgsql',
			'url'            => env('MUONLINECORE_DB_URL'),
			'host'           => env('MUONLINECORE_DB_HOST', '127.0.0.1'),
			'port'           => env('MUONLINECORE_DB_PORT', '5432'),
			'database'       => env('MUONLINECORE_DB_DATABASE', 'laravel'),
			'username'       => env('MUONLINECORE_DB_USERNAME', 'root'),
			'password'       => env('MUONLINECORE_DB_PASSWORD', ''),
			'charset'        => env('MUONLINECORE_DB_CHARSET', 'utf8'),
			'prefix'         => '',
			'prefix_indexes' => true,
			'search_path'    => 'public',
			'sslmode'        => env('MUONLINECORE_DB_SSLMODE', 'prefer'),
		],

		'sqlsrv' => [
			'driver'         => 'sqlsrv',
			'url'            => env('MUONLINECORE_DB_URL'),
			'host'           => env('MUONLINECORE_DB_HOST', 'localhost'),
			'port'           => env('MUONLINECORE_DB_PORT', '1433'),
			'database'       => env('MUONLINECORE_DB_DATABASE', 'laravel'),
			'username'       => env('MUONLINECORE_DB_USERNAME', 'root'),
			'password'       => env('MUONLINECORE_DB_PASSWORD', ''),
			'charset'        => env('MUONLINECORE_DB_CHARSET', 'utf8'),
			'prefix'         => '',
			'prefix_indexes' => true,
//			 'encrypt' => env('MUONLINECORE_DB_ENCRYPT', 'yes'),
//			 'trust_server_certificate' => env('MUONLINECORE_DB_TRUST_SERVER_CERTIFICATE', 'false'),
		],

	],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

	'migrations' => [
		'table'                  => 'migrations',
		'update_date_on_publish' => true,
	],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

	'redis' => [

		'client' => env('MUONLINECORE_REDIS_CLIENT', 'phpredis'),

		'options' => [
			'cluster'    => env('MUONLINECORE_REDIS_CLUSTER', 'redis'),
			'prefix'     => env('MUONLINECORE_REDIS_PREFIX', Str::slug((string)env('MUONLINECORE_APP_SHORT_NAME', 'muoc')) . '-database-'),
			'persistent' => env('MUONLINECORE_REDIS_PERSISTENT', false),
		],

		'default' => [
			'url'               => env('MUONLINECORE_REDIS_URL'),
			'host'              => env('MUONLINECORE_REDIS_HOST', '127.0.0.1'),
			'username'          => env('MUONLINECORE_REDIS_USERNAME'),
			'password'          => env('MUONLINECORE_REDIS_PASSWORD'),
			'port'              => env('MUONLINECORE_REDIS_PORT', '6379'),
			'database'          => env('MUONLINECORE_REDIS_DB', '0'),
			'max_retries'       => env('MUONLINECORE_REDIS_MAX_RETRIES', 3),
			'backoff_algorithm' => env('MUONLINECORE_REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
			'backoff_base'      => env('MUONLINECORE_REDIS_BACKOFF_BASE', 100),
			'backoff_cap'       => env('MUONLINECORE_REDIS_BACKOFF_CAP', 1000),
		],

		'cache' => [
			'url'               => env('MUONLINECORE_REDIS_URL'),
			'host'              => env('MUONLINECORE_REDIS_HOST', '127.0.0.1'),
			'username'          => env('MUONLINECORE_REDIS_USERNAME'),
			'password'          => env('MUONLINECORE_REDIS_PASSWORD'),
			'port'              => env('MUONLINECORE_REDIS_PORT', '6379'),
			'database'          => env('MUONLINECORE_REDIS_CACHE_DB', '1'),
			'max_retries'       => env('MUONLINECORE_REDIS_MAX_RETRIES', 3),
			'backoff_algorithm' => env('MUONLINECORE_REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
			'backoff_base'      => env('MUONLINECORE_REDIS_BACKOFF_BASE', 100),
			'backoff_cap'       => env('MUONLINECORE_REDIS_BACKOFF_CAP', 1000),
		],

	],

];