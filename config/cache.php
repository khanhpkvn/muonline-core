<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache store that will be used by the
    | framework. This connection is utilized if another isn't explicitly
    | specified when running a cache operation inside the application.
    |
    */

	'default' => env('MUONLINECORE_CACHE_STORE', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    | Supported drivers: "array", "database", "file", "memcached",
    |                    "redis", "dynamodb", "octane",
    |                    "failover", "null"
    |
    */

	'stores' => [

		'array' => [
			'driver' => 'array',
			'serialize' => false,
		],

		'database' => [
			'driver' => 'database',
			'connection' => env('MUONLINECORE_DB_CACHE_CONNECTION'),
			'table' => env('MUONLINECORE_DB_CACHE_TABLE', 'cache'),
			'lock_connection' => env('MUONLINECORE_DB_CACHE_LOCK_CONNECTION'),
			'lock_table' => env('MUONLINECORE_DB_CACHE_LOCK_TABLE'),
		],

		'file' => [
			'driver' => 'file',
			'path' => storage_path('framework/cache/data'),
			'lock_path' => storage_path('framework/cache/data'),
		],

		'memcached' => [
			'driver' => 'memcached',
			'persistent_id' => env('MUONLINECORE_MEMCACHED_PERSISTENT_ID'),
			'sasl' => [
				env('MUONLINECORE_MEMCACHED_USERNAME'),
				env('MUONLINECORE_MEMCACHED_PASSWORD'),
			],
			'options' => [
				// Memcached::OPT_CONNECT_TIMEOUT => 2000,
			],
			'servers' => [
				[
					'host' => env('MUONLINECORE_MEMCACHED_HOST', '127.0.0.1'),
					'port' => env('MUONLINECORE_MEMCACHED_PORT', 11211),
					'weight' => 100,
				],
			],
		],

		'redis' => [
			'driver' => 'redis',
			'connection' => env('MUONLINECORE_REDIS_CACHE_CONNECTION', 'cache'),
			'lock_connection' => env('MUONLINECORE_REDIS_CACHE_LOCK_CONNECTION', 'default'),
		],

		'dynamodb' => [
			'driver' => 'dynamodb',
			'key' => env('MUONLINECORE_AWS_ACCESS_KEY_ID'),
			'secret' => env('MUONLINECORE_AWS_SECRET_ACCESS_KEY'),
			'region' => env('MUONLINECORE_AWS_DEFAULT_REGION', 'us-east-1'),
			'table' => env('MUONLINECORE_DYNAMODB_CACHE_TABLE', 'cache'),
			'endpoint' => env('MUONLINECORE_DYNAMODB_ENDPOINT'),
		],

		'octane' => [
			'driver' => 'octane',
		],

		'failover' => [
			'driver' => 'failover',
			'stores' => [
				'database',
				'array',
			],
		],

	],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
    | stores, there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */

	'prefix' => env('MUONLINECORE_CACHE_PREFIX', Str::slug((string) env('MUONLINECORE_APP_SHORT_NAME', 'muoc')).'-cache-'),

];