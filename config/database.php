<?php

use Illuminate\Support\Str;

return [


    /*
    |--------------------------------------------------------------------------
    | Custom Eloquent connection name
    |--------------------------------------------------------------------------
    | Dynamic database connection
    |
    */

    // yzshop
    'mode_yzshop' => env('DB_CONNECTION_YZSHOP', 'yzshop'),

    // srshop
    'mode_srshop' => env('DB_CONNECTION_SRSHOP', 'srshop'),

    // sr
    'mode_sr'     => env('DB_CONNECTION_SR', 'sr'),

    // ylydatabase
    'mode_yly'    => env('DB_CONNECTION_YLY', 'yly'),

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION_YZSHOP', 'yzshop'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [


        env('DB_CONNECTION_YZSHOP', 'yzshop') => [
            'driver' => 'mysql',
            'url' => env(''),
            'host' => env('DB_HOST_YZSHOP', '127.0.0.1'),
            'port' => env('DB_PORT_YZSHOP', '3306'),
            'database' => env('DB_DATABASE_YZSHOP', ''),
            'username' => env('DB_USERNAME_YZSHOP', ''),
            'password' => env('DB_PASSWORD_YZSHOP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_TABLEPRE_SR', ''),
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        env('DB_CONNECTION_SRSHOP', 'srshop') => [
            'driver' => 'mysql',
            'url' => env(''),
            'host' => env('DB_HOST_SRSHOP', '127.0.0.1'),
            'port' => env('DB_PORT_SRSHOP', '3306'),
            'database' => env('DB_DATABASE_SRSHOP', ''),
            'username' => env('DB_USERNAME_SRSHOP', ''),
            'password' => env('DB_PASSWORD_SRSHOP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_TABLEPRE_SRSHOP', ''),
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        env('DB_CONNECTION_SR', 'sr') => [
            'driver' => 'mysql',
            'url' => env(''),
            'host' => env('DB_HOST_SR', '127.0.0.1'),
            'port' => env('DB_PORTSR', '3306'),
            'database' => env('DB_DATABASE_SR', ''),
            'username' => env('DB_USERNAME_SR', ''),
            'password' => env('DB_PASSWORD_SR', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_TABLEPRE_SR', ''),
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        env('DB_CONNECTION_YLY', 'yly') => [
            'driver' => 'mysql',
            'url' => env(''),
            'host' => env('DB_HOST_YLY', '127.0.0.1'),
            'port' => env('DB_PORT_YLY', '3306'),
            'database' => env('DB_DATABASE_YLY', ''),
            'username' => env('DB_USERNAME_YLY', ''),
            'password' => env('DB_PASSWORD_YLY', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_TABLEPRE_YLY', ''),
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'predis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'predis'),
            'prefix' => Str::slug(env('APP_NAME', 'laravel'), '_').'_database_',
        ],

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
